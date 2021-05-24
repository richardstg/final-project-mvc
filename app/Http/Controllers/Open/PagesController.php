<?php

namespace App\Http\Controllers\Open;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Models\Post;

/**
 * Controller for pages.
 */
class PagesController extends Controller
{
    /**
     * Home page.
     */
    public function index()
    {
        return view('open.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->limit(6)->get());
    }

    /**
     * Posts page.
     */
    public function blog()
    {
        return view('open.blog')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->paginate(6));
    }

    // /**
    //  * Post page.
    //  *
    //  * @param  string  $slug
    //  * @return \Illuminate\Http\Response
    //  */

    /**
     * Post page.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function post($slug)
    {
        return view('open.post')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Post page.
     */
    public function about()
    {
        return view('open.about');
    }

    /**
     * Post page.
     */
    public function contact()
    {
        return view('open.contact');
    }
}
