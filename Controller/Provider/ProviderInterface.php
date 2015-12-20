<?php

namespace Bencsi\GeoBundle\Controller\Provider;

interface ProviderInterface
{
    public function getProvider();

    public function getApiUrl();
}