<?php
# alumno.controller.php
require_once 'model/contacto.php';

class ContactoController{
    private $model;
    #============
    public function __CONSTRUCT(){
        $this->model = new Contacto();
    }
    #============
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/contacto/contacto.php';
        require_once 'view/footer.php';
    }
    #============
    public function Crud(){
        $alm = new Contacto();
        if(isset($_REQUEST['id'])){
            $alm = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/contacto/contacto-editar.php';
        require_once 'view/footer.php';
    }
    #============
    public function Guardar(){
        $alm = new Contacto();
        
        $alm->id = $_REQUEST['id'];
        $alm->nombre = $_REQUEST['nombre'];
        $alm->correo = $_REQUEST['correo'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->texto = $_REQUEST['texto'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: red.php?c=Contacto');
    }
    #============
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: red.php?c=Contacto');
    }
}