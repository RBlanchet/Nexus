<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js/index.js"></script>
<!-- JQuery -->
<script type="text/javascript" src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.easing.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="../js/mdb.min.js"></script>
<!-- Smooth Scroll -->
<script type="text/javascript" src="../js/scrolling-nav.js"></script>
<!-- AOS Scroll -->
<script type="text/javascript" src="../js/aos.js"></script>
<!-- Custom script -->
<script>
    $(document).ready(function() {
        var max_fields      = 10;
        var wrapper         = $(".input_fields_wrap");
        var add_button      = $(".add_field_button");

        var x = 1;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
                console.log(x);
                $(wrapper).append('<div class="md-form"><input type="text" id="form1" class="form-control" name="navbarLink[]"><label for="form1" class="">Lien</label><a href="#" class="remove_field">Supprimer</a></div>');//add input box
            }
        });

        $(wrapper).on("click",".remove_field", function(e){
            e.preventDefault(); $(this).parent('div').remove(); x--;
        })
    });
</script>

</body>
</html>
