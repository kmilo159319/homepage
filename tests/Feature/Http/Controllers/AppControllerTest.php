<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\User;


class AppControllerTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    public function test_guest()
    {
           $user = User::Factory()->create();


           $this->get("user/$user->id")->assertRedirect('homepage');//show
           $this->get("user/$user->id/edit")->assertRedirect('homepage');//edit
           $this->put("user/$user->id")->assertRedirect('homepage');//update
    }


    public function test_update()
    {
        $user = User::Factory()->create();
        $data = [
            'name' =>     $this->faker->name,
            'email' =>    $this->faker->email,
            'password' => $this->faker->password,
        ];

        $this
            ->actingAs($user)
            ->put("user/$user->id",$data);
           // ->assertRedirect(route('user.edit', $user));

        $this->assertDatabaseHas('users', [
            'name' => $data['name'],
            'email' => $data['email']
        ]);
    }

    public function test_update_policy()
    {
        $user = User::Factory()->create();

        $data = [
            'name' =>     $user->name,
            'email' =>    $user->email,
            'password' => $user->password
        ];
        $this
            ->put("user/$user->id",$data)
            ->assertRedirect('homepage');//show

    }

    public function test_update_policy_require()
    {
        $user = User::Factory()->create();

        $data = [
            'name' =>     $user->name,
            'email' =>    '',
            'password' => ''
        ];

        $this
            ->actingAs($user)
            ->put("user/$user->id",$data)
            ->assertStatus(302);

    }


    public function test_edit ()
    {
        $user = User::Factory()->create();

        $this
            ->actingAs($user)
            ->get("user/$user->id")
            ->assertStatus(200);
    }



    public function test_edit_policy ()
    {


       $this
        ->get("user")
        ->assertStatus(302);
    }
}
