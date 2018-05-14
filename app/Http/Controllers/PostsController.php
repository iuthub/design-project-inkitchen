<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
    {
        $this->middleware('auth', ['except'=>['index', 'display']]);
    }


    public function index()
    {
        $posts = Post::orderBY('title','desc')->paginate('6');
        return view('index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_post');
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
            'title'=>'required',
            'post_body' => 'required',
            'categorie' => 'required',
            'cover_image' => 'image|max:1999'
        ]);

        if($request->hasFile('cover_image'))
        {
            $fileName_With_Ext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileName_With_Ext, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileName_To_Store= $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileName_To_Store);
        }
        else{
            $fileName_To_Store='noimage.jpg';
        }
        // Creating a new post so as to store in a DB

        $post = new Post;
        $post->title = $request->input('title');
        $post->post_body = $request->input('post_body');
        $post->categorie = $request->input('categorie');
        $post->user_id = auth()->user()->id;
        $post->cover_image = $fileName_To_Store;
        $post->save();

        return redirect('/posts')->with('sucess', 'Post sucessfully created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('display')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        //We check for the needed user
        if(auth()->user()->id !== $post->user_id){
            return redirect('posts')->with('error', 'This post does not belong to you');
        }

        return view('edit_post')->with('post',$post);
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
            'title'=>'required',
            'post_body' => 'required',
            'categorie' => 'required'
        ]);

        if($request->hasFile('cover_image'))
        {
            $fileName_With_Ext = $request->file('cover_image')->getClientOriginalName();
            $filename = pathinfo($fileName_With_Ext, PATHINFO_FILENAME);

            $extension = $request->file('cover_image')->getClientOriginalExtension();
            $fileName_To_Store= $filename.'_'.time().'.'.$extension;

            $path = $request->file('cover_image')->storeAs('public/cover_images',$fileName_To_Store);
        }
        
        // Updating a post in a DB

        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->post_body = $request->input('post_body');
        $post->categorie = $request->input('categorie');
        if($request->hasFile('cover_image')){
            $post->cover_image = $fileName_To_Store;
        }
        $post->save();

        return redirect('/posts')->with('sucess', 'Post updated sucessfully');
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
            if(auth()->user()->id !== $post->user_id){
            return redirect('posts')->with('error', 'This post does not belong to you');
        }
        if($post->cover_image != 'noimage.jpg')
        {
            Storage::delete('public/cover_images/'.$post->cover_image);
        }
        $post->delete();

        return redirect('/posts')->with('sucess', 'Post deleted sucessfully');
    }


    public function breakfast()
    {
        $posts = Post::all();
        return view('categories/breakfast')->with('posts',$posts);
    }
    public function salad()
    {
        $posts = Post::all();
        return view('categories/salad')->with('posts',$posts);
    }
    public function launch()
    {
        $posts = Post::all();
        return view('categories/launch')->with('posts',$posts);
    }
    public function dinner()
    {
        $posts = Post::all();
        return view('categories/dinner')->with('posts',$posts);
    }
    public function desert()
    {
        $posts = Post::all();
        return view('categories/desert')->with('posts',$posts);
    }
    public function healthy()
    {
        $posts = Post::all();
        return view('categories/healthy')->with('posts',$posts);
    }


}
