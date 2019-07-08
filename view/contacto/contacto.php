<!-- contacto.php -->
    <div class="container">
        <h1 class="page-header">Contacto</h1>
        <div class="well well-sm text-right">
            <a class="btn btn-danger" href="?c=Contacto">Regresar al Menu</a>
            <a class="btn btn-success" href="?c=Contacto&a=Crud">Nuevo cliente</a>
        </div>
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th style="width:180px;">nombre</th>
                        <th style="width:180px;">correo</th>
                        <th style="width:180px;">telefono</th>
                        <th style="width:180px;">texto</th>
                        <th style="width:180px;">fecha</th>
                        <th style="width:60px;"> Editar </th>
                        <th style="width:60px;"> Eliminar </th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($this->model->Listar() as $r): ?>
                    <tr>
                        <td><?php echo $r->nombre; ?></td>
                        <td><?php echo $r->correo; ?></td>
                        <td><?php echo $r->telefono; ?></td>
                        <td><?php echo $r->texto; ?></td>
                        <td><?php echo $r->fecha; ?></td>
                        <td>
                            <a href="?c=Contacto&a=Crud&id=<?php echo $r->id; ?>">Editar</a>
                        </td>
                        <td>
                            <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
                            href="?c=Contacto&a=Eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>