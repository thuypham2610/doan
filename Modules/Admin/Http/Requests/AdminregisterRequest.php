<?php

namespace Modules\Admin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'username'              => ['required', 'string', 'max:10', 'unique:users'],
            'name'                  => ['alpha'],
            'email'                 => ['required', 'email', 'string', 'max:30', 'unique:users'],
            'address'               => ['required', 'string', 'max:100'],
            'phone'                 => ['required', 'string', 'max:10'],
            'password'              => ['required', 'confirmed', 'string', 'min:6', 'max:20'],
            'password_confirmation' => ['required', 'string', 'min:6', 'max:20']
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
