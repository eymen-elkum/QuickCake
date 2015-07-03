# QuickCake: CakePHP Application Quick Start.

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

A project for creating applications with [CakePHP](http://cakephp.org) 3.0.
Work as a basic CMS can be customized easily.

## Included plugins:
1. [Bootstrap UI](https://github.com/friendsofcake/bootstrap-ui): Transparently use Twitter Bootstrap 3 with CakePHP 3.
2. [CRUD](https://github.com/FriendsOfCake/crud): CakePHP Application development on steroids - rapid prototyping / scaffolding & production ready code - JSON APIs and more.
3. [Proffer](https://github.com/FriendsOfCake/crud): An upload plugin for CakePHP 3.

## Tables:
1. Categories Table (with image support).
2. Contents Table (with image support).

## Installation:

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist ayman/quick_cake [app_name]`.

    If Composer is installed globally, run
    ```bash
    composer create-project --prefer-dist ayman/quick_cake [app_name]
    ```

## server:
    `$ "bin/cake" server -p 5000`

## Code generation with bake templates from `BootstrapUI` Plugin:
For example: `bookmarks` table

`$ "bin/cake" bake all bookmarks -t BootstrapUI`
