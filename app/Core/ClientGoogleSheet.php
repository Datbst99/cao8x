<?php


namespace App\Core;


use Google_Client;
use Google_Service_Sheets;

class ClientGoogleSheet
{
    protected $client;
    public function __construct()
    {
        $client = new Google_Client();
        $client->setAuthConfig(storage_path('credentials.json'));
        $client->addScope([
            \Google_Service_Sheets::SPREADSHEETS
        ]);

        $guzzleClient = new \GuzzleHttp\Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false)));
        $client->setHttpClient($guzzleClient);
        $this->client = $client;
    }
    public function oauth()
    {
        session_start();

        $rurl = action('SheetController@oauth');
        $this->client->setRedirectUri($rurl);
        if (!isset($_GET['code'])) {
            $auth_url = $this->client->createAuthUrl();
            $filtered_url = filter_var($auth_url, FILTER_SANITIZE_URL);
            return redirect($filtered_url);
        } else {
            $this->client->authenticate($_GET['code']);
            $_SESSION['access_token'] = $this->client->getAccessToken();

            return redirect()->route('cal.index');
        }
    }
    public function appendData($data, $spreadsheetId)
    {
        $service = new \Google_Service_Sheets($this->client);
        $range = 'user!A2:D';
        $requestBody = new \Google_Service_Sheets_ValueRange([
            'values' => $data
        ]);

        $params = [
            'valueInputOption' => 'RAW'
        ];

        try {
            $response = $service->spreadsheets_values->append($spreadsheetId, $range, $requestBody, $params);
        }catch (\Exception $exception){
            \Log::error($exception);
        }

        return [
            'success' => true,
        ];

    }



}
