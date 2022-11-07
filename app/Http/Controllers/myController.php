<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    # function for the get method
    public function get()
    {
        return response()->json(["message" => "the get function is woring"]);
    }

    # function for the podt method
    public function post(Request $request, $data)
    {
        $variable = $request->all();
        $variable['age'] = $data;
        return response()->json(["message" => "the post function is woring", "data" => $variable]);
    }

    # function for the put method
    public function put()
    {
        return ("put");
    }

    # function for the delete method
    public function delete()
    {
        return ("delete");
    }

    # function for the api test1
    public function test1()
    {

        return response()->json(["message" => "the api prifix is working in function"]);
    }

    # function for the api test2
    public function test2()
    {
        $variable = Test::where('name','sasm')
        ->get();
        return response()->json(["message" => "the api prifix is working in function","data"=>$variable]);
    }

    #function calling the laravel api
    public function hit()
    {

        return response("operation working");
    }
}
