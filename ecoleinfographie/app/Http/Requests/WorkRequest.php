<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class WorkRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'title'             => 'required|min:2|max:255',
            'slug'              => 'unique:works,slug,' . \Request::get('id'),
            'orientation'       => 'required',
            'year'              => 'required|numeric',
            'project_link'      => 'nullable|url',
            'view3d'            => 'nullable|url',
            'cover'             => 'required',
            'description'       => 'required|min:255',
            'other_description' => 'required|min:255',
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
