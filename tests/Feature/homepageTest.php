<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class homepageTest extends TestCase
{
    public function testHomepage(){
        $this->get('homepage')
        // ->assertSeeText('asklaslkaslka')
        ->assertSeeText('hello andre');
    }
}
