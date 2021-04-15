<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReceitaRequest extends FormRequest
{
    public function authorize()
    {
    
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
           return false; 
        } 
    }

    public function rules()
    {
        return [
            'name'          => [
                'string',
                'required',
            ],
            'ingredientes.*' => [
                'string',
            ],
            'ingredientes'   => [
                'required',
                'array',
            ],
        ];
    }
}