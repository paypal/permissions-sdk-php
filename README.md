
PayPal PHP Permissions SDK
===============================

Prerequisites
-------------

PayPal's PHP Permissions SDK requires 

 * PHP 5.2 and above with curl extension enabled
  

Using the SDK
-------------

To use the SDK, 

* Copy the config and lib folders into your project.
* Make sure that the lib folder in your project is available in PHP's include path
* Include the services\Permissions\PermissionsService.php file in your code.
* Create a service wrapper object
* Create a request object as per your project's needs. All the API request and response classes are available in services\Permissions\PermissionsService.php
* Invoke the appropriate method on the request object.

For example,

	require_once('services\Permissions\PermissionsService.php');
	require_once('PPLoggingManager.php');

    $request = new RequestPermissionsRequest($scope,$returnURL);
	$request->requestEnvelope = $requestEnvelope;
	.......
	
	$permissions = new PermissionsService('Permissions');
	$response = $permissions->RequestPermissions($request);
	
	$ack = strtoupper($response->responseEnvelope->ack);
 
	if($ack == 'SUCCESS') {
		// Success
	}
  
 

SDK Configuration
-----------------

replace the API credential in config/sdk_config.ini . You can use the configuration file to configure

 * (Multiple) API account credentials.
 * Service endpoint and other HTTP connection parameters 


Please refer to the sample config file provided with this bundle.
