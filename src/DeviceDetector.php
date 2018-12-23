<?php

namespace Gameworx\DeviceDetector;

use Illuminate\Support\Facades\Facade;

/**
 * Class DeviceDetector
 *
 * @package Gameworx\DeviceDetector
 *
 * @method static FacadeBackend get(string $user_agent)                    Parse the user agent and return the backend.
 * @method static array         getAttributes($user_agent = false)         Get the user agent's attributes from device detection.
 * @method static array         getBot($user_agent = false)                Get the bot details from device detector.
 * @method static array|string  getClient($attr = '', $user_agent = false) Get the client details for the user agent.
 * @method static array|string  getDevice($attr = '', $user_agent = false) Get the device details for the user agent.
 * @method static array|string  getOs($attr = '', $user_agent = false)     Get the operating system details for the user agent.
 * @method static boolean       isBot($user_agent = false)                 Test if the user agent is a bot.
 * @method static boolean       isDesktop($user_agent = false)             Test if the user agent is a bot.
 * @method static boolean       isMobile($user_agent = false)              Test if the user agent is a bot.
 * @method static boolean       isTouchEnabled($user_agent = false)        Test if the user agent is a bot.
 */
class DeviceDetector extends Facade
{
    protected static function getFacadeAccessor()
    {
        return FacadeBackend::class;
    }
}
