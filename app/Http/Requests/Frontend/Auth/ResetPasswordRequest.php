<?php

declare(strict_types=1);

namespace App\Http\Requests\Frontend\Auth;

use App\Rules\Auth\ChangePassword;
use App\Rules\Auth\UnusedPassword;
use DivineOmega\LaravelPasswordExposedValidationRule\PasswordExposed;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ResetPasswordRequest.
 */
class ResetPasswordRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'token'    => 'required',
            'email'    => 'required|email',
            'password' => [
                'required',
                'confirmed',
                new ChangePassword(),
                new PasswordExposed(),
                new UnusedPassword($this->get('token')),
            ],
        ];
    }
}
