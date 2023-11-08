<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM tbl_proveedores";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		try {
			$SQL = 'INSERT INTO tbl_proveedores (nombre,num_tel,productos,correo_elect,sector,direccion,codigo_p) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['num_tel'],
									$data['productos'],
									$data['correo_elect'],
									$data['sector'],
									$data['direccion'],
									$data['codigo_p']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
		header("Location:index.php");
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE tbl_proveedores SET nombre = ?, num_tel = ?, productos = ?, correo_elect = ?, sector = ?, direccion = ?, codigo_p = ? WHERE id_proveedor = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
				$data['nombre'],
				$data['num_tel'],
				$data['productos'],
				$data['correo_elect'],
				$data['sector'],
				$data['direccion'],
				$data['codigo_p'],
				$data['id']
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id_proveedor){
		try {
			$SQL = 'DELETE FROM tbl_proveedores WHERE id_proveedor = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id_proveedor));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id_proveedor){
		$this->delete_user($id_proveedor);
	}	
}
?>