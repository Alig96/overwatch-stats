<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\BlizzardUser;

use GuzzleHttp\Client;

use Carbon\Carbon;

use Redirect;

class UserController extends Controller
{
    protected $httpClient;

    /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->httpClient = new Client();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Maybe show a directory of all users we have in the database.
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($region, $blizzardUser)
    {
        //Find the user with the region and battle tag
        $user = BlizzardUser::where([
            ['region', '=', $region],
            ['battletag', '=', $blizzardUser]
        ])->first();

        if($user == null){
            //If we don't have the user then lets inform the user to update
            return "Profile not found, try updating.";
        }

        //Return a view with the Blizzard User Data
        return $user;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $region, $blizzardUser)
    {
        //Find the user with the region and battle tag
        $user = BlizzardUser::firstOrNew([
            'region' => $region,
            'battletag' => $blizzardUser
        ]);

        //Check the date of when it was last updated
        if($user->updated_at) {
            if ($user->updated_at->addMinute() > Carbon::now()) {
                return ("please wait 1 minute");
            }
        }

        //Query the Overwatch API using the guzzle client
        $response = $this->httpClient->get('https://owapi.net/api/v3/u/' . $blizzardUser . '/blob');

        //Decode the response from JSON into a PHP array
        $overwatchMassData = json_decode($response->getBody(), true);

        //Get the data of the player from the region
        $overwatchRegionData = $overwatchMassData[$region];

        //Update the database with the user data.
        $user->quickplay = json_encode($overwatchRegionData['stats']['quickplay']);
        $user->competitive = json_encode($overwatchRegionData['stats']['competitive']);

        //Save the user changes
        $user->updated_at = Carbon::now();
        $user->save();

        //Redirect to the show method.
        return Redirect::to(route('user.show', [$region, $blizzardUser]));
    }
}
