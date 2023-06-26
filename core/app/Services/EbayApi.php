<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class EbayApiClient
{
    protected $httpClient;
    protected $baseUrl;
    // Add any other necessary properties or constructor arguments

    public function __construct()
    {
        $this->httpClient = new Client();
        $this->baseUrl = 'https://api.sandbox.ebay.com'; // Use the sandbox endpoint, change to production when ready
        // Add any other initialization logic
    }

    // Add methods to handle specific eBay API calls


    public function createItem($title, $description, $startPrice)
{
    $endpoint = '/sell/inventory/v1/inventory_item';
    $url = $this->baseUrl . $endpoint;

    try {
        $response = $this->httpClient->post($url, [
            'headers' => [
                'Authorization' => 'Bearer YOUR_ACCESS_TOKEN',
                'Content-Type' => 'application/json',
            ],
            'json' => [
                'title' => $title,
                'description' => $description,
                'startPrice' => $startPrice,
                // Add more item details as needed
            ],
        ]);

        $statusCode = $response->getStatusCode();
        $responseData = json_decode($response->getBody(), true);

        // Process the response and handle any errors or retrieve the newly created item ID

        return $responseData;
    } catch (RequestException $e) {
        // Handle any exceptions or errors that occurred during the request
        $errorMessage = $e->getMessage();
        // Handle the error message appropriately
    }
}

}
