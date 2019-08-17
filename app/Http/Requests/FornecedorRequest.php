<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
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
        return [
            'nome' => 'required|min:3|max:25',
            'cnpj' => 'required|max: 14',
            'email' => ['required', 'email', 'unique:fornecedor,email,'.$this->route('id')]
        ];
    }

    public function messages(){
        return [
            'required' => 'O :attribute é obrigatório'
        ];
    }
}
