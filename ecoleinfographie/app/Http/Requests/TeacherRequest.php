<?php

namespace App\Http\Requests;

class TeacherRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'slug'        => 'unique:teachers,slug,' . \Request::get('id'),
            'lastname'    => 'required|min:2|max:255',
            'firstname'   => 'required|min:2|max:255',
            'role'        => 'required',
            //'picture'     => 'required',
            'description' => 'required|min:2',
            'email'       => 'email',
            'status'      => 'required',
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
