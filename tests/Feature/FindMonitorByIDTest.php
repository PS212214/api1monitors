<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FindMonitorByIDTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_monitor_op_id()
    {
        $response = $this->get('/api/monitors/9');

        $response->assertStatus(200);
        $response->assertJson(['id'=>'9', 'name'=>'ASUS ROG PG279QM', 'description'=>'Gaming-monitor 27 inch WQHD Fast IPS 240Hz 1ms 2560x1440 350cd/m² Display Port, 3x HDMI en 2x USB 3.0 Display HDR 400 Reflex Nvidia Latency Analyzer', 'price'=>'895', 'format'=>'27 inch', 'brand_id'=>'1']);
    }
}
