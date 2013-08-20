bfp4f-rcon
==========

Battlefield Play4Free RCON Class developed by Ronny 'roennel' Gysin. Maintained by @piqus.

## Installation ##

### Install it via Composer ###

Add `"piqus/bfp4f-rcon": "dev-master"` into your `composer.json` dependencies.

```js
{
  "require": {
    "piqus/bfp4f-rcon": "dev-master"
  }
}
```

then add link to your composer autoloader in php script:

```php
/* Load Classes 
 ********************/
require_once __DIR__ . '/vendor/autoload.php';
```


### Install via `.ZIP` ###

Download from https://github.com/piqus/bfp4f-rcon/archive/master.zip or click on 
"Download ZIP". Unpack. Add require each field by php `require_once` statement. Like:


```php
// Autoload:
foreach (glob("src/T4G/BFP4F/Rcon/*.php") as $class)
{
    require_once $class;
}
```

or include as single file:

```php
require_once "src/T4G/BFP4F/Rcon/Base.php";
require_once "src/T4G/BFP4F/Rcon/Players.php";
require_once "src/T4G/BFP4F/Rcon/Chat.php";
require_once "src/T4G/BFP4F/Rcon/Server.php";
require_once "src/T4G/BFP4F/Rcon/Support.php";
require_once "src/T4G/BFP4F/Rcon/Stats.php";
```

## Use ##

Instantiate namespace and establish connection:

```php
/* Instantiate rcon 
 ********************/
use T4G\BFP4F\Rcon as rcon;
$rc = new rcon\Base();

/* Connect to server 
 ********************/
$rc->ip = $server_ip;
$rc->port = $server_port;
$rc->pwd = $rcon_password;

$rc->connect($cn, $cs);

if ($cn !== 0) {
    $err = "E: Game server {$srv['srv_name']} is not responding;".PHP_EOL.
           "E: Invalid credentials or server is down;".PHP_EOL.
           "E: $cs ($cn)" . PHP_EOL;
    error_log($err);
    echo($err);
    exit(1);
}

$rc->init();
```

## Contribution ##

I'd apreciate any help to improve this project. 
Use `git clone` magic or e-mail/IM me with your changes 
or sign up on github then edit it online by pressing "Edit".
