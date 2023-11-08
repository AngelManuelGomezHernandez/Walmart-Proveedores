function objectAjax(){
	var xmlhttp = false;
	try{
		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e){
		try{
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");			
		} catch (E){
			xmlhttp = false;	
		}		
	}
	if(!xmlhttp && typeof XMLHttpRequest!='undefined'){
		xmlhttp = new XMLHttpRequest();
	}
	return xmlhttp;
}
//Inicializo automaticamente la funcion read al entrar a la pagina o recargar la pagina;
addEventListener('load', read, false);

function read(){
        $.ajax({        
        		type: 'POST',
                url:   '?c=administrator&m=table_users',               
                beforeSend: function () {
                        $("#information").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                        $("#information").html(response);
                }
        });
}

function register(){
	var nombre 		= document.formUser.nombre.value;
	var num_tel 	= document.formUser.num_tel.value;
	var productos 		= document.formUser.productos.value;
	var correo_elect 		= document.formUser.correo_elect.value;
	var sector 	= document.formUser.sector.value;
	var direccion 		= document.formUser.direccion.value;
	var codigo_p 		= document.formUser.codigo_p.value;
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=registeruser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();			
			alert('Los datos guardaron correctamente.');			
			$('#addUser').modal('hide');
		}else{
			error_reporting(E_ALL);
		}
	}
ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
ajax.send("nombre="+nombre+"&num_tel="+num_tel+"&productos="+productos+"&correo_elect="+correo_elect+"&sector="+sector+"&direccion="+direccion+"&codigo_p="+codigo_p);
}	

function update() {
	var id_proveedor = document.formUserUpdate.id_proveedor.value;
	var nombre = document.formUserUpdate.nombre.value;
	var num_tel = document.formUserUpdate.num_tel.value;
	var productos = document.formUserUpdate.productos.value;
	var correo_elect = document.formUserUpdate.correo_elect.value;
	var sector = document.formUserUpdate.sector.value;
	var direccion = document.formUserUpdate.direccion.value;
	var codigo_p = document.formUserUpdate.codigo_p.value;
	
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=updateuser", true);
	ajax.onreadystatechange = function() {
		if (ajax.readyState == 4) {
			read();
			$('#updateUser').modal('hide');
		}
	}
	
	ajax.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
	ajax.send("nombre=" + nombre + "&num_tel=" + num_tel + "&productos=" + productos + "&correo_elect=" + correo_elect + "&sector=" + sector + "&direccion=" + direccion + "&codigo_p=" + codigo_p + "&id_proveedor=" + id_proveedor);
}

function deleteUser(id_proveedor){	
	
	if(confirm('¿Esta seguro de eliminar este registro?')){						
	ajax = objectAjax();
	ajax.open("POST", "?c=administrator&m=deleteuser", true);
	ajax.onreadystatechange=function() {
		if(ajax.readyState==4){			
			read();		
		}
	}
	ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	ajax.send("id_proveedor="+id_proveedor);
	}
}

function ModalRegister(){
	$('#addUser').modal('show');
}
function ModalUpdate(id_proveedor,nombre,num_tel,productos,correo_elect,sector,direccion,codigo_p){			
	document.formUserUpdate.id_proveedor.value 			= id_proveedor;
	document.formUserUpdate.nombre.value 			= nombre;
	document.formUserUpdate.num_tel.value 	= num_tel;
	document.formUserUpdate.productos.value 		= productos;
	document.formUserUpdate.correo_elect.value 			= correo_elect;
	document.formUserUpdate.sector.value 	= sector;
	document.formUserUpdate.direccion.value 	= direccion;
	document.formUserUpdate.codigo_p.value 		= codigo_p;
	$('#updateUser').modal('show');
}

/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/