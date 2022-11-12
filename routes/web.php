<?php

use App\Http\Controllers\OpenAccountController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('download', [
        "version" => env("CISCO_VERSION"),
        "devices" => [
            "Windows" => [
                "img" => "windows",
                "download" => [
                    "32 Bit" => "32bit.exe",
                    "64 Bit" => "64bit.exe"
                ]
            ],
            "MacOS" => [
                "img" => "osx",
                "download" => [
                    "Intel" => "64bit.dmg",
                    "Silicon" => "64bit.dmg"
                ]
            ],
            "Ubuntu" => [
                "img" => "ubuntu",
                "download" => [
                    ".deb" => "64bit.deb"
                ]
            ]
        ]
    ]);
});

Route::post("/openAccount", [OpenAccountController::class, 'run']);

//Route::get("/sync", [PageController::class, 'sync']);

Route::get("/{path}",  [PageController::class, 'getPage']);

