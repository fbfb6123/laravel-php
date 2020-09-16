<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HelloController extends Controller
{

    function __construct()
    {
        config(['sample.name'=>'新しいメッセージ']);
    }
    public function index()
    {
        $sample_name = config('sample.name');
        $sample_data = config('sample.data');
        $data = [
            'name'=>$sample_name,
            'data'=>$sample_data
        ];
        return view('hello.index', $data);
    }

}
