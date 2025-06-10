<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class WhatsAppValidationService
{
    protected $client;
    protected $apiKey;
    protected $host;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = 'your_actual_api_key_here'; // Directly hardcoded
        $this->host = 'whatsapp-numbervalidator3.p.rapidapi.com'; // Directly hardcoded
    }

    public function validateNumber($phoneNumber)
    {
        try {
            $response = $this->client->request('GET', 'https://whatsapp-numbervalidator3.p.rapidapi.com/check/', [
                'query' => ['number' => $phoneNumber],
                'headers' => [
                    'X-RapidAPI-Key' => $this->apiKey,
                    'X-RapidAPI-Host' => $this->host,
                ],
            ]);

            return json_decode($response->getBody(), true);
        } catch (GuzzleException $e) {
            return [
                'valid' => false,
                'message' => 'Error validating number: ' . $e->getMessage()
            ];
        }
    }
}
