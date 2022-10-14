<?php

namespace App\Http\Controllers;

use Minishlink\WebPush\WebPush;
use Minishlink\WebPush\Subscription;

use Illuminate\Http\Request;

class PushController extends Controller
{
    public function send()
    {
        $webpush = new WebPush([
            "VAPID"=>[
                "subject"=>"http://localhost",
                "publicKey"=>"BBZ2vqSxZKvGJ_U_KZOWT1BTbFZnvoz44KPZUxnRBEogHDtid9ghKDEHpRxz6W_iIENdjv92cOXbUCTURwa6gg8",
                "privateKey"=>"oWqQMcp3rp59DzVY8GH44LSQnTWgpyfG_qK4unX0iV4"
            ]
        ]);

        $subscription = Subscription::create(json_decode('{"endpoint":"https://fcm.googleapis.com/fcm/send/dzfuQnqwp9A:APA91bE2ntbgkhuF93hGwCDBkXDqshbtjJoIqlW6ftXflgs_V0DaARIncI1u-4ChxO1BMIVs-JuGbhj8NTIXyKbCsrhFYvwD_hMEUg6jjKsmbQ84KBYWlz4zsUSVYt9ZAvSYApITPj-y","expirationTime":null,"keys":{"p256dh":"BJ_mWh4N2xXdkQJKa0el5rXJ_KB4SSqEjQKQmITXo_4rgkgNk-1YZDq1poKD2lnq2wXiw2WR6PS-Wqi-izPnyFg","auth":"SUTJAFmrNcL08ktT3cGmZA"}}',true));
        
        $response = $webpush->sendOneNotification($subscription,'{"title":"hi from server","body":"hello","url":"https://www.google.com"}');
        dd($response);
    }
}
