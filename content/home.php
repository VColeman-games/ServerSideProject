<script>
var search = document.getElementById("userSearching").value;
           $(document).ready(function(){
  $("#searchButton").click(function(){
         console.log('Button Clicked';)        

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {"searchVar": search},
                    datatype: 'HTML'
                    success: function (result) {
                        document.getElementById('SearchedMovies').innerHTML = result;
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

 <div id="SearchedMovies"> </div>
</div>

