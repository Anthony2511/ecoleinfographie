<?php

namespace App\Http\Requests;

class ArticleRequest extends \Backpack\CRUD\app\Http\Requests\CrudRequest
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
            'title'       => 'required|min:2|max:255',
            'slug'        => 'unique:articles,slug,' . \Request::get('id'),
            'lastname'    => 'required|min:2|max:255',
            'firstname'   => 'required|min:2|max:255',
            'role'        => 'required',
            'picture'     => 'dimensions:min_width=250,min_height=250',
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
