<?php

namespace App\Http\Controllers\Open;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
// use App\Models\User;

// use Illuminate\Http\Response;
// use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * Test cases for PostsController
 */
class PagesControllerTest extends TestCase
{
    /**
     * Test index
     */
    public function testIndex()
    {
        $response = $this->get('/');
        $response->assertSuccessful();
        $response->assertViewIs('open.index');
        $response->assertViewHas('posts');
    }

    /**
     * Test blog
     */
    public function testBlog()
    {
        $response = $this->get('/blog');
        $response->assertSuccessful();
        $response->assertViewIs('open.blog');
        $response->assertViewHas('posts');
    }

    /**
     * Test contact
     */
    public function testContact()
    {
        $response = $this->get('/contact');
        $response->assertSuccessful();
        $response->assertViewIs('open.contact');
    }

    /**
     * Test post
     */
    public function testPost()
    {
        $response = $this->get('/blog/san-fransisco');
        $response->assertSuccessful();
        $response->assertViewIs('open.post');
        $response->assertViewHas('post');
    }

     /**
     * Test about
     */
    public function testAbout()
    {
        $response = $this->get('/about');
        $response->assertSuccessful();
        $response->assertViewIs('open.about');
    }
}
