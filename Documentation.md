# Documentation: 

This is a very basic documentation about the endpoints, soon it will be more detailed.<br>
The endpoints (with the used HTTP method) are ordered by the different "tags" which are defined in the official [API documentation](https://doc.api.tube-hosting.com/) <br>
If you unfold them you will see how to call them, and which params have to be provided, in the next version of this "documentation" this is going to be a lot more detailed. 

---
| Object: | Service                                                                     | ServiceGroupData                                                                        | IPv4                                                              | IPv4Bundle                                                                      | DedicatedInstanceRequest                                                                    | VPS                                                                 | User                                                                                       | Payment                                                                     | Template                                                                     | Dedicated                                                                        |
|---------|-----------------------------------------------------------------------------|-----------------------------------------------------------------------------------------|-------------------------------------------------------------------|---------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------|---------------------------------------------------------------------|--------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------|------------------------------------------------------------------------------|----------------------------------------------------------------------------------|
| Tags:   | [service-controller](https://doc.api.tube-hosting.com/#/service-controller) | [service-group-controller](https://doc.api.tube-hosting.com/#/service-group-controller) | [ip-controller](https://doc.api.tube-hosting.com/#/ip-controller) | [ip-bundle-controller](https://doc.api.tube-hosting.com/#/ip-bundle-controller) | [admin-dedicated-repository](https://doc.api.tube-hosting.com/#/admin-dedicated-repository) | [vps-controller](https://doc.api.tube-hosting.com/#/vps-controller) | [authentication-controller](https://doc.api.tube-hosting.com/#/authentication-controller)  | [payment-controller](https://doc.api.tube-hosting.com/#/payment-controller) | [template-controlle](https://doc.api.tube-hosting.com/#/template-controller) | [dedicated-controller](https://doc.api.tube-hosting.com/#/dedicated-controller)  |
| Tags:   |                                                                             |                                                                                         |                                                                   |                                                                                 |                                                                                             |                                                                     | [me-controller](https://doc.api.tube-hosting.com/#/me-controller)                          | [order-controller](https://doc.api.tube-hosting.com/#/order-controller)     |                                                                              |                                                                                  |


--- 
## service-controller -> [Service](/src/Objects/Service.php)

<details>
<summary> PUT -> /services/{$serviceId}/description </summary>

  ```phpt
 Objects\Service::changeDescription(int $serviceId,DescriptionBody $descriptionBody);
 ``` 
</details>

<details>
<summary> GET -> /services/{$serviceId}/current </summary>

  ```phpt
 Objects\Service::getServiceByID(int $serviceId);
 ``` 
</details>

## service-group-controller -> [ServiceGroupData](/src/Objects/ServiceGroupData.php)

<details>
<summary> PUT -> /servicegroups/{$serviceGroupId}/secondaryowners/accept </summary>

  ```phpt
 Objects\ServiceGroupData::acceptSecondaryOwner(int $serviceGroupId);
 ``` 
</details>

<details>
<summary> PUT -> /servicegroups/{$serviceGroupId}/extend </summary>

  ```phpt
 Objects\ServiceGroupData::extendServiceGroup(int $serviceGroupId);
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/{$serviceGroupId}/secondaryowners </summary>

  ```phpt
 Objects\ServiceGroupData::getSecondaryOwners(int $serviceGroupId);
 ``` 
</details>

<details>
<summary> POST -> /servicegroups/{$serviceGroupId}/secondaryowners </summary>

  ```phpt
 Objects\ServiceGroupData::addSecondaryOwners(int $serviceGroupId,array $array);
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/{$serviceGroupId}/service/{$serviceId} </summary>

  ```phpt
 Objects\ServiceGroupData::getServiceByServiceGroupByID(int $serviceGroupId, int $serviceId);
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/{$serviceGroupId}/ddos/incidents </summary>

  ```phpt
 Objects\ServiceGroupData::getDDoSIncidentsOfServiceGroup(int $serviceGroupId);
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/{$serviceGroupId}/current </summary>

  ```phpt
 Objects\ServiceGroupData::getServiceGroupByID(int $serviceGroupId);
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/invites </summary>

  ```phpt
 Objects\ServiceGroupData::getInvites();
 ``` 
</details>

<details>
<summary> GET -> /servicegroups/currents?primaryOnly={$primaryOnly} </summary>

  ```phpt
 Objects\ServiceGroupData::getAllServiceGroupsFromUser(bool $primaryOnly = null);
 ``` 
</details>

<details>
<summary> DELETE -> /servicegroups/{$serviceGroupId}/secondaryowners/{$userId} </summary>

  ```phpt
 Objects\ServiceGroupData::deleteSecondaryOwners(int $serviceGroupId, int $userId);
 ``` 
</details>

## ip-controller -> [IPv4](/src/Objects/IPv4.php)

<details>
<summary> PUT -> /ips/{$ipV4}/rdns </summary>

  ```phpt
 Objects\IPv4::changeRDNS(string $ipV4,IpRDNSBody $ipRDNSBody);
 ``` 
</details>

<details>
<summary> PUT -> /ips/{$ipV4}/description </summary>

  ```phpt
 Objects\IPv4::changeIPv4Description(string $ipV4,DescriptionBody $descriptionBody);
 ``` 
</details>

<details>
<summary> GET -> /ips/{$ipV4}/ddos/status </summary>

  ```phpt
 Objects\IPv4::getDDoSModeStatus(string $ipV4);
 ``` 
</details>

<details>
<summary> PUT -> /ips/{$ipV4}/ddos/status </summary>

  ```phpt
 Objects\IPv4::changeDDoSModeStatus(string $ipV4,IPDDoSStatus $iPDDoSStatus);
 ``` 
</details>

<details>
<summary> GET -> /ips/{$ipV4} </summary>

  ```phpt
 Objects\IPv4::getIPLinkBundle(string $ipV4);
 ``` 
</details>

<details>
<summary> GET -> /ips/{$ipV4}/ddos/incidents </summary>

  ```phpt
 Objects\IPv4::getDDoSIncidentsOnIPv4(string $ipV4);
 ``` 
</details>

## admin-dedicated-repository -> [DedicatedInstanceRequest](/src/Objects/DedicatedInstanceRequest.php)

<details>
<summary> PUT -> /admin/dedicateds/instances </summary>

  ```phpt
 Objects\DedicatedInstanceRequest::createInstance(DedicatedInstanceRequest $dedicatedInstanceRequest);
 ``` 
</details>

## vps-controller -> [VPS](/src/Objects/VPS.php)

<details>
<summary> POST -> /vps/{$serviceId}/stop </summary>

  ```phpt
 Objects\VPS::stopServerById(int $serviceId);
 ``` 
</details>

<details>
<summary> POST -> /vps/{$serviceId}/start </summary>

  ```phpt
 Objects\VPS::startServerById(int $serviceId);
 ``` 
</details>

<details>
<summary> POST -> /vps/{$serviceId}/shutdown </summary>

  ```phpt
 Objects\VPS::shutdownServerById(int $serviceId);
 ``` 
</details>

<details>
<summary> POST -> /vps/{$serviceId}/restart </summary>

  ```phpt
 Objects\VPS::restartServerById(int $serviceId);
 ``` 
</details>

<details>
<summary> POST -> /vps/{$serviceId}/reinstall </summary>

  ```phpt
 Objects\VPS::reinstallServerById(int $serviceId,VpsReinstall $vpsReinstall);
 ``` 
</details>

<details>
<summary> GET -> /vps/{$serviceId} </summary>

  ```phpt
 Objects\VPS::getServerById(int $serviceId);
 ``` 
</details>

<details>
<summary> GET -> /vps/{$serviceId}/status </summary>

  ```phpt
 Objects\VPS::getServerStatusById(int $serviceId);
 ``` 
</details>

<details>
<summary> GET -> /vps/{$serviceId}/statistics?timeFrame={$timeFrame} </summary>

  ```phpt
 Objects\VPS::getServerStatisticsById(int $serviceId, string $timeFrame = "");
 ``` 
</details>

<details>
<summary> GET -> /vps/os/lxc </summary>

  ```phpt
 Objects\VPS::getAvailableLxcOs();
 ``` 
</details>

<details>
<summary> GET -> /vps/os/kvm </summary>

  ```phpt
 Objects\VPS::getAvailableKvmOs();
 ``` 
</details>

## authentication-controller -> [User](/src/Objects/User.php)

<details>
<summary> POST -> /resetPassword?token={$token} </summary>

  ```phpt
 Objects\User::resetPassword(string $token,string $string);
 ``` 
</details>

<details>
<summary> POST -> /register </summary>

  ```phpt
 Objects\User::register(AuthenticationRegisterData $authenticationRegisterData);
 ``` 
</details>

<details>
<summary> POST -> /login </summary>

  ```phpt
 Objects\User::login(AuthenticationLoginData $authenticationLoginData);
 ``` 
</details>

<details>
<summary> GET -> /requestVerification?email={$email} </summary>

  ```phpt
 Objects\User::requestVerification(string $email);
 ``` 
</details>

<details>
<summary> GET -> /requestPasswordReset?email={$email} </summary>

  ```phpt
 Objects\User::requestPasswordReset(string $email);
 ``` 
</details>

## payment-controller -> [Payment](/src/Objects/Payment.php)

<details>
<summary> POST -> /payments/balance/send </summary>

  ```phpt
 Objects\Payment::sendBalance(BalanceSendingRequest $balanceSendingRequest);
 ``` 
</details>

<details>
<summary> POST -> /payments/balance/charge </summary>

  ```phpt
 Objects\Payment::chargeBalance(BalanceChargeRequestBody $balanceChargeRequestBody);
 ``` 
</details>

<details>
<summary> GET -> /payments?page={$page}&size={$size} </summary>

  ```phpt
 Objects\Payment::getPaymentBundles(int $page = 0, int $size = 0);
 ``` 
</details>

<details>
<summary> GET -> /payments/invoices </summary>

  ```phpt
 Objects\Payment::getInvoices();
 ``` 
</details>

<details>
<summary> GET -> /payments/invoices/{$invoiceId}/pdf </summary>

  ```phpt
 Objects\Payment::getInvoicePDF(int $invoiceId);
 ``` 
</details>

<details>
<summary> GET -> /payments/invoices/{$invoiceId}/email </summary>

  ```phpt
 Objects\Payment::getInvoiceMail(int $invoiceId);
 ``` 
</details>

<details>
<summary> GET -> /payments/balance </summary>

  ```phpt
 Objects\Payment::getBalanceChanges();
 ``` 
</details>

## order-controller -> [Payment](/src/Objects/Payment.php)

<details>
<summary> POST -> /order/template/{$templateGroupId} </summary>

  ```phpt
 Objects\Payment::orderByTemplateGroup(int $templateGroupId);
 ``` 
</details>

## me-controller -> [User](/src/Objects/User.php)

<details>
<summary> POST -> /me/supportData </summary>

  ```phpt
 Objects\User::changeSupportData(SupportData $supportData);
 ``` 
</details>

<details>
<summary> POST -> /me/password </summary>

  ```phpt
 Objects\User::changePassword(UserChangePasswordObject $userChangePasswordObject);
 ``` 
</details>

<details>
<summary> POST -> /me/names </summary>

  ```phpt
 Objects\User::changeNames(User $user);
 ``` 
</details>

<details>
<summary> POST -> /me/mail </summary>

  ```phpt
 Objects\User::changeMail(User $user);
 ``` 
</details>

<details>
<summary> POST -> /me/locale </summary>

  ```phpt
 Objects\User::changeLocale(RequestBodyLocale $requestBodyLocale);
 ``` 
</details>

<details>
<summary> POST -> /me/address </summary>

  ```phpt
 Objects\User::changeAddress(Address $address);
 ``` 
</details>

<details>
<summary> GET -> /me </summary>

  ```phpt
 Objects\User::meInfo();
 ``` 
</details>

## template-controller -> [Template](/src/Objects/Template.php)

<details>
<summary> GET -> /templategroups </summary>

  ```phpt
 Objects\Template::getTemplateGroups();
 ``` 
</details>

## ip-bundle-controller -> [IPv4Bundle](/src/Objects/IPv4Bundle.php)

<details>
<summary> GET -> /ipbundles/{$serviceId}/ddos/incidents </summary>

  ```phpt
 Objects\IPv4Bundle::getDDoSIncidentsOnBundle(int $serviceId);
 ``` 
</details>

## dedicated-controller -> [Dedicated](/src/Objects/Dedicated.php)

<details>
<summary> GET -> /dedicated/{$id}/interfaces/statistics?start={$start}&end={$end}&interval={$interval}&count={$count} </summary>

  ```phpt
 Objects\Dedicated::getServiceByID_1(int $id, string $start = "", string $end = "", int $interval = 0, int $count = 0);
 ``` 
</details>

## admin-configuration-controller -> [None](/src/Objects/None.php)

<details>
<summary> GET -> /admin/configurations/gpus </summary>

  ```phpt
 Objects\None::getAllGPUs();
 ``` 
</details>

<details>
<summary> GET -> /admin/configurations/disks </summary>

  ```phpt
 Objects\None::getAllDisks();
 ``` 
</details>

<details>
<summary> GET -> /admin/configurations/cpus </summary>

  ```phpt
 Objects\None::getAllCPUs();
 ``` 
</details>
