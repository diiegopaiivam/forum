<?php

namespace Tests\Feature;

use App\User;
use App\Models\Thread;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ThreadsTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testActionOnController()
    {

        $user = factory(\App\User::class)->create();
        $this->seed('ThreadsTableSeeder');

        $thread = Thread::orderBy('updated_at', 'desc')->paginate();

        $response = $this
            ->actingAs($user)
            ->json('GET', '/threads');
        $response->assertStatus(200)
                    ->assertJsonFragment([$thread->toArray()['data']]);
    }
}
