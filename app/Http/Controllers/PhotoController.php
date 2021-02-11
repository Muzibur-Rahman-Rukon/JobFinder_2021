<?php

//namespace App\Http\Controllers;

//use Illuminate\Http\Request;
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;




class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home_content=view('pages.header');
        $body=view('pages.body');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
         ->with('body',$body)
        ->with('tail',$category);
    }
    public function userRegister(){
         $home_content=view('pages.header');
         $body=view('pages.userRegister');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
        ->with('body',$body)
        ->with('tail',$category);
    }
    public function userLogin(){
         $home_content=view('pages.header');
         $body=view('pages.userLogin');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
        ->with('body',$body)
        ->with('tail',$category);
    }
    public function JobList(){
         $home_content=view('pages.header');
         $body=view('pages.Joblist');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
        ->with('body',$body)
        ->with('tail',$category);

    }
     public function about(){
         $home_content=view('pages.header');
         $body=view('pages.about');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
        ->with('body',$body)
        ->with('tail',$category);

    }
     public function contact(){
         $home_content=view('pages.header');
         $body=view('pages.contact');
        $category=view('pages.footer');
        return view('master')
        ->with('head',$home_content)
        ->with('body',$body)
        ->with('tail',$category);

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
