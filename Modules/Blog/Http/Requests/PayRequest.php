<?php

namespace Modules\Blog\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'                  => ['required'],
            'email'                 => ['required', 'email', 'string', 'max:30'],
            'address'               => ['required', 'string', 'max:100'],
            'phone'                 => ['required', 'string', 'max:10'],
            'city'                  => ['required', 'string', 'max:20'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'email.email' => 'Email not type',
            'email.max'     => 'Length max is 30',
            'address.max'   => 'Max length is 100',
            'phone.max'     => 'Max length is 10',
            'city.max'      => 'Max length is 20'     
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
