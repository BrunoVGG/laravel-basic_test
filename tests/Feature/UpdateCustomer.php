<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Model\Customer;

class UpdateCustomer extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $id = Customer::first()->id;

        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('PUT', '/customer/update/'.$id, [               
        'name' => 'Bruno',
        'code' => '2222',
        'nif' => '12233435',
        'email' => 'teste@gmail.com',
        'phone' => '221443',
        'obs' => 'Teste Obs',]);

        $response->assertStatus(200);
    }
}
