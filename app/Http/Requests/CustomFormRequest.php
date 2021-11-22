<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomFormRequest extends FormRequest
{
    /** 
     * force the application to return json validation errors
     * */  
    public function wantsJson()
    {
        return true;
    }
}
