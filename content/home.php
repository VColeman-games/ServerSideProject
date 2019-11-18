<script>
var searchVar = document.getElementById("myInput").value;
           $(document).ready(function(){
  $("#searchButton").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {searchVar: document.getElementById("myInput").value},
                    success: function (data) {
                        document.getElementById('SearchedMovie').innerHTML = data;
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>
<div class="center" >
Welcome to the MOOVIES! &nbsp;
<form method="post" action="">
<input type="text" id="myInput" name="userInput"  placeholder="Search Movies" >
&nbsp;
<button id = "searchButton" type="button" class="btn btn-primary"> Search</button>
</form>
 <div id="SearchedMovie">  </div>
</div>

