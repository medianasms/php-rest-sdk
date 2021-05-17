# Mediana SMS php api SDK

This repository contains open source PHP client for `mediana_sms` api. Documentation can be found at: <http://docs.medianasms.com>.

[![Build Status](https://travis-ci.org/medianasms/php-rest-sdk.svg?branch=master)](https://travis-ci.org/medianasms/php-rest-sdk)

## Installation

use with composer:

```bash
composer require medianasms/php-rest-sdk
```

if you don't want to use composer, you can download it directly :

```bash
wget https://github.com/medianasms/php-rest-sdk/archive/master.zip
```

## Examples

For using sdk, you have to create a client instance that gives you available methods on API

```php
require 'autoload.php';

// you api key that generated from panel
$apiKey = "api-key";

$client = new \Medianasms\Client($apiKey);

...
```

### Credit check

```php
# return float64 type credit amount
$credit = $client->getCredit();

```

### Send one to many

For sending sms, obviously you need `originator` number, `recipients` and `message`.

```php
$bulkID = $client->send(
    "+9810001",          // originator
    ["98912xxxxxxx"],    // recipients
    "mediana is awesome" // message
);

```

If send is successful, a unique tracking code returned and you can track your message status with that.

### Get message summery

```php
$bulkID = "message-tracking-code";

$message = $client->get_message($bulkID);

echo $message->status;   // get message status
echo $message->cost;     // get message cost
echo $message->payback;  // get message payback
```

### Get message delivery statuses

```php
$bulkID = "message-tracking-code"

list($statuses, $paginationInfo) = $client->fetchStatuses($bulkID, 0, 10)

// you can loop in messages statuses list
foreach($statuses as status) {
    echo sprintf("Recipient: %s, Status: %s", $status->recipient, $status->status);
}

echo sprintf("Total: ", $paginationInfo->total);
```

### Inbox fetch

fetch inbox messages

```php
list($messages, $paginationInfo) = $client->fetchInbox(0, 10);

foreach($messages as $message) {
    echo sprintf("Received message %s from number %s in line %s", $message->message, $message->sender, $message->number);
}
```

### Pattern create

For sending messages with predefined pattern(e.g. verification codes, ...), you hav to create a pattern. a pattern at least have a parameter. parameters defined with `%param_name%`.

```php
$pattern = $client->createPattern("%name% is awesome", False);

echo $pattern->code;
```

### Send with pattern

```php
$patternValues = [
    "name" => "Mediana",
];

$bulkID = $client->sendPattern(
    "t2cfmnyo0c",    // pattern code
    "+9810001",      // originator
    "98912xxxxxxx",  // recipient
    $patternValues,  // pattern values
);
```

### Error checking

```php
use Medianasms\Errors\Error;
use Medianasms\Errors\HttpException;

try{
    $bulkID = $client->send("9810001", ["98912xxxxx"], "mediana is awesome");
} catch (Error $e) { // mediana error
    var_dump($e->unwrap()); // get real content of error
    echo $e->getCode();

    // error codes checking
    if ($e->code() == ResponseCodes::ErrUnprocessableEntity) {
        echo "Unprocessable entity";
    }
} catch (HttpException $e) { // http error
    var_dump($e->getMessage()); // get stringified error
    echo $e->getCode();
}
```
website: https://medianasms.com
برای دسترسی به سایر مستندات وب سرویس و زبان های برنامه نویسی سامانه پیام کوتاه مدیانا اس ام اس به لینک زیر مراجعه کنید
https://medianasms.com/lab/
