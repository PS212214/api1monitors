<?php

namespace Tests\Feature;

use App\Models\Monitor;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DataBaseMissingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_database_missing()
    {
        $monitor = Monitor::create(array("name"=>"missingTest", "description"=>"jshbcksjhdcbjsdhvc" , "price"=>"4", "format"=>'23 inch', "brand_id"=>"1")) ;
        $response = $this->delete('api/monitors/' .$monitor->id);
        $this->assertDatabaseMissing('monitors',['name'=>'missingTest']);
        $response->assertStatus(200);
    }
}
