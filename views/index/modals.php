<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo Proveedor</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input type="text" class="form-control" name="nombre" placeholder="Nombre Proveedor" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input type="text" class="form-control" name="num_tel" placeholder="Numero de telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
		    <input type="text" class="form-control" name="productos" placeholder="Productos" required autocomplete="off">
		  </div>	
		  <br>	  
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input type="email" class="form-control" name="correo_elect" placeholder="Correo electronico" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
		    <input type="text" class="form-control" name="sector" placeholder="Sector" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		    <input type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-sound-5-1"></i></span>
		    <input type="text" class="form-control" name="codigo_p" placeholder="Codigo Postal" required autocomplete="off">
		  </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion Proveedor </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id_proveedor" id="id_proveedor" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombres" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
		    <input id="num_tel" type="text" class="form-control" name="num_tel" placeholder="Numero de telefono" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-shopping-cart"></i></span>
		    <input id="productos" type="text" class="form-control" name="productos" placeholder="Productos" required autocomplete="off">
		  </div>	
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
		    <input id="correo_elect" type="email" class="form-control" name="correo_elect" placeholder="Correo Electronico" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
		    <input id="sector" type="text" class="form-control" name="sector" placeholder="Sector" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="Direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-sound-5-1"></i></span>
		    <input id="codigo_p" type="text" class="form-control" name="codigo_p" placeholder="Codigo Postal" required autocomplete="off">
		  </div>
		  <!--	nombre 		= document.formUser.nombre.value;
	num_tel 	= document.formUser.num_tel.value;
	productos 		= document.formUser.productos.value;
	correo_elect 		= document.formUser.correo_elect.value;
	sector 	= document.formUser.sector.value;
	direccion 		= document.formUser.direccion.value;
	codigo_p 		= document.formUser.codigo_p.value;-->	  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>