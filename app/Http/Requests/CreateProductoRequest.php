<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductoRequest extends FormRequest
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
            'nombreProducto' => ['required', 'string', 'max:255'],
            'descripcionProducto' => ['required', 'string', 'max:255'],
            'precio' => ['required', 'numeric'],
            'stock' => ['required', 'numeric'],
            'estadoProducto' => ['required', 'string', 'max:255'],
            'idCategoria' => ['required', 'numeric'],
        ];
    }
}
