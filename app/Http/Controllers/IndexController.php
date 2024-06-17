<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return  view("index.index");
    }

        public function test()
        {
            $test = __METHOD__;
            dump($test);
            return  view("index.test", ["test" => $test]);
        }
    
        public function about()
        {
            return  view("index.about");
        }

        public function project()
        {
            return  view("index.project");
        }

        public function customers()
        {
            return  view("index.customers");
        }

        public function services()
        {
            return  view("index.services");
        }

        public function contacts()
        {
            return  view("index.contacts");
        }

        public function calculator()
        {
            return  view("index.calculator");
        }
}
