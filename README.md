# GeoBundle
A Symfony bundle to get coordinates (longitude and latitude) by address.

Installation
------------

### Step 1: Download the Bundle

Enter this command:

```bash
$ composer require bencsi/geo-bundle
```

### Step 2: Enable the Bundle

Enable the bundle, add the following line to your app/Appkernel.php file:

```php
// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Bencsi\GeoBundle\BencsiGeoBundle(),
        );
    }

    // ...
}
```

That's it! No more steps for installing.

Usage
-----

```php
	$bgm = $this->get('bencsi_geo_gmaps');
    $coordinates = $bgm->serviceHandler('Budapest, Parlament','coordinates');
```
