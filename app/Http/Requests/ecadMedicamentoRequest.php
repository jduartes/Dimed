<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ecadMedicamentoRequest extends FormRequest
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
            'nmmedicamento'=> 'required',
            'nmlaboratorio'=> 'required',
            'nucodigobarras'=> 'required',
            'dtvalidade'=> 'required',
            'quantidade'=> 'required',
            'unidade'=> 'required',
            'observacao'=> 'required',

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
            
            'nmmedicamento.required' => 'Informe o nome do medicamento',
            'nmlaboratorio.required' => 'Informe o nome do laboratório',
            'nucodigobarras.required' => 'Informe o código de barras',
            'dtvalidade.required' => 'Informe a data de validade',
            'quantidade.required' => 'Informe a quantidade',
            'unidade.required' => 'Informe a unidade',
            'observacao.required' => 'Informe observação',
            
        ];
    }
}
