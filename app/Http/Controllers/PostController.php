<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Carbon\Carbon;
use Auth;
use Gate;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //

        $query = Post::where('user_id', Auth::user()->id);
        if($request->search){
            $query->where('content', 'like', '%'.$request->search.'%');
        }

            //->orderBy('created_at', 'desc')
        $posts = $query->latest()
                    ->paginate(10);

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('posts.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //
        $post = Post::create([
            'content' => $request->content,
            'user_id' => Auth::user()->id,
            ]);

        session()->flash('message', 'post creado');

        return redirect('posts');

        //return Post::create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
        return view('posts.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        //
        $post->update($request->all());
        //$post->content = $request->content;
        //$post->save();

        return $post;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
        if(Gate::denies('delete-post', $post)){
            abort(403);
        }
        $post->delete();
        session()->flash('message', 'post eliminado');
        return redirect('posts');

    }
}
