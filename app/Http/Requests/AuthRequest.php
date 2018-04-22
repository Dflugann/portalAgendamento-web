<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
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
            'name'=>'required|min:5|max:15',
            'phone'=>'required|min:11|max:14',
            'email'=>'required|max:255|email',
            'imagem' => 'mimes:jpeg,bmp,png',
            'email'=>'required|max:255|email',
            'user'=>'required|min:5|max:15',
            'password'=>'required|min:5|max:15',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Digite um nome',
            'name.min' => 'Digite o minimo de 5 caracteres',
            'name.max' => 'Digite o máximo de 10 caracteres',
            'email.required' => 'Digite um E-mail',
            'email.email' => 'Digite um E-mail valido',
            'email.max' => 'Digite o máximo de 255 caracteres',
            'phone.required' => 'Digite um numero de telefone',
            'phone.max' => 'Digite o minímo de 9 caracteres',
            'phone.max' => 'Digite o máximo de 14 caracteres',
            'imagem.mimes' => 'Somente imagem JPGE, BMP e PNG',
            'user.required' => 'Digite um nome de usuário',
            'user.min' => 'Digite o minimo de 5 caracteres',
            'user.max' => 'Digite o máximo de 15 caracteres',
            'password.required' => 'Digite uma senha',
            'password.min' => 'Digite o minimo de 5 caracteres',
            'password.max' => 'Digite o máximo de 15 caracteres'
        ];
    }
}
