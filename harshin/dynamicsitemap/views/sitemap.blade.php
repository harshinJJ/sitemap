<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- CMS Pages --}}
   @foreach (Cms\Classes\Page::all() as $page)
    @php
        $url = url($page->url);
        $priority = $page->url == '/' ? '1.0' : '0.5';
    @endphp
    <url>
        <loc>{{ $url }}</loc>
        <changefreq>weekly</changefreq>
        <priority>{{ $priority }}</priority>
    </url>
@endforeach

</urlset>
