<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateServicioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'image' => 'required',
            'titulo' => 'required',
            'descripcion' => 'required',
            'category_id' => [
                'required',
                'exists:categories,id',
            ],
        ];
    }

    public function messages() {
        return [
            'image.required' => 'Elija un archivo',
            'titulo.required' => 'Se necesita un título para el servicio',
            'category_id.required' => 'Se necesita una categoria para el servicio',
            'descripcion.require' => 'La descripción es obligatoria'
        ];
        
    }
}
