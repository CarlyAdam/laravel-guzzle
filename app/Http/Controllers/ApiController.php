<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client; 
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;

class ApiController extends Controller
{
    //Get request
   public function Get()
   {
        //your api_url
        $url='http://your_api_url/api/v1/books';
        //Initialize Guzzle Client
        $client = new \GuzzleHttp\Client();
        // Create a GET request
        $request = $client->request('GET',$url);
        // Get the actual response without headers
        $response = $request->getBody()->getContents();
        // Return response as json format
        return response()->json($response);
   }

     //Post request
   public function Post()
   {
        //your api_url
        $url='http://your_api_url/api/v1/books';
        //Initialize Guzzle Client
        $client = new \GuzzleHttp\Client();
        // Create a POST request with body parameters
        $request = $client->request('POST', $url, [
         'form_params' => [
             'name' => 'Harry Potter',
             'description'=> 'Harry Potter and the half blood prince',
         ]
      ]);
        $response = $request->getBody()->getContents();
        print_r($response);
   }

   public function Put()
   {
       //your api_url+id item to update
        $url='http://your_api_url/api/v1/books/1';
        //Initialize Guzzle Client
        $client = new \GuzzleHttp\Client();
        // Create a PUT request with body parameters
        $request = $client->request('PUT', $url, [
         'form_params' => [
             'id' => 3,
             'name' => 'Harry Potter 6',
             'description'=> 'Harry Potter and the half blood prince',
         ]
      ]);
        $response = $request->getBody()->getContents();
        print_r($response);
   }

   public function Delete()
   {
       //your api_url+id item to delete
        $url='http://your_api_url/api/v1/books/1';
       //Initialize Guzzle Client
        $client = new \GuzzleHttp\Client();
        // Create a DELETE request with id 
        $request = $client->request('DELETE',$url);
        //$response = $request->send();
        $response = $request->getBody()->getContents();
        print_r($response);
   }
   
}
