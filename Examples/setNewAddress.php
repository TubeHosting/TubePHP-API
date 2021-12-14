<?php
use TubeAPI\Objects; //import into global namespace

require 'vendor/autoload.php'; //Load the Composer autoloader

$password = "Password123";
$mail = "E-Mail@Address.tld";

try {
    $user = Objects\User::login(new Objects\AuthenticationLoginData($mail, $password)); //login using the credentials of an existing tube-hosting.de account (the login returns a new user object)
    $user = $user->getUserData(); //get user data, nicely packed into the "User" object

    //display information about the address before we are going to change it
    $address = $user->getAddress();
    print " - Address before the change: \n";
    print "    - City: " . $address->getCity(). "\n";
    print "    - Street: " . $address->getStreet(). "\n";
    print "    - Street number: " . $address->getStreetNumber() . $address->getNumberAdditive(). " \n";
    print "    - Country: " . $address->getCountry(). "\n";
    print "    - Postal code: " . $address->getPostalCode(). "\n";

    Objects\User::changeAddress(new Objects\Address( //take a look in to the documentation, what has to be set https://doc.api.tube-hosting.com/ -> Schemas -> Address
        "",
        "City",
        "Street",
        "21",
        "c",
        "DE",
        "12345"
    ));

    $user = Objects\User::meInfo();
    //display information about the address after we changed it
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
