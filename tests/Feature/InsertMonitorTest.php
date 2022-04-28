<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InsertMonitorTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_monitor()
    {
        $data = [ "name"=>"test1", "description"=>"jshbcksjhdcbjsdhvc" , "price"=>"4", "format"=>'23 inch', "brand_id"=>"1"];
        $response = $this->json('POST', 'api/monitors', $data);
        $response->assertStatus(201);
        $response->assertJson([ "name"=>"test1", "description"=>"jshbcksjhdcbjsdhvc" , "price"=>"4", "format"=>'23 inch', "brand_id"=>"1"]);
    }
}
