<?php

namespace Tests\Feature\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogViewControllerTest extends TestCase
{
    /**
    * @test index 
    */
    function ブログトップページを開ける()
    {
        $response = $this->get('/');

        $response->assertOk();
    }
}
