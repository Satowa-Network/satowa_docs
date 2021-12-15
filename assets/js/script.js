/**
 ////////////////////////////////////////////////////
 //  Copyright by: Satowa Network                  //
 //  Author: Kirihito                              //
 //  Discord: https://satowa-network.at/discord    //
 //  Email: support@satowa-network.at              //
 //  Website: https://satowa-network.at            //
 ////////////////////////////////////////////////////
 */
function copyText() {
    navigator.clipboard.writeText()
}
function copyPHP() {
    navigator.clipboard.writeText(`<?php
                    $curl=curl_init();
                    curl_setopt_array($curl,array(
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '';
                    CURLOPT_MAXREDIRS=>10,
                    CURLOPT_TIMEOUT=>0,
                    CURLOPT_FOLLOWLOCATION=>true,
                    CURLOPT_HTTP_VERSION =>
                        CURLOPT_HTTP_VERSION_1_1,
                    CURLOPT_COSTUMREQUEST => 'POST,
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    echo $response;
                    ?>;`);
}
function copyNodeJS() {
    navigator.clipboard.writeText(`var request = require('request');
                    var options = {
                      'method': 'POST',
                      'url': 'api.satowa-network.at/api.php?test=test',
                      'headers': {
                      }
                    };
                    request(options, function (error, response) {
                      if (error) throw new Error(error);
                      console.log(response.body);
                    });`)
}
function copyJS() {
    navigator.clipboard.writeText(`var raw = "";
                    var requestOptions = {
                      method: 'POST',
                      body: raw,
                      redirect: 'follow'
                    };

                    fetch("api.satowa-network.at/api.php?test=test", requestOptions)
                      .then(response => response.text())
                      .then(result => console.log(result))
                      .catch(error => console.log('error', error));`);
}
function copyPython() {
    navigator.clipboard.writeText(`import http.client
                    conn = http.client.HTTPSConnection("api.satowa-network.at")
                    payload = ''
                    headers = {}
                    conn.request("POST", "/api.php?test=test", payload, headers)
                    res = conn.getresponse()
                    data = res.read()
                    print(data.decode("utf-8"))`)

}