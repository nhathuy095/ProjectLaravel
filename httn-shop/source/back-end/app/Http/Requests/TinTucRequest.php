<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TinTucRequest extends Request
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
            'name' => 'required',
            'seotitle' => 'required',
            'seokeywords' => 'required',
			'seodescription'=> 'required',
			'catalog' => 'required',
        ];
		
    }

    public function messages()
    {
        return[
            'name.required' => 'Vui lòng nhập tên',
            'seotitle.required' => 'Vui lòng nhập SEO titile',
            'seodescription.required' => 'Vui lòng nhập SEO description ',
            'seokeywords.required' => 'Vui lòng nhập SEO keywords',
			'catalog.required' => 'Vui lòng nhập danh mục'
			
        ];
    }
}
