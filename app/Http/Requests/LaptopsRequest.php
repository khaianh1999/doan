<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;

class LaptopsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
 
        return [
            'name' => 'required|between:1,500',
            'code' => 'required|between:1,200',
            'origin' => 'required|between:1,200',
            'price' => 'required|between:1,200',
           
     
        ];
    }
    public function messages()
    {
        return [
            'name.required'        => 'Please fill the name.',
            'code.required'        => 'Please fill the code.',
            'origin.required'        => 'Please fill the origin.',
            'price.required'        => 'Please fill the price.',
        
     
        ];
    }

}
