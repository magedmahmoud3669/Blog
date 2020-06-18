<?php

namespace App\Http\Controllers;
use App\User;
use App\Comment;
use App\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class manage extends Controller
{
    //
    public function AddArticle(Request $request){
    	if($request->isMethod('post')){
    		$ar=new Article();
    		$ar->title=$request->input('title');
    		$ar->body=$request->input('body');
    		$ar->user_id=Auth::user()->id;
    		$ar->save();
    		return redirect ('view');
    	}

    	return view('manage.addart');
    }
    public function view(){
    	$articles=Article::All();
    	$ar=Array('articles'=>$articles);
    	return view('manage.view',$ar);
    }
    public function read(Request $request, $id){
        if($request->isMethod('post')){
            $ar=new Comment();
            $ar->body=$request->input('body');
            $ar->article_id=$id;
            $ar->save();

        }
        $article=Article::find($id);
        $ar=array('article'=>$article);
        return view('manage.read',$ar);
        
    }
}
