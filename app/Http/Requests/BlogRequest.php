<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class BlogRequest extends FormRequest
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
                    Rule::unique('blogs')->whereNull('deleted_at')->ignore($id),
                ],
            'categorie_id' => 'required',
            'img' => 'nullable',
            'desc' => 'nullable',
            'meta_tag' => 'nullable',
            'meta_title' => 'nullable',
            'meta_desc' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This Blog Title Is Required',
            'categorie_id.required' => 'Please Select Blog Category',

            'name.unique' => 'This Blog Title has already been taken',
        ];
    }
}
