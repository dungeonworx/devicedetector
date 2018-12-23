# Laravel DeviceDetector Bridge
[![Latest Stable Version](https://poser.pugx.org/dungeonworx/laravel-devicedetector/v/stable?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Latest Unstable Version](https://poser.pugx.org/dungeonworx/laravel-devicedetector/v/unstable?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Total Downloads](https://poser.pugx.org/dungeonworx/laravel-devicedetector/downloads?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![License](https://poser.pugx.org/dungeonworx/laravel-devicedetector/license?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Build Status](https://travis-ci.org/dungeonworx/devicedetector.svg?branch=master)](https://travis-ci.org/dungeonworx/devicedetector)

This package was created out of a need to integrate [Piwik's DeviceDetector](https://packagist.org/packages/piwik/device-detector)
package into my Laravel application in a specific way. After working on the code in my project, I realized this package
would be best suited to be a package and committed publicly for consumption.

## Usage

### Middleware
To use this package in your middleware, just add the `device_detector` middleware alias to your `web` middleware in the
`Http/Kernel.php` file in your project. Once that's installed, you can access the four included detectors in your
request. The is key in the request contains an array with four booleans; `bot`, `desktop`, `mobile`, and `touch`. These
booleans are available for every request and also cached to your already assigned cache repository.
