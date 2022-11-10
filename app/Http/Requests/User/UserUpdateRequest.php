<?php

namespace App\Http\Requests\User;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class UserUpdateRequest extends FormRequest
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
    public function rules(User $user)
    {
        return [
            'name' => 'required|string|min:2|max:255',
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')->ignore($user)
            ],
            'password' => [
                'nullable',
                Password::min(8)
            ],
            'confirm_password' => 'nullable|same:password',
        ];
    }
}
