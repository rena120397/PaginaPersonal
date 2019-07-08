<!-- contacto-editar.php -->
<div class="container">
    <h1 class="page-header">
        <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?>
    </h1>

    <ol class="breadcrumb">
    <li><a href="?c=Contacto">Contacto/ </a></li>
    <li class="active"> <?php echo $alm->id != null ? $alm->nombre : 'Nuevo Registro'; ?></li>
    </ol>

    <form action="red.php?c=Contacto&a=Guardar" method="post" class="was-validated" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $alm->id; ?>" />
        <div class="form-group">
            <label for="uname">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="uname" placeholder="Ingrese su nombre" name="uname" required value="<?php echo $alm->nombre; ?>">
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor llene este campo</div>
        </div>
        <div class="form-group">
            <label for="correo">Correo</label>
            <input name="correo" type="email" class="form-control" id="correo" placeholder="Ingrese su correo" name="pswd" required value="<?php echo $alm->correo; ?>">
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor llene este campo</div>
        </div>
        <div class="form-group">
            <label for="tel">Telefono</label>
            <input name="telefono" type="number" class="form-control" id="tel" placeholder="Ingrese su telefono" name="pswd" required value="<?php echo $alm->telefono; ?>">
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor llene este campo</div>
        </div>
        <div class="form-group">
            <label for="Textarea1">Example textarea</label>
            <textarea name="texto" class="form-control" id="Textarea1" rows="3" required placeholder="Ingrese una descripción" ><?php echo $alm->texto; ?></textarea>
            <div class="valid-feedback">Valido</div>
            <div class="invalid-feedback">Por favor llene este campo</div>
        </div>
        <div class="posi-derecha">
            <button type="submit" class="btn btn-outline-warning">Enviar</button>
        </div>
    </form>
    <br>
</div>