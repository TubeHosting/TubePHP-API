# Tube-Hosting API PHP client

## Explanation

This PHP library is a simple api wrapper/client for the [tube-hosting.com api](https://api.tube-hosting.com). <br>
It is based on the provided [documentation](https://doc.api.tube-hosting.com/#/). <br>
The wrapper is built oriented to the so-called "schemas", where the documentation specified endpoints are assigned to, in a specific order. <br> 
In the documentation, we see that the endpoints are ordered in thirteen tags, which are each put into an object.  <br>
Here is how they are ordered: 

---

| Object: | Service                                                                     | ServiceGroupData                                                                        | IPv4                                                              | IPv4Bundle                                                                      | DedicatedInstanceRequest                                                                    | VPS                                                                 | User                                                                                       | Payment                                                                     | Template                                                                     | Dedicated                                                                        |
|---------|-----------------------------------------------------------------------------|-----------------------------------------------------------------------------------------|-------------------------------------------------------------------|---------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------|---------------------------------------------------------------------|--------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------|------------------------------------------------------------------------------|----------------------------------------------------------------------------------|
| Tags:   | [service-controller](https://doc.api.tube-hosting.com/#/service-controller) | [service-group-controller](https://doc.api.tube-hosting.com/#/service-group-controller) | [ip-controller](https://doc.api.tube-hosting.com/#/ip-controller) | [ip-bundle-controller](https://doc.api.tube-hosting.com/#/ip-bundle-controller) | [admin-dedicated-repository](https://doc.api.tube-hosting.com/#/admin-dedicated-repository) | [vps-controller](https://doc.api.tube-hosting.com/#/vps-controller) | [authentication-controller](https://doc.api.tube-hosting.com/#/authentication-controller)  | [payment-controller](https://doc.api.tube-hosting.com/#/payment-controller) | [template-controlle](https://doc.api.tube-hosting.com/#/template-controller) | [dedicated-controller](https://doc.api.tube-hosting.com/#/dedicated-controller)  |
| Tags:   |                                                                             |                                                                                         |                                                                   |                                                                                 |                                                                                             |                                                                     | [me-controller](https://doc.api.tube-hosting.com/#/me-controller)                          | [order-controller](https://doc.api.tube-hosting.com/#/order-controller)     |                                                                              |                                                                                  |

## Installation

The Tube-Hosting PHP API is available over Packagist, and an installation in your project is recommended via [Composer](https://getcomposer.org). <br>
After installing [Composer in your project](https://getcomposer.org/download/), just add this line to your `composer.json` file.
```json
"tubehosting/tubephp-api": "^0.1-beta"
```
or run 
```shell
$ composer require tubehosting/tubephp-api:0.1-beta
```
in your shell. 

This library also requires PHP version 8.0 or higher and the PHP curl extension.

## Usage

Here we got a pretty simple example where we log in into a Tube-Hosting Account, fetch information about a VPS and display this information:

#### A simple example:
```phpt
<?php
use TubeAPI\Objects; //import into global namespace

require 'vendor/autoload.php'; //Load the Composer autoloader

$password = "Password123"; 
$mail = "E-Mail@Address.tld"; 

try {
    $user = Objects\User::login(new Objects\AuthenticationLoginData($mail, $password)); //login using the credentials of an existing tube-hosting.de account (the login returns a new user object)
    $vps = Objects\VPS::getServerById(488); //get a VPS by the id, returns new VPS object
    $vpsStatus = Objects\VPS::getServerStatusById(488); //get status information of VPS, returns new VpsStatus Object

    //print different information about the VPS
    print "Overview ".$vps->getVpsType()." - ".$vps->getName() . "\n"; 
    print "Node: " . $vps->getNodeId() . "\n"; 
    print "IP: " . $vps->getPrimaryIPv4()->getIpv4()->getIpv4() ."\n"; 
    print "OS: " . $vps->getOsDisplayName() . "\n"; 
    print " - " . $vps->getCoreCount() . " CPU Cores, Usage: ".(int)($vpsStatus->getCpu()*100) . "%\n"; 
    print " - " . number_format($vpsStatus->getMem() / 1048576) . "/".  number_format($vps->getMemory()) ." GB RAM\n"; 
    print " - " . $vps->getDiskType() ." -> " . number_format($vps->getDiskSpace()/1024) ." GB\n"; 
    print "Price: €" . $vps->getPrice()/100 . " (".$vps->getPriceType().")\n"; 
    print "Bought on: " . $vps->getStartDate() . "\n";
    print "Paid until: " . $vps->getRuntime() . "\n";

}catch (\Exception $e) {
    print $e->getMessage() . "\n"; //a request can throw some exceptions, take a look at the examples 
}
```

#### The (example) output:

```
Overview KVM - server488
Node: 6
IP: 193.111.248.90
OS: Debian 11 (Bullseye) 64-bit, German
 - 2 CPU Cores, Usage: 32%
 - 1,165/2,048 GB RAM
 - SSD -> 24 GB
Price: €5 (GROSS)
Bought on: 2021-11-30T10:09:22Z
Paid until: 2021-12-28T00:00:00Z
```

Take a look on more examples [in the examples directory](Examples/)

## LICENSE: 
This software is distributed under the [MIT license](https://github.com/TubeHosting/TubePHP-API/blob/main/LICENSE).