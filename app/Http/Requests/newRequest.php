<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class newRequest extends FormRequest
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
            'name'=>'required|alpha',
            'nric'=>'required|alpha_num',
            'email'=>'required|email',
            'mobile'=>'required|numeric',
            'address'=>'max:250',
            'city'=>'required',
            'state'=>'required',
            'country'=>'required',
            'zip_code'=>'required|alpha_num',
            'image'=>'required|max:2000'
        ];
    }

    public function messages()
    {
        return [
        'required' => 'The :attribute is required.',
        'apha'=> 'The :attribute should be alphabetic',
        'alpha_num'=> 'The :attribute should be alphanumeric',
        'email'=> 'The :attribute should be a valid email',
        'max' => 'the size is invalid',
        ];
    }
}
