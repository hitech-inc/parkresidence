<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Backend\Houses;

class UpdateHousesRequest extends FormRequest
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
            // 'status' => 'required|numeric',
            // 'alias' => 'required',
            // 'coords' => 'required',
            // 'title' => 'required',
            // 'udobstva' => 'required',
            // 'slug' => 'required|unique:houses,id,' . $this->get('id'),
            // 'name' => 'required',
            // 'img' => 'sometimes|mimes:jpg,jpeg,png',
            // 'small_img' => 'sometimes|mimes:jpg,jpeg,png',
            // 'plane' => 'sometimes|mimes:jpg,jpeg,png',
            // 'plane2' => 'sometimes|mimes:jpg,jpeg,png',
            // 'description' => 'required',
            // 'kvadratura' => 'required',
            // 'uchastok' => 'required',
            // 'visota_potolka' => 'required',
            // 'visota_potolka_gostinaya' => 'required',
            // 'spalnie_comnati' => 'required',
            // 'vannie_comnati' => 'required',
            // 'terrasa' => 'required',
            // 'parking' => 'required',

        ];
    }
}
