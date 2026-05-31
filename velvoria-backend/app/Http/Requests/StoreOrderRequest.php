<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'address_id' => 'required|exists:addresses,id',
            'cart_id' => 'required|exists:carts,id',
            'notes' => 'nullable|string|max:1000',
        ];
    }

    public function messages(): array
    {
        return [
            'address_id.required' => 'Alamat wajib diisi',
            'address_id.exists' => 'Alamat tidak ditemukan',
            'cart_id.required' => 'Keranjang wajib diisi',
            'cart_id.exists' => 'Keranjang tidak ditemukan',
        ];
    }
}