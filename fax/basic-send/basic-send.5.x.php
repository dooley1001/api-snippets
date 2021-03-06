<?php
// Get the PHP helper library from https://twilio.com/docs/libraries/php
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/console
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$options = array(
  "from" => "+15017122661"
);
$fax = $client->fax->v1->faxes->create(
    "+15558675310",
    "https://www.twilio.com/docs/documents/25/justthefaxmaam.pdf",
    $options
);

echo $fax->sid;
