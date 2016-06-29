<?php

namespace App\Http\Requests;

//use App\Http\Requests\Request;

class CreateFilmRequest extends Request
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
            'titre' => 'required|max:255',
            'annee' => 'required|numeric',
            'image' => 'required',
            'id_classement' => 'required',
            'duree' => 'required|numeric',
            'synopsis' => 'required|max:1000',
            'acteurs' => 'required|max:255'
        ];
    }
}
