# TubePHP-API wrapper examples

Here are some examples of how to use the TubePHP API. In case of questions or problems please create an issue according to our [issue template](https://github.com/TubeHosting/TubePHP-API/tree/main/.github/ISSUE_TEMPLATE)
 
These examples are not meant to get copied etc. but to convey an understanding of the basic wrapper usage.

## User

Following example shows how to get and display the information about a user

- [user overview (with credentials) ](userOverview/userOverview.php)

## Vps

Similar to the last example, we get information about something, in this case VPS information and statistics by the id

- [vps overview](vpsOverview/vpsOverview.php)

Exactly the same, but without the password authentication (using the api key)

- [vps overview (with api key)](vpsOverviewToken/vpsOverviewToken.php)

## Address

The following example shows how to change the address for the user account 

- [set new address](setNewAddress/setNewAddress.php)

## Service

This example shows how to fetch the services and display them in an ordered way

- [service overview](serviceOverview/serviceOverview.php)
