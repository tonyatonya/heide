<?php namespace heide\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest {

	public function rules()
	{
	    return [
	        'title' => 'required|unique:posts|max:255',
	        'body' => 'required'
	    ];
	}

	public function messages()
    {
        return [
            'title.required' => 'กรุณากรอกชื่อลูกค้า',
            'body.required' => 'กรุณากรอกที่อยู่ลูกค้า'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

}