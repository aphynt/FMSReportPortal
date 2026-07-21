<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class SSRSController extends Controller
{
    public function proxy(Request $request, $path = '')
    {
        $url = rtrim(env('SSRS_URL'), '/') . '/' . $path;

        if ($request->getQueryString()) {
            $url .= '?' . $request->getQueryString();
        }

        $client = new Client([
            'verify' => false,
        ]);

        $response = $client->request('GET', $url, [
            'auth' => [
                env('SSRS_USERNAME'),
                env('SSRS_PASSWORD'),
                'ntlm'
            ]
        ]);

        return response(
            $response->getBody()->getContents(),
            $response->getStatusCode()
        )->withHeaders([
            'Content-Type' => $response->getHeaderLine('Content-Type')
        ]);
    }
}
