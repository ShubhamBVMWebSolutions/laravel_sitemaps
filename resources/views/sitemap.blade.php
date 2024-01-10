
<?php echo '<?xml version = "1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($post as $pos )
        <url>
        <loc>{{url('/')}}/post/{{$pos->slug}} </loc>
        <lastmod>{{$pos->updated_at->tz('UTC')->toAtomString()}}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
