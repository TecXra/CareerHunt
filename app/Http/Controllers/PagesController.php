<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
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
class PagesController extends Controller {

	public function welcome()
	{
		return view('pages.welcome');
	}

	public function home1()
	{
		return view('pages.home1');
	}


	public function about()
	{
		return view('pages.about');
	}

	public function contact()
	{
		return view('pages.contact');
	}
    public function search(Request $request)
{
	dd($request);
    // Gets the query string from our form submission 
   // $query = Request::input('search');

    // Returns an array of articles that have the query string located somewhere within 
    // our articles titles. Paginates them so we can break up lots of search results.
    $articles = DB::table('Eusers')->where('username', 'LIKE', '%' . $request . '%')->paginate(10);
        
    // returns a view and passes the view the list of articles and the original query.
    return view('Design.search', compact('articles'));
 }
}
