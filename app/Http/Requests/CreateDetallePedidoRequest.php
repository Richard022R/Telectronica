<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDetallePedidoRequest extends FormRequest
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
            'idPedido' => ['required', 'integer'],
            'idProducto' => ['required', 'integer'],
            'idDocumento' => ['required', 'integer'],
            'cantidad' => ['required', 'integer'],
            'precioUnitario' => ['required', 'numeric'],
            'importe' => ['required', 'numeric'],
        ];
    }
}
