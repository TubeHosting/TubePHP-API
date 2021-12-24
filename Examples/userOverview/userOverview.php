<?php
use TubeAPI\Objects;

require 'vendor/autoload.php'; //Load the Composer autoloader

$password = "Password123";
$mail = "E-Mail@Address.tld";

try {
    //login using the credentials of an existing tube-hosting.de account (the login returns a new user object)
    $user = Objects\User::login(new Objects\AuthenticationLoginData($mail, $password)); 
    $user = $user->getUserData(); //get user data, nicely packed into the "User" object

    //print different information about the user
    print "\n\nUser Overview: " . $user->getLastname() . ", " . $user->getFirstname()."\n";
    print " - Balance " . $user->getBalance(). "\n";
    print " - Mail " . $user->getMail(). "\n";
    print " - Role " . $user->getRole(). "\n";
    print " - ID " . $user->getId(). "\n";
    print " - Locale " . $user->getLocale(). "\n";
    print " - Last IP " . $user->getLastip(). "\n";

    //display information about the address
    $address = $user->getAddress();
    print " - Address: \n";
    print "    - City: " . $address->getCity(). "\n";
    print "    - Street: " . $address->getStreet(). "\n";
    print "    - Street number: " . $address->getStreetNumber() . $address->getNumberAdditive(). " \n";
    print "    - Country: " . $address->getCountry(). "\n";
    print "    - Postal code: " . $address->getPostalCode(). "\n";

    //display the given support data
    $supportData = $user->getSupportData();
    print " - Support Data: \n";
    print "    - discordName: " . $supportData->getDiscordName(). "\n";
    print "    - skypeName: " . $supportData->getSkypeName(). "\n";
    print "    - phoneNumber: " . $supportData->getPhoneNumber(). "\n";

} catch (\Exception $e) {
    print $e->getMessage() . "\n";
}
?>