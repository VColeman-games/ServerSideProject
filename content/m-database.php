
<div class="center" >
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <img src= 'ufo-and-cow.svg' width= '25%'/>
    <h1>Find your Flicks</h1>     
    <p><b><i>where could it be...</i></b></p>
  </div>
</div>
&nbsp;
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
                    }


        });
    
    });
});

</script>
