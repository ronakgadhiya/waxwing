<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
                    Rule::unique('faqs')->whereNull('deleted_at')->ignore($id),
                ],
            'desc' => 'nullable',
            ];
    }
    public function messages()
    {
        return [
            'name.required' => 'This Faq Title Is Required',
            'name.unique' => 'This Faq Title has already been taken',
        ];
    }
}
