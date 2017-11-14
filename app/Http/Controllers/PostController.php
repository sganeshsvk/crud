<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Purifier;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetch all posts data
		$posts = Post::orderBy('created','desc')->paginate(5);
		return view('posts.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
		return view('posts.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
		$this->validate($request,[
			'title'=>'required',
			'content'=>'required'
		]);
		//echo '<pre>';print_r($request->all());exit;
		$postData = $request->all();
		Post::create($postData);
		Session::flush('success_msg', 'Post added Successfully');
		return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
		$post = Post::find($id);
		// if there is no post, 404
		if (!$post) return view('posts.404');
		
		return view('posts.details',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
		$post = Post::find($id);
		return view('posts.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //
		$this->validate($request,[
			'title'=>'required',
			'content'=>'required'
		]);
		$postData = $request->all();
		Post::find($id)->update($postData);
		Session::flash('success_msg','Post Updated Successfully');
		return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
		Post::find($id)->delete();
		Session::flash("success_msg","Post Deleted Successfully");
		return redirect()->route('posts.index');
    }
}
