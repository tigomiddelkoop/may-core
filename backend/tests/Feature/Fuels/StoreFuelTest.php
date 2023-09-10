<?php

namespace Tests\Feature\Fuels;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;

class StoreFuelTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        $this->travelTo(Carbon::parse('2023-01-01T00:00:00'));
    }


    /** @test */
    public function it_should_store_a_fuel(): void
    {

    }

    /** @test */
    public function it_should_error_when_trying_to_give_a_wrong_relation_uuid(): void
    {

    }

    /** @test */
    public function it_should_error_when_trying_to_store_a_record_with_non_existing_relation_id(): void
    {

    }

    /** @test */
    public function it_should_error_when_trying_to_use_the_wrong_data_types(): void
    {

    }
}
