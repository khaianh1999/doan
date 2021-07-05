<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class CustomersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'full_name' => 'required|between:1,500',
            'email'     => 'required|email:rfc,dns|between:1,200',
            'phone'      => 'required|numeric|digits_between:10,20|starts_with:0',
            'address'     => 'required|between:1,200',
       
        ];
    }
    public function messages()
    {
        return [
            'full_name.required'        => 'Please fill the name.',
            'email.required'        => 'Please fill the email.',
            'phone.required'        => 'Please fill the code.',
            'address.required'        => 'Please fill the address.',
            'join_date.required'        => 'Please fill the join_date.',
            'last_login.required'        => 'Please fill the last_login.',
        ];
    }

}
