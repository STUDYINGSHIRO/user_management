<?php

namespace App\Http\Requests;

use App\Models\Transaction;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTransactionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('transaction_create');
    }

    public function rules()
    {
        return [
            'project_id' => [
                'required',
                'integer',
            ],
            'transaction_type_id' => [
                'required',
                'integer',
            ],
            'income_source_id' => [
                'required',
                'integer',
            ],
            'amount' => [
                'required',
            ],
            'currency_id' => [
                'required',
                'integer',
            ],
            'transaction_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
