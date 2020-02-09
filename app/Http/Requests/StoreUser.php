<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
          'firstName' => 'required|max:255',
          'middleName' => 'nullable|max:255',
          'lastName' => 'required|max:255',
          'username' => 'required|max:255',
          'email' => 'required|max:255',
          'email_verified_at' => 'nullable|date_time|max:255',
          'Phone' => 'requred|max:255',
          'gender' => 'required|max:255',
          'address' => 'nullable|max:255',
          'county' => 'nullable|max:255',
          'location' => 'nullable',
          'password' => 'required|max:255'
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
            'firstName.required' => 'first Name is required',
            'lastName.required'  => 'A last name is required',
            'username.required'  => 'A user name is required',
            'email.required'  => 'An email is required',
            'Phone.required'  => 'A phone number is required',
            'gender.required'  => 'Gender is required',
            'password.required'  => 'A password is required',
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
            'firstName' => 'First name',
            'lastName' => 'Last name',
            'username' => 'User name',
            'email' => 'Email',
            'Phone' => 'Phone',
            'gender' => 'Gender',
            'password' => 'Password',
        ];
    }
}
