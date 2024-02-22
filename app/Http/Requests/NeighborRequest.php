<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NeighborRequest extends FormRequest
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
            "name"=> "required|string",
            "lastname_m"=> "required|string",
            "lastname_p"=> "required|string",
            "document"=> "numeric|digits_between:8,10|unique:neighbors",
            "organization"=> "required|string",
            "territory"=> "required|string"

        ];
    }
}



