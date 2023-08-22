<?php
//Example out of the project README
use TubeAPI\Objects;
use TubeAPI\Exceptions;

require 'vendor/autoload.php'; //Load the Composer autoloader

TubeAPI\TubeAPI::$token = "yourAPIToken"; //authenticate with the api token

try {
    $vps = Objects\VPS::getServerById(488); //get a VPS by the id, returns new VPS object
    $vpsStatus = Objects\VPS::getServerStatusById(488); //get status information of VPS, returns new VpsStatus Object

    //print different information about the VPS, provided in the VPS and VpsStatus Object
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

}catch (Exceptions\RequestException $e) {
    print $e->getMessage() . "\n";
    //you can also get more detailed information (like http status code, response, curl_getInfo, etc.)
    //for example with the http status code:
    print "Status code: " . $e->getHttpStatusCode() . "\n";
}