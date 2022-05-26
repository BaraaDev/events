<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class serviceRequest extends FormRequest
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

    protected function onCreate()
    {
        return [
            'name_ar'        => 'required|min:3|max:199',
            'name_en'        => 'required|min:3|max:199',
            'name_fr'        => 'required|min:3|max:199',
            'describtion_ar' => 'required|max:500',
            'describtion_en' => 'required|max:500',
            'describtion_fr' => 'required|max:500',
        ];
    }


    protected function onUpdate()
    {
        return [
            'name_ar'        => 'required|min:3|max:199|unique:categories,name',
            'name_en'        => 'required|min:3|max:199',
            'name_fr'        => 'required|min:3|max:199',
            'describtion_ar' => 'required|max:500',
            'describtion_en' => 'required|max:500',
            'describtion_fr' => 'required|max:500',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return  request()->isMethod('put') || request()->isMethod('patch') ?
            $this->onUpdate() : $this->onCreate();
    }

    public function messages()
    {
        return [

            // Validation name ar
            'name_ar.required' => __('admin/request.name_ar_required'),
            'name_ar.min'      => __('admin/request.name_ar_min'),
            'name_ar.max'      => __('admin/request.name_ar_max'),

            // Validation name en
            'name_en.required' => __('admin/request.name_en_required'),
            'name_en.min'      => __('admin/request.name_en_min'),
            'name_en.max'      => __('admin/request.name_en_max'),

            // Validation name fr
            'name_fr.required' => __('admin/request.name_fr_required'),
            'name_fr.min'      => __('admin/request.name_fr_min'),
            'name_fr.max'      => __('admin/request.name_fr_max'),


            // Validation describtion ar
            'describtion_ar.required' => __('admin/request.describtion_ar_required'),
            'describtion_ar.max'      => __('admin/request.describtion_ar_max'),

            // Validation describtion en
            'describtion_en.required' => __('admin/request.describtion_en_required'),
            'describtion_en.max'      => __('admin/request.describtion_en_max'),

            // Validation describtion fr
            'describtion_fr.required' => __('admin/request.describtion_fr_required'),
            'describtion_fr.max'      => __('admin/request.describtion_fr_max'),

            // Validation price ar
            'price_ar.required' => __('admin/request.price_ar_required'),
            'price_ar.max'      => __('admin/request.price_ar_max'),

            // Validation price en
            'price_en.required' => __('admin/request.price_en_required'),
            'price_en.max'      => __('admin/request.price_en_max'),

            // Validation price fr
            'price_fr.required' => __('admin/request.price_fr_required'),
            'price_fr.max'      => __('admin/request.price_fr_max'),

            // Validation address ar
            'address_ar.required' => __('admin/request.address_ar_required'),
            'address_ar.max'      => __('admin/request.address_ar_max'),

            // Validation address en
            'address_en.required' => __('admin/request.address_en_required'),
            'address_en.max'      => __('admin/request.address_en_max'),

            // Validation address fr
            'address_fr.required' => __('admin/request.address_fr_required'),
            'address_fr.max'      => __('admin/request.address_fr_max'),
        ];
    }
}
