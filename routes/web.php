<?php

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



Route::get("/{path}",  [PageController::class, 'getPage']);

