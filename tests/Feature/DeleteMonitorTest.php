<?php

namespace Tests\Feature;

use App\Models\Monitor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DeleteMonitorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_delete_created_monitor()
    {
        $monitor = Monitor::create(array("name"=>"test1", "description"=>"jshbcksjhdcbjsdhvc" , "price"=>"4", "format"=>'23 inch', "brand_id"=>"1")) ;
        $response = $this->delete('api/monitors/' .$monitor->id);
        $response->assertStatus(200);
    }
}
