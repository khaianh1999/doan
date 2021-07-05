<?php

namespace App\Http\Requests\Api;

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
            'gender' => 'required',
            'full_name'     => 'required',
            'phone'       => 'required',
            'address'     => 'required',
            'email'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'gender.required'        => 'Please fill the gender.',
            'full_name.required'        => 'Please fill the full name.',
            'phone.required'        => 'Please fill the phone.',
            'address.required'        => 'Please fill the address.',
            'email.required'        => 'Please fill the email.',

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
