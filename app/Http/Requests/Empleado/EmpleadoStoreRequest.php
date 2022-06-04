<?php

namespace App\Http\Requests\Empleado;

use Illuminate\Foundation\Http\FormRequest;

class EmpleadoStoreRequest extends FormRequest
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
                'nombre' => 'required|min:10',
                'email' => 'required|email',
                'sexo' => 'required|in:M,F',
                'area_id' => 'required|integer',
                'descripcion' => 'required|min:5',
                'roles' => 'required|array'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre es requerido',
            'nombre.min' => 'El nombre es muy corto debe tener maximo 10 caracteres o mas',
            'email.required' => 'El email es requerido',
            'email.email' => 'El email debe ser valido',
            'sexo.required' => 'El sexo es obligatorio',
            'area_id.required' => 'El area es obligatoria',
            'descripcion.required' => 'La descripcion es obligatoria',
            'descripcion.min' => 'La descripcion es muy corta debe tener maximo 5 caracteres o mas',
            'roles.required' => 'Los roles son obligatorios',
        ];
    }
}
