<?php

namespace App\Http\Controllers;

use  App\Http\Controllers\str_slug;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

class Employee extends Controller
{


    function list()
    {
        $data = User::All();
        return view('list', compact('data'));
    }

    function add(Request $req)
    {
        if ($req->submit == "Add") {

          
            $name = $req->name;
            $email = $req->email;
            $image = $req->image;
            $designation = $req->designation;
            $req->validate([
                'name' => 'required|alpha',
                'email' => 'required|email',
                'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);
            $k = new User();
            $k->name = $name;
            $k->email = $email;
            if ($req->hasFile('image')) {
                $image = $req->file('image');
                $naming = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('images');
                $imagePath = $destinationPath . "/var/www/html/laravel-project/public/images" .  $naming;
                $image->move($destinationPath, $naming);
                $k->image = $naming;
            }

            $k->designation = $designation;
            $k->save();
            //return redirect('add')
            //->with('success', 'Item Added  successfully');
            // echo "Record inserted successfully.<br/>";
            // return redirect('/');
            echo "Record inserted successfully.<br/>";
            echo '<a href = "/">Click Here</a> to go list Page.';
        } else {
            return view('add');
        }
    }

    function edit($id)
    {
        $z = User::find($id);
        return view('edit', compact('z'));
    }

    function update(Request $req)
    {
        $name = $req->name;
        $email = $req->email;
        $image = $req->image;
        $designation = $req->designation;
        $id = $req->id;
        $k = User::find($id);
        $k->name = $name;
        $k->email = $email;
        if ($req->hasFile('image')) {
            $image = $req->file('image');
            $naming = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('images');
            $imagePath = $destinationPath . "/var/www/html/laravel-project/public/images" .  $naming;
            $image->move($destinationPath, $naming);
           
            $k->image = $naming;
            
        }

        $k->designation = $designation;
        $k->save();
        echo "Record updated  successfully.<br/>";
        echo '<a href = "/">Click Here</a> to go list Page.';

        //return redirect('/')->with('success', 'Item Added  successfully');
        // return redirect('/');
    }
    function delete(string $id)
    {
        // $item=DB::table('users')->where('id',$id)->delete();
        $item = User::find($id)->delete();
        //    if($item) {
        //     $item->session()->flash('status', 'success');
        //     $item->session()->flash('message', 'Id card deleted successfully');
        //     return redirect('/');
        // }
        if ($item) {
            return  redirect('/');
        }
    }
}
