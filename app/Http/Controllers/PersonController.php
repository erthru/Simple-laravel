<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PersonController extends Controller
{
    public function index()
    {
        $data = DB::table('person')->get();
        return view('index',['data'=>$data]);
    }

    public function add()
    {
        return view('add');
    }

    public function edit($id)
    {
        $data = DB::table('person')->where('id',$id)->get();
        return view('edit',['data'=>$data]);
    }

    public function add_action(Request $request)
    {
        DB::table('person')->insert([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name
        ]);

        return redirect('/person');

    }

    public function edit_action(Request $request)
    {
        DB::table('person')->where('id',$request->id)->update([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name
        ]);

        return redirect('/person');

    }

    public function delete_action($id)
    {
        DB::table('person')->where('id',$id)->delete();
        return redirect('/person');
    }

}
