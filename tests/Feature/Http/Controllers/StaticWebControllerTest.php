<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaticWebControllerTest extends TestCase
{
    public function test_static_webpages()
    {
        $this->get('index')->assertStatus(200);
        $this->get('laravel')->assertStatus(200);
        $this->get('symfony')->assertStatus(200);
        $this->get('phpreact')->assertStatus(200);
        $this->get('swoole')->assertStatus(200);
        $this->get('homepage')->assertStatus(200);
    }
}
