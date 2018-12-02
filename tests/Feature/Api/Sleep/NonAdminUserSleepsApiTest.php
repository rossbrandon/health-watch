<?php

namespace Tests\Feature\Api\Sleep;

use Tests\Feature\Api\NonAdminApiTestCase;

class NonAdminUserSleepsApiTest extends NonAdminApiTestCase
{
     /**
     * Test REST API users show
     *
     * @return void
     */
    public function testShow()
    {
        $response = $this->get('/api/sleeps/' . $this->sleepData->id);
        $response->assertStatus(403)->assertJsonStructure([
            'success',
            'message'
        ]);
    }
}
