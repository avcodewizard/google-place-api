<?php

namespace Avcodewizard\GooglePlaceApi;

use GuzzleHttp\Client;

class GooglePlacesApi
{
    protected $apiKey;
    protected $httpClient;

    public function __construct(string $apiKey)
    {
        $this->apiKey = $apiKey;
        $this->httpClient = new Client([
            'base_uri' => 'https://maps.googleapis.com/maps/api/place/',
        ]);
    }

    public function searchPlace(string $query)
    {
        $response = $this->httpClient->get('autocomplete/json', [
            'query' => [
                'input' => $query,
                'key' => $this->apiKey
            ]
        ]);

        return json_decode($response->getBody(), true);
    }

    public function findNearbyPlaces(float $latitude, float $longitude, int $radius, string $type = '')
    {
        $response = $this->httpClient->get('nearbysearch/json', [
            'query' => [
                'location' => "{$latitude},{$longitude}",
                'radius' => $radius,
                'type' => $type,
                'key' => $this->apiKey
            ]
        ]);

        return json_decode($response->getBody(), true);
    }
}
