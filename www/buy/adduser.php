<?php

    $hnd = curl_init();
    curl_setopt($hnd, CURLOPT_URL, "http://admin:password@localhost/owncloud/ocs/v1.php/cloud/users");
    curl_setopt($hnd, CURLOPT_NOPROGRESS, 1);
    curl_setopt($hnd, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($hnd, CURLOPT_POSTFIELDS, "userid=" . $_POST["ocUsername"] . "&password=" . $_POST["ocPassword"]);
    curl_setopt($hnd, CURLOPT_POSTFIELDSIZE_LARGE, 33);
    curl_setopt($hnd, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/34.0.1847.116 Safari/537.36");
    curl_setopt($hnd, CURLOPT_MAXREDIRS, 50);
    curl_setopt($hnd, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($hnd, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($hnd, CURLOPT_TCP_KEEPALIVE, 1);

    //perform our request
    $result = curl_exec($hnd);

    if(!curl_errno($hnd)) {
        echo $result;
        header("Location: success.html");
        exit;
    } else {
        echo "There was an error in cURL process.";
    }

?>
