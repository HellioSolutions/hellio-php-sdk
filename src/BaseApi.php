<?php
namespace Helliosolutions\HellioPhpSdk;

use GuzzleHttp\Client;

class BaseApi
{
    protected $clientId;
    protected $applicationSecret;
    protected $baseUrl;
    protected $client;

    public function __construct(string $clientId, string $applicationSecret, string $baseUrl = 'https://api.helliomessaging.com/v2/')
    {
        $this->clientId = $clientId;
        $this->applicationSecret = $applicationSecret;
        $this->baseUrl = $baseUrl;
        $this->client = new Client();
    }

    protected function makeRequest(string $endpoint, array $data)
    {
        date_default_timezone_set('Africa/Accra');
        $currentTime = date('YmdH');
        $hashedAuthKey = sha1($this->clientId . $this->applicationSecret . $currentTime);
        $data['clientId'] = $this->clientId;
        $data['authKey'] = $hashedAuthKey;

        $response = $this->client->post($this->baseUrl . $endpoint, [
            'json' => $data
        ]);

        return json_decode($response->getBody(), true);
    }
}