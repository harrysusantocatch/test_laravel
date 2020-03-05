<?php
namespace App\Http\APIHelper;

use GuzzleHttp\Client;

class StudentAPI {

    public static function getAllStudent(){
        $client = new Client();
        $request = $client->get("http://127.0.0.1:8001/students");
        $response = $request->getBody();
        return json_decode($response);
    }

    public static function getStudentByID($id){
        $client = new Client();
        $request = $client->get("http://127.0.0.1:8001/students/" . $id);
        $response = $request->getBody();
        return json_decode($response);
    }

    public static function saveStudent($body){
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = $body;
        $client = new Client();
        $response = $client->post("http://127.0.0.1:8001/students/create", $params);
        $response = $response->getBody();
        return json_decode($response);
    }

    public static function updateStudent($id, $body){
        $params['headers'] = ['Content-Type' => 'application/x-www-form-urlencoded'];
        $params['form_params'] = $body;
        $client = new Client();
        $response = $client->put("http://127.0.0.1:8001/students/" . $id, $params);
        $response = $response->getBody();
        return json_decode($response);
    }

    public static function deleteStudent($id){
        $client = new Client();
        $response = $client->delete("http://127.0.0.1:8001/students/" . $id);
        $response = $response->getBody();
        return json_decode($response);
    }

}
