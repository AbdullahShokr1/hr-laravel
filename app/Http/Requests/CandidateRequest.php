<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CandidateRequest extends FormRequest
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
            'nid' => 'required|min:14|max:14',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|',
            'phone' => 'required',
            'job' => 'required|string|max:50',
            'skills' => 'required|string|max:700',
            'cv' => 'required',
        ];
    }
}
