<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Routing\Redirector;
use Illuminate\Http\Request;
use Illuminate\Foundation\Application;
use Cookie;

class Language
{

    public function __construct(Application $app, Redirector $redirector, Request $request)
    {
        $this->app = $app;
        $this->redirector = $redirector;
        $this->request = $request;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Make sure current locale exists.
        $locale = $request->segment(1);
        $locales = $this->app->config->get('app.locales');

        if ( ! array_key_exists($locale, $locales)) {
            if(Request::hasCookie('lang'))
            {
                $locale = Request::cookie('lang');
            }
            else
            {
                $locale = Request::server('HTTP_ACCEPT_LANGUAGE');
            }
            if ( ! array_key_exists($locale, $locales)) {
                $locale = $this->app->config->get('app.fallback_locale');
            }
        }
        Cookie::queue('lang', $locale);
        $this->app->setLocale($locale);

        return $next($request);
    }

}