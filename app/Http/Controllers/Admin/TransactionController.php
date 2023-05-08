<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyTransactionRequest;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use App\Models\Currency;
use App\Models\IncomeSource;
use App\Models\Project;
use App\Models\Transaction;
use App\Models\TransactionType;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TransactionController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('transaction_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transactions = Transaction::with(['project', 'transaction_type', 'income_source', 'currency'])->get();

        return view('admin.transactions.index', compact('transactions'));
    }

    public function create()
    {
        abort_if(Gate::denies('transaction_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.transactions.create', compact('currencies', 'income_sources', 'projects', 'transaction_types'));
    }

    public function store(StoreTransactionRequest $request)
    {
        $transaction = Transaction::create($request->all());

        return redirect()->route('admin.transactions.index');
    }

    public function edit(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $projects = Project::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction_types = TransactionType::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $income_sources = IncomeSource::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $currencies = Currency::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $transaction->load('project', 'transaction_type', 'income_source', 'currency');

        return view('admin.transactions.edit', compact('currencies', 'income_sources', 'projects', 'transaction', 'transaction_types'));
    }

    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        $transaction->update($request->all());

        return redirect()->route('admin.transactions.index');
    }

    public function show(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transaction->load('project', 'transaction_type', 'income_source', 'currency');

        return view('admin.transactions.show', compact('transaction'));
    }

    public function destroy(Transaction $transaction)
    {
        abort_if(Gate::denies('transaction_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $transaction->delete();

        return back();
    }

    public function massDestroy(MassDestroyTransactionRequest $request)
    {
        Transaction::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
