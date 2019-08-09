<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Post;

class PostsController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'search']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Post::all()
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title' => 'required',
            'overview' => 'required',
            'body' => 'required',
            'barner_image' => 'image|nullable|max:1999'
        ]);

        // fiel upload
        if($request->hasFile('barner_image')) {
            // filename with extension
            $fileNameWithExt = $request->file('barner_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // GET file extension
            $ext = $request->file('barner_image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;
            // upload image
            $path = $request->file('barner_image')->storeAs('public/barner_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $post = new Post;
        $post->title = $request->input('title');
        $post->overview = $request->input('overview');
        $post->body = $request->input('body');
        $post->barner_image = $fileNameToStore;
        $post->save();

        return redirect('/posts')->with('success', 'Post Created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post= Post::find($id);
        return view('posts.blog')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post= Post::find($id);
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'overview' => 'required',
            'body' => 'required'
        ]);

        // fiel upload
        if($request->hasFile('barner_image')) {
            // filename with extension
            $fileNameWithExt = $request->file('barner_image')->getClientOriginalName();
            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // GET file extension
            $ext = $request->file('barner_image')->getClientOriginalExtension();
            // filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$ext;
            // upload image
            $path = $request->file('barner_image')->storeAs('public/barner_images', $fileNameToStore);
        }

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->overview = $request->input('overview');
        $post->body = $request->input('body');
        if($request->hasFile('barner_image')) {
            $post->barner_image = $fileNameToStore;
        }
        $post->save();

        return redirect('/posts/'.$id)->with('success', 'Post Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/posts')->with('success', 'Post Deleted successfully');
    }

    public function search(){
        $q = Input::get ('q');
        $posts = Post::where('title','LIKE','%'.$q.'%')->orWhere('body','LIKE','%'.$q.'%')->paginate(3);
        if(count($posts) > 0)
            return view('posts.results')->with('posts', $posts);
        else return view ('posts.results')->with('success', 'No Details found. Try to search again !');
    }
}
