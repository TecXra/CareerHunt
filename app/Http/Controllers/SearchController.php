<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Euser;
use DB;
use App\Juser;
use App\Seinfo;
use App\User;
use App\Pinfo;
use App\Post;
use App\Awinfo;
use App\Vrinfo;
use App\Cinfo;
use App\Jinfo;
use App\Langinfo;
use App\Compinfo;
use App\Rpinfo;

class SearchController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth',['except' => ['search']]);

        //$this->middleware('log', ['only' => ['fooAction', 'barAction']]);

      //  $this->middleware('subscribed', );
    }
    public function search(Request $request)
{
//dd($request);
 $text = $request->input('search_text');
 $region = $request->input('region_name');
 
	//dd($text);
    // Gets the query string from our form submission 
   // $query = Request::input('search');

    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('pinfos') ->where('pinfos.username', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.email', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.matric', 'LIKE', '%' .$text  . '%')
    ->orWhere('pinfos.intermediate', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.bs_bsc', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.ms_msc', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill1', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill2', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill3', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.about_you', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill2', 'LIKE', '%' . $text . '%')->take(4)->orderBy('exp','desc')->paginate(10);



                                  
                                  // ->orWhere('users.username', 'LIKE', '%' . $text . '%');
                                   
       // dd($articles);
    // returns a view and passes the view the list of articles and the original query.
    return view('Design.search',compact('articles','text','region'));
 }

public function searchauth(Request $requests)
{
 $text = $requests->input('search_text');
 $region = $requests->input('region_name');
 
    //dd($text);
    // Gets the query string from our form submission 
   // $query = Request::input('search');

    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('pinfos') ->where('pinfos.username', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.email', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.matric', 'LIKE', '%' .$text  . '%')
    ->orWhere('pinfos.intermediate', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.bs_bsc', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.ms_msc', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill1', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill2', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill3', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.about_you', 'LIKE', '%' . $text . '%')
    ->orWhere('pinfos.skill2', 'LIKE', '%' . $text . '%')->take(4)->orderBy('exp','desc')->paginate(10);



                                  
                                  // ->orWhere('users.username', 'LIKE', '%' . $text . '%');
                                   
       // dd($articles);
    // returns a view and passes the view the list of articles and the original query.
    return view('Design.searchauth',compact('articles','text','region'));
 }



 public function jsdetail($id)
{

    $Pinfos=Pinfo::find($id);

    return view('Design.jsdetail',compact('Pinfos'));
}
}



