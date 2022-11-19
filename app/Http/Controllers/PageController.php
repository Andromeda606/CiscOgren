<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;
use stdClass;

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
            "id",
            "content",
            "title"
        ])->where(
            "path",
            $path
        )->first();
        if ($page != null) {
            $prev = Page::select([
                "id",
                "title",
                "path"
            ])->where("id", '<', (int)$page->id)->orderBy('id','desc')->first();
            $next = Page::select([
                "id",
                "title",
                "path"
            ])->where("id", '>', $page->id)->orderBy('id','asc')->first();
            if(is_null($next)){
                $next = new stdClass();
                $next->title = "";
                $next->path = "#";
            }

            if(is_null($prev)){
                $prev = new stdClass();
                $prev->title = "";
                $prev->path = "#";
            }
            return response()->view("content", [
                "content" => $page->content,
                "title" => $page->title,
                "prev"=>$prev,
                "next"=>$next
            ]);
        } else {
            die(abort(404));
        }
    }
}






