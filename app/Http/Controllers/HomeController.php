<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Technology;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function techList()
    {
        $tech=new Technology;
        $result['response']= $tech->all();
        return view('technology',$result);
    }
    
     function doAddTech()
    {
        //echo "Insert Page";
               
        return view('add');
         
    }
    
    function tech1(Request $request)
    {
        $technologyName=$request->input('tech_name');
        

        $tech=new Technology;
        $tech->tech_name=$technologyName;
        
        $tech->save(); 
        
        return redirect('/tech');
    }
    
}
