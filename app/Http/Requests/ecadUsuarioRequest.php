<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ecadUsuarioRequest extends FormRequest
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
           'nmusuario'=> 'required',
           'dtnacimento'=> 'required',
           'nmusuario'=> 'required',
           'nucpf'=> 'required',
           'nurg'=> 'required',
           'deendereco'=> 'required',
           'nuendereco'=> 'required',
           'debairro'=> 'required',
           'decidade'=> 'required',
           'nucep'=> 'required',
           'deestado'=> 'required',
           'nmlogin'=> 'required',
           'deemail'=> 'required',
           'desenha'=> 'required',
        ];
    }

     /**
     * Get the messages array.
     *
     * @return array
     */

   public function messages()
    {
        return [
            
            'nmusuario.required' => 'Informe o nome do Usuário',
            'dtnacimento.required' => 'Informe a data de nascimento',
            'nurg.required' => 'Informe o RG',
            'nucpf.required' => 'Informe o CPF',
            'deendereco.required' => 'Informe o endereço',
            'nuendereco.required' => 'Informe o numemro do endereço',
            'debairro.required' => 'Informe o bairro',
            'decidade.required' => 'Informe a cidade',
            'nucep.required' => 'Informe o CEP',
            'estado.required' => 'Informe o estado',
            'nmlogin.required' => 'Informe o nome de login',
            'deemail.required' => 'Informe o e-mail',
            'desenha.required' => 'Informe a senha',
        ];
    }
}
