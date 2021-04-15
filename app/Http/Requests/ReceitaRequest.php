<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReceitaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {

        return true;
    
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        $receita = $this->route()->parameter('receita');

        $rules=  [
            'name'=> 'required',
            'slug'=> 'required|unique:receitas',
            'type'=> 'required',
            'status'=> 'required|in:1,2',
            'file' => 'image',
        ];

        if($receita){
            $rules['slug'] = 'required|unique:receitas,slug,' . $receita->id;
        }


        if($this->status == 2){
            $rules = array_merge($rules, [
                
                'body'=> 'required',
                'ingredientes'=> 'required',

            ]);
        }

        return $rules;
    }
}
