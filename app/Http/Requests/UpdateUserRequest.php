<?php

namespace App\Http\Requests;

use App\Models\User;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateUserRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('user_edit');
    }

    public function rules()
    {
        return [
            'firstname' => [
                'string',
                'max:50',
                'required',
            ],
            'middlename' => [
                'string',
                'max:100',
                'nullable',
            ],
            'lastname' => [
                'string',
                'max:101',
                'required',
            ],
            'suffix' => [
                'string',
                'max:50',
                'nullable',
            ],
            'gender' => [
                'required',
            ],
            'name' => [
                'string',
                'max:100',
                'required',
            ],
            'contact_number' => [
                'required',
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'email' => [
                'required',
                'unique:users,email,' . request()->route('user')->id,
            ],
            'department' => [
                'required',
            ],
            'position' => [
                'required',
            ],
            'roles.*' => [
                'integer',
            ],
            'roles' => [
                'required',
                'array',
            ],
        ];
    }
}
