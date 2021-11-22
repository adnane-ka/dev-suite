<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use App\Models\Sample;

class SampleTest extends TestCase
{
    /** the data used to send POST requests */ 
    protected $data = [
        'title' => 'Example of sample title',
    ];
    
    /** the must-returned properties from GET/PATCH request*/
    protected $props = [
        'title',
        'id'
    ];

    /** 
     * fake a sample's id 
     * @return id (int)
     * */
    public static function fakeId()
    {
        return Sample::factory()->create()->id;
    }

    /** @test */
    public function samples_can_be_read()
    {        
        self::fakeId();

        $response = $this->json('GET', "{$this->api}/samples")
        ->assertOk()
        ->assertJsonStructure([$this->props]);
    }

    /** @test */
    public function a_sample_can_be_created()
    {
        $this->json('POST' ,"{$this->api}/samples" , $this->data)
        ->assertCreated()
        ->assertJsonStructure($this->props);

        $this->assertCount(1, Sample::all());
    }

    /** @test */
    public function a_sample_can_be_read()
    {
        $this->json('GET' ,"{$this->api}/samples/".self::fakeId())
        ->assertOk()
        ->assertJsonStructure($this->props); 
    }

    /** @test */
    public function a_sample_can_be_updated()
    {
        $this->json('PATCH', "{$this->api}/samples/".self::fakeId() 
        ,array_merge($this->data ,[
            'title' => 'changed title', 
        ]))
        ->assertOk();
    }

    /** @test */
    public function a_sample_can_be_deleted()
    {
        $this->json('DELETE' ,"{$this->api}/samples/".self::fakeId())
        ->assertOk();

        $this->assertCount(0, Sample::all());
    }

    /** @test */
    public function a_sample_title_is_required()
    {
        $this->json('PATCH' ,"{$this->api}/samples/".self::fakeId() 
        ,array_merge($this->data ,[
            'title' => '', 
        ]))
        ->assertJsonValidationErrors(['title'])
        ->assertSessionHasNoErrors()
        ->assertStatus(422); 
    }

}
