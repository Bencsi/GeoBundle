<?php

namespace Bencsi\GeoBundle\Controller\DataHandler;

use Bencsi\GeoBundle\Controller\Provider\ProviderInterface;

abstract class AbstractHandler implements ProviderInterface
{
    private $address;
    private $providerResponse;

    public function serviceHandler($address,$requestedData){
        if(is_string($address) && is_string($requestedData)){
            $this->address = $address;
            $this->providerResponse = $this->getDataFromProvider();
            switch($requestedData){
                case 'coordinates':
                    return $this->getCoordinates();
                case 'latitude':
                    return $this->getLatitude();
                case 'longitude':
                    return $this->getLongitude();
                default:
                    return false;
            }
        }else{
            return false;
        }
    }

    abstract protected function getDataFromProvider();

    protected function getProviderResponse()
    {
        return $this->providerResponse;
    }

    protected function getAddress()
    {
        return $this->address;
    }

    abstract protected function getCoordinates();

    abstract protected function getLongitude();

    abstract protected function getLatitude();

}