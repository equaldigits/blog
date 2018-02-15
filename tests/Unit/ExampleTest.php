<?php

namespace Tests\Unit;

use App\Post;
use Tests\TestCase;

use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
       //
       //
       $first = factory(Post::class)->create();

       $second = factory(Post::class)->create([
           'created_at' => \Carbon\Carbon::now()->subMonth()
       ]);

       //
       $posts = Post::archives();
       //
       $this->assertCount(2, $posts);
    }
}
