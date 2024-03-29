<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in conig.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

/**
 * Website navigation.
 */
function nav_menu($sep = '&nbsp &nbsp')
{
    $nav_menu = '';
    $nav_items = config('nav_menu');
    foreach ($nav_items as $uri => $name) {
        $class = str_replace('page=', ' ', $_SERVER['QUERY_STRING']) == $uri ? ' active' : ' ';
        $url = config('site_url') . '/' . (config('pretty_uri') || $uri == '' ? '' : '?page=') . $uri;
        $nav_menu .= '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . $sep;
    }
    echo trim($nav_menu, $sep);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.php';
    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.php';
    }
    //echo file_get_contents($path);
    require config('config_path'). $path;
}

//Gets the movie poster
function getMovie(){
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

echo '<h3>' . $response["Title"] . '</h3>';
echo '<h4>' . $response["Year"] . '</h4>';
echo '<h5>' . $response["Rated"] . '</h5>';
echo ' <img style="width:auto; height: auto;" src ='. $response["Poster"]. '>';
}

 $search = '';
 $title = ''; 

function searching($search)
{
    $url = 'http://www.omdbapi.com/?i=tt3896198&apikey=b1892baf&s='. $search;

    if ($search != ''){
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

    echo '<div class="grid-container">';
foreach($movieinfo as $key => $value) {
 
    echo '<div class="grid-item">';
  
    echo '<h3>' . $value["Title"] . '</h3>';
    echo '<h4>' . $value["Year"] . '</h4>';
    echo '<div ><img style="width:auto; height: auto;" src ='. $value["Poster"]. '></div><br>';
    //echo '<button id="showForm" type="button" class="btn btn-info">Info</button>';
    echo '<form id="movieInfo">';
    echo '<div id=info >';
    echo '<p> '. MovieIMDB($value['imdbID']). '</p>';
    echo '</div>';

    echo '</form>';

    

    //MovieIMDB($value["imdbID"]);
    $id = $value["imdbID"];
   // getMovieID($id);
    //array_push($movieIDs, $id);
   // echo $id;
   /*echo '<script>$(document).ready(function(){

    $("#showForm").click(function(){
        document.getElementById("info").css({"display": "block"});
                
                    


        
    
    });
});
</script>';*/
    echo '</div>';
}
echo '</div>';


}
//print_r($movieIDs);
}

function getMovieID($id){
return $id;


}



function MovieIMDB($info){
    $url ='http://www.omdbapi.com/?apikey=b1892baf&i=' . $info;
    /**dont change*/ 
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
/*dont change*/

    
    echo '<div>';
    echo ' Title :' . $response["Title"] .'<br></h5>';

    echo ' Year :' . $response["Year"] .'<br>';
    echo ' Rated :' . $response["Rated"] .'<br>';
    echo ' Released :' . $response["Released"] .'<br>' ;
    echo ' Genre :' . $response["Genre"] .'<br>' ;
    echo ' Plot :' . $response["Plot"] .'<br>';
    echo ' IMDB Rating :' . $response["imdbRating"] .'<br>';
echo  '</div>';
   
    
}







/**
 * Starts everything and displays the template.
 */
function init()
{
    require config('template_path') . '/template.php';
}

?>