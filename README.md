# Laravel DeviceDetector Bridge
[![Latest Stable Version](https://poser.pugx.org/dungeonworx/laravel-devicedetector/v/stable?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Latest Unstable Version](https://poser.pugx.org/dungeonworx/laravel-devicedetector/v/unstable?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Total Downloads](https://poser.pugx.org/dungeonworx/laravel-devicedetector/downloads?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![License](https://poser.pugx.org/dungeonworx/laravel-devicedetector/license?format=flat)](https://packagist.org/packages/dungeonworx/laravel-devicedetector)
[![Build Status](https://travis-ci.org/dungeonworx/devicedetector.svg?branch=master)](https://travis-ci.org/dungeonworx/devicedetector)

This package was created out of a need to integrate [Piwik's DeviceDetector](https://packagist.org/packages/piwik/device-detector)
package into my Laravel application in a specific way. After working on the code in my project, I realized this package
would be best suited to be a package and committed publicly for consumption.

The goal of this project is to provide easier access to the DeviceDetector library and also wrap it in an easy to use
Laravel Facade to facilitate seamless access in other areas of the code. This library also provides a middleware which
provides some additional information in your request payload to modify parts of your application based on the device
that is currently connected.

## Usage
### Facade
If you include the middleware in your requests, you only need to use the Facade's methods, which are [documented](https://dungeonworx.org/devicedetector/classes/Dungeonworx.DeviceDetector.DeviceDetector.html).

If you do not use the middleware in your request, or you wish to check a different user agent, you will need to pass the
optional `user_agent` parameter to the specific method. Please note, this changes the parsed results for all future
requests as well. So if you wish to go back to returning value for the current browser request, you will need to call
`DeviceDetector::get($request->userAgent())` once more to reset back to the current browsing session.

### Middleware
To use this package in your middleware, just add the `device_detector` middleware alias to your `web` middleware in the
`Http/Kernel.php` file in your project. Once that's installed, you can access the four included detectors in your
request. The is key in the request contains an array with four booleans; `bot`, `desktop`, `mobile`, and `touch`. These
booleans are available for every request and also cached to your already assigned cache repository.

## Documentation
This package is documented using [phpDocumentor](https://www.phpdoc.org/) and it's API documentation can be located 
[here](https://dungeonworx.org/devicedetector/classes/).
