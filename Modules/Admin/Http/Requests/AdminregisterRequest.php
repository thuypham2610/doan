<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminregisterRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'              => ['required', 'string'],
            'email'                 => ['required', 'string'],
            'address'               => ['required', 'string'],
            'phone'                 => ['required', 'string'],
            'password'              => ['required', 'confirmed', 'string'],
            'password_confirmation' => ['required', 'string']
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
