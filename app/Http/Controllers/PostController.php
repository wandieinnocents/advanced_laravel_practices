<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    //    dd("a");

        if ($request->has('trashed')) {
            // get trashed posts
            $posts = Post::onlyTrashed()->get();
            
        } else {
            // get all posts
            $posts = Post::get();
        }

        return view('posts.index', compact('posts'));
    }

    /**
     * soft delete post
     *
     * @return void
     */
    public function destroy($id)
    {
        // dd("Force delete");
        Post::find($id)->delete();

        return redirect()->back();
    }

    // force delete/destroy

    public function forceDelete($id)
        {
            // dd("Force delete");
        $post = Post::onlyTrashed()->find($id);
        $post->forceDelete();

            return redirect()->back();
        }

    /**
     * restore specific post
     *
     * @return void
     */
    public function restore($id)
    {
        Post::withTrashed()->find($id)->restore();

        return redirect()->back();
    }

    /**
     * restore all post
     *
     * @return response()
     */
    public function restoreAll()
    {
        Post::onlyTrashed()->restore();

        return redirect()->back();
    }
}
