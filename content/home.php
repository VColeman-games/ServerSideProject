<script>
var search = document.getElementById("userSearching").value;
           $(document).ready(function(){
  $("#searchButton").click(function(){
         console.log('Button Clicked';)        

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {"search": document.getElementbyId("userSearching".value)},
                    dataType: 'text'
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
<input type="text" id="userSearching" name="userInput"  placeholder="Search Movies" value="#">
&nbsp;
<button id = "searchButton" type="button" class="btn btn-primary"> Search</button>

 <div id="SearchedMovies"><?php searching(); ?> </div>
</div>

