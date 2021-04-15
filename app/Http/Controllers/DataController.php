<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DataController extends Controller
{
    public function index() //Show everything from the database
    {
        $allData = DB::table('members')->get(); //members is the table column
        return view('welcome')->with('showAllData', $allData); //with method used for laravel
    }

    public function addNewUser(){
        return view('addNew');
    }

    public function addNewUserSubmitted(Request $request)
    {
        $data = array();
        $data['CID'] = $request->cid;  //$data['CID'] from DataBase = $request->cid; from the submit FORM name value
        $data['Name'] = $request->name; 
        $data['Email'] = $request->email; 
        $data['Address'] = $request->address; 

        $add = DB::table('members')->insert($data);
        return Redirect()->route('welcomePage'); //or Redirect()->back() Can be used to get back to the same page
        // print_r($data);
    }

    public function view($id)
    {
        $viewing = DB::table('members')->where('id', $id)->first();
        return view('view', compact('viewing'));
    }

    public function edit($id)
    {
        $edt = DB::table('members')->where('id', $id)->first();
        return view('edit', compact('edt'));
    }

    public function editSubmitted(Request $request, $id)
    {
        $data = array();
        $data['CID'] = $request->cid;  //$data['CID'] from DataBase = $request->cid from the submit FORM name value
        $data['Name'] = $request->name;
        $data['Email'] = $request->email;
        $data['Address'] = $request->address;

        $upd = DB::table('members')->where('id', $id)->update($data);
        return Redirect()->route('welcomePage');
    }

    public function delete($id)
    {
        $dlt = DB::table('members')->where('id', $id)->delete();
        return Redirect()->route('welcomePage');
    }
}
