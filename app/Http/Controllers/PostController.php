<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index()
    {
        $posts = Post::orderBy('id','desc')->get();

        return view('posts.index', compact('posts'));

    }

    
    public function create()
    {
        return view('posts.create');
    }

    
    public function store(Request $request)
    {
        $request->validate(
            [
                'title' => ['required'],
                'body' => ['required'],
                'comentario' => ['required'],
            ],
            ['body.required' => ':attribute : esto por cojones se llena ',]
        );

        $post = new Post;

        $post->title = $request->input('title');

        $post->body = $request->input('body');

        $post->comentario = $request->input('comentario');

        $post->save();

        session()->flash('status', 'Post created');

        return to_route('posts.index');

        
    }



    public function show(Post $post)
    {
        return view('posts.show', ['post' => $post]);

           // esto es igual pero codigo puro
    // public function show($post)
    // {
    //     return Post::find($post);
    // }

    }


    public function edit(Post $post)
    {
        return view('posts.edit', ['post' => $post]);
    }


    public function update(Request $request, Post $post)
    {
        // validacion de datos
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'comentario' => 'nullable|string',
        ]);

        // Actualización del post
        $post->update($validated);

        // Redirección después de la actualización
        return redirect()->route('posts.index')->with('status', 'Post actualizado correctamente');
    }
    

    
    public function destroy(string $id)
    {
        //
    }
}
