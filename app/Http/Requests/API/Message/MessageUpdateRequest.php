<?php

namespace App\Http\Requests\API\Message;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class MessageUpdateRequest
 * @package App\Http\Requests\API\Message
 */
class MessageUpdateRequest extends FormRequest
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
            'message'   => 'bail|required|string|max:255',
        ];
    }
}
