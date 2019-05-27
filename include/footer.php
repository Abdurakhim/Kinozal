</div>


<script>
    $( document ).ready(function(){




        $("#order").click(function() {
            if($('#orderdiv').is(":hidden")){
                $("#orderdiv").slideDown('slow');
                $("#aboutdiv").slideUp('slow');
            }else{
                $("#aboutdiv").slideUp('slow');
                $("#orderdiv").slideUp('slow');
            }
        });


        $("#about").click(function() {
            if($('#aboutdiv').is(":hidden")){
                $("#orderdiv").slideUp('slow');
                $("#aboutdiv").slideDown('slow');
            }else{
                $("#orderdiv").slideUp('slow');
                $("#aboutdiv").slideUp('slow');
            }
        });



    });
</script>
</body>
</html>



<!--<footer class="site-footer">
    <center><h3>&copy; 2018 Powered by Abdurakhim Ruziev</h3></center>
</footer>-->