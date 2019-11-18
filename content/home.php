<script>
           $(document).ready(function(){
  $("button").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {'search': true},
                    dataType: "HTML",
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
<button type="button" class="btn btn-primary"> Search</button>
</form>
 <div id="SearchedMovie">  </div>
</div>

