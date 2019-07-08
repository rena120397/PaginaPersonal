<?php
        require_once 'view/header.php';  
        session_start();   
?>
    <div class="container-fluid" id="Contacto">
        <div class="container contacto">
            <div class="row">
                <div class="col-sm-12 bord">
                    <br>
                
                    <h2 class="text-center pprotitle"> Contacto <i class="fas fa-file-signature pprotitle"></i></h2>
                    <br>
                    <p class="font-weight-bold text-center">Enviame tus datos y te respondare en la brevedad</p>
                    <form action="red.php?c=Usuario&a=Index" method="post" class="was-validated">
                        <input type="hidden" name="id" />
                        <div class="form-group">
                            <label for="uname">Nombre</label>
                            <input name="login" type="text" class="form-control" id="uname" placeholder="Ingrese su nombre" name="uname" required>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="form-group">
                            <label for="pwd">Contraseña</label>
                            <input name="password" type="password" class="form-control" id="pwd" placeholder="Ingrese su contraseña"  required>
                            <div class="valid-feedback">Valido</div>
                            <div class="invalid-feedback">Por favor llene este campo</div>
                        </div>
                        <div class="posi-derecha">
                            <button type="submit" class="btn btn-outline-warning">Enviar</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
<?php
    require_once 'view/footer.php';
?>
