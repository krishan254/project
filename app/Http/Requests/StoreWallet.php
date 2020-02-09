<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreWallet extends FormRequest
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
          'availableBalance' => 'required|numeric',
          'currency' => 'required|max:255',
          'freezedBalance' => 'nullable|numeric',
          'transactionHistory' => 'nullable'
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
            'availableBalance.required' => 'An available Balance is required',
            'currency.required'  => 'Currency is required',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'availableBalance' => 'Available balance',
            'currency' => 'Currency',
        ];
    }
}
