<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StoreCustomerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->withHeaders([
            'X-Header' => 'Value',
        ])->json('POST', '/customer/store', [               
        'name' => 'Bruno',
        'code' => '2222',
        'nif' => '12233435',
        'email' => 'teste@gmail.com',
        'phone' => '221443',
        'obs' => 'Teste Obs',]);

        $response->assertStatus(200);

    }
}
