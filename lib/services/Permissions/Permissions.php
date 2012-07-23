<?php
 /**
  * Stub objects for Permissions 
  * Auto generated code 
  * 
  */
/**
 * No Document Comments
 */
class ErrorData  {

	/**
	 * No Document Comments
	 *@access public
	 *@var integer
	 */ 
	public $errorId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $domain;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $subdomain;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorSeverity
	 */ 
	public $severity;

	/**
	 * No Document Comments
	 *@access public
	 *@var ErrorCategory
	 */ 
	public $category;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $message;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $exceptionId;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorParameter
	 */ 
	public $parameter;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'errorId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->errorId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'domain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->domain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'subdomain';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->subdomain = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'severity';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->severity = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'category';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->category = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'message';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->message = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'exceptionId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->exceptionId = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "parameter($i)")) {
					$newPrefix = $prefix . "parameter($i).";
					$this->parameter[$i] = new ErrorParameter();
					$this->parameter[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class ErrorParameter  {

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $name;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $value;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'name';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->name = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'value';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->value = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This is the sample message 
 */
class ResponseEnvelope  {

	/**
	 * No Document Comments
	 *@access public
	 *@var dateTime
	 */ 
	public $timestamp;

	/**
	 * Application level acknowledgment code. 
	 *@access public
	 *@var AckCode
	 */ 
	public $ack;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $correlationId;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $build;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'timestamp';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->timestamp = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'ack';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->ack = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'correlationId';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->correlationId = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'build';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->build = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * This specifies the list of parameters with every request to
 * the service. 
 */
class RequestEnvelope  {

	/**
	 * This should be the standard RFC 3066 language identification
	 * tag, e.g., en_US. 
	 *@access public
	 *@var string
	 */ 
	public $errorLanguage;

	/**
	 * Constructor with arguments
	 */
	public function __construct($errorLanguage = null) {
		$this->errorLanguage = $errorLanguage;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->errorLanguage != null) {
			$str .= $delim .  $prefix . 'errorLanguage=' . urlencode($this->errorLanguage);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class FaultMessage  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Describes the request for permissions over an account.
 * Primary element is "scope", which lists the permissions
 * needed. 
 */
class RequestPermissionsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * URI of the permissions being requested. 
     *@array
	 *@access public
	 *@var string
	 */ 
	public $scope;

	/**
	 * URL on the client side that will be used to communicate
	 * completion of the user flow. The URL can include query
	 * parameters. 
	 *@access public
	 *@var string
	 */ 
	public $callback;

	/**
	 * Constructor with arguments
	 */
	public function __construct($scope = null, $callback = null) {
		$this->scope = $scope;
		$this->callback = $callback;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		for($i = 0; $i < count($this->scope); $i++) {
			$str .= $delim .  $prefix . "scope($i)=" .  urlencode($this->scope[$i]);
			$delim = '&';
		}
		if($this->callback != null) {
			$str .= $delim .  $prefix . 'callback=' . urlencode($this->callback);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * Returns the temporary request token 
 */
class RequestPermissionsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Temporary token that identifies the request for permissions.
	 * This token cannot be used to access resources on the
	 * account. It can only be used to instruct the user to
	 * authorize the permissions. 
	 *@access public
	 *@var string
	 */ 
	public $token;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$mapKeyName =  $prefix . 'token';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * The request use to retrieve a permanent access token. The
 * client can either send the token and verifier, or a subject.
 * 
 */
class GetAccessTokenRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The temporary request token received from the
	 * RequestPermissions call. 
	 *@access public
	 *@var string
	 */ 
	public $token;

	/**
	 * The verifier code returned to the client after the user
	 * authorization flow completed. 
	 *@access public
	 *@var string
	 */ 
	public $verifier;

	/**
	 * The subject email address used to represent existing 3rd
	 * Party Permissions relationship. This field can be used in
	 * lieu of the token and verifier. 
	 *@access public
	 *@var string
	 */ 
	public $subjectAlias;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != null) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		if($this->verifier != null) {
			$str .= $delim .  $prefix . 'verifier=' . urlencode($this->verifier);
			$delim = '&';
		}
		if($this->subjectAlias != null) {
			$str .= $delim .  $prefix . 'subjectAlias=' . urlencode($this->subjectAlias);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * Permanent access token and token secret that can be used to
 * make requests for protected resources owned by another
 * account. 
 */
class GetAccessTokenResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved for this
	 * relationship. 
     *@array
	 *@access public
	 *@var string
	 */ 
	public $scope;

	/**
	 * Permanent access token that identifies the relationship that
	 * the user authorized. 
	 *@access public
	 *@var string
	 */ 
	public $token;

	/**
	 * The token secret/password that will need to be used when
	 * generating the signature. 
	 *@access public
	 *@var string
	 */ 
	public $tokenSecret;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				$mapKeyName = $prefix . "scope($i)";
				if (PPUtils::array_match_key($map, $mapKeyName)) {
					$this->scope[$i] = $map[$mapKeyName];
				} else {
					break;
				}
				$i++;
			}
			$mapKeyName =  $prefix . 'token';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->token = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'tokenSecret';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->tokenSecret = $map[$mapKeyName];
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to retrieve the approved list of permissions
 * associated with a token. 
 */
class GetPermissionsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * The permanent access token to ask about. 
	 *@access public
	 *@var string
	 */ 
	public $token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($token = null) {
		$this->token = $token;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != null) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * The list of permissions associated with the token. 
 */
class GetPermissionsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * Identifier for the permissions approved for this
	 * relationship. 
     *@array
	 *@access public
	 *@var string
	 */ 
	public $scope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				$mapKeyName = $prefix . "scope($i)";
				if (PPUtils::array_match_key($map, $mapKeyName)) {
					$this->scope[$i] = $map[$mapKeyName];
				} else {
					break;
				}
				$i++;
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to invalidate an access token and revoke the
 * permissions associated with it. 
 */
class CancelPermissionsRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $token;

	/**
	 * Constructor with arguments
	 */
	public function __construct($token = null) {
		$this->token = $token;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->token != null) {
			$str .= $delim .  $prefix . 'token=' . urlencode($this->token);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class CancelPermissionsResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * List of Personal Attributes to be sent as a request. 
 */
class PersonalAttributeList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var PersonalAttribute
	 */ 
	public $attribute;


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		for($i = 0; $i < count($this->attribute); $i++) {
			$str .= $delim .  $prefix . "attribute($i)=" .  urlencode($this->attribute[$i]);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * A property of User Identity data , represented as a
 * Name-value pair with Name being the PersonalAttribute
 * requested and value being the data. 
 */
class PersonalData  {

	/**
	 * No Document Comments
	 *@access public
	 *@var PersonalAttribute
	 */ 
	public $personalDataKey;

	/**
	 * No Document Comments
	 *@access public
	 *@var string
	 */ 
	public $personalDataValue;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$mapKeyName =  $prefix . 'personalDataKey';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->personalDataKey = $map[$mapKeyName];
			}
			$mapKeyName =  $prefix . 'personalDataValue';
			if($map != null && array_key_exists($mapKeyName, $map)) {
				$this->personalDataValue = $map[$mapKeyName];
			}
			
		}
	}
} 



/**
 * Set of personal data which forms the response of
 * GetPersonalData call. 
 */
class PersonalDataList  {

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var PersonalData
	 */ 
	public $personalData;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "personalData($i)")) {
					$newPrefix = $prefix . "personalData($i).";
					$this->personalData[$i] = new PersonalData();
					$this->personalData[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * Request to retrieve basic personal data.Accepts
 * PersonalAttributeList as request and responds with
 * PersonalDataList. This call will accept only 'Basic'
 * attributes and ignore others. 
 */
class GetBasicPersonalDataRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var PersonalAttributeList
	 */ 
	public $attributeList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($attributeList = null) {
		$this->attributeList = $attributeList;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->attributeList != null) {
			$newPrefix = $prefix . 'attributeList.';
			$str .= $delim . call_user_func(array($this->attributeList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * Request to retrieve personal data.Accepts
 * PersonalAttributeList as request and responds with
 * PersonalDataList. This call will accept both 'Basic' and
 * Advanced attributes. 
 */
class GetAdvancedPersonalDataRequest  {

	/**
	 * No Document Comments
	 *@access public
	 *@var RequestEnvelope
	 */ 
	public $requestEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var PersonalAttributeList
	 */ 
	public $attributeList;

	/**
	 * Constructor with arguments
	 */
	public function __construct($attributeList = null) {
		$this->attributeList = $attributeList;
	}


	public function toNVPString($prefix = '') {
		$str = '';
		$delim = '';
		if($this->requestEnvelope != null) {
			$newPrefix = $prefix . 'requestEnvelope.';
			$str .= $delim . call_user_func(array($this->requestEnvelope, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		if($this->attributeList != null) {
			$newPrefix = $prefix . 'attributeList.';
			$str .= $delim . call_user_func(array($this->attributeList, 'toNVPString'), $newPrefix);
			$delim = '&';
		}
		return $str;
	}


} 



/**
 * No Document Comments
 */
class GetBasicPersonalDataResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var PersonalDataList
	 */ 
	public $response;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "response.")) {
				$newPrefix = $prefix . "response.";
				$this->response = new PersonalDataList();
				$this->response->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 



/**
 * No Document Comments
 */
class GetAdvancedPersonalDataResponse  {

	/**
	 * No Document Comments
	 *@access public
	 *@var ResponseEnvelope
	 */ 
	public $responseEnvelope;

	/**
	 * No Document Comments
	 *@access public
	 *@var PersonalDataList
	 */ 
	public $response;

	/**
	 * No Document Comments
     *@array
	 *@access public
	 *@var ErrorData
	 */ 
	public $error;




	public function init($map = null, $prefix = '') {
		if($map != null) {
			if (PPUtils::array_match_key($map, $prefix . "responseEnvelope.")) {
				$newPrefix = $prefix . "responseEnvelope.";
				$this->responseEnvelope = new ResponseEnvelope();
				$this->responseEnvelope->init($map, $newPrefix);
			}
			if (PPUtils::array_match_key($map, $prefix . "response.")) {
				$newPrefix = $prefix . "response.";
				$this->response = new PersonalDataList();
				$this->response->init($map, $newPrefix);
			}
			$i = 0;
			while(true) {
				if (PPUtils::array_match_key($map, $prefix . "error($i)")) {
					$newPrefix = $prefix . "error($i).";
					$this->error[$i] = new ErrorData();
					$this->error[$i]->init($map, $newPrefix);
				} else {
					break;
				}
				$i++;
			}
			
		}
	}
} 




?>