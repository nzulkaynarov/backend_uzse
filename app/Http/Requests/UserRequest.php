<?php

namespace App\Http\Requests;

use App\Services\Request\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends ApiRequest
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
            'email' => 'email',
            'news' => 'boolean',
            'trade' => 'boolean',
            'market' => 'boolean',
        ];
    }
}
