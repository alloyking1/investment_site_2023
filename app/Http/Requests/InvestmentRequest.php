<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvestmentRequest extends FormRequest
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
            'package' => 'required | max:255',
            'amount' => 'string | required | max:255',
            'wallet_address' => ' required | max:255',
            'payment_coin' => ' required | max:400',
            'contract' => 'required | max:255',
        ];
    }
}
