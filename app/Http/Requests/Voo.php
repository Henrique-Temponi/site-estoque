<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Voo extends FormRequest
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
            
            'voo' => ['required'],
            'destino' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute não pode estar vazio.',
        ];
    }
    
    public function attributes()
    {
        return [
            'voo' => 'O voo',
            'destino' => 'O destino'
        ];
    }
}
