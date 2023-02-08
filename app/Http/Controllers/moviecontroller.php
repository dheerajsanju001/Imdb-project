<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class moviecontroller extends Controller
{
//****************************************HomePage FUNCTION  IS USED TO SHOW HOME PAGE MOVIES **************** */
    public function HomePage()
    {
        $response =Http::withHeaders([
            'X-RapidAPI-Key' => '7f06bc67c9mshb15b8056c681064p1e6ecejsn8ee17924fc4a',
            'X-RapidAPI-Host' => 'online-movie-database.p.rapidapi.com',
            ])
            ->get('https://imdb8.p.rapidapi.com/auto-complete', ['q' =>'dil']);
            $data = json_decode($response, true);
       return view('showing',compact('data'));
    }


    //****************************************SEARCH FUNCTION  IS USED TO SEARCH A PARTICULAR MOVIE **************** */
    public function search(Request $request)
{

    $user=$request->get('key');
    $response =Http::withHeaders([
        'X-RapidAPI-Key' => '7f06bc67c9mshb15b8056c681064p1e6ecejsn8ee17924fc4a',
        'X-RapidAPI-Host' => 'online-movie-database.p.rapidapi.com',
        ])
        ->get('https://imdb8.p.rapidapi.com/auto-complete', ['q' => $user]);

        $data = json_decode($response, true);
   return view('search_page',compact('data'));
}
//*****************************ShowFullDescription FUNCTION IS USED TO SHOW FULL INFORAMATION OF MOVIE */
public function ShowFullDescription($id){
    $response =Http::withHeaders([
        'X-RapidAPI-Key' => '7f06bc67c9mshb15b8056c681064p1e6ecejsn8ee17924fc4a',
        'X-RapidAPI-Host' => 'movie-details1.p.rapidapi.com',
        ])
        ->get("https://movie-details1.p.rapidapi.com/imdb_api/movie?id=$id");

        $data = json_decode($response, true);
   return view('display',compact('data'));
}
}
