<?php

namespace App\Http\Requests\V1;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
class StoreServersRequest extends FormRequest
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
    public function rules()
    {
        return [
            'title' => ['required'],
            'description' => ['required'],
            'ip'=>['required'],
            'userName' => ['required'],
            'password' => ['required'],
            'sshPort' => ['required'],
            'state'=>['required', Rule::in(['active','inactive', 'Active', 'Inactive'])],
        ];
    }
}
