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

      $Posts=Post::all();
      return view('Design.index',compact('Posts'));
    }

   
    public function index3()
    {
      return view('Design.index3');
    }

    public function jsdashboard()
    {
      return view('Design.jsdashboard');
    }
   


	public function jsprofile($id)
	{
    $Juser=Juser::find($id);
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
        return view('Design.jsinfo',compact('Pinfos'));
    }  

public function storejobseeker(Requests\PinfoRequest $request){

     //  $user = Juser::Find(1);
      
      // $user->profile->save($request);
dd($request);
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


public function jstore(Requests\JuserRequest $request){

             
      // $user->profile->save($request);

        $Jusers = Juser :: Create($request->all());
        $Jusers->save();

  $jsprofile = 'jsprofile/' . $Jusers->id ;

  return redirect ($jsprofile);

    }

public function rpstore(Requests\RpinfoRequest $request){

             
      // $user->profile->save($request);

        $Rpinfos = Rpinfo :: Create($request->all());
        $Rpinfos->save();

 return($Rpinfos->rp_title.$Rpinfos->rp_description.$Rpinfos->rp_year.$Rpinfos->p_paper);

    }

public function coursestore(Requests\CinfoRequest $request){

             
      // $user->profile->save($request);

        $Cinfos = Cinfo :: Create($request->all());
        $Cinfos->save();

 return"succes";

    }
public function skillestore(Requests\skinfoRequest $request){

             
      // $user->profile->save($request);

        $Skinfos = Skinfo :: Create($request->all());
        $Skinfos->save();

 return"succes";

    }
public function Languagestore(Requests\LanginfoRequest $request){

             
      // $user->profile->save($request);

        $langinfos = Lang_info :: Create($request->all());
        $langinfos->save();

 return"succes";

    }
 
 public function edustore(Requests\EinfoRequest $request){

             
      // $user->profile->save($request);

        $Einfos = Einfo :: Create($request->all());
        $Einfos->save();
//dd($Einfos);
$jseducationshow = 'jseducationshow/' . $Einfos->id ;

  return redirect ($jseducationshow);
 
    }
public function jobexp_store(Requests\JinfoRequest $request){

             
      // $user->profile->save($request);

        $Jinfos = Jinfo :: Create($request->all());
        $Jinfos->save();

$jseducationshow = 'jseducationshow/' . $Einfos->id ;

  return redirect ($jseducationshow);

    }

public function seminar_store(Requests\SeinfoRequest $request){

             
      // $user->profile->save($request);

        $Seinfos = Seinfo :: Create($request->all());
        $Seinfos->save();

 return"succes";

    }
public function award_store(Requests\AwinfoRequest $request){

             
      // $user->profile->save($request);

        $Awinfos = Awinfo :: Create($request->all());
        $Awinfos->save();

 return"succes";

    }
    public function volunteer_store(Requests\VrinfoRequest $request){

             
      // $user->profile->save($request);

        $Vrinfos = Vrinfo :: Create($request->all());
        $Vrinfos->save();

 return"succes";

    }

public function jseducationshow($id)
    {
$Einfos=Einfo::find($id);
      return view('Design.jseducationshow',compact('Einfos'));
    }
    public function jsrespubshow()
    {
      return view('Design.jsrespubshow');
    }
    public function jscertificateshow()
    {
      return view('Design.jscertificateshow');
    }
    public function jsjobshow()
    {
      return view('Design.jsjobshow');
    }
    public function jsseminarshow()
    {
      return view('Design.jsseminarshow');
    }
    public function jsawardshow()
    {
      return view('Design.jsawardshow');
    }
    public function jsvolunteershow()
    {
      return view('Design.jsvolunteershow');
    }
    public function jsotherinfoshow()
    {
      return view('Design.jsotherinfoshow');
    }


    




	public function jslogin()
	{
		return view('Design.jslogin');
	}



}
