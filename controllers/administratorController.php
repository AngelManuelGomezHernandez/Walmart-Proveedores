<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function table_users(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>ID Proveedor</th>
				<th>Nombre Proveedor</th>
				<th>Numero de telefono</th>
				<th>Productos</th>
				<th>Correo Electronico</th>
				<th>Sector</th>
				<th>Direccion</th>
				<th>Codigo Postal</th>
				<th>Opciones</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id_proveedor; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->num_tel; ?> </td>
			<td><?php echo $data->productos; ?> </td>
			<td><?php echo $data->correo_elect; ?> </td>
			<td><?php echo $data->sector; ?> </td>
			<td><?php echo $data->direccion; ?> </td>
			<td><?php echo $data->codigo_p; ?> </td>
			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id_proveedor; ?>','<?php echo $data->nombre; ?>','<?php echo $data->num_tel; ?>','<?php echo $data->productos; ?> ','<?php echo $data->correo_elect; ?> ','<?php echo $data->sector; ?> ','<?php echo $data->direccion; ?> ','<?php echo $data->codigo_p; ?> ');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id_proveedor; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id_proveedor']);		
    }

	function registeruser(){
		$data = array(
					'nombre' 		=> $_REQUEST['nombre'],
					'num_tel' => $_REQUEST['num_tel'],
					'productos'		=> $_REQUEST['productos'],
					'correo_elect' 		=> $_REQUEST['correo_elect'],
					'sector' => $_REQUEST['sector'],
					'direccion'		=> $_REQUEST['direccion'],
					'codigo_p' 		=> $_REQUEST['codigo_p'],
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
			'id'            => $_REQUEST['id_proveedor'],
			'nombre'        => $_REQUEST['nombre'],      
			'num_tel'       => $_REQUEST['num_tel'],
			'productos'     => $_REQUEST['productos'],
			'correo_elect'  => $_REQUEST['correo_elect'],
			'sector'        => $_REQUEST['sector'],
			'direccion'     => $_REQUEST['direccion'],
			'codigo_p'      => $_REQUEST['codigo_p']
		);      
		parent::set_update_user($data);
	}
		
    
}

