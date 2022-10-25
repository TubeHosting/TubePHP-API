<?php
declare(strict_types=1);
foreach (glob("../src/Objects/*.php") as $file) {
    require_once $file;
}
foreach (glob("../src/Exceptions/*.php") as $file) {
    require_once $file;
}
require_once __DIR__ . "/../src/TubeAPI.php";
use TubeAPI\Objects;
use PHPUnit\Framework\TestCase;

//import into global namespace
use TubeAPI\Exceptions;


final class EndpointTest extends TestCase
{


    /**
     * @test
     * @return int
     * @covers \TubeAPI\Objects\VPS::changeRootPassword
     * @covers \TubeAPI\Objects\Service::changeDescription
     * @covers \TubeAPI\Objects\ServiceGroupData::acceptSecondaryOwner
     * @covers \TubeAPI\Objects\ServiceGroupData::extendServiceGroup
     * @covers \TubeAPI\Objects\IPv4::changeRDNS
     * @covers \TubeAPI\Objects\IPv4::changeIPv4Description
     * @covers \TubeAPI\Objects\IPv4::changeDDoSModeStatus
     * @covers \TubeAPI\Objects\VPS::stopServerById
     * @covers \TubeAPI\Objects\VPS::startServerById
     * @covers \TubeAPI\Objects\VPS::shutdownServerById
     * @covers \TubeAPI\Objects\VPS::restartServerById
     * @covers \TubeAPI\Objects\VPS::reinstallServerById
     * @covers \TubeAPI\Objects\StatusMessageUserData::readMessage
     * @covers \TubeAPI\Objects\ServiceGroupData::addSecondaryOwners
     * @covers \TubeAPI\Objects\User::resetPassword
     * @covers \TubeAPI\Objects\User::register
     * @covers \TubeAPI\Objects\Payment::sendBalance
     * @covers \TubeAPI\Objects\Payment::chargeBalance
     * @covers \TubeAPI\Objects\Payment::orderByTemplateGroup
     * @covers \TubeAPI\Objects\User::changeSupportData
     * @covers \TubeAPI\Objects\User::changePassword
     * @covers \TubeAPI\Objects\User::changeNames
     * @covers \TubeAPI\Objects\User::changeLocale
     * @covers \TubeAPI\Objects\User::changeAddress
     * @covers \TubeAPI\Objects\User::logout
     * @covers \TubeAPI\Objects\User::login
     * @covers \TubeAPI\Objects\VPS::getServerById
     * @covers \TubeAPI\Objects\VPS::getServerStatusById
     * @covers \TubeAPI\Objects\VPS::getServerStatisticsById
     * @covers \TubeAPI\Objects\VPS::getAvailableLxcOs
     * @covers \TubeAPI\Objects\VPS::getAvailableKvmOs
     * @covers \TubeAPI\Objects\Template::getTemplateGroups
     * @covers \TubeAPI\Objects\StatusMessageUserData::getMessages
     * @covers \TubeAPI\Objects\Service::getServiceByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getServiceByServiceGroupByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getDDoSIncidentsOfServiceGroup
     * @covers \TubeAPI\Objects\ServiceGroupData::getServiceGroupByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getInvites
     * @covers \TubeAPI\Objects\ServiceGroupData::getAllServiceGroupsFromUser
     * @covers \TubeAPI\Objects\User::requestVerification
     * @covers \TubeAPI\Objects\User::requestPasswordReset
     * @covers \TubeAPI\Objects\Payment::getPaymentBundles
     * @covers \TubeAPI\Objects\Payment::getInvoices
     * @covers \TubeAPI\Objects\Payment::getInvoicePDF
     * @covers \TubeAPI\Objects\Payment::getInvoiceMail
     * @covers \TubeAPI\Objects\Payment::getBalanceChanges
     * @covers \TubeAPI\Objects\User::meInfo
     * @covers \TubeAPI\Objects\IPv4::getIPLinkBundle
     * @covers \TubeAPI\Objects\IPv4::getDDoSMetricsOfIPv4
     * @covers \TubeAPI\Objects\IPv4::getDDoSIncidentsOnIPv4
     * @covers \TubeAPI\Objects\IPv4Bundle::getDDoSIncidentsOnBundle
     * @covers \TubeAPI\Objects\Dedicated::getServiceByID_1
     * @covers \TubeAPI\Objects\ServiceGroupData::deleteSecondaryOwners
     */
    public function testRequests(): int
    {
        TubeAPI\TubeAPI::$apiServer = "http://127.0.0.1:4011";
        $c = 0;
        try {
            $c++;
            /**
            * Do an HTTP request (PUT) to /vps/{serviceId}/password with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $passwordChange = new TubeAPI\Objects\PasswordChange(uniqid()); /* PasswordChange */
            $tmp = TubeAPI\Objects\VPS::changeRootPassword($serviceId, $passwordChange);
            print "ran (PUT) request against /vps/{serviceId}/password ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /services/{serviceId}/description with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $descriptionBody = new TubeAPI\Objects\DescriptionBody(uniqid()); /* DescriptionBody */
            $tmp = TubeAPI\Objects\Service::changeDescription($serviceId, $descriptionBody);
            print "ran (PUT) request against /services/{serviceId}/description ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /servicegroups/{serviceGroupId}/secondaryowners/accept with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::acceptSecondaryOwner($serviceGroupId);
            print "ran (PUT) request against /servicegroups/{serviceGroupId}/secondaryowners/accept ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /servicegroups/{serviceGroupId}/extend with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::extendServiceGroup($serviceGroupId);
            print "ran (PUT) request against /servicegroups/{serviceGroupId}/extend ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /ips/{ipV4}/rdns with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $ipRDNSBody = new TubeAPI\Objects\IpRDNSBody(uniqid()); /* IpRDNSBody */
            $tmp = TubeAPI\Objects\IPv4::changeRDNS($ipV4, $ipRDNSBody);
            print "ran (PUT) request against /ips/{ipV4}/rdns ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /ips/{ipV4}/description with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $descriptionBody = new TubeAPI\Objects\DescriptionBody(uniqid()); /* DescriptionBody */
            $tmp = TubeAPI\Objects\IPv4::changeIPv4Description($ipV4, $descriptionBody);
            print "ran (PUT) request against /ips/{ipV4}/description ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (PUT) to /ips/{ipV4}/ddos/status with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $iPDDoSStatus = new TubeAPI\Objects\IPDDoSStatus(array('dynamic','permanent')[rand(0,1)],array('off','permanent','only')[rand(0,2)]); /* IPDDoSStatus */
            $tmp = TubeAPI\Objects\IPv4::changeDDoSModeStatus($ipV4, $iPDDoSStatus);
            print "ran (PUT) request against /ips/{ipV4}/ddos/status ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /vps/{serviceId}/stop with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\VPS::stopServerById($serviceId);
            print "ran (POST) request against /vps/{serviceId}/stop ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /vps/{serviceId}/start with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\VPS::startServerById($serviceId);
            print "ran (POST) request against /vps/{serviceId}/start ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /vps/{serviceId}/shutdown with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\VPS::shutdownServerById($serviceId);
            print "ran (POST) request against /vps/{serviceId}/shutdown ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /vps/{serviceId}/restart with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\VPS::restartServerById($serviceId);
            print "ran (POST) request against /vps/{serviceId}/restart ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /vps/{serviceId}/reinstall with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $vpsReinstall = new TubeAPI\Objects\VpsReinstall(rand(0,1000),uniqid(),uniqid()); /* VpsReinstall */
            $tmp = TubeAPI\Objects\VPS::reinstallServerById($serviceId, $vpsReinstall);
            print "ran (POST) request against /vps/{serviceId}/reinstall ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /status/messages/{messageId}/read with random data 
            */
            
            $messageId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\StatusMessageUserData::readMessage($messageId);
            print "ran (POST) request against /status/messages/{messageId}/read ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /servicegroups/{serviceGroupId}/secondaryowners with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $array = array("null"); /* array */
            $tmp = TubeAPI\Objects\ServiceGroupData::addSecondaryOwners($serviceGroupId, $array);
            print "ran (POST) request against /servicegroups/{serviceGroupId}/secondaryowners ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /resetPassword with random data 
            */
            
            $token = uniqid(); /* string */
            $string = uniqid(); /* string */
            $tmp = TubeAPI\Objects\User::resetPassword($token, $string);
            print "ran (POST) request against /resetPassword ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /register with random data 
            */
            
            $authenticationRegisterData = new TubeAPI\Objects\AuthenticationRegisterData(uniqid(),uniqid(),uniqid(),uniqid(),array('DE','EN')[rand(0,1)],new stdClass()); /* AuthenticationRegisterData */
            $tmp = TubeAPI\Objects\User::register($authenticationRegisterData);
            print "ran (POST) request against /register ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /payments/balance/send with random data 
            */
            
            $balanceSendingRequest = new TubeAPI\Objects\BalanceSendingRequest(uniqid(),rand(0,1000),uniqid(),rand(0,1000)); /* BalanceSendingRequest */
            $tmp = TubeAPI\Objects\Payment::sendBalance($balanceSendingRequest);
            print "ran (POST) request against /payments/balance/send ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /payments/balance/charge with random data 
            */
            
            $balanceChargeRequestBody = new TubeAPI\Objects\BalanceChargeRequestBody(rand(0,1000),array('manually','paysafecard','creditcard','paypal','sofort','giropay','banktransfer')[rand(0,6)]); /* BalanceChargeRequestBody */
            $tmp = TubeAPI\Objects\Payment::chargeBalance($balanceChargeRequestBody);
            print "ran (POST) request against /payments/balance/charge ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /order/template/{templateGroupId} with random data 
            */
            
            $templateGroupId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Payment::orderByTemplateGroup($templateGroupId);
            print "ran (POST) request against /order/template/{templateGroupId} ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /me/supportData with random data 
            */
            
            $supportData = new TubeAPI\Objects\SupportData(uniqid(),uniqid(),uniqid()); /* SupportData */
            $tmp = TubeAPI\Objects\User::changeSupportData($supportData);
            print "ran (POST) request against /me/supportData ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /me/password with random data 
            */
            
            $userChangePasswordObject = new TubeAPI\Objects\UserChangePasswordObject(uniqid(),uniqid()); /* UserChangePasswordObject */
            $tmp = TubeAPI\Objects\User::changePassword($userChangePasswordObject);
            print "ran (POST) request against /me/password ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /me/names with random data 
            */
            
            $user = new TubeAPI\Objects\User(rand(0,1000),rand(0,1000),uniqid(),array('DE','EN')[rand(0,1)],array('USER','ADMIN')[rand(0,1)],false,uniqid(),"2019-08-24T14:15:22Z",false,new TubeAPI\Objects\Address(uniqid(),uniqid(),uniqid(),uniqid(),uniqid(),uniqid(),uniqid()),false,new TubeAPI\Objects\UserPaymentInfo(rand(0,1000),uniqid(),false,"2019-08-24T14:15:22Z",array('GROSS','NET','TAX_FREE')[rand(0,2)]),array("null"),array('GROSS','NET','TAX_FREE')[rand(0,2)],uniqid(),uniqid(),new TubeAPI\Objects\SupportData(uniqid(),uniqid(),uniqid())); /* User */
            $tmp = TubeAPI\Objects\User::changeNames($user);
            print "ran (POST) request against /me/names ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /me/locale with random data 
            */
            
            $requestBodyLocale = new TubeAPI\Objects\RequestBodyLocale(uniqid()); /* RequestBodyLocale */
            $tmp = TubeAPI\Objects\User::changeLocale($requestBodyLocale);
            print "ran (POST) request against /me/locale ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /me/address with random data 
            */
            
            $address = new TubeAPI\Objects\Address(uniqid(),uniqid(),uniqid(),uniqid(),uniqid(),uniqid(),uniqid()); /* Address */
            $tmp = TubeAPI\Objects\User::changeAddress($address);
            print "ran (POST) request against /me/address ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /logout with random data 
            */
            
            $Authorization = uniqid(); /* string */
            $tmp = TubeAPI\Objects\User::logout($Authorization);
            print "ran (POST) request against /logout ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (POST) to /login with random data 
            */
            
            $authenticationLoginData = new TubeAPI\Objects\AuthenticationLoginData(uniqid(),uniqid(),uniqid()); /* AuthenticationLoginData */
            $tmp = TubeAPI\Objects\User::login($authenticationLoginData);
            print "ran (POST) request against /login ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /vps/{serviceId} with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\VPS::getServerById($serviceId);
            print "ran (GET) request against /vps/{serviceId} ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /vps/{serviceId}/status with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $cache = false; /* bool */
            $tmp = TubeAPI\Objects\VPS::getServerStatusById($serviceId, $cache);
            print "ran (GET) request against /vps/{serviceId}/status ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /vps/{serviceId}/statistics with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $timeFrame = array('HOUR','DAY','WEEK','MONTH','YEAR')[rand(0,4)]; /* string */
            $tmp = TubeAPI\Objects\VPS::getServerStatisticsById($serviceId, $timeFrame);
            print "ran (GET) request against /vps/{serviceId}/statistics ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /vps/os/lxc with random data 
            */
            
            $tmp = TubeAPI\Objects\VPS::getAvailableLxcOs();
            print "ran (GET) request against /vps/os/lxc ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /vps/os/kvm with random data 
            */
            
            $tmp = TubeAPI\Objects\VPS::getAvailableKvmOs();
            print "ran (GET) request against /vps/os/kvm ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /templategroups with random data 
            */
            
            $tmp = TubeAPI\Objects\Template::getTemplateGroups();
            print "ran (GET) request against /templategroups ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /status/messages with random data 
            */
            
            $page = rand(0,1000); /* int */
            $size = rand(0,1000); /* int */
            $lan = uniqid(); /* string */
            $tmp = TubeAPI\Objects\StatusMessageUserData::getMessages($page, $size, $lan);
            print "ran (GET) request against /status/messages ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /services/{serviceId}/current with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Service::getServiceByID($serviceId);
            print "ran (GET) request against /services/{serviceId}/current ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /servicegroups/{serviceGroupId}/service/{serviceId} with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::getServiceByServiceGroupByID($serviceGroupId, $serviceId);
            print "ran (GET) request against /servicegroups/{serviceGroupId}/service/{serviceId} ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /servicegroups/{serviceGroupId}/ddos/incidents with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::getDDoSIncidentsOfServiceGroup($serviceGroupId);
            print "ran (GET) request against /servicegroups/{serviceGroupId}/ddos/incidents ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /servicegroups/{serviceGroupId}/current with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::getServiceGroupByID($serviceGroupId);
            print "ran (GET) request against /servicegroups/{serviceGroupId}/current ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /servicegroups/invites with random data 
            */
            
            $tmp = TubeAPI\Objects\ServiceGroupData::getInvites();
            print "ran (GET) request against /servicegroups/invites ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /servicegroups/currents with random data 
            */
            
            $primaryOnly = false; /* bool */
            $tmp = TubeAPI\Objects\ServiceGroupData::getAllServiceGroupsFromUser($primaryOnly);
            print "ran (GET) request against /servicegroups/currents ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /requestVerification with random data 
            */
            
            $email = uniqid(); /* string */
            $tmp = TubeAPI\Objects\User::requestVerification($email);
            print "ran (GET) request against /requestVerification ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /requestPasswordReset with random data 
            */
            
            $email = uniqid(); /* string */
            $tmp = TubeAPI\Objects\User::requestPasswordReset($email);
            print "ran (GET) request against /requestPasswordReset ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /payments with random data 
            */
            
            $completed = false; /* bool */
            $page = rand(0,1000); /* int */
            $size = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Payment::getPaymentBundles($completed, $page, $size);
            print "ran (GET) request against /payments ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /payments/invoices with random data 
            */
            
            $tmp = TubeAPI\Objects\Payment::getInvoices();
            print "ran (GET) request against /payments/invoices ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /payments/invoices/{invoiceId}/pdf with random data 
            */
            
            $invoiceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Payment::getInvoicePDF($invoiceId);
            print "ran (GET) request against /payments/invoices/{invoiceId}/pdf ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /payments/invoices/{invoiceId}/email with random data 
            */
            
            $invoiceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Payment::getInvoiceMail($invoiceId);
            print "ran (GET) request against /payments/invoices/{invoiceId}/email ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /payments/balance with random data 
            */
            
            $tmp = TubeAPI\Objects\Payment::getBalanceChanges();
            print "ran (GET) request against /payments/balance ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /me with random data 
            */
            
            $tmp = TubeAPI\Objects\User::meInfo();
            print "ran (GET) request against /me ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /ips/{ipV4} with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $tmp = TubeAPI\Objects\IPv4::getIPLinkBundle($ipV4);
            print "ran (GET) request against /ips/{ipV4} ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /ips/{ipV4}/ddos/metrics with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $minTime = "2019-08-24T14:15:22Z"; /* string */
            $maxTime = "2019-08-24T14:15:22Z"; /* string */
            $tmp = TubeAPI\Objects\IPv4::getDDoSMetricsOfIPv4($ipV4, $minTime, $maxTime);
            print "ran (GET) request against /ips/{ipV4}/ddos/metrics ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /ips/{ipV4}/ddos/incidents with random data 
            */
            
            $ipV4 = uniqid(); /* string */
            $tmp = TubeAPI\Objects\IPv4::getDDoSIncidentsOnIPv4($ipV4);
            print "ran (GET) request against /ips/{ipV4}/ddos/incidents ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /ipbundles/{serviceId}/ddos/incidents with random data 
            */
            
            $serviceId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\IPv4Bundle::getDDoSIncidentsOnBundle($serviceId);
            print "ran (GET) request against /ipbundles/{serviceId}/ddos/incidents ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (GET) to /dedicated/{id}/interfaces/statistics with random data 
            */
            
            $id = rand(0,1000); /* int */
            $start = uniqid(); /* string */
            $end = uniqid(); /* string */
            $interval = rand(0,1000); /* int */
            $count = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\Dedicated::getServiceByID_1($id, $start, $end, $interval, $count);
            print "ran (GET) request against /dedicated/{id}/interfaces/statistics ($c)\n";
            $this->assertTrue(true);

            $c++;
            /**
            * Do an HTTP request (DELETE) to /servicegroups/{serviceGroupId}/secondaryowners/{userId} with random data 
            */
            
            $serviceGroupId = rand(0,1000); /* int */
            $userId = rand(0,1000); /* int */
            $tmp = TubeAPI\Objects\ServiceGroupData::deleteSecondaryOwners($serviceGroupId, $userId);
            print "ran (DELETE) request against /servicegroups/{serviceGroupId}/secondaryowners/{userId} ($c)\n";
            $this->assertTrue(true);


        return $c;
        } catch
        (\TubeAPI\Exceptions\RequestException $e) {
            print $e->getHttpStatusCode() . "\n";
            print $e->getDataResponse() . "\n";
            print $e->getUrl() . "\n";
            print $e->getMessage() . "\n";
            $this->assertTrue(false);
            return 0;
        }
    }

    

     /**
     * @return void
     * @depends testRequests
     * @covers \TubeAPI\Objects\VPS::changeRootPassword
     * @covers \TubeAPI\Objects\Service::changeDescription
     * @covers \TubeAPI\Objects\ServiceGroupData::acceptSecondaryOwner
     * @covers \TubeAPI\Objects\ServiceGroupData::extendServiceGroup
     * @covers \TubeAPI\Objects\IPv4::changeRDNS
     * @covers \TubeAPI\Objects\IPv4::changeIPv4Description
     * @covers \TubeAPI\Objects\IPv4::changeDDoSModeStatus
     * @covers \TubeAPI\Objects\VPS::stopServerById
     * @covers \TubeAPI\Objects\VPS::startServerById
     * @covers \TubeAPI\Objects\VPS::shutdownServerById
     * @covers \TubeAPI\Objects\VPS::restartServerById
     * @covers \TubeAPI\Objects\VPS::reinstallServerById
     * @covers \TubeAPI\Objects\StatusMessageUserData::readMessage
     * @covers \TubeAPI\Objects\ServiceGroupData::addSecondaryOwners
     * @covers \TubeAPI\Objects\User::resetPassword
     * @covers \TubeAPI\Objects\User::register
     * @covers \TubeAPI\Objects\Payment::sendBalance
     * @covers \TubeAPI\Objects\Payment::chargeBalance
     * @covers \TubeAPI\Objects\Payment::orderByTemplateGroup
     * @covers \TubeAPI\Objects\User::changeSupportData
     * @covers \TubeAPI\Objects\User::changePassword
     * @covers \TubeAPI\Objects\User::changeNames
     * @covers \TubeAPI\Objects\User::changeLocale
     * @covers \TubeAPI\Objects\User::changeAddress
     * @covers \TubeAPI\Objects\User::logout
     * @covers \TubeAPI\Objects\User::login
     * @covers \TubeAPI\Objects\VPS::getServerById
     * @covers \TubeAPI\Objects\VPS::getServerStatusById
     * @covers \TubeAPI\Objects\VPS::getServerStatisticsById
     * @covers \TubeAPI\Objects\VPS::getAvailableLxcOs
     * @covers \TubeAPI\Objects\VPS::getAvailableKvmOs
     * @covers \TubeAPI\Objects\Template::getTemplateGroups
     * @covers \TubeAPI\Objects\StatusMessageUserData::getMessages
     * @covers \TubeAPI\Objects\Service::getServiceByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getServiceByServiceGroupByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getDDoSIncidentsOfServiceGroup
     * @covers \TubeAPI\Objects\ServiceGroupData::getServiceGroupByID
     * @covers \TubeAPI\Objects\ServiceGroupData::getInvites
     * @covers \TubeAPI\Objects\ServiceGroupData::getAllServiceGroupsFromUser
     * @covers \TubeAPI\Objects\User::requestVerification
     * @covers \TubeAPI\Objects\User::requestPasswordReset
     * @covers \TubeAPI\Objects\Payment::getPaymentBundles
     * @covers \TubeAPI\Objects\Payment::getInvoices
     * @covers \TubeAPI\Objects\Payment::getInvoicePDF
     * @covers \TubeAPI\Objects\Payment::getInvoiceMail
     * @covers \TubeAPI\Objects\Payment::getBalanceChanges
     * @covers \TubeAPI\Objects\User::meInfo
     * @covers \TubeAPI\Objects\IPv4::getIPLinkBundle
     * @covers \TubeAPI\Objects\IPv4::getDDoSMetricsOfIPv4
     * @covers \TubeAPI\Objects\IPv4::getDDoSIncidentsOnIPv4
     * @covers \TubeAPI\Objects\IPv4Bundle::getDDoSIncidentsOnBundle
     * @covers \TubeAPI\Objects\Dedicated::getServiceByID_1
     * @covers \TubeAPI\Objects\ServiceGroupData::deleteSecondaryOwners
     */
    public function testForEndpoints(): void
    {

        //test requests again to get the amount of already implemented requests but suppress output
        ob_start();
        $implReq = $this->testRequests();
        ob_end_clean();

        $docPathsAmount = null;

        for ($i = 0; $i <= 10; $i++) { //give 10 trys to get the api documentation from the api server

            TubeAPI\TubeAPI::$apiServer = "https://api.tube-hosting.com"; //set the api server (back) to the official one

            try {

                //get and prepare the paths out of the api documentation

                $thDocs = TubeAPI\TubeAPI::request("GET", "/docs", null, "");

                $paths = ((array)json_decode($thDocs))['paths'];

                $docPathsAmount = sizeof(array_keys((array)$paths));

                $this->assertSame($docPathsAmount, $implReq);

                break;

            } catch (Exceptions\RequestException $requestException) {

                //wait some seconds for the next request

                print "\nRequest to " . $requestException->getUrl() . " failed - " . (10 - $i) . " trys left";

                sleep(10);


            }

        }
        
        $this->assertSame($docPathsAmount, $implReq);

    }
}
