<?php

if(isset($_GET['search'])) {
    $curl = curl_init();
    include('HS.php');

    $search = "https://omgvamp-hearthstone-v1.p.rapidapi.com/cards/search/" . $_GET['search']. "?collectible=1&locale=enGB";
    curl_setopt_array($curl, array(
        CURLOPT_URL => $search,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "x-rapidapi-host: omgvamp-hearthstone-v1.p.rapidapi.com",
            "x-rapidapi-key: b0c7719307msh1b5e56c82df5559p18eb35jsnab19b210f41f"
        ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        echo "cURL Error #:" . $err;
    } else {
        echo $response;
    }


}

