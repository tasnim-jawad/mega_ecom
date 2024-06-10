<?php

namespace App\Modules\UserManagement\User\Validations;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\Rule;

class Validation extends FormRequest
{
    /**
     * Determine if the  is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    /**
     * validateError to make this request.
     */
    public function validateError($data)
    {
        $errorPayload =  $data->getMessages();
        return response(['status' => 'validation_error', 'errors' => $errorPayload], 422);
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException($this->validateError($validator->errors()));
        if ($this->wantsJson() || $this->ajax()) {
            throw new HttpResponseException($this->validateError($validator->errors()));
        }
        parent::failedValidation($validator);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required | sometimes',
            'user_name' => 'required | sometimes',
            'role_serial' => 'sometimes',
            'email' => 'required|unique:users,email,' . $this->id,
            'phone_number' => 'required | sometimes',
            'photo' => 'sometimes',
            'password' => 'required | sometimes',
            'confirmed' => 'sometimes|required|same:password',
            'role_id' => 'sometimes',
            'is_blocked' => 'sometimes',
            'no_of_attempt' => 'sometimes',

            'status' => ['sometimes', Rule::in(['active', 'inactive'])],
        ];
    }
}
