<?php

namespace Revlv\Http\Middleware;

use Closure;

class InjectServiceKeys
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $content = $response->getContent();

        $content = $this->replaceResponse($content);
        $response->setContent($content);

        return $response;
    }

    /**
     * Replace the content responded by the server.
     *
     * @param [type] $content [description]
     *
     * @return [type] [description]
     */
    protected function replaceResponse($content)
    {
        return str_replace('GOOGLE_SITE_KEY', config('services.google.key'), $content);
    }
}
