<?php

namespace App\Http\Requests\Api;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class OrdersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
            'price' => 'required',
            'number_of_product'     => 'required',
            'customer_id'       => 'required',
        ];
    }
    public function messages()
    {
        return [
            'price.required'        => 'Please fill the price.',
            'number_of_product.required'        => 'Please fill the number_of_product.',
            'customer_id.required'        => 'Please fill the customer_id.',

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
