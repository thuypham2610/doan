<?php

namespace Modules\Admin\Http\Requests;

use Darryldecode\Cart\Validators\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

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
            'name'                  => ['required'],
            'email'                 => ['required', 'email', 'string', 'max:30', 'unique:users'],
            'address'               => ['required', 'string', 'max:100'],
            'phone'                 => ['required', 'string', 'max:10'],
            'password'              => ['required', 'confirmed', 'string', 'min:6', 'max:20'],
            'password_confirmation' => ['required', 'string', 'min:6', 'max:20']
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'name.required' => 'Name is required!',
            'password.required' => 'Password is required!',
            'username.unique' =>'Username is unique',
            'username.max' =>'Max is 10',
            'email.email' => 'Email not type',
            'email.unique' => 'Email is unique',
            'email.max'     => 'Length max is 30',
            'address.max'   => 'Max length is 100',
            'phone.max'     => 'Max length is 10'     
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
