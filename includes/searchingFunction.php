<?php
function searching()
{
    $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=b1892baf';
/**dont change
*/
$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt_array($handle,
array(
CURLOPT_URL => $url,
CURLOPT_RETURNTRANSFER => true
)
);
$output = curl_exec($handle);
$response = json_decode($output, true);
curl_close($handle);
/*dont change
*/
echo 'You searched:'.  $_GET["name"];

}
$userInput = true ;
if(isset($userInput)){
    searching();
}
?>