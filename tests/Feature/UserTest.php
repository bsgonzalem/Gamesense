<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_displays_the_users_list(): void
    {
        $user = User::factory()->create(['name' => 'Ada Lovelace']);

        $response = $this->get(route('users.index'));

        $response->assertOk();
        $response->assertSee('Ada Lovelace');
        $response->assertSee($user->getEmail());
    }

    public function test_it_can_create_a_user_through_the_form(): void
    {
        $payload = [
            'name' => 'Ada Lovelace',
            'email' => 'ada@example.com',
            'password' => 'secret123',
            'address' => 'Calle 1 #2-3',
        ];

        $response = $this->post(route('users.store'), $payload);

        $response->assertRedirect(route('users.index'));

        $this->assertDatabaseHas('users', [
            'email' => 'ada@example.com',
            'address' => 'Calle 1 #2-3',
        ]);
    }

    public function test_it_can_update_a_user_without_changing_the_password(): void
    {
        $user = User::factory()->create();
        $originalPassword = $user->getPassword();

        $response = $this->put(route('users.update', $user), [
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'address' => 'Nueva dirección 456',
        ]);

        $response->assertRedirect(route('users.index'));

        $user->refresh();
        $this->assertSame('Nueva dirección 456', $user->getAddress());
        $this->assertSame($originalPassword, $user->getPassword());
    }

    public function test_it_can_delete_a_user(): void
    {
        $user = User::factory()->create();

        $response = $this->delete(route('users.destroy', $user));

        $response->assertRedirect(route('users.index'));

        $this->assertDatabaseMissing('users', [
            'id' => $user->getId(),
        ]);
    }

    public function test_model_getters_and_setters_read_and_write_the_underlying_attributes(): void
    {
        $user = new User;
        $user->setName('Grace Hopper');
        $user->setEmail('grace@example.com');
        $user->setPassword('secret123');
        $user->setAddress('Calle 9 #10-11');

        $this->assertSame('Grace Hopper', $user->getName());
        $this->assertSame('grace@example.com', $user->getEmail());
        $this->assertSame('Calle 9 #10-11', $user->getAddress());
    }
}
