<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function sync()
    {
        //Bir anlık düşündüm ve gereksiz geldi. Önbelleğe atmak istedim ama zaten az veri vardı ve çok sorun yaratmazdı.
        $pages = Page::all(["id","title","path"]);
        Storage::put('siteData.json', $pages);
        return response([
            "status"=>true
        ]);
    }

    static public function getPage($path)
    {
        $page = Page::select([
            "content",
            "title"
        ])->where(
            "path",
            $path
        )->first();
        if ($page != null) {
            return response()->view("content", [
                "content" => $page->content,
                "title" => $page->title
            ]);
        } else {
            die(abort(404));
        }
    }
}




