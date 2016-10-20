<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Euser;
use DB;
use App\Juser;
use App\Seinfo;
use App\User;
use App\Pinfo;
use App\Post;
use App\Einfo;
use App\Awinfo;
use App\Vrinfo;
use App\Cinfo;
use App\Jinfo;
use App\Langinfo;
use App\Compinfo;
use App\Rpinfo;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class JobSeekerController extends Controller
{

  public function __construct()
    {
        $this->middleware('auth',['except' => ['jssignup','storejobseeker','index']]);

        //$this->middleware('log', ['only' => ['fooAction', 'barAction']]);

      //  $this->middleware('subscribed', );
    }
    public function signup()
  {
    return view('Design.signup');
  }
  public function jobseekers()
  {
    return view ('Design.jobseekers'); 
  }


  public function jscv()
  {
    return view ('Design.jscv'); 
  }
  
	public function jssignup()
	{
		return view('Design.jssignup');
	}
  public function index()
    {
    //$Pinfos = Pinfo ::all();//take(3)->orderBy('created_at','asc');
    $Pinfos = DB::table('pinfos')->take(3)->orderBy('exp','desc')->get();
    //dd($Pinfos);
    //  $Posts=Post::all();
      return view('Design.index',compact('Pinfos'));
    }

   
    public function index3()
    {
      $Pinfos = Pinfo::take(3)->orderBy('created_at','asc');

            $jsinfos = Auth::user();

      return view('Design.index3',compact('Pinfos','jsinfos'));
    }

   /* public function jsdashboard()
    {
      return view('Design.jsdashboard');
    }*/
   
public function jsdashboard($id)
    {

       $Pinfos=Pinfo::find($id);

      return view('Design.jsdashboard',compact('Pinfos'));
    }

	public function jsprofile($id)
	{
    $Juser=User::find($id);
    return view('Design.jsprofile',compact('Juser'));
	}

 
public function loginsite(Request $request){


//dd($request->email);

//$email=''.$request->email;

//dd($email);

//$user = Euser :: where('email' , '=', $request->get('email'))->get() ;

 //$user = Euser :: where ('email' , '=', $request->email)->where('password' , '=', $request->password)->get();

//dd($user);
$Eusers= new App/Euser();

dd($Eusers);









//$users = DB::table('users')->get();

  /*   if(Auth::check())
      {

        return "login";
  //      return redirect('h');
      }

      return "not login";
      return redirect('logsite');
*/      

  
     // return "not login";
  //    return redirect('logsite');
      
      // $user->profile->save($request);
   
    }





/*
xpublic  function showjobseeker($id){
  
       $Pinfos=Pinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.jobseekershow',compact('Pinfos'));
    }

*/
  public  function showjobseeker($id){
  
       $Pinfos=Pinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.jsshow',compact('Pinfos'));
    }  

public function storejobseeker(Requests\PinfoRequest $request){

     //  $user = Juser::Find(1);
      
      // $user->profile->save($request);
//dd($request);
        $Compinfoes = Compinfo :: Create($request->all());
        $Compinfoes->save();
        $Pinfos = Pinfo :: Create($request->all());
        $Pinfos->save();
        

if (isset($request -> image)) 
        {
          # code...


         // $imageName = $Compinfoes->id . '_compinfo.' .
        $imageName = $Pinfos->id . '_picinfo.' .
   //     dd($imageName);
        $request->file('image')->getClientOriginalExtension();
        $imageCompletePath = '/image/'. $imageName ;
        $request->file('image')->move(
        base_path() . '/public/image/', $imageName);
        $Pinfos->update(array('image' => $imageCompletePath));

}

$showjobseeker = 'showjobseeker/' . $Pinfos->id ;
  return redirect ($showjobseeker );

    }



public function jsedit($id){
        $Pinfos=Pinfo::findOrFail($id);
        return view('Design.jsedit',compact('Pinfos'));
    }

    public function jsupdate(Requests\PinfoRequest $request,$id){
        $Pinfos=Pinfo::findOrFail($id);
        $Pinfos->update($request->all());
        $Pinfoshow = 'showjobseeker/' . $Pinfos->id ;

        if (isset($request -> image)) 
        {
          # code...


         // $imageName = $Compinfoes->id . '_compinfo.' .
        $imageName = $Pinfos->id . '_picinfo.' .
   //     dd($imageName);
        $request->file('image')->getClientOriginalExtension();
        $imageCompletePath = '/image/'. $imageName ;
        $request->file('image')->move(
        base_path() . '/public/image/', $imageName);
        $Pinfos->update(array('image' => $imageCompletePath));

}
  return redirect ($Pinfoshow);
    }



    




	public function jslogin()
	{
		return view('Design.jslogin');
	}



}
