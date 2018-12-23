<?php

namespace Dungeonworx\DeviceDetector\Tests;

use Dungeonworx\DeviceDetector\FacadeBackend;
use PHPUnit\Framework\TestCase;

class FacadeBackendTest extends TestCase
{
    /**
     * DeviceDetector Facade Backend
     *
     * @var FacadeBackend
     */
    private $deviceDetector;

    /**
     * FacadeBackendTest constructor.
     *
     * @param null   $name
     * @param array  $data
     * @param string $dataName
     */
    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);

        $this->deviceDetector = new FacadeBackend(app(\DeviceDetector\DeviceDetector::class));
    }

    /**
     * Test the facade backend for functionality from DeviceDetector.
     */
    public function testDesktopParser()
    {
        $this->deviceDetector->get('Mozilla/5.0 (Macintosh; Intel Mac OS X 10_14_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36');

        $attributes = [
            "browser"               => true,
            "camera"                => false,
            "car"                   => false,
            "console"               => false,
            "desktop"               => true,
            "feature_phone"         => false,
            "feed_reader"           => false,
            "library"               => false,
            "media_player"          => false,
            "mobile_app"            => false,
            "mobile_device"         => false,
            "phone_tablet"          => false,
            "pim"                   => false,
            "portable_media_player" => false,
            "smart_display"         => false,
            "smart_phone"           => false,
            "tablet"                => false,
            "touch_enabled"         => false,
            "tv"                    => false,
        ];

        $client = [
            "type"           => "browser",
            "name"           => "Chrome",
            "short_name"     => "CH",
            "version"        => "70.0",
            "engine"         => "Blink",
            "engine_version" => "",
        ];

        $device = [
            "brand"      => "AP",
            "brand_name" => "Apple",
            "model"      => "",
            "name"       => "desktop",
        ];

        $operating_system = [
            "name"       => "Mac",
            "short_name" => "MAC",
            "version"    => "10.14",
            "platform"   => "",
        ];

        $this->assertNull($this->deviceDetector->getBot());
        $this->assertEquals($attributes, $this->deviceDetector->getAttributes());
        $this->assertEquals($client, $this->deviceDetector->getClient());
        $this->assertEquals($device, $this->deviceDetector->getDevice());
        $this->assertEquals($operating_system, $this->deviceDetector->getOs());

        foreach ($client as $key => $value) {
            $this->assertEquals($value, $this->deviceDetector->getClient($key));
        }

        foreach ($device as $key => $value) {
            $this->assertEquals($value, $this->deviceDetector->getDevice($key));
        }

        foreach ($operating_system as $key => $value) {
            $this->assertEquals($value, $this->deviceDetector->getOs($key));
        }
    }
}
