<?php namespace Harshin\DynamicSitemap;

use System\Classes\PluginBase;
use Illuminate\Support\Facades\Event;
use Cms\Classes\Page;
use Illuminate\Support\Facades\Response;

class Plugin extends PluginBase
{
    public function pluginDetails()
    {
        return [
            'name'        => 'Dynamic Sitemap',
            'description' => 'Auto-generates a sitemap.xml including CMS pages',
            'author'      => 'Harshin Mansoor',
            'icon'        => 'icon-sitemap'
        ];
    }

    public function boot()
    {
        \Route::get('/sitemap.xml', function () {
            $content = view('harshin.dynamicsitemap::sitemap')->render();
            return Response::make($content, 200)->header('Content-Type', 'application/xml');
        });
    }
}
