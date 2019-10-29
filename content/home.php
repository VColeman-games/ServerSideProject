<script>
           $(document).ready(function(){
  $("#submit").click(function(){
                 //location.reload();

                $.ajax({

                    type: "post",
                    url: "/includes/searchingFunction.php",
                    data: {'userInput': true},
                    dataType: "HTML",
                    success: function (data) {
                        document.getElementById('info').innerHTML = data;
                    },
                    error: function (result) {
                        alert("Error");
                    }
                });
                return false;
            });
           });
        </script>

<div class="center">
Welcome to the MOOVIES!
<form>
<input type="text" id="myInput"  name = "userInput" placeholder="Search for Movie..">
<input type="submit" id="submit">
</form>
<div id ="info">

</div>
</div>
