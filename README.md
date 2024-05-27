# TRON API
A PHP API for interacting with the Tron Protocol

[![Latest Stable Version](https://poser.pugx.org/ufado/tron-api/version)](https://packagist.org/packages/ufado/tron-api)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Build Status](https://api.travis-ci.com/ufado/tron-api.svg?branch=master)](https://travis-ci.com/ufado/tron-api)
[![Issues](https://img.shields.io/github/issues/ufado/tron-api.svg)](https://github.com/ufado/tron-api/issues)
[![Pull Requests](https://img.shields.io/github/issues-pr/ufado/tron-api.svg)](https://github.com/ufado/tron-api/pulls)
[![Contributors](https://img.shields.io/github/contributors/ufado/tron-api.svg)](https://github.com/ufado/tron-api/graphs/contributors)

## Install

```bash
> composer require ufado/tron-api
```
## Requirements

The following versions of PHP are supported by this version.

* PHP 7.1
* PHP 7.2
* PHP 7.3

## Example Usage

```php
use IEXBase\TronAPI\Tron;

$fullNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$solidityNode = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');
$eventServer = new \IEXBase\TronAPI\Provider\HttpProvider('https://api.trongrid.io');

try {
    $tron = new \IEXBase\TronAPI\Tron($fullNode, $solidityNode, $eventServer);
} catch (\IEXBase\TronAPI\Exception\TronException $e) {
    exit($e->getMessage());
}


$this->setAddress('..');
//Balance
$tron->getBalance(null, true);

// Transfer Trx
var_dump($tron->send('to', 1.5));

//Generate Address
var_dump($tron->createAccount());

//Get Last Blocks
var_dump($tron->getLatestBlocks(2));

//Change account name (only once)
var_dump($tron->changeAccountName('address', 'NewName'));
```

## Stake 2.0

Support stake2.0,you can see example usage in [/examples/stake2.php]( /examples/stake2.php)

```php
public function sendDelegate(string $to, float $amount,string $resource = 'ENERGY',  $lock=false,$lock_period=0,string $from=null)
public function sendUnDelegate(string $to, float $amount,string $resource = 'ENERGY',string $from=null): array
public function freezeBalanceV2(float $amount = 0, string $resource = 'ENERGY', string $owner_address = null)
public function getCanDelegatedMaxSize(int $type = 1,string $address = null)
public function getAvailableUnfreezeCount(string $address = null)
```

## Testing

``` bash
$ vendor/bin/phpunit
```

## Donations
**Send me on Tron**: TFFEFBLX8C56A8SUA61ToPqgD21aASK1dy

**Send to iexbase on Tron**: TRWBqiqoFZysoAeyR1J35ibuyc8EvhUAoY

## Thanks

Thanks for the hard work by [iexbase](https://github.com/iexbase)
