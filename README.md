# Jupyter-PHP Installer ([Main Page](https://litipk.github.io/Jupyter-PHP-Installer/))

This is the basis of a pull request to the base project.  It's not been touched in 5 or 6 years.  In that time the PHP has moved on.  
This project fixes the installer which will not work with composer 2.x because the name it adds to the composer.json it creates is 
not compatible with the regex used by composer to validate this value.

The project works with PHP 8.2 and composer 2.5.1 and later.  symfony/console has been updated.

A script has been added to create a .phar file that works.

This project is one of several that aim to make PHP available as a Jupyter kernel once again.  Part of this is compiling the php-zmq
extension which is an essential component of the Jupyter-PHP project this installer installs.

[![Author](http://img.shields.io/badge/author-@castarco-blue.svg?style=flat-square)](https://twitter.com/castarco)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Packagist Version](https://img.shields.io/packagist/v/Litipk/jupyter-php.svg?style=flat-square)](https://packagist.org/packages/Litipk/jupyter-php)

## Introduction

[**Jupyter-PHP**](https://github.com/Litipk/Jupyter-PHP) is a PHP kernel for [*Jupyter*](http://jupyter.org). This
repository holds an installer to make easier installing the Jupyter-PHP kernel.

## Getting started

Go to the [main page](https://litipk.github.io/Jupyter-PHP-Installer/) and follow the instructions.

## Learn more

 * [Chat Room](https://gitter.im/Litipk/Jupyter-PHP) : If you want to have a real-time chat with other Jupyter-PHP users or developers, you can do it here.
 * [Group / Mail List](https://groups.io/g/jupyter-php) : If a chat room isn't enough to post your doubts or ideas, you can join to our mail list.

## How to contribute

 * First of all, you can take a look on the [bugtracker](https://github.com/Litipk/Jupyter-PHP-Installer/issues) and decide if there is something that you want to do :wink: . If you think there are missing improvements in this file, then you are invited to modify the TODO list.
 * You can also send us bug reports using the same bugtracker.
 * If you are really interested on helping to improve Litipk\BigNumbers, we recommend to read the [contributing guidelines](https://github.com/Litipk/Jupyter-PHP-Installer/blob/master/CONTRIBUTING.md).


## License

Jupyter-PHP and its installer are licensed under the [MIT License](https://github.com/Litipk/Jupyter-PHP-Installer/blob/master/LICENSE).
