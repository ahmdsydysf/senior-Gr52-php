<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {

        return [
            'first_name' => 'required|min:2|max:15|string',
            'last_name' => 'required|min:2|max:15|string',
            'age' => 'required|min:2|max:3|string',
            'mobile' => 'required|min:6|max:16|string',
            'address' => 'required|min:5|max:150|string',
            'gender' => 'required|string',
        ];

    }
}
