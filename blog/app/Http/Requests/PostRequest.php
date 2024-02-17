<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
            'titulo' => 'required|min:5',
            'contenido' => 'required|min:50',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'titulo.required' => 'El título del post es obligatorio.',
            'titulo.min' => 'El título del post debe tener al menos :min caracteres.',
            'contenido.required' => 'El contenido del post es obligatorio.',
            'contenido.min' => 'El contenido del post debe tener al menos :min caracteres.',
        ];
    }
}
