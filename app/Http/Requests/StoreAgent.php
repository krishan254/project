<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgent extends FormRequest
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
        'user_id' => 'required|max:255',
        'agency' => 'required|max:255',
        'primaryEmail' => 'required|max:255',
        'secondaryEmail' => 'nullable|max:255',
        'primaryPhone' => 'required|numeric|max:255',
        'secondaryPhone' => 'nullable|numeric|max:255',
        'agencyAddress' => 'required|max:255',
        'agencyPhone' => 'required|numeric|max:255',
        'workEmail' => 'required|max:255',
        'agencyLicence' => 'required|max:255'
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
            'user_id.required' => 'A User Id is required',
            'agency.required'  => 'Agency required',
            'primaryEmail.required'  => 'Primary Email is required',
            'primaryPhone.required'  => 'Primary Phone Number is required',
            'agencyAddress.required'  => 'Agency address is required',
            'agencyPhone.required'  => 'Agency phone contact is required',
            'workEmail.required'  => 'Your Work Email is required',
            'agencyLicence.required'  => 'Please enter your agency liscence',
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
            'authorizationCode' => 'Authorization code',
            'user_id' => 'User ID',
            'agency' => 'Agency',
            'primaryEmail' => 'Primary Email',
            'primaryPhone' => 'Primary phone',
            'agencyAddress' => 'Agency address',
            'agencyPhone' => 'Agency phone',
            'workEmail' => 'Work Email',
            'agencyLicence' => 'Agency liscence',
        ];
    }
}