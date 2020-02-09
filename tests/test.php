<?php

use Medianasms\Client;
use Medianasms\Errors\Error;
use Medianasms\Errors\HttpException;
use Medianasms\Errors\ResponseCodes;

require_once __DIR__ . '/../vendor/autoload.php';

$client = new Client("API-KEY");

try {
    $pattern = $client->sendPattern("771thtdfug", "985000125475", "", ['name' => "Mediana"]);
    var_dump($pattern);
} catch (Error $e) {
    var_dump($e->unwrap());
    echo $e->getCode();

    if ($e->code() == ResponseCodes::ErrUnprocessableEntity) {
        echo "Unprocessable entity";
    }
} catch (HttpException $e) {
    var_dump($e->getMessage());
    echo $e->getCode();
}
