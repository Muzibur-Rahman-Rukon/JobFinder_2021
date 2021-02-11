<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;

use Illuminate\Http\Request;
use Session;
use DB;
session_start();


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function login()
    {
       return view('admin.login');
    }

     public function admin_login_check(Request $request)
    {
         $admin_email_address=$request->admi_email_id;
         $admin_password=md5($request->admin_password_id);
          $users = DB::table('tbl_admin')
                 ->where('admi_email_id', $admin_email_address)
                 ->where('admin_password_id', $admin_password)
                 ->first();
                
      if($users){

              Session::put('admin_name',$users->admin_name);
              Session::put('id',$users->admin_id);

              
              return Redirect::to('/index');
              
        
      }
      else{
          Session::put('exception','Email or Password Invalid');
         return Redirect::to('/admin');
    }
}

    public function index()
    {
       
               $dashboard=view('admin.dashboard');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
        
    }
    public function addJob(){

               $dashboard=view('admin.addJob');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);

    }
    public function manageJob(){
              $dashboard=view('admin.manage');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
     public function addJobCategory(){
              $dashboard=view('admin.addJobCategory');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
     public function viewCategory(){
              $dashboard=view('admin.viewCategory');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
     public function addCompany(){
              $dashboard=view('admin.addCompany');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
     public function viewCompany(){
              $dashboard=view('admin.viewCompany');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
     public function viewallUser(){
              $dashboard=view('admin.viewallUser');
               $footer=view('admin.footer');
               return view('loginmaster')
               ->with('content',$dashboard)
               ->with('footer',$footer);
    }
      public function logout(){
        Session::put('admin_name',null);
        Session::put('id',null);
       
        return Redirect::to('/admin');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
