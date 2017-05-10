<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StudentRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return \Auth::check();
    }
    
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'slug'          => 'unique|students,slug' . \Request::get('id'),
            'firstname'     => 'required|min:2|max:255',
            'lastname'      => 'required|min:2|max:255',
            'year'          => 'numeric',
            'orientation'   => 'required',
            'is_freelance'  => 'required|boolean',
            'is_graduated'  => 'required|boolean',
            'has_interview' => 'required|boolean',
        ];
    }
    
    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }
    
    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
