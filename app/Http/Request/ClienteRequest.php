<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
            'nombre_completo' => ['required', 'max:255', 'min:2'],
            'email' => ['required', 'email:rfc,dns', 'max:255'],
            'telefono' => ['required', 'numeric', 'gt:999999'],
            'fecha_reserva' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'nombre_completo.required' => 'El nombre es un campo obligatorio.',
            'nombre_completo.max' => 'La longitud maxima del nombre es 255 caracteres.',
            'nombre_completo.min' => 'La longitud minima del nombre es 2 caracteres',
            'email.required' => 'El email es un campo obligatorio.',
            'email.email' => 'El formato del email no es el adecuado Ejemplo: perez@mail.com',
            'email.max' => 'La longitud maxima del email es 100 caracteres.',
            'telefono.required' => 'El telefono es un campo obligatorio.',
            'telefono.numeric' => 'El telefono es un campo que solo puede tener numeros.',
            'telefono.gt' => 'El telefono tiene que tener al menos 7 digitos.',
            'fecha_reserva.required' => 'La fecha de reserva es un campo obligatorio.'
        ];
    }
}