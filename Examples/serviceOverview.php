<?php
use TubeAPI\Objects; //import into global namespace

require 'vendor/autoload.php'; //Load the Composer autoloader

$password = "Password123";
$mail = "E-Mail@Address.tld";

try {
    $user = Objects\User::login(new Objects\AuthenticationLoginData($mail, $password)); //login using the credentials of an existing tube-hosting.de account (the login returns a new user object)

    $serviceGroups = Objects\ServiceGroupData::getAllServiceGroupsFromUser(false); //get all service groups of user

    foreach ($serviceGroups as $serviceGroup) { //iterate through service groups and print some information

        $metaData = $serviceGroup->getMetaData();
        $groupData = $serviceGroup->getGroupData();

        print "\nService Overview: " . $serviceGroup->getId() . " (".$groupData->getName().") -> " . $metaData->getStatus() . " \n";
        print " - start-date: " . $serviceGroup->getStartDate() . "\n";
        print " - runtime: " . $metaData->getRunTime() . "\n";
        print " - price: €" . $groupData->getPrice()/100 . "\n";
    }

} catch (\Exception $e) {
    print $e->getMessage() . "\n";
}
