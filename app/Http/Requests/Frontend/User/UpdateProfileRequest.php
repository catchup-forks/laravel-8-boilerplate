<?php

declare(strict_types=1);

namespace App\Http\Requests\Frontend\User;

use App\Helpers\Frontend\Auth\Socialite;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * Class UpdateProfileRequest.
 */
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
     */
    public function rules(): array
    {
        return [
            'first_name'      => 'required|max:191',
            'last_name'       => 'required|max:191',
            'email'           => 'sometimes|required|email|max:191',
            'avatar_type'     => ['required', 'max:191', Rule::in(array_merge(['gravatar', 'storage'], (new Socialite())->getAcceptedProviders()))],
            'avatar_location' => 'sometimes|image|max:191',
        ];
    }
}
