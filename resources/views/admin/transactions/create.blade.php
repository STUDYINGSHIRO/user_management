@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.transaction.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.transactions.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="project_id">{{ trans('cruds.transaction.fields.project') }}</label>
                <select class="form-control select2 {{ $errors->has('project') ? 'is-invalid' : '' }}" name="project_id" id="project_id" required>
                    @foreach($projects as $id => $entry)
                        <option value="{{ $id }}" {{ old('project_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('project'))
                    <div class="invalid-feedback">
                        {{ $errors->first('project') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.project_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transaction_type_id">{{ trans('cruds.transaction.fields.transaction_type') }}</label>
                <select class="form-control select2 {{ $errors->has('transaction_type') ? 'is-invalid' : '' }}" name="transaction_type_id" id="transaction_type_id" required>
                    @foreach($transaction_types as $id => $entry)
                        <option value="{{ $id }}" {{ old('transaction_type_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('transaction_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transaction_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.transaction_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="income_source_id">{{ trans('cruds.transaction.fields.income_source') }}</label>
                <select class="form-control select2 {{ $errors->has('income_source') ? 'is-invalid' : '' }}" name="income_source_id" id="income_source_id" required>
                    @foreach($income_sources as $id => $entry)
                        <option value="{{ $id }}" {{ old('income_source_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('income_source'))
                    <div class="invalid-feedback">
                        {{ $errors->first('income_source') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.income_source_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="amount">{{ trans('cruds.transaction.fields.amount') }}</label>
                <input class="form-control {{ $errors->has('amount') ? 'is-invalid' : '' }}" type="number" name="amount" id="amount" value="{{ old('amount', '') }}" step="0.01" required>
                @if($errors->has('amount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('amount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.amount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="currency_id">{{ trans('cruds.transaction.fields.currency') }}</label>
                <select class="form-control select2 {{ $errors->has('currency') ? 'is-invalid' : '' }}" name="currency_id" id="currency_id" required>
                    @foreach($currencies as $id => $entry)
                        <option value="{{ $id }}" {{ old('currency_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('currency'))
                    <div class="invalid-feedback">
                        {{ $errors->first('currency') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.currency_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="transaction_date">{{ trans('cruds.transaction.fields.transaction_date') }}</label>
                <input class="form-control date {{ $errors->has('transaction_date') ? 'is-invalid' : '' }}" type="text" name="transaction_date" id="transaction_date" value="{{ old('transaction_date') }}" required>
                @if($errors->has('transaction_date'))
                    <div class="invalid-feedback">
                        {{ $errors->first('transaction_date') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.transaction_date_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="name">{{ trans('cruds.transaction.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="description">{{ trans('cruds.transaction.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.transaction.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection