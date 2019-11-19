<?php
require 'functions.php';

if(isset($_POST['search'])) {
  $Input = $_POST['search'];
  echo searching($Input);
} else {
  echo "Movie Not Found";
};

?>