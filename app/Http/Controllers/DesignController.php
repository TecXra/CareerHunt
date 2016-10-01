<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
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
use App\Http\Controllers\Controller;

class DesignController extends Controller
{
  

	public function destroy($id)
{
    $Posts = Post::findOrFail($id);
    $Posts->delete();

\Session::flash('flash_message', 'Article successfully deleted!');
    return redirect('jobshow');
}


}













