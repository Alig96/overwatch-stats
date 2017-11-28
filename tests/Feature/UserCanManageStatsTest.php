<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserCanManageStatsTest extends TestCase
{
    use RefreshDatabase;

    private $blizzardBattleTag = "Alig96-2455";
    private $userRegion = "eu";
    private $profileUrl;
    private $updateUrl;

    public function setUp()
    {
        parent::setUp();

        $this->profileUrl = "/user/" . $this->userRegion . "/" . $this->blizzardBattleTag;
        $this->updateUrl = $this->profileUrl . "/update";
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_use_the_home_page_to_search_their_stats()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_update_their_stats()
    {
        //Make a get request to the update uri
        $response = $this->get($this->updateUrl);
        //Assert that we get redirected to their profile
        $response->assertRedirect($this->profileUrl);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_view_their_stats_without_updating_first()
    {
        $response = $this->get($this->profileUrl);
        $response->assertSee("Profile not found");
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    /** @test */
    public function a_user_can_view_their_stats_by_updating_first()
    {
        //To avoid getting rate limited, sleep the test for 3 seconds
        sleep(3);
        //Make a get request to the update uri
        $response = $this->get($this->updateUrl);
        //Assert that we get redirected to their profile
        $response->assertRedirect($this->profileUrl);
        //Assert that we see their username
        $response->assertSee($this->blizzardBattleTag);
    }
}
