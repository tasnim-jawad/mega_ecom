<?php

namespace App\Modules\ProductManagement\Product\Validations;

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
            'title' => 'required | sometimes',
            'type' => 'required | sometimes',
            'short_description' => 'required | sometimes',
            'description' => 'required | sometimes',
            'menufecturer_id' => 'required | sometimes',
            'brand_id' => 'required | sometimes',
            'sku' => 'required | sometimes',
            'unit' => 'required | sometimes',
            'alert_quantity' => 'required | sometimes',
            'saller_points' => 'required | sometimes',
            'is_returnable' => 'required | sometimes',
            'expiration_days' => 'required | sometimes',
            'purchase_price' => 'required | sometimes',
            'purchase_account' => 'required | sometimes',
            'discount_type' => 'required | sometimes',
            'discount_amount' => 'required | sometimes',
            'tax_id' => 'required | sometimes',
            'tax_type' => 'required | sometimes',
            'vat_on_sale' => 'required | sometimes',
            'vat_on_purchase' => 'required | sometimes',
            'status' => ['sometimes', Rule::in(['active', 'inactive'])],
        ];
    }
}