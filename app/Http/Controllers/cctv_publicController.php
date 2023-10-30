<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relationships;

class cctv_publicController extends Controller
{
    public function index()
    { 


        $url1 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications";
        $data1 = json_decode(file_get_contents($url1), true);
        $key='data';
        $kunci = $data1[$key]['6']['id'];
        $url2 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/".$kunci."/cctvs";
        $data2 = json_decode(file_get_contents($url2), true);
        $key2='data';
        
        foreach ($data2[$key] as $value ) {
            $curl = curl_init();
            $url1 = $value['attributes']['stream-url'];
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            if($response == ''){
                $konek = 0;
            }else{
                $konek = 1;
            }

            Relationships::updateOrCreate([
                'idc'=> $value['id'],
                'name'=> $value['attributes']['name']
            ],
            [
                'idc' => $value['id'],
                'location' => 'kulon-progo',
                'name' => $value['attributes']['name'],
                'connection'=> $konek,
                'stream-url' => $value['attributes']['stream-url'],
                'stream-thumbnail' => $value['attributes']['stream-thumbnail']['360p'],
                'created_at' => now(),
                'updated_at' => now(),
            ]); 
        }        
    }
}
