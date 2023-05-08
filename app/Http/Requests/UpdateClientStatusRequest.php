<?php

namespace App\Http\Requests;

use App\Models\ClientStatus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateClientStatusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('client_status_edit');
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
