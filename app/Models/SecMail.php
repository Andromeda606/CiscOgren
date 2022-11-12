<?php

namespace App\Models;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;

class SecMail
{
    public $client;
    public $mail;

    /**
     * @throws GuzzleException
     */
    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => 'https://www.1secmail.com',
            'timeout' => 2.0,
        ]);
        $this->mail = json_decode($this->client->get("/api/v1/?action=genRandomMailbox&count=1")->getBody())[0];
    }

    /**
     * @throws GuzzleException
     */
    public function getSubjects()
    {
        $splittedMail = explode("@", $this->mail);
        return json_decode($this->client->get("/api/v1/?action=getMessages&login=" . $splittedMail[0] . "&domain=" . $splittedMail[1])->getBody(), 1);
    }

    public function fetchMessage($id)
    {
        $splittedMail = explode("@", $this->mail);
        return json_decode($this->client->get("/api/v1/?action=readMessage&login=" . $splittedMail[0] . "&domain=" . $splittedMail[1] . "&id=" . $id)->getBody(), 1);
    }
}
