<?php

namespace Bencsi\GeoBundle\Controller\DataHandler;

class GoogleMapsHandler extends AbstractHandler
{
    private $provider = 'googleMaps';
    private $apiUrl = 'http://maps.google.com/maps/api/geocode/json?sensor=false&address=';

    public function getDataFromProvider()
    {
        if($this->getAddress()){
            $url = $this->getApiUrl().urlencode($this->getAddress());
            $response = file_get_contents($url);
            $result = json_decode($response,TRUE);
            return $result['results'][0];
        }else{
            return false;
        }
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function getApiUrl()
    {
        return $this->apiUrl;
    }

    public function getCoordinates()
    {
        return parent::getProviderResponse()['geometry']['location'];
    }

    public function getLongitude()
    {
        return $this->getCoordinates()['lng'];
    }

    public function getLatitude()
    {
        return $this->getCoordinates()['lat'];
    }

}