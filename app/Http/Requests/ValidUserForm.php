<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidUserForm extends FormRequest
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
            'email'     => 'required|email',
            'password'  => 'required|min:3|max:16',
            'name'      => 'required|min:2|max:20',
            'lastname'  => 'required|min:2|max:30',
            'phone'     => 'required|min:7|max:12',
            'address'   => 'required|min:2|max:30',
            'face'      => 'required|min:2|max:20'
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'El :attribute es obligatorio.',
            'email.email' => 'El :attribute debe ser un correo válido.',

            'password.required' => 'El :attribute es obligatorio.',
            'password.min' => 'El :attribute debe contener minimo de 2 caracteres.',
            'password.max' => 'El :attribute debe contener maximo 16 caracteres.',

            'name.required' => 'El :attribute es obligatorio.',
            'name.min' => 'El :attribute debe contener minimo de 3 caracteres.',
            'name.max' => 'El :attribute debe contener maximo 20 caracteres.',

            'lastname.required' => 'Los :attribute son obligatorios.',
            'lastname.min' => 'El :attribute debe contener minimo de 2 caracteres.',
            'lastname.max' => 'El :attribute debe contener maximo 30 caracteres.',

            'phone.required' => 'El :attribute es obligatorio.',
            'phone.min' => 'El :attribute debe contener minimo de 7 caracteres.',
            'phone.max' => 'El :attribute debe contener maximo 12 caracteres.',

            'address.required' => 'El :attribute es obligatorio.',
            'address.min' => 'El :attribute debe contener minimo de 2 caracteres.',
            'address.max' => 'El :attribute debe contener maximo 30 caracteres.',

            'face.required' => 'El :attribute es obligatorio.',
            'face.min' => 'El :attribute debe contener minimo de 2 caracteres.',
            'face.max' => 'El :attribute debe contener maximo 20 caracteres.',
        ];
    }
    public function attributes()
    {
        return [
            'email'     => 'Correo Electronico',
            'password'  => 'Contraseña',
            'name'      => 'Nombre del Usuario',
            'lastname'  => 'Apellidos del Usuario',
            'phone'     => 'Telefono',
            'address'   => 'Dirección',
            'face'      => 'Facebook del Usurario',
        ];
    }
}
