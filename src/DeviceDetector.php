<?php
/**
 * This file provides the Laravel Facade for accessing user agent data.
 *
 * @license https://opensource.org/licenses/MIT MIT
 */

namespace Dungeonworx\DeviceDetector;

use Illuminate\Support\Facades\Facade;

/**
 * Class DeviceDetector
 *
 * @package Dungeonworx\DeviceDetector
 * @see     FacadeBackend
 *
 * @method static FacadeBackend get(string $user_agent)                                  Parse the user agent and return the backend.
 * @method static array         getAttributes(string $user_agent = false)                Get the user agent's attributes from device detection.
 * @method static array         getBot(string $user_agent = false)                       Get the bot details from device detector.
 * @method static array|string  getClient(string $attr = '', string $user_agent = false) Get the client details for the user agent.
 * @method static array|string  getDevice(string $attr = '', string $user_agent = false) Get the device details for the user agent.
 * @method static array|string  getOs(string $attr = '', string $user_agent = false)     Get the operating system details for the user agent.
 * @method static boolean       isBot(string $user_agent = false)                        Test if the user agent is a bot.
 * @method static boolean       isDesktop(string $user_agent = false)                    Test if the user agent is a bot.
 * @method static boolean       isMobile(string $user_agent = false)                     Test if the user agent is a bot.
 * @method static boolean       isTouchEnabled(string $user_agent = false)               Test if the user agent is a bot.
 */
class DeviceDetector extends Facade
{
    /**
     * Return's the name of the bound facade accessor class.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return FacadeBackend::class;
    }
}
