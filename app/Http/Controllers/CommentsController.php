<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return back()->withInput();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ]);

        // $comment = new Comment;
        // $comment->title = $request->input('title');
        // $comment->email = $request->input('email');
        // $comment->message = $request->input('message');
        // $comment->save();

        $input = $request->all();
        Comment::create($input);

        return redirect()->back()->withInput();
    }
}
