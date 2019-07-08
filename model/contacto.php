<?php
# alumno.php
class Contacto{
	private $pdo;
    
    public $id;
    public $nombre;
	public $correo;
	public $telefono;
	public $texto;

	#=================
	public function __CONSTRUCT(){
		try{
			$this->pdo = Database::Iniciar();     
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Listar(){
		try{
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM contacto");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}catch(Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Obtener($id){
		try{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM contacto WHERE id = ?");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Eliminar($id){
		try{
			$stm = $this->pdo
			            ->prepare("DELETE FROM contacto WHERE id = ?");			          

			$stm->execute(array($id));
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
	#=================
	public function Actualizar($data){
		try{
			$sql = "UPDATE contacto SET 
						nombre          = ?,
						correo        = ?,
						telefono        = ?,
						texto          = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->nombre, 
						$data->correo,
						$data->telefono,
						$data->texto,
                        $data->id
					)
				);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
#=================
	public function Registrar($data){
		try{
		$sql = "INSERT INTO contacto (nombre,correo,telefono,texto) 
		        VALUES (?, ?, ?, ?)";
		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->nombre,
					$data->correo,
					$data->telefono,
					$data->texto
                )
			);
		}catch (Exception $e){
			die($e->getMessage());
		}
	}
}