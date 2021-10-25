<?php

namespace App\Http\Controllers;
use Gate;
use Illuminate\Http\Request;
use App\Article;
class ArticleController extends Controller
{
    //Check auth
    public function __construct()
    {
        $this->middleware('auth')->except(['index','detail']);
    }


    public function index(){
        $data=Article::orderBy('id','desc')->paginate(5);
        return view('articles.index',[
            'articles' => $data
        ]
    );
    }
    public function detail($id){
        $data =Article::find($id);
        return view('articles.detail',[
            'article' => $data
        ]);
    }

    public function delete($id){
        $article =Article::find($id);
        if(Gate::denies('article-delete',$article)){
            return back()->with('info','Unauthorized to delete');
        }

        $article->delete();
        return redirect('/articles')->with('info','An article delete');
    }

    public function add() {
        $data = [
            [ "id" => 1, "name" => "News" ],
            [ "id" => 2, "name" => "Tech" ],
        ];
   return view('articles.add', [
            'categories' => $data
        ]);      
   }

   public function create()
    {
    $validator = validator(request()->all(), [
            'title' => 'required',
            'body' => 'required',
            'category_id' => 'required',
    
    ]);
    if($validator->fails()) {
    return back()->withErrors($validator);
    }

    $article = new Article;
    $article->title = request()->title; 
    $article->body = request()->body;
    $article->category_id = request()->category_id; 
    $article->user_id = auth()->user()->id;
    $article->save();
    return redirect('/articles')->with('info','Article added'); 
    }
        
}
