<?php

namespace App\Http\Controllers\Restricted;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use App\Models\User;

// use Illuminate\Http\Response;
// use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * Test cases for PostsController
 */
class PostsControllerTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * Test index
     */
    public function testIndex()
    {
        // $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $user = User::find(1);
        $this->be($user);

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
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $user = User::find(1);
        $this->be($user);

        $response = $this->call('POST', '/admin', [
            'title' => 'mock title',
            'content' => 'just some text',
            'image' => UploadedFile::fake()->image('file.png')->size(1),
        ]);
        $response->assertRedirect("/admin");

        // // Assert the file was stored...
        // Storage::disk('blogimages')->assertExists('file.png');

        // // Assert a file does not exist...
        // Storage::disk('blogimages')->assertMissing('another_file.png');
    }

    /**
     * Test edit
     */
    public function testEdit()
    {
        // $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $user = User::find(1);
        $this->be($user);

        $response = $this->get('/admin/san-fransisco/edit');
        $response->assertSuccessful();
        $response->assertViewIs('restricted.update');
        $response->assertViewHas('post');
    }

    /**
     * Test update
     */
    public function testUpdate()
    {
        $this->withoutMiddleware();
        $this->withoutExceptionHandling();

        $user = User::find(1);
        $this->be($user);

        // Without file
        $response = $this->call('PUT', '/admin/san-fransisco', [
            'title' => 'mock title',
            'content' => 'just some text',
            // 'image' => UploadedFile::fake()->image('file.png')->size(1)
        ]);
        $response->assertRedirect("/admin");

        // With file
        $response = $this->call('PUT', '/admin/san-fransisco', [
            'title' => 'mock title',
            'content' => 'just some text',
            'image' => UploadedFile::fake()->image('file.png')->size(1)
        ]);
        $response->assertRedirect("/admin");
    }

    /**
     * Test destroy
     */
    public function testDestroy()
    {
       $this->withoutMiddleware();
       $this->withoutExceptionHandling();

       $user = User::find(1);
       $this->be($user);

        $response = $this->delete('/admin/san-fransisco');
        // $response->assertSuccessful();
        $response->assertRedirect("/admin");
    }
}
