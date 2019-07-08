<?php
        require_once 'view/header.php';      
?>
    <body id="Inicio">
    <div id="particleWrapper">
        <header>
            <nav id="menu" class="navbar navbar-expand-md  navbar-dark fixed-top f20 ">
                <!-- Brand -->
                <a class="navbar-brand font-weight-bold" href="#"><img src="imagenes/icono.png" alt="Ronald Renato"></a>
        
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
        
                <!-- Navbar links -->
                <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                    <ul class="navbar-nav text-center">
                        <li class="nav-item">
                            <a class="nav-link texto-menu" href="#Inicio">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto-menu" href="#Perfil">Perfil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto-menu" href="#Proyectos">Proyectos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link texto-menu" href="#Contacto">Contacto</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- particles.js container -->
        <div id="particles-js"></div>
        <!-- particles title creado -->
        <div class="particle-title text-white text-center">
            <h1 class="principal">Bienvenido a mi Perfil Profesional</h1>
            <p class="p0">Te saluda <span class="span">Renato Chevarría</span></p>
            <p class="p1">Analyst & Web Developer</p>
            <p class="p2">Estudiante del 7mo ciclo de Ingeniería de Software de la Universidad 
            Tecnológica del Perú, autodidacta y con mucha capacidad de
            resolver problemas. Trabajo como Freelancer, no obstante, soy de la idea que puedo seguir creciendo de la mano de tu empresa
            </p>
        </div>
    </div>
        
    <div class="container-fluid perfil" id="Perfil">
        <div class="container" >
            <p class="pprotitle text-center">Mis Habilidades Técnicas</p>
            <div class="row ppro text-center" id="gra">
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">Html <i class="fab fa-html5"></i></p>
                    <div id="html5" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">CSS <i class="fab fa-css3-alt"></i></p>
                    <div id="css3" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">Javascript <i class="fab fa-js-square"></i></p>
                    <div id="javascript" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">Java <i class="fab fa-java"></i></p>
                    <div id="java" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">PHP <i class="fab fa-php"></i></p>
                    <div id="php" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">Bases de Datos  <i class="fas fa-database"></i></p>
                    <div id="mysql" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">Wordpress <i class="fab fa-wordpress-simple"></i></p>
                    <div id="word" class="grafico"></div>
                </div>
                <div class="col-sm-3 col-md-3 col-6">
                    <p class="texto">C# .NET <i class="fab fa-windows"></i></p>
                    <div id="c" class="grafico"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="proyectos" id="Proyectos">
        <br>
        <p class="pprotitle text-center text-white">Mis Proyectos</p>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3 col-6">
                    <a href="#" target="blank"><div class="card">
                        <img src="imagenes/pag.PNG">
                        <h4>SimaHogar.com.pe</h4>
                        <br>
                        <p>Tecnologias usadas</p>
                        <p class="text-center">
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            <i class="fab fa-js-square"></i>
                            <i class="fab fa-php"></i>
                        </p>
                    </div></a>
                </div>
            
                <div class="col-sm-6 col-md-6 col-lg-3 col-6">
                    <a href="http://tunquisolutions.com" target="blank"><div class="card">
                        <img src="imagenes/tunqui.PNG">
                        <h4>Tunqui.com</h4>
                        <br>
                        <p>Tecnologias usadas</p>
                        <p class="text-center">
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            <i class="fab fa-js-square"></i>
                            <i class="fab fa-php"></i>
                        </p>
                    </div></a>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-6">
                    <a href="http://google.com" target="blank"><div class="card">
                        <img src="imagenes/pag.PNG">
                        <h4>Prestashop</h4>
                        <br>
                        <p>Tecnologias usadas</p>
                        <p class="text-center">
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            <i class="fab fa-js-square"></i>
                            <i class="fab fa-php"></i>
                        </p>
                    </div></a>
                </div>

                <div class="col-sm-6 col-md-6 col-lg-3 col-6">
                    <a href="#" target="blank"><div class="card">
                        <img src="imagenes/pag3.PNG">
                        <h4>GrillCatering.pe</h4>
                        <br>
                        <p>Tecnologias usadas</p>
                        <p class="text-center">
                            <i class="fab fa-html5"></i>
                            <i class="fab fa-css3-alt"></i>
                            <i class="fab fa-js-square"></i>
                            <i class="fab fa-php"></i>
                            <i class="fab fa-wordpress-simple"></i>
                        </p>
                    </div></a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid" id="Contacto">
        <div class="container contacto">
            <div class="row">
                <div class="col-sm-6 bord">
                    <br>
                
                    <h2 class="text-center pprotitle"> Contacto <i class="fas fa-file-signature pprotitle"></i></h2>
                    <br>
                    <p class="font-weight-bold text-center">Enviame tus datos y te respondare en la brevedad</p>
                    <form action="red.php?c=Contacto&a=Guardar" method="post" class="was-validated">
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="uname">Nombre</label>
                            <input name="nombre" type="text" class="form-control" id="uname" placeholder="Ingrese su nombre"  required>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="correo">Correo</label>
                            <input name="correo" type="email" class="form-control" id="correo" placeholder="Ingrese su correo" required>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="tel">Telefono</label>
                            <input name="telefono" type="number" class="form-control" id="tel" placeholder="Ingrese su telefono"  required>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="Textarea1">Example textarea</label>
                            <textarea name="texto" class="form-control" id="Textarea1" rows="3" required placeholder="Ingrese una descripción"></textarea>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="posi-derecha">
                            <button type="submit" class="btn btn-outline-warning">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-sm-6">
                    <div class="yo">

                        <iframe class="bor"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.6540572710487!2d-77.08232528514898!3d-11.998422344269928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce8aa9b26e0d%3A0x68fd2b9a68be34c7!2sHuarmey+1369%2C+Cercado+de+Lima+15302!5e0!3m2!1ses!2spe!4v1562378266008!5m2!1ses!2spe"
                            width="100%" height="750" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="sticky-container">
        <ul class="sticky">
            <li>
                <img src="imagenes/wsp.png" width="32" height="32" alt="WhastApp">
                <p><a href="https://wa.me/51951369456?text=Hola,%20quisiera%20información%20sobre%20tus%20servicios%20de%20desarrollo" target="_blank" class="as">Subscribe on<br>whatsApp</a></p>
            </li>
            <li>
                <img src="imagenes/link.png" width="32" height="32" alt="Linkedin">
                <p><a href="https://www.linkedin.com/in/ronald-renato-chevarría-camargo-a09837132" target="_blank">Sigueme en<br>LinkedIn</a>
                </p>
            </li>
            <li>
                <img src="imagenes/git.png" width="32" height="32" alt="GitHub">
                <p><a href="https://github.com/rena120397?tab=repositories"
                        target="_blank" class="as">Mira mis trabajos en<br>Github</a></p>
            </li>
        </ul>
    </div>
<?php
    require_once 'view/footer.php';
?>

