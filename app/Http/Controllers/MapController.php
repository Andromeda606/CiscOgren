<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function run()
    {
        $pages = Page::all(["title", "path"]);
        return response()->view("sitemap", [
            "pages" => $pages
        ]);
    }

    public function create()
    {
        $pages = Page::all(["title", "path"]);
        $file = '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">';
        foreach ($pages as $page) {
            $file .= "
            <url>
                <loc>" . url($page['path']) . "</loc>
                <lastmod>" . Carbon::parse($page->created_at)->format('d/m/Y') . "</lastmod>
            </url>
            ";
        }
        $file .= "</urlset>";
        fwrite(fopen(public_path("/sitemap.xml"),"w"),$file);
        return response($file)->header('Content-Type', 'text/xml');
    }

}
