<?php

namespace Gameworx\DeviceDetector;

use Closure;
use Illuminate\Http\Request;

class DeviceDetectorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request The request data passed to middleware.
     * @param Closure $next    The next request in the middleware chain.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        DeviceDetector::get($request->userAgent());

        $request->merge([
            'is' => [
                'bot'     => DeviceDetector::isBot(),
                'desktop' => DeviceDetector::isDesktop(),
                'mobile'  => DeviceDetector::isMobile(),
                'touch'   => DeviceDetector::isTouchEnabled(),
            ],
        ]);

        return $next($request);
    }
}
