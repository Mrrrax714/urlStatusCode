function validateRemoteURL($url)
{
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_exec($ch);
    $retcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

    if ($retcode != 200) {
        $error .= "The source specified is not a valid URL.";
    }
    curl_close($ch);
return $error;
}
