<?php
include_once '../vendor/autoload.php';

$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}

$tron->setAddress('address');
$tron->setPrivateKey('privateKey');

/*The definations of new function are as follows.
 *If you are confused in the meaning of params,please see docs on trongrid website.
*/
// public function sendDelegate(string $to, float $amount,string $resource = 'ENERGY',  $lock=false,$lock_period=0,string $from=null)
// public function sendUnDelegate(string $to, float $amount,string $resource = 'ENERGY',string $from=null): array
// public function freezeBalanceV2(float $amount = 0, string $resource = 'ENERGY', string $owner_address = null)
// public function getCanDelegatedMaxSize(int $type = 1,string $address = null)
// public function getAvailableUnfreezeCount(string $address = null)

try {
    $transferData = $tron->freezeBalanceV2(10); 
    $transferData = $tron->sendDelegate('address',1); 
    $transferData = $tron->sendUnDelegate('address',1); 
    $transferData = $tron->getdelegatedresourcev2('address');
    $transferData = $tron->getdelegatedresourceaccountindexv2('address');
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    die($e->getMessage());
}

var_dump($transferData);


