<?php

namespace App\Http\Requests;

use Luezoid\Laravelcore\Http\Requests\BaseRequest as LueRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

abstract class BaseRequest extends LueRequest
{
    public function failedValidation(Validator $validator)
    {
        $errors = [];
        foreach($validator->errors()->toArray() as $key => $value){
            $errors[$key] = $value[0];
        }
        $response = array_merge(['success' =>false], $errors);
        throw new HttpResponseException(response()->json($response, 400));

        parent::failedValidation($validator);
    }
}
