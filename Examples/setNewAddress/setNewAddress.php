<?php
use TubeAPI\Objects;

require 'vendor/autoload.php'; //Load the Composer autoloader

$password = "Password123";
$mail = "E-Mail@Address.tld";

try {
    //login using the credentials of an existing tube-hosting.de account (the login returns a new user object)
    $user = Objects\User::login(new Objects\AuthenticationLoginData($mail, $password)); 
    $user = $user->getUserData(); //get user data, nicely packed into the "User" object

    // get all address data before it is redefined
    $address = $user->getAddress();

    print " - Address before the change: \n";
    print "    - City: " . $address->getCity(). "\n";
    print "    - Street: " . $address->getStreet(). "\n";
    print "    - Street number: " . $address->getStreetNumber() . $address->getNumberAdditive(). " \n";
    print "    - Country: " . $address->getCountry(). "\n";
    print "    - Postal code: " . $address->getPostalCode(). "\n";

    //take a look in to the documentation, what has to be set https://doc.api.tube-hosting.com/ -> Schemas -> Address
    Objects\User::changeAddress(new Objects\Address( 
        "",
        "City",
        "Street",
        "21",
        "c",
        "DE",
        "12345"
    ));

    $user = Objects\User::meInfo();

    // after changing the data it is possible to redefine the address
    $address = $user->getAddress();

    print " - Address after the change: \n";
    print "    - City: " . $address->getCity(). "\n";
    print "    - Street: " . $address->getStreet(). "\n";
    print "    - Street number: " . $address->getStreetNumber() . $address->getNumberAdditive(). " \n";
    print "    - Country: " . $address->getCountry(). "\n";
    print "    - Postal code: " . $address->getPostalCode(). "\n";

} catch (\Exception $e) {
    print $e->getMessage() . "\n";
}
?>