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
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class EmployerController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth',['except' => ['emsignup', 'store','emplogin']]);
        $this->middleware('guest',['only' => ['emplogin']]);

        //$this->middleware('log', ['only' => ['fooAction', 'barAction']]);

      //  $this->middleware('subscribed', );
    }

    public function jobs()
    {
        return view('Design.jobs');
    }
   public function jobshow()
  {
    $Posts=Post::all();
    return view('Design.jobshow',compact('Posts'));
  } 
public function jobedit($id){
        $Posts=Post::findOrFail($id);
        return view('Design.jobedit',compact('Posts'));
    }

    public function Postupdate(Requests\PostRequest $request,$id){
        $Posts=Post::findOrFail($id);
        $Posts->update($request->all());
        return redirect ('jobshow');
    }

public  function Postshow($id){ 
    $Posts=Post::findOrFail($id);
   // dd($article->created_at->diffForHumans());
    return view('Design.Postshow',compact('Posts'));
}

public function destroy($id)
{
    $Posts = Post::findOrFail($id);
    $Posts->delete();

\Session::flash('flash_message', 'Article successfully deleted!');
    return redirect('jobshow');
}

public function jobpost()
    {
        return view('Design.jobpost');
    }

public function jobstore(Requests\PostRequest $request){

             
      // $user->profile->save($request);

        $Posts = Post :: Create($request->all());
        $Posts->save();

 return redirect ('jobshow');

    }

    public function emsignup()
    {
    
        return view('Design.emsignup');
    }


 
    public function emprofile($id)
    {

    $user=User::find($id);
    return view('Design.emprofile',compact('user'));
    }

/*
public function emdashbord()
    {

       

      return view('Design.emdashboard');
    }
*/

     public function emdashboard($id)
    {

       $Compinfo=Compinfo::find($id);

      return view('Design.emdashboard',compact('Compinfo'));
    }

    public function emprofile2()
    {
      return view('Design.emprofile2');
    }

public  function show($id){
    
       $Compinfo=Compinfo::find($id);
        //dd($Post->created_at->diffForHumans());
        return view('Design.empshow',compact('Compinfo'));
    }
public function empedit($id){
        $Compinfoes=Compinfo::findOrFail($id);
        return view('Design.empedit',compact('Compinfoes'));
    }

    public function empupdate(Requests\PostRequest $request,$id){
        $Compinfoes=Compinfo::findOrFail($id);
        $Compinfoes->update($request->all());

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
        $show = 'show/' . $Compinfoes->id ;
  return redirect ($show);
    }

public function estore(Requests\EuserRequest $request){

      
      // $user->profile->save($request);
     //   dd($request);
       
        $Eusers = Euser :: Create($request->all());
      //  dd($Eusers);

        $Eusers->save();


      $emprofile = 'emprofile/' . $Eusers->id ;

//return "$emprofile";

  return redirect ($emprofile);

    }


    public function store(Requests\CompinfoRequest $request){


//dd($request);

     //  $user = Euser::Find($id);
      
      // $user->profile->save($request);

        $pinfoes = Pinfo :: Create($request->all());
        $pinfoes->save();
        $Compinfoes = Compinfo :: Create($request->all());
        $Compinfoes->save();

  //        dd($Compinfoes);
//        $image = $Compinfoes->company_logo;


        if (isset($request -> company_logo)) 
        {
          # code...
        

        $imageName = $Compinfoes->id . '_compinfo.' .
        $request->file('company_logo')->getClientOriginalExtension();
        $imageCompletePath = '/company_logo/'. $imageName ;
        $request->file('company_logo')->move(
        base_path() . '/public/company_logo/', $imageName);
        $Compinfoes->update(array('company_logo' => $imageCompletePath));

}





$show = 'show/' . $Compinfoes->id ;
  return redirect ($show);
  
    }

    public function index2()
    {
      $Pinfos = DB::table('pinfos')->take(3)->orderBy('exp','desc')->get();

      $Compinfo = Auth::user();

      return view('Design.index2',compact('Pinfos','Compinfo'));
    }

  public function emplogin()
  {
    return view('Design.emplogin');
  }


}
