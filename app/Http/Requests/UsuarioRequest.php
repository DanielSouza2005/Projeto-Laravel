<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required'],
            'login' => ['required', 'unique:usuario,login'],
            'senha' => ['required', 'confirmed'],
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'nome.required' => 'O nome é obrigatório',
            'login.required' => 'Login obrigatório',
            'login.unique' => 'Login já existe',
            'senha.required' => 'Senha obrigatória',
            'senha.confirmed' => 'Confirmação de senha não bate',
        ];
    }
}
