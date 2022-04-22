<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostsRequest;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index()
    {
        return view("dashboard.posts.index",[
            'posts' =>Post::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('dashboard.posts.create',[
            'users'=> User::get(),
            'categories'=> Category::get(),
        ]);
    }

    public function store(PostsRequest $request)
    {
        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'images/posts');
        }else{
            $file_name = "Post Photo";
        }
        $my_post = [
            'title' => $request -> title,
            'description' => $request -> description,
            'keywords' => $request -> keywords,
            'content' => $request -> contentt,
            'schema' => $request -> schema,
            'category_id' => $request -> category_id,
            'writer_id' => $request -> writer_id,
            'telephone' => $request -> telephone,
            'slug' => $request -> slug,
            'photo'=>$file_name,
        ];

        Post::create($my_post,$request->validated());

        return redirect()->route('dashboard.posts.index')->with(['success'=>'Post Added Successfully']) ;
    }

    public function edit(Post $post)
    {
        return view('backend.post.update',[
            'users'=> User::get(),
            'categories'=> Category::get(),

        ],compact('post'));
    }

    public function update(Post $post,PostsRequest $request)
    {
        if(($request -> photo) != Null){
            $file_name = $this -> saveImages($request -> photo,'images/posts');
        }else{
            $file_name = $post -> photo;
        }
        $my_post = [
            'title' => $request -> title,
            'description' => $request -> description,
            'keywords' => $request -> keywords,
            'content' => $request -> contentt,
            'schema' => $request -> schema,
            'category_id' => $request -> category_id,
            'writer_id' => $request -> writer_id,
            'telephone' => $request -> telephone,
            'slug' => $request -> slug,
            'photo'=>$file_name,
        ];

        $post->update($my_post,$request->validated());

        return redirect()->route('dashboard.posts.index')->with(['success'=>'Post Updated Successfully']) ;
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard.posts.index')->with(['success'=>'Post Deleted Successfully']) ;
    }
    protected function saveImages($photo,$folder)
    {
        $file_ex = $photo->getClientOriginalExtension();
        $file_name = time() . '.' . $file_ex;
        $path = $folder;
        $photo->move($path, $file_name);
        return $file_name;
    }

    public function show(Post $post)
    {
        return view("dashboard.posts.show",['posts'=> Post::get()]);
    }
}
