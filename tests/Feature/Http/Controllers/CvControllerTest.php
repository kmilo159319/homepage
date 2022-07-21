<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use App\Models\Cv;

class CvControllerTest extends TestCase
{

    use WithFaker, RefreshDatabase;

    public function test_show()
    {
        $user = User::Factory()->create();

        $this
          ->actingAs($user)
          ->get(route('user.show',auth()->user()->id))
          ->assertStatus(200);//show
    }


    public function test_show_policy()
    {

        $user = User::Factory()->create();

        $this
         ->get(route('user.show',$user->id))
         ->assertRedirect('homepage');
    }


    public function test_store()
    {
        $user = User::Factory()->create();
        $data = [
            'description'=> $this->faker->text(20),
            'pdfurl' => $this->faker->url(),
            'user_id' => $user->id,
        ];

        $this
          ->actingAs($user)
          ->post("curriculum",$data)
          ->assertRedirect(route('curriculum.show', $user->id));
        $this
          ->assertDatabaseHas('cvs', $data);

    }


    public function test_store_policy()
    {

        $user = User::Factory()->create();
        $data = [
            'description'=> $this->faker->text(20),
            'pdfurl' => $this->faker->url(),
            'user_id' => $user->id,
        ];

        $this
          ->post("curriculum",$data)
          ->assertRedirect(route('homepage'));

    }

}
