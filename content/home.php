<script>
/*function TestingSearch(){
var searchInput = document.getElementById("userSearching").value;
  alert(searchInput);
} */





/*var searchURL =  document.getElementById("userSearching").value;
           $(document).ready(function(){
            $("#searchButton").click(function(){
            console.log('Button Clicked');        

                $.ajax({

                    type: "post",
                    url: "/includes/functions.php",
                    data: {"search": document.getElementbyId("userSearching".value)},
                    dataType: 'text'
                    success: function (data) {
                        document.getElementById('SearchedMovies').innerHTML = 
                    },

                });
                return false;
            });
           });*/
        </script>
<div class="center" >
Welcome to the MOOVIES! &nbsp;
<form method="post" action="">
<input type="text" id="userSearching" name="userInput"  placeholder="Search Movies" required>
&nbsp;
<button id = "searchButton" type="submit" class="btn btn-primary" > Search </button>
</form>

 <div id="SearchedMovies"> <?php searching('batman') ?></div>
</div>
<script>

$(document).ready(function(){
    $("button").click(function(){
        var searchInput = document.getElementById("userSearching").value;
        alert(searchInput);

        $.ajax({
            type: "post",
            url: "/includes/functions.php",
            data: {'search': searchInput},
            dataType: 'HTML',
            success: function (data) {
            document.getElementById('SearchedMovies').innerHTML = searching(data);
            alert('Success');
                    },
             error: function (result) {
                        alert("Error");
                    }


        });
    
    });
});

</script>

