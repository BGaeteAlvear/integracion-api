<?php

namespace App\Api;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class GuzzleHttpRequest{

    protected $client;

    public  function __construct(Client $client){

        $this->client = $client;
    }

    protected function post($url, $data){



        try {
            $response = $this->client->request('POST',$url,$data);
            $response = $response->getStatusCode();
            echo '<pre>';
            print_r($response);
        } catch (RequestException $e) {
            $response = $e->getResponse()->getStatusCode();
            echo '<pre>';
            return $response;
        }
    }

    protected function get($url){

        try {
            $response = $this->client->request('GET',$url);
            echo '<pre>';
            $response = $response->getBody()->getContents();
            echo '<pre>';
            return $response;
        } catch (RequestException $e) {
            echo '<pre>';
            $response = $e->getResponse()->getBody(true);
            echo '<pre>';
            return $response;
        }

    }


}