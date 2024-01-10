<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ProductRequest extends FormRequest
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
                    Rule::unique('products')->whereNull('deleted_at')->ignore($id),
                ],
            'product_id' => 'required',
            'desc' => 'nullable',
            'measurement' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_title' => 'nullable',
            'meta_desc' => 'nullable',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'This Product Title Is Required',
            'name.unique' => 'This Product Title has already been taken',
        ];
    }
}
