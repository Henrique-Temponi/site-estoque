<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Destino extends FormRequest
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
            'nome' => ['required'],
            'abreviacao' => ['required'],
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
            'nome' => 'O nome',
            'abreviacao' => 'A abreviação',
        ];
    }
}
