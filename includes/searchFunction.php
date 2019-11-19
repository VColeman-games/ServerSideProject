<?php
require '/includes/functions.php';

if(isset($_POST['search'])) {
    echo 'In step 1';
  $Input = $_POST['search'];
 echo 'In step 2';
  echo searching($Input);
   echo 'In step 3';
} else {
  echo "fail";
};







?>