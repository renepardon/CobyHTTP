CobyHTTP
========

Asynchronous HTTP library as ZF2 module.

Build status
------------
Master branch:

[![Build Status](https://secure.travis-ci.org/renepardon/CobyHTTP.png?branch=master)](http://travis-ci.org/renepardon/CobyHTTP)

Installation
------------

Ready to use within a ZF2 project. Just clone into **vendor/** directory and link within application config as module.

### Composer

Add the following parts to your **composer.json** file...

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/renepardon/CobyHTTP.git"
        }
    ],
    "require": {
        "renepardon/CobyHTTP": "dev-master"
    }
}
```

... and execute:

    $ php composer.phar update

### Git clone

    $ cd /path/to/project
    $ mkdir vendor/renepardon
    $ git clone --recursive https://github.com/renepardon/CobyHTTP.git vendor/renepardon/CobyHTTP

#### config/application.config.php

```php
<?php
return array(
    // This should be an array of module namespaces used in the application.
    'modules' => array(
        'CobyHTTP',
    ),
);
```

Configuration
-------------

There is a configuration array placed within **module.config.php**. You can edit this configuration or place your own one into the Application's configuration folder.

Usage
-----

```php
<?php
// Retrieve service instance.
$service = $this->serviceManager->get('cobyhttp');
```
