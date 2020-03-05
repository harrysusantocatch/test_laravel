<?php
namespace App\Http\APIHelper;

use GuzzleHttp\Client;

class BookAPI {

    public static function getBooks(){
        $client = new Client();
        $request = $client->get("https://www.googleapis.com/books/v1/volumes?q=php");
        $response = $request->getBody();
        return $response;
    }
}
