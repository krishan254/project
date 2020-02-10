<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreListing extends FormRequest
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
          'agent_id' => 'required|numeric',
          'title' => 'required',
          'name' => 'required',
          'type' => 'required|numeric',
          'units' => 'required|numeric',
          'parkingSpaces' => 'nullable|numeric',
          'parkingSpacesPerUnit' => 'nullable|numeric',
          'startDate' => 'nullable|date',
          'endDate' => 'nullable|date',
          'address' => 'nullable',
          'physicalAddress' => 'required',
          'constructionDate' => 'nullable|date',
          'renovationDate' => 'nullable|date',
          'pinLocation' => 'nullable',
          'landMark' => 'nullable',
          'occupationCertNo' => 'nullable',
          'occupationCertImg' => 'nullable',
          'plotNo' => 'nullable',
          'buildingMaterial' => 'nullable',
          'furnished' => 'nullable|numeric',
          'modernFinishing' => 'nullable|numeric',
          'advertisingCost' => 'nullable',
          'discount' => 'nullable',
          'payable' => 'nullable',
          'received' => 'nullable',
          'pending' => 'nullable',
          'couponId' => 'nullable',
          'percentageDiscount' => 'nullable|numeric'
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
          'agent_id.required' => 'An agent id is required',
          'title.required'  => 'image required',
          'name.required'  => 'name is required',
          'type.required'  => 'type is required',
          'units.required'  => 'Units is required',
          'physicalAddress.required'  => 'name is required',
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
          'agent_id' => 'Agent ID',
          'title' => 'Title',
          'name' => 'Name',
          'type' => 'Type',
          'units' => 'Units',
          'physicalAddress' => 'Physical Address',
        ];
    }
}
