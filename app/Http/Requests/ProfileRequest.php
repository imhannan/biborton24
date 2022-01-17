<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'firstName' => ['required', 'string', 'alpha'],
            'lastName' => ['required', 'string', 'alpha'],
            'bloodGroup' => ['required', 'string'],
            'phone' => ['nullable', 'numeric'],
            'address' => ['nullable', 'string'],
            'education' => ['nullable', 'string'],
            'quote' => ['nullable', 'string'],
            'birthday' => ['nullable', 'string']
        ];
    }
}
