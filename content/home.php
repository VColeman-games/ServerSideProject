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

<input type="text" id="userSearching" name="userInput"  placeholder="Search Movies" required>
&nbsp;
<button id = "searchButton" type="submit" class="btn btn-primary" > Search </button>


 <div id="resultDiv">
 <?php  ?>
  </div>
</div>
<script>

$(document).ready(function(){
    $("button").click(function(){
        var searchInput = document.getElementById("userSearching").value;
        //alert(searchInput);

        $.ajax({
            type: "POST",
            url: "/includes/searchFunction.php",
            data: {'search': document.getElementById("userSearching").value},
            dataType: 'text',
            success: function (result) {
                 $("#resultDiv").html(result);
            alert('Success');
                    }


        });
    
    });
});

</script>

