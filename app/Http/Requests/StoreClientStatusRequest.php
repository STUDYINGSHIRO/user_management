<?php

namespace App\Http\Requests;

use App\Models\ClientStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreClientStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_status_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
        ];
    }
}
