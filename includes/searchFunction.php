<?php
require 'functions.php';

function searching($searchValue)
{
  
    $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=b1892baf&s='. $search;
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
$movieinfo = $response["Search"];
foreach($movieinfo as $key => $value) {
echo '<h3>' . $value["Title"] . '</h3>';
echo '<h4>' . $value["Year"] . '</h4>';
echo ' <img style="width:auto; height: auto;" src ='. $value["Poster"]. '>';}


}
$search = '';

if(isset($search)) {
  echo searching($searchsearch);
} 






?>