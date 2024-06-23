<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appeal;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

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

        public function admin()
        {
            $apples = Appeal::get();
            return  view("index.admin", ['apples' => $apples]);
        }

        public function adminLogin()
        {
            return  view("index.adminLogin");
        }

        public function showRegistForm()
        {
           $roles = Role::get();
            return view('auth.register', ['roles' => $roles]);
        }

        public function createApplea(Request $request){
            $appeal = Appeal::create($request->except(["_token"]));
            return response()->json(['massage' => 'Заявка успешно добавлена!']);
        }

        public function regist(Request $request){
            $request->merge(['password' => Hash::make($request->password)]);
            $user = User::create($request->except(["_token", "password_confirmation"]));
            return back()->withInput();
        }

        public function acceptApple(Appeal $appeal){
            $appeal->user_id = auth()->user()->id;
            $appeal->save();
            return response()->json([
                'massage' => 'Заявка в обработке!',
                'name' => auth()->user()->name
                ]);
        }
}
