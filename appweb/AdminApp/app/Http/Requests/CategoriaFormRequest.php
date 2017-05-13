<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
//use App\Categoria;

class CategoriaFormRequest extends Request
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
           // 'nombre'=>'required|max:50',//Es el nombre que va tener en le formulario ya que lo que
          //  'descripcion'=>'max:255',    //se esta validando es el formulario y no la base de datos


            //reglas de validacion
        ];
    }
}
