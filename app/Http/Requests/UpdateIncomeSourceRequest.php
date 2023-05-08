<?php

namespace App\Http\Requests;

use App\Models\IncomeSource;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateIncomeSourceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('income_source_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'fee_percent' => [
                'numeric',
            ],
        ];
    }
}
