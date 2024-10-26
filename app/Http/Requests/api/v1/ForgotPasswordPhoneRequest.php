<?php

namespace App\Http\Requests\api\v1;

use Illuminate\Foundation\Http\FormRequest;


class ForgotPasswordPhoneRequest extends FormRequest
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
            'phone_number' => ['required', 'regex:/^(\+?[0-9]{1,3})?([0-9]{10,15})$/', 'string', 'digits_between:10,15'],
        ];
    }
}
