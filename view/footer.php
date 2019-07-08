  <footer>
        <div class="container">
            <p><a href="principal.php"> Copyright® Ronald Renato Chevarria Camargo Developer </a></p>
        </div>
    </footer>
    
    <script src="https://kit.fontawesome.com/9d30948654.js"></script>
    <script src="js/progressbar.min.js"></script>
    <script src="js/graficos.js"></script>
    <script src="js/particles.min.js"></script>
    <script src="js/particulas.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">

                    $('a').click(function (e) {
                     //   e.preventDefault();		//evitar el eventos del enlace normal
                    var strAncla = $(this).attr('href'); //id del ancla
                    var head=$('header').height;
                $('body,html').stop(true, true).animate({
                        scrollTop: $(strAncla).offset().top - 100
                }, 1500);
            });

         $(window).scroll(function () {
             if($("#menu").offset().top > 1){
                        $("#menu").addClass("bg-dark navbar-dark img ");
                    }else{
                        $("#menu").removeClass("bg-dark navbar-light img");
                    }
                   });

        $(window).ready(function () {
                    $(document).one('scroll',regis);
                    $("#gra").slideUp( 300 ).delay( 1000 ).fadeIn( 400 );
            });
    </script>
</body>
</html>