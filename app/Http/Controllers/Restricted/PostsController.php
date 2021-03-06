<?php

namespace App\Http\Controllers\Restricted;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Cviebrock\EloquentSluggable\Services\SlugService;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $search = $request->search;

            return view('restricted.index')
                ->with('posts', Post::where('title', 'like', '%' . $search . '%')->orderBy('updated_at', 'DESC')->paginate(6));
        }
        return view('restricted.index')
            ->with('posts', Post::orderBy('updated_at', 'DESC')->paginate(6));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $image = uniqid() . '-' . $request->title . '.' . $request->image->extension();

        $request->image->move(public_path('blogimages'), $image);


        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
            'image_path' => $image,
            'user_id' => auth()->user()->id
        ]);

        return redirect('/admin')->with('message', 'Your post was created successfully!');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  string  $slug
    //  * @return \Illuminate\Contracts\View\View
    //  */
    // public function show($slug)
    // {
    //     return view('open.post')
    //         ->with('post', Post::where('slug', $slug)->first());
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($slug)
    {
        return view('restricted.update')
            ->with('post', Post::where('slug', $slug)->first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $slug)
    {
        if ($request->image) {
            $request->validate([
                'title' => 'required',
                'content' => 'required',
                'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            ]);

            $image = uniqid() . '-' . $request->title . '.' . $request->image->extension();

            $request->image->move(public_path('blogimages'), $image);

            Post::where('slug', $slug)
                ->update([
                    'title' => $request->input('title'),
                    'content' => $request->input('content'),
                    'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                    'image_path' => $image,
                    'user_id' => auth()->user()->id
                ]);

            return redirect('/admin')
                ->with('message', 'Your post was updated successfully!');
        }

        $request->validate([
            'title' => 'required',
            'content' => 'required',
            // 'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        Post::where('slug', $slug)
            ->update([
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'slug' => SlugService::createSlug(Post::class, 'slug', $request->title),
                // 'image_path' => $image,
                'user_id' => auth()->user()->id
            ]);

        return redirect('/admin')
            ->with('message', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();

        return redirect('/admin')
            ->with('message', 'Your post was deleted successfully!');
    }
}
