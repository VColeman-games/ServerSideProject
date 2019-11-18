<script>
var searchVar = document.getElementById("userSearching").value;
           $(document).ready(function(){
  $("#searchButton").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    success: function (result) {
                        document.getElementById('SearchedMovie').innerHTML = result;
                    },

                });
                return false;
            });
           });
        </script>
<div class="center" >
Welcome to the MOOVIES! &nbsp;
<input type="text" id="userSearching" name="userInput"  placeholder="Search Movies" >
&nbsp;
<button id = "searchButton" type="button" class="btn btn-primary"> Search</button>

 <div id="SearchedMovie"> <?php searching('batman') ?> </div>
</div>

