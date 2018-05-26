<?php namespace heide\Http\Requests;



use Illuminate\Foundation\Http\FormRequest;



class UserRequest extends FormRequest {
	public function rules()
	{
	    return [
	        'username' => 'required|unique:users',
            'name' => 'required',
            'email' => 'required|email|unique:users',
	        'password' => 'required|confirmed|min:6',
	    ];
	}
    public function authorize()
    {
        return true;
    }



}