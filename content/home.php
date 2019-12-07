
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img src= 'film.svg' width= '10%'/>
    <h1>Welcome to the Moovies</h1>     
    <p><b><i>Graze away at your favorite films...</i></b></p>
  </div>
</div>
&nbsp;
<input type="text" id="userSearching" name="userInput"  placeholder="Search Movies" required>
&nbsp;
<button id = "searchButton" type="submit" class="btn btn-primary" > Search </button>
<br>
 <div id="resultDiv">
 <?php  ?>
  </div>
</div>
<script>

$(document).ready(function(){
    $("button#searchButton").click(function(){
        var searchInput = document.getElementById("userSearching").value;
        //alert(searchInput);

        $.ajax({
            type: "POST",
            url: "/includes/searchFunction.php",
            data: {'search': document.getElementById("userSearching").value},
            dataType: 'text',
            success: function (result) {
                 $("#resultDiv").html(result);
                    }


        });
    
    });
});


</script>

<script>

$(document).ready(function(){
    $("button#openModal").click(function(){
        var searchInput = document.getElementById("userSearching").value;
        //alert(searchInput);

        $.ajax({
            type: "POST",
            url: "/includes/searchFunction.php",
            data: {'search': document.getElementById("userSearching").value},
            dataType: 'text',
            success: function (result) {
                 $("#resultDiv").html(result);
                    }


        });
    
    });
});


</script>


