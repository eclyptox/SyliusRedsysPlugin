
# Redsys Plugin [![Build Status](https://travis-ci.org/eclyptox/SyliusRedsysPlugin.svg?branch=master)](https://travis-ci.org/eclyptox/SyliusRedsysPlugin)

## Overview

This plugin integrated [Redsys payments](http://www.redsys.es/) with Sylius based applications. After installing it you should be able to create a payment method for Redsys gateway and enable its payments in your web store.

## Installation

```bash
$ composer require eclyptox/redsys-plugin

```
    
Add plugin dependencies to your config/bundles.php file:

```php
return [
    Eclyptox\SyliusRedsysPlugin\EclyptoxSyliusRedsysPlugin::class => ['all' => true],
]
```

## Testing
```bash
$ wget http://getcomposer.org/composer.phar
$ php composer.phar install
$ yarn install
$ yarn run gulp
$ php bin/console sylius:install --env test
$ php bin/console server:start --env test
$ open http://localhost:8000
$ bin/behat features/*
$ bin/phpspec run
```

## Contribution

Learn more about our contribution workflow on <http://docs.sylius.org/en/latest/contributing/>.
