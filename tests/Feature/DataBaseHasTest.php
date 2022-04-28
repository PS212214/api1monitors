<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataBaseHasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_DataBase_Has()
    {
        $data = [ "name"=>"test1", "description"=>"jshbcksjhdcbjsdhvc", "price"=>"4", "format"=>"23 inch", "brand_id"=>"1"];
        $response = $this->json('POST', 'api/monitors', $data);
        $this->assertDatabaseHas('monitors',['name'=>'test1']);
        $response->assertStatus(201);
        $response->assertJson([ "name"=>"test1", "description"=>"jshbcksjhdcbjsdhvc", "price"=>"4", "format"=>"23 inch", "brand_id"=>"1"]);
    }
}
