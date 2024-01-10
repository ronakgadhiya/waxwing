<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SliderRequest extends FormRequest
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
        $id  = $this->get('id');
        return [
                'name' => [
                    'required',
                        Rule::unique('sliders')->whereNull('deleted_at')->ignore($id),
                    ],
               
                
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'This Slider Title Is Required',
            'name.unique' => 'This Slider Title has already been taken',
        ];
    }
}
