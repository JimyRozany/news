<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Like;
use App\Models\Article;

class UserController extends Controller
{

    //not working ---------------
      // like function ,$article_id
    //   public function addLike(Request $request ){

    //     $like = new Like;
    //     $auth_id = Auth::id() ;
    //     $field =$like->find($request->user);
    //    dd($field);
    //     if($like->find()){

    //     }
    // }
}
