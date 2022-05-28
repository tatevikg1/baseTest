<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestRequest;
use Luezoid\Laravelcore\Http\Controllers\ApiController;

class TestController extends ApiController
{
    
    public function test(TestRequest $request)
    {
        return "somethig else";
    }
}   
