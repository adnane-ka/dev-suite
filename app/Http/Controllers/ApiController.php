<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class ApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    /** 
     * shows a collection of resources
     * 
     * @param $group
     * @return json 
    */
    public static function showGroup($group ,$statusCode = 200)
    {
        return response()->json($group ,$statusCode);
    }
    
    /** 
     * shows a resource of resources
     * 
     * @param $one
     * @return json 
    */
    public static function showOne($one ,$statusCode = 200)
    {
        return response()->json($one ,$statusCode);
    }
}
