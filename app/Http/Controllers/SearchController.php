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
    $articles = DB::table('users')->join('pinfos', 'users.id', '=', 'pinfos.pinfoes_id')
                                   ->join('einfos', 'pinfos.id', '=', 'einfos.einfoes_id')
                                   ->join('jinfos', 'pinfos.id', '=', 'jinfos.jinfoes_id')
                                   ->join('rpinfos', 'pinfos.id', '=', 'rpinfos.rpinfoes_id')
                                   ->join('vrinfos', 'pinfos.id', '=', 'vrinfos.vrinfoes_id')
                                   ->join('seinfos', 'pinfos.id', '=', 'seinfos.seinfoes_id')
                                   ->join('awinfos', 'pinfos.id', '=', 'awinfos.awinfoes_id')
                                   ->join('cinfos', 'pinfos.id', '=', 'cinfos.cinfoes_id')
                                   ->join('skinfos', 'pinfos.id', '=', 'skinfos.skinfoes_id')
                                   ->join('lang_infos', 'pinfos.id', '=', 'lang_infos.langinfoes_id')
                                   ->orWhere('users.name', 'LIKE', '%' . $text . '%')
                                   ->orWhere('users.email', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.age', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.phone', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.address', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.country', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.city', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.town', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.martial_status', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.nationality', 'LIKE', '%' . $text . '%')
                                   ->orWhere('pinfos.religion', 'LIKE', '%' . $text . '%')
                                   ->orWhere('einfos.degree_title', 'LIKE', '%' . $text . '%')
                                   ->orWhere('einfos.major_subjects', 'LIKE', '%' . $text . '%')
                                   ->orWhere('einfos.institute', 'LIKE', '%' . $text . '%')
                                   ->orWhere('einfos.per_age', 'LIKE', '%' . $text . '%')
                                   ->orWhere('einfos.e_duration', 'LIKE', '%' . $text . '%')
                                   ->orWhere('jinfos.job_title', 'LIKE', '%' . $text . '%')
                                   ->orWhere('jinfos.job_description', 'LIKE', '%' . $text . '%')
                                   ->orWhere('jinfos.j_duration', 'LIKE', '%' . $text . '%')
                                   ->orWhere('jinfos.comp_name', 'LIKE', '%' . $text . '%')
                                   ->orWhere('rpinfos.rp_title', 'LIKE', '%' . $text . '%')
                                   ->orWhere('rpinfos.rp_description', 'LIKE', '%' . $text . '%')
                                   ->orWhere('rpinfos.rp_year', 'LIKE', '%' . $text . '%')
                                   ->orWhere('rpinfos.p_paper', 'LIKE', '%' . $text . '%')
                                   ->orWhere('vrinfos.org', 'LIKE', '%' . $text . '%')
                                   ->orWhere('vrinfos.post', 'LIKE', '%' . $text . '%')
                                   ->orWhere('seinfos.s_topic', 'LIKE', '%' . $text . '%')
                                   ->orWhere('seinfos.s_institute', 'LIKE', '%' . $text . '%')
                                   ->orWhere('awinfos.a_name', 'LIKE', '%' . $text . '%')
                                   ->orWhere('awinfos.a_year', 'LIKE', '%' . $text . '%')
                                   ->orWhere('awinfos.a_institute', 'LIKE', '%' . $text . '%')
                                   ->orWhere('cinfos.c_name', 'LIKE', '%' . $text . '%')
                                   ->orWhere('cinfos.c_year', 'LIKE', '%' . $text . '%')
                                   ->orWhere('skinfos.name', 'LIKE', '%' . $text . '%')
                                   ->orWhere('lang_infos.name', 'LIKE', '%' . $text . '%')->paginate(10);
                                  // ->orWhere('users.username', 'LIKE', '%' . $text . '%')->paginate(10);
                                   
       // dd($articles);
    // returns a view and passes the view the list of articles and the original query.
    return view('Design.search',compact('articles','text','region'));
 }
}
