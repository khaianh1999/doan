<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class UserRequest extends FormRequest
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
            'password'     => 'required',
        ];
    }
    public function messages()
    {
        return [
            'full_name.required'        => 'Please fill the name.',
            'password.required'        => 'Please fill the code.',
            'email.required'        => 'Please fill the name.',
            'phone.required'        => 'Please fill the code.',
            'join_date.required'        => 'Please fill the join_date.',
            'last_login.required'        => 'Please fill the last_login.',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();
        throw new HttpResponseException(response()->json(
            [
                'error'       => $errors,
                'status_code' => 422,
            ],
            JsonResponse::HTTP_UNPROCESSABLE_ENTITY
        ));
    }
}
