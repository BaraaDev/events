<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
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
            'name_ar' => 'required|min:3|max:199',
            'name_en' => 'required|min:3|max:199',
            'name_fr' => 'required|min:3|max:199',
        ];
    }

    public function messages()
    {
        return [

            // Validation name ar
            'name_ar.required' => 'حقل الاسم بالعربي مطلوب.',
            'name_ar.min' => 'يجب أن يكون طول نص حقل الاسم بالعربي على الأقل 3 حروفٍ/حرفًا.',
            'name_ar.max' => 'يجب أن لا يتجاوز طول نّص حقل الاسم بالعربي 199 حروفٍ/حرفًا.',

            // Validation name en
            'name_en.required' => 'حقل الاسم بالانجليزي مطلوب.',
            'name_en.min' => 'يجب أن يكون طول نص حقل الاسم بالانجليزي على الأقل 3 حروفٍ/حرفًا.',
            'name_en.max' => 'يجب أن لا يتجاوز طول نّص حقل الاسم بالانجليزي 199 حروفٍ/حرفًا.',

            // Validation name fr
            'name_fr.required' => 'حقل الاسم بالفرنساوي مطلوب.',
            'name_fr.min' => 'يجب أن يكون طول نص حقل الاسم بالفرنساوي على الأقل 3 حروفٍ/حرفًا.',
            'name_fr.max' => 'يجب أن لا يتجاوز طول نّص حقل الاسم بالفرنساوي 199 حروفٍ/حرفًا.',
        ];
    }
}
