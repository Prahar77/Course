<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDetailsRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname'  => 'required',
            'lastname'   => 'required',
            'phone'      => 'numeric',
            'gender'     => 'required',
            'email'      => 'mail',
            'pass'       => 'required|confirmed|min:8',
            'repass'     => 'required_with:password|same:password|min:8'

        ];
    }
}
