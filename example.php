<!doctype html>
<html lang="de">
<head>
    <?php
    $titleb="Introduction";
    include __DIR__.'/assets/php/head.php';
    ?>
    <script>
        addEventListener('load', function(event) { PR.prettyPrint(); }, false);

    </script>
    <title><?php echo $title ?></title>
</head>
<body>

<?php
require __DIR__.'/assets/php/body.php';
?>
<div class="container">
    <h1>Satowa Network Examples</h1>
    <hr>


    <div class="code_section" id="php">
        <p>PHP GET Example</p>
        <hr>
        <pre id="php">
                <code class="language-php" onclick="copyPHP()" id="php">

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
                </code>
            </pre>
        <p>JavaScript (NodeJS) Example</p>
        <hr>
        <pre>
                <code class="language-javascript" onclick="copyNodeJS()">
                    var request = require('request');
                    var options = {
                      'method': 'POST',
                      'url': 'api.satowa-network.at/api.php?test=test',
                      'headers': {
                      }
                    };
                    request(options, function (error, response) {
                      if (error) throw new Error(error);
                      console.log(response.body);
                    });
                </code>
            </pre>
        <p>JavaScript Example</p>
        <hr>
        <pre>
                <code class="language-javascript" onclick="copyJS()">
                    var raw = "";
                    var requestOptions = {
                      method: 'POST',
                      body: raw,
                      redirect: 'follow'
                    };

                    fetch("api.satowa-network.at/api.php?test=test", requestOptions)
                      .then(response => response.text())
                      .then(result => console.log(result))
                      .catch(error => console.log('error', error));
                </code>
            </pre>
        <p>Python Example</p>
        <hr>
        <pre>
                <code class="language-python" onclick="copyPython()">
                    import http.client
                    conn = http.client.HTTPSConnection("api.satowa-network.at")
                    payload = ''
                    headers = {}
                    conn.request("POST", "/api.php?test=test", payload, headers)
                    res = conn.getresponse()
                    data = res.read()
                    print(data.decode("utf-8"))
                </code>
            </pre>
    </div>
    <div class="code_section">

    </div>
</div>
<?php
require __DIR__.'/assets/php/footer.php';
?>

</body>
</html>