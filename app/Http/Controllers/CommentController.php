<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Post;
use App\Notifications\RepliedToThread;
use Illuminate\Http\Request;

class CommentController extends Controller
{


    public function addPostComment(Request $request, Post $post)
    {
        $this->validate($request,[
            'body'=>'required'
        ]);

        $comment=new Comment();
        $comment->body=$request->input('body');
        $comment->user_id=auth()->user()->id;
        $post->comments()->save($comment);

        return back()->withMessage('komentarz dodany');
    }
    
    
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();

        return back()->withMessage('usunieto');
    }
}
