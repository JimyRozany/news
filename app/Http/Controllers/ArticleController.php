<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Support\ValidatedData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Article;
use App\Models\User;


class ArticleController extends Controller
{

    // View the page that contains all articles
    public function index(){ // show all articles
       $article = new Article;
       $users = new User;
       $all_articles = $article->all();

       return view('main' ,['articles' => $all_articles ,'users' => $users]);
    }
    // get view form add article 
    public function articleForm(){
        return view('addArticle');
    }
    // store article in database 
    public function addArticle(Request $request){
       //validate request
        $request->validate([
            'title_article' => 'required',
            'body_article' => 'required'    
        ]
       );
       //objects
       /*
        $user = Auth::user();
        $user->id;
        or 
        Auth::id();
        for get user id in session connected  user
        */
       $article = new Article;
       //store in table fields from request
       $article->title_article = $request->title_article ; 
       $article->body_article = $request->body_article ; 
        // $article->user_id = $user->id ;  
       $article->user_id = Auth::id() ; 
       $article->save();
        return back()->with('success' ,'published your article :)');
    }
    // search for an article 
    public function search(Request $request){
        $request->validate([
            'keySearch' => 'required'
        ]);

        $keySearch = $request->keySearch;

        $resultSearch = Article::where('title_article' ,'like','%' .$keySearch .'%')
                                ->orWhere('body_article' ,'like','%' .$keySearch .'%')->get();
        
        $users = new User;
        if($resultSearch->count()){
            return view('main',['articles' => $resultSearch ,'users' => $users]);
        }else{
            return redirect('main')->with(['status' => 'not fount :(']);
        }
    }

    // ---------- Likes ---------------
    public function addLike(){
        
    }

}
