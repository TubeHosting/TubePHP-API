# Documentation: 

This is a very basic documentation about the different API endpoints.<br>
The endpoints (with the used HTTP method) are ordered by the different "tags" which are defined in the official [API documentation](https://doc.api.tube-hosting.com/) <br>
If you unfold them you will see how to call them, which params have to be provided, and what is getting returned. There also is a link to the definition of the endpoint in the [API documentation](https://doc.api.tube-hosting.com/)

---
| Object: | Service                                                                     | ServiceGroupData                                                                        | IPv4                                                              | IPv4Bundle                                                                      | DedicatedInstanceRequest                                                                    | VPS                                                                 | User                                                                                       | Payment                                                                     | Template                                                                     | Dedicated                                                                        |
|---------|-----------------------------------------------------------------------------|-----------------------------------------------------------------------------------------|-------------------------------------------------------------------|---------------------------------------------------------------------------------|---------------------------------------------------------------------------------------------|---------------------------------------------------------------------|--------------------------------------------------------------------------------------------|-----------------------------------------------------------------------------|------------------------------------------------------------------------------|----------------------------------------------------------------------------------|
| Tags:   | [service-controller](https://doc.api.tube-hosting.com/#/service-controller) | [service-group-controller](https://doc.api.tube-hosting.com/#/service-group-controller) | [ip-controller](https://doc.api.tube-hosting.com/#/ip-controller) | [ip-bundle-controller](https://doc.api.tube-hosting.com/#/ip-bundle-controller) | [admin-dedicated-repository](https://doc.api.tube-hosting.com/#/admin-dedicated-repository) | [vps-controller](https://doc.api.tube-hosting.com/#/vps-controller) | [authentication-controller](https://doc.api.tube-hosting.com/#/authentication-controller)  | [payment-controller](https://doc.api.tube-hosting.com/#/payment-controller) | [template-controlle](https://doc.api.tube-hosting.com/#/template-controller) | [dedicated-controller](https://doc.api.tube-hosting.com/#/dedicated-controller)  |
| Tags:   |                                                                             |                                                                                         |                                                                   |                                                                                 |                                                                                             |                                                                     | [me-controller](https://doc.api.tube-hosting.com/#/me-controller)                          | [order-controller](https://doc.api.tube-hosting.com/#/order-controller)     |                                                                              |                                                                                  |


--- 
## service-controller -> [Service](/src/Objects/Service.php)
<br>
<details>
<summary> <em>changeDescription</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/services/{$serviceId}/description</code> </summary>

<br>

  ```phpt
 Objects\Service::changeDescription(int $serviceId,DescriptionBody $descriptionBody);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
  * <em>DescriptionBody </em>$descriptionBody
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-controller/changeDescription) 
</details>
<br>
<details>
<summary> <em>getServiceByID</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/services/{$serviceId}/current</code> </summary>

<br>

  ```phpt
 Objects\Service::getServiceByID(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>object</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-controller/getServiceByID) 
</details>

## service-group-controller -> [ServiceGroupData](/src/Objects/ServiceGroupData.php)
<br>
<details>
<summary> <em>acceptSecondaryOwner</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/secondaryowners/accept</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::acceptSecondaryOwner(int $serviceGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/acceptSecondaryOwner) 
</details>
<br>
<details>
<summary> <em>extendServiceGroup</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/extend</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::extendServiceGroup(int $serviceGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/extendServiceGroup) 
</details>
<br>
<details>
<summary> <em>getSecondaryOwners</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/secondaryowners</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getSecondaryOwners(int $serviceGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getSecondaryOwners) 
</details>
<br>
<details>
<summary> <em>addSecondaryOwners</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/secondaryowners</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::addSecondaryOwners(int $serviceGroupId,array $array);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
  * <em>array </em>$array
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/addSecondaryOwners) 
</details>
<br>
<details>
<summary> <em>getServiceByServiceGroupByID</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/service/{$serviceId}</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getServiceByServiceGroupByID(int $serviceGroupId, int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>object</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getServiceByServiceGroupByID) 
</details>
<br>
<details>
<summary> <em>getDDoSIncidentsOfServiceGroup</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/ddos/incidents</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getDDoSIncidentsOfServiceGroup(int $serviceGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getDDoSIncidentsOfServiceGroup) 
</details>
<br>
<details>
<summary> <em>getServiceGroupByID</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/current</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getServiceGroupByID(int $serviceGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em> SingleServiceGroupData</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getServiceGroupByID) 
</details>
<br>
<details>
<summary> <em>getInvites</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/invites</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getInvites();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getInvites) 
</details>
<br>
<details>
<summary> <em>getAllServiceGroupsFromUser</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/currents?primaryOnly={$primaryOnly}</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::getAllServiceGroupsFromUser(bool $primaryOnly = null);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>bool </em>$primaryOnly <small>(not required)</small>
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/getAllServiceGroupsFromUser) 
</details>
<br>
<details>
<summary> <em>deleteSecondaryOwners</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/servicegroups/{$serviceGroupId}/secondaryowners/{$userId}</code> </summary>

<br>

  ```phpt
 Objects\ServiceGroupData::deleteSecondaryOwners(int $serviceGroupId, int $userId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceGroupId
  * <em>int </em>$userId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/service-group-controller/deleteSecondaryOwners) 
</details>

## ip-controller -> [IPv4](/src/Objects/IPv4.php)
<br>
<details>
<summary> <em>changeRDNS</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}/rdns</code> </summary>

<br>

  ```phpt
 Objects\IPv4::changeRDNS(string $ipV4,IpRDNSBody $ipRDNSBody);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
  * <em>IpRDNSBody </em>$ipRDNSBody
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/changeRDNS) 
</details>
<br>
<details>
<summary> <em>changeIPv4Description</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}/description</code> </summary>

<br>

  ```phpt
 Objects\IPv4::changeIPv4Description(string $ipV4,DescriptionBody $descriptionBody);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
  * <em>DescriptionBody </em>$descriptionBody
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/changeIPv4Description) 
</details>
<br>
<details>
<summary> <em>getDDoSModeStatus</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}/ddos/status</code> </summary>

<br>

  ```phpt
 Objects\IPv4::getDDoSModeStatus(string $ipV4);
 ``` 
* <strong>returns:</strong> &nbsp;<em> CombahtonDDoSIPStatus</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/getDDoSModeStatus) 
</details>
<br>
<details>
<summary> <em>changeDDoSModeStatus</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}/ddos/status</code> </summary>

<br>

  ```phpt
 Objects\IPv4::changeDDoSModeStatus(string $ipV4,IPDDoSStatus $iPDDoSStatus);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
  * <em>IPDDoSStatus </em>$iPDDoSStatus
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/changeDDoSModeStatus) 
</details>
<br>
<details>
<summary> <em>getIPLinkBundle</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}</code> </summary>

<br>

  ```phpt
 Objects\IPv4::getIPLinkBundle(string $ipV4);
 ``` 
* <strong>returns:</strong> &nbsp;<em> LinkIPv4BundleIPv4</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/getIPLinkBundle) 
</details>
<br>
<details>
<summary> <em>getDDoSIncidentsOnIPv4</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ips/{$ipV4}/ddos/incidents</code> </summary>

<br>

  ```phpt
 Objects\IPv4::getDDoSIncidentsOnIPv4(string $ipV4);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>string </em>$ipV4
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-controller/getDDoSIncidentsOnIPv4) 
</details>

## admin-dedicated-repository -> [DedicatedInstanceRequest](/src/Objects/DedicatedInstanceRequest.php)
<br>
<details>
<summary> <em>createInstance</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/admin/dedicateds/instances</code> </summary>

<br>

  ```phpt
 Objects\DedicatedInstanceRequest::createInstance(DedicatedInstanceRequest $dedicatedInstanceRequest);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>DedicatedInstanceRequest </em>$dedicatedInstanceRequest
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/admin-dedicated-repository/createInstance) 
</details>

## vps-controller -> [VPS](/src/Objects/VPS.php)
<br>
<details>
<summary> <em>changeRootPassword</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/password</code> </summary>

<br>

  ```phpt
 Objects\VPS::changeRootPassword(int $serviceId,PasswordChange $passwordChange);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
  * <em>PasswordChange </em>$passwordChange
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/changeRootPassword) 
</details>
<br>
<details>
<summary> <em>stopServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/stop</code> </summary>

<br>

  ```phpt
 Objects\VPS::stopServerById(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/stopServerById) 
</details>
<br>
<details>
<summary> <em>startServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/start</code> </summary>

<br>

  ```phpt
 Objects\VPS::startServerById(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/startServerById) 
</details>
<br>
<details>
<summary> <em>shutdownServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/shutdown</code> </summary>

<br>

  ```phpt
 Objects\VPS::shutdownServerById(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/shutdownServerById) 
</details>
<br>
<details>
<summary> <em>restartServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/restart</code> </summary>

<br>

  ```phpt
 Objects\VPS::restartServerById(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/restartServerById) 
</details>
<br>
<details>
<summary> <em>reinstallServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/reinstall</code> </summary>

<br>

  ```phpt
 Objects\VPS::reinstallServerById(int $serviceId,VpsReinstall $vpsReinstall);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
  * <em>VpsReinstall </em>$vpsReinstall
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/reinstallServerById) 
</details>
<br>
<details>
<summary> <em>getServerById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}</code> </summary>

<br>

  ```phpt
 Objects\VPS::getServerById(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em> VPS</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/getServerById) 
</details>
<br>
<details>
<summary> <em>getServerStatusById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/status?cache={$cache}</code> </summary>

<br>

  ```phpt
 Objects\VPS::getServerStatusById(int $serviceId, bool $cache = null);
 ``` 
* <strong>returns:</strong> &nbsp;<em> VpsStatus</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
  * <em>bool </em>$cache <small>(not required)</small>
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/getServerStatusById) 
</details>
<br>
<details>
<summary> <em>getServerStatisticsById</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/{$serviceId}/statistics?timeFrame={$timeFrame}</code> </summary>

<br>

  ```phpt
 Objects\VPS::getServerStatisticsById(int $serviceId, string $timeFrame = "");
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
  * <em>string </em>$timeFrame <small>(not required)</small>
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/getServerStatisticsById) 
</details>
<br>
<details>
<summary> <em>getAvailableLxcOs</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/os/lxc</code> </summary>

<br>

  ```phpt
 Objects\VPS::getAvailableLxcOs();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/getAvailableLxcOs) 
</details>
<br>
<details>
<summary> <em>getAvailableKvmOs</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/vps/os/kvm</code> </summary>

<br>

  ```phpt
 Objects\VPS::getAvailableKvmOs();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/vps-controller/getAvailableKvmOs) 
</details>

## authentication-controller -> [User](/src/Objects/User.php)
<br>
<details>
<summary> <em>resetPassword</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/resetPassword?token={$token}</code> </summary>

<br>

  ```phpt
 Objects\User::resetPassword(string $token,string $string);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$token
  * <em>string </em>$string
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/authentication-controller/resetPassword) 
</details>
<br>
<details>
<summary> <em>register</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/register</code> </summary>

<br>

  ```phpt
 Objects\User::register(AuthenticationRegisterData $authenticationRegisterData);
 ``` 
* <strong>returns:</strong> &nbsp;<em> JWTTokenResponse</em> 
* <strong>params:</strong>
  * <em>AuthenticationRegisterData </em>$authenticationRegisterData
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/authentication-controller/register) 
</details>
<br>
<details>
<summary> <em>login</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/login</code> </summary>

<br>

  ```phpt
 Objects\User::login(AuthenticationLoginData $authenticationLoginData);
 ``` 
* <strong>returns:</strong> &nbsp;<em> JWTTokenResponse</em> 
* <strong>params:</strong>
  * <em>AuthenticationLoginData </em>$authenticationLoginData
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/authentication-controller/login) 
</details>
<br>
<details>
<summary> <em>requestVerification</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/requestVerification?email={$email}</code> </summary>

<br>

  ```phpt
 Objects\User::requestVerification(string $email);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$email
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/authentication-controller/requestVerification) 
</details>
<br>
<details>
<summary> <em>requestPasswordReset</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/requestPasswordReset?email={$email}</code> </summary>

<br>

  ```phpt
 Objects\User::requestPasswordReset(string $email);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>string </em>$email
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/authentication-controller/requestPasswordReset) 
</details>

## payment-controller -> [Payment](/src/Objects/Payment.php)
<br>
<details>
<summary> <em>sendBalance</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/balance/send</code> </summary>

<br>

  ```phpt
 Objects\Payment::sendBalance(BalanceSendingRequest $balanceSendingRequest);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>BalanceSendingRequest </em>$balanceSendingRequest
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/sendBalance) 
</details>
<br>
<details>
<summary> <em>chargeBalance</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/balance/charge</code> </summary>

<br>

  ```phpt
 Objects\Payment::chargeBalance(BalanceChargeRequestBody $balanceChargeRequestBody);
 ``` 
* <strong>returns:</strong> &nbsp;<em> PaymentResponse</em> 
* <strong>params:</strong>
  * <em>BalanceChargeRequestBody </em>$balanceChargeRequestBody
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/chargeBalance) 
</details>
<br>
<details>
<summary> <em>getPaymentBundles</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments?page={$page}&size={$size}</code> </summary>

<br>

  ```phpt
 Objects\Payment::getPaymentBundles(int $page = 0, int $size = 0);
 ``` 
* <strong>returns:</strong> &nbsp;<em> SearchResultPaymentBundle</em> 
* <strong>params:</strong>
  * <em>int </em>$page <small>(not required)</small>
  * <em>int </em>$size <small>(not required)</small>
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/getPaymentBundles) 
</details>
<br>
<details>
<summary> <em>getInvoices</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/invoices</code> </summary>

<br>

  ```phpt
 Objects\Payment::getInvoices();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/getInvoices) 
</details>
<br>
<details>
<summary> <em>getInvoicePDF</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/invoices/{$invoiceId}/pdf</code> </summary>

<br>

  ```phpt
 Objects\Payment::getInvoicePDF(int $invoiceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$invoiceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/getInvoicePDF) 
</details>
<br>
<details>
<summary> <em>getInvoiceMail</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/invoices/{$invoiceId}/email</code> </summary>

<br>

  ```phpt
 Objects\Payment::getInvoiceMail(int $invoiceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>int </em>$invoiceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/getInvoiceMail) 
</details>
<br>
<details>
<summary> <em>getBalanceChanges</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/payments/balance</code> </summary>

<br>

  ```phpt
 Objects\Payment::getBalanceChanges();
 ``` 
* <strong>returns:</strong> &nbsp;<em> SearchResultBalanceChange</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/payment-controller/getBalanceChanges) 
</details>

## order-controller -> [Payment](/src/Objects/Payment.php)
<br>
<details>
<summary> <em>orderByTemplateGroup</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/order/template/{$templateGroupId}</code> </summary>

<br>

  ```phpt
 Objects\Payment::orderByTemplateGroup(int $templateGroupId);
 ``` 
* <strong>returns:</strong> &nbsp;<em> SingleServiceGroupData</em> 
* <strong>params:</strong>
  * <em>int </em>$templateGroupId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/order-controller/orderByTemplateGroup) 
</details>

## me-controller -> [User](/src/Objects/User.php)
<br>
<details>
<summary> <em>changeSupportData</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/supportData</code> </summary>

<br>

  ```phpt
 Objects\User::changeSupportData(SupportData $supportData);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>SupportData </em>$supportData
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changeSupportData) 
</details>
<br>
<details>
<summary> <em>changePassword</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/password</code> </summary>

<br>

  ```phpt
 Objects\User::changePassword(UserChangePasswordObject $userChangePasswordObject);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>UserChangePasswordObject </em>$userChangePasswordObject
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changePassword) 
</details>
<br>
<details>
<summary> <em>changeNames</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/names</code> </summary>

<br>

  ```phpt
 Objects\User::changeNames(User $user);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>User </em>$user
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changeNames) 
</details>
<br>
<details>
<summary> <em>changeMail</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/mail</code> </summary>

<br>

  ```phpt
 Objects\User::changeMail(User $user);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>User </em>$user
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changeMail) 
</details>
<br>
<details>
<summary> <em>changeLocale</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/locale</code> </summary>

<br>

  ```phpt
 Objects\User::changeLocale(RequestBodyLocale $requestBodyLocale);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>RequestBodyLocale </em>$requestBodyLocale
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changeLocale) 
</details>
<br>
<details>
<summary> <em>changeAddress</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me/address</code> </summary>

<br>

  ```phpt
 Objects\User::changeAddress(Address $address);
 ``` 
* <strong>returns:</strong> &nbsp;<em>string</em> 
* <strong>params:</strong>
  * <em>Address </em>$address
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/changeAddress) 
</details>
<br>
<details>
<summary> <em>meInfo</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/me</code> </summary>

<br>

  ```phpt
 Objects\User::meInfo();
 ``` 
* <strong>returns:</strong> &nbsp;<em> User</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/me-controller/meInfo) 
</details>

## template-controller -> [Template](/src/Objects/Template.php)
<br>
<details>
<summary> <em>getTemplateGroups</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/templategroups</code> </summary>

<br>

  ```phpt
 Objects\Template::getTemplateGroups();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/template-controller/getTemplateGroups) 
</details>

## ip-bundle-controller -> [IPv4Bundle](/src/Objects/IPv4Bundle.php)
<br>
<details>
<summary> <em>getDDoSIncidentsOnBundle</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/ipbundles/{$serviceId}/ddos/incidents</code> </summary>

<br>

  ```phpt
 Objects\IPv4Bundle::getDDoSIncidentsOnBundle(int $serviceId);
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
* <strong>params:</strong>
  * <em>int </em>$serviceId
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/ip-bundle-controller/getDDoSIncidentsOnBundle) 
</details>

## dedicated-controller -> [Dedicated](/src/Objects/Dedicated.php)
<br>
<details>
<summary> <em>getServiceByID_1</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/dedicated/{$id}/interfaces/statistics?start={$start}&end={$end}&interval={$interval}&count={$count}</code> </summary>

<br>

  ```phpt
 Objects\Dedicated::getServiceByID_1(int $id, string $start = "", string $end = "", int $interval = 0, int $count = 0);
 ``` 
* <strong>returns:</strong> &nbsp;<em> DedicatedStatisticsResult</em> 
* <strong>params:</strong>
  * <em>int </em>$id
  * <em>string </em>$start <small>(not required)</small>
  * <em>string </em>$end <small>(not required)</small>
  * <em>int </em>$interval <small>(not required)</small>
  * <em>int </em>$count <small>(not required)</small>
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/dedicated-controller/getServiceByID_1) 
</details>

## admin-configuration-controller -> [None](/src/Objects/None.php)
<br>
<details>
<summary> <em>getAllGPUs</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/admin/configurations/gpus</code> </summary>

<br>

  ```phpt
 Objects\None::getAllGPUs();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/admin-configuration-controller/getAllGPUs) 
</details>
<br>
<details>
<summary> <em>getAllDisks</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/admin/configurations/disks</code> </summary>

<br>

  ```phpt
 Objects\None::getAllDisks();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/admin-configuration-controller/getAllDisks) 
</details>
<br>
<details>
<summary> <em>getAllCPUs</em> &nbsp;&nbsp;&nbsp;&nbsp;->&nbsp;&nbsp; <code>/admin/configurations/cpus</code> </summary>

<br>

  ```phpt
 Objects\None::getAllCPUs();
 ``` 
* <strong>returns:</strong> &nbsp;<em>array</em> 
#### [See endpoint in API documentation](https://doc.api.tube-hosting.com/#/admin-configuration-controller/getAllCPUs) 
</details>
