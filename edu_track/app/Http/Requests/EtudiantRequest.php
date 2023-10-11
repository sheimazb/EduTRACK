<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
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
            'user' => 'required',
            'email' => 'required|email|unique:etudiants,email,'.$this->id,
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'civilite' => 'required',
            'cin' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8|unique:etudiants,cin,'.$this->id,
            'telephone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:8',
            'dateN' => 'required',
            'nationnalite' => 'required',
            'gouvernorat' => 'required',
        ];
    }
}
