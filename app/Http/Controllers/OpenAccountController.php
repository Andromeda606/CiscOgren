<?php

namespace App\Http\Controllers;

use App\Models\SecMail;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OpenAccountController extends Controller
{
    function run()
    {
        $client = new Client([
            'base_uri' => 'https://id.cisco.com',
            'timeout' => 2.0,
        ]);

        $mail_service = new SecMail();
        $policy_id = json_decode($client->get("/api/v1/registration/form")->getBody())->policyId;
        $password = Str::random(12) . "A1!";
        $client->post("/api/v1/registration/" . $policy_id . "/register", [
            'json' => [
                "userProfile" => [
                    "coiCountry" => "TR",
                    "email" => $mail_service->mail,
                    "password" => $password,
                    "coiFirstName" => "Veli",
                    "coiLastName" => "Yeli",
                    "locale" => "tr_TR",
                    "firstName" => "Veli"
                ], "relayState" => "/user/notifications",
            ]
        ]);
        while (true) {
            $subjects = $mail_service->getSubjects();
            if (count($subjects) >= 1) {
                $re = '/registration-activation-lin" href="(.*?)"/m';

                preg_match_all($re, $mail_service->fetchMessage($subjects[0]["id"])["body"], $matches, PREG_SET_ORDER, 0);
                $client->get($matches[0][1]);
                print("$mail_service->mail:$password");
                break;
            }
        }
        #TODO c36mjn0@dcctb.com mailindeki bodyi fetch et sonra regex yap bummmm

    }
}
