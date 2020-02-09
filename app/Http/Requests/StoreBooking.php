<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBooking extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return True;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'pickupLocation' => 'required|max:255',
        'pickupDate' => 'required|date|max:255',
        'instruction' => 'required|max:255',
        'listingId' => 'nullable|max:255',
        'agentId' => 'nullable|max:255',
        'tenantId' => 'required|max:255'
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
            'pickupLocation.required' => 'set a pickup location',
            'pickupDate.required'  => 'set pickup date',
            'instruction.required'  => 'please enter instructions',
            'tenantId.required'  => 'tenant id is required',
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
            'pickupLocation' => 'Pick up location',
            'pickupDate' => 'Pick up date',
            'instruction' => 'instructions',
            'tenantId' => 'Tennant id',
        ];
    }


}
