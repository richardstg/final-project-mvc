<?php

namespace App\Http\Controllers\Restricted;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use App\Models\User;

// use Illuminate\Http\Response;
// use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * Test cases for PostsController
 */
class PostsControllerTest extends TestCase
{
    /**
     * Test index
     */
    public function testIndex()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user); // Authenticated

        $response = $this->get('/admin');
        $response->assertSuccessful();
        $response->assertViewIs('restricted.index');
        $response->assertViewHas('posts');
    }

    /**
     * Test index
     */
    public function testStore()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user); // Authenticated

        $response = $this->post('/admin', [
            'title' => 'mock title',
            'content' => 'just some text',
            'image' => UploadedFile::fake()->image('file.png')->size(1)
        ]);
        $response->assertRedirect("/admin");

        // // Assert the file was stored...
        // Storage::disk('blogimages')->assertExists('file.png');

        // // Assert a file does not exist...
        // Storage::disk('blogimages')->assertMissing('another_file.png');
        // $response->assertSuccessful();
    }
}
