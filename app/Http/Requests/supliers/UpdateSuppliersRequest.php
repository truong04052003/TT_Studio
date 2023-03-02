<?php

namespace App\Http\Requests\supliers;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSuppliersRequest extends FormRequest
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
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required|max:11',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Không được để trống!',
            'email.required' => 'Không được để trống!',
            'address.required' => 'Không được để trống!',
            'phone.required' => 'Không được để trống!',
            'phone.max' => 'kí tự quá dài!',
        ];
    }
}
