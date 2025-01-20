# Google Places API Laravel Package 

A Laravel package for interacting with the Google Places API. This package allows you to search for cities, states, nearby shops, restaurants, and other places based on user input or geographic coordinates.

## Features

- **Search Places**: Autocomplete feature to search cities, states, and places based on a query.
- **Nearby Places**: Find nearby shops, restaurants, and more based on latitude, longitude, and a radius.

## Installation

### 1. Install the Package

You can install this package via Composer by running the following command in your Laravel project:
```
composer require avcodewizard/google-place-api
```
### 2. Set API Key

Add your Google Places API Key to your .env file:

```env
GOOGLE_PLACES_API_KEY=your_google_places_api_key
```

## Usage
# Searching for a Place

You can use the GooglePlacesApiService to search for cities, states, or other places via query.

```php
use Avcodewizard\GooglePlaceApi\GooglePlacesApi;

class PlaceController extends Controller
{

    public function searchPlace(Request $request,GooglePlacesApi $googlePlaces)
    {
        $query = $request->input('query');
        $googlePlaces = new GooglePlacesApi();
        $results = $googlePlaces->searchPlace($query);

        return response()->json($results);
    }
}
```

### Finding Place Details

You can find place details like full address, opening_hours, geometry(lat,lng), photos, rating, reviews etc., using placeId.

```php
public function placeDetails($placeId)
{
    $placeApi = new GooglePlacesApi();
    $results = $placeApi->getPlaceDetails($placeId);

    return response()->json($results);
}
```

### Finding Nearby Places

You can find nearby places like restaurants, shops, etc., using geographic coordinates (latitude and longitude) along with a search radius.

```php
public function nearbyPlaces(Request $request)
{
    $latitude = $request->input('latitude');
    $longitude = $request->input('longitude');
    $radius = $request->input('radius');
    $type = $request->input('type'); // Optional: e.g., 'restaurant', 'store'

    $results = $this->googlePlaces->findNearbyPlaces($latitude, $longitude, $radius, $type);

    return response()->json($results);
}
```

## Requirements
* PHP 7.3 or higher
* Laravel 8.x or higher
* Google Place API key

## Contribution
Feel free to report issues or make Pull Requests.
If you find this document can be improved in any way, please feel free to open an issue for it.

## License
[MIT](http://opensource.org/licenses/MIT)
