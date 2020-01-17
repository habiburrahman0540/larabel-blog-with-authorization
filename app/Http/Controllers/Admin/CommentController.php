<?php

namespace App\Http\Controllers\Admin;

use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index(){
        $comments = Comment::latest()->get();
        return view('admin.comment.index',compact('comments'));
    }

    public function destroy($id){
        Comment::findOrFail($id)->delete();
        return redirect()->back()->with('successMsg','Post Deleted successfully.');
    }
}
