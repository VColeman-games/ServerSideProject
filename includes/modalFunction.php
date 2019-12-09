<?php
require 'functions.php';

if(isset($_POST['info'])) {
  $IMDBid = $_POST['info'];
  echo "This works";
} else {
  echo "Movie Not Found";
};

?>