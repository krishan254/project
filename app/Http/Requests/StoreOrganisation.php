<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrganisation extends FormRequest
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
          'name' => 'required|max:255',
          'address' => 'required',
          'phoneNumber1' => 'required|numeric',
          'phoneNumber2' => 'nullable|numeric',
          'email' => 'required',
          'vision' => 'nullable',
          'mission' => 'nullable',
          'description' => 'nullable',
          'companyPin' => 'nullable',
          'companyPinImage' => 'nullable',
          'logo' => 'nullable',
          'industry' => 'nullable',
          'city' => 'required',
          'country' => 'required',
          'branchName' => 'nullable'
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
            'name.required' => 'A name is required',
            'address.required'  => 'A address is required',
            'phoneNumber1.required'  => 'A Phone Number is required',
            'email.required'  => 'An email is required',
            'city.required'  => 'City required',
            'country.required'  => 'Country required',
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
            'name' => 'Authorization code',
            'address' => 'Address',
            'phoneNumber1' => 'Phone Number',
            'email' => 'Email',
            'city' => 'City',
            'country' => 'Country',
        ];
    }
}
