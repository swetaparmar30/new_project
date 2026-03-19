<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\SidebarWidget;
use App\Models\CommentSetting;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $blogs = Article::all();
        //return view('frontend.blogs.index', compact('blogs'));
    }

    public function detail($slug){

        $blog_widgets = SidebarWidget::where('sidebar_id', 2)->orderby('sequence')->get();
        $article = Article::where('slug', $slug)->where('status', 1)->firstOrFail();
        $related = Article::where('id', '!=', $article->id)->where('status', 1)->get();
        $recent = Article::latest()->where('id', '!=', $article->id)->where('status', 1)->get();
        $comment_setting = CommentSetting::first();
        $all_comments = Comment::where('blog_id', $article->id)->where('parent_id', '=', null)->where('approved_status', 1)->where('spam_status', 0)->latest()->get();
        return view('frontend.blogs.index', compact('article', 'related', 'recent', 'blog_widgets', 'comment_setting', 'all_comments'));
    }
}
