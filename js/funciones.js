function validar_ingreso()
{
	var form=document.form;
	
	if(form.user.value==0)
	{
		alert("Ingrese su usuario");
		form.user.value="";
		fom.user.focus();
		return false;
	}
	
	if(form.pass.value==0)
	{
		alert("Ingrese su password");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.submit();
}

function validar_buscar()
{
	var form=document.form;
	
	if(form.op.value==0)
	{
		alert("Seleccione un criterio de busqueda");
		form.op.value="";
		fom.op.focus();
		return false;
	}
	
	if(form.valor.value==0)
	{
		alert("Ingrese un valor de busqueda");
		form.valor.value="";
		form.valor.focus();
		return false;
	}
	
	form.submit();
}

function validar_informe()
{
	var form=document.form;
	
	if (form.titulo.value==0)
	{
		alert("Ingrese el titulo");
		form.titulo.value="";
		form.titulo.focus();
		return false;
	}
	
	if(form.descripcion.value==0)
	{
		alert("Ingrese la descripcion");
		form.descripcion.value="";
		form.descripcion.focus();
		return false;
	}
	
	if (form.rutaimg.value==0)
	{
		alert("Ingrese la imagen");
		form.rutaimg.value="";
		form.rutaimg.focus();
		return false;
	}
	
	form.submit();

}

function validar_proveedor()
{
	var form=document.form;
	
	if (form.nombre.value==0)
	{
		alert("Ingrese el nombre");
		form.nombre.value="";
		form.nombre.focus();
		return false;
	}
	
	if(form.cuit.value==0)
	{
		alert("Ingrese el cuit");
		form.cuit.value="";
		form.cuit.focus();
		return false;
	}

	if(form.direccion.value==0)
	{
		alert("Ingrese la direccion");
		form.direccion.value="";
		form.direccion.focus();
		return false;
	}

	if(form.localidad.value==0)
	{
		alert("Ingrese la localidad");
		form.localidad.value="";
		form.localidad.focus();
		return false;
	}

	if(form.provincia.value==0)
	{
		alert("Ingrese la provincia");
		form.provincia.value="";
		form.provincia.focus();
		return false;
	}

	if(form.telefono.value==0)
	{
		alert("Ingrese el telefono");
		form.telefono.value="";
		form.telefono.focus();
		return false;
	}

	if(form.email.value==0)
	{
		alert("Ingrese el email");
		form.email.value="";
		form.email.focus();
		return false;
	}

		if(form.nrocuenta.value==0)
	{
		alert("Ingrese el numero de cuenta bancaria");
		form.nrocuenta.value="";
		form.nrocuenta.focus();
		return false;
	}

		if(form.banco.value==0)
	{
		alert("Ingrese el nombre del banco");
		form.banco.value="";
		form.banco.focus();
		return false;
	}

	form.submit();

}

function validar_empleado()
{
	var form=document.form;
	
	if (form.nombre.value==0)
	{
		alert("Ingrese el nombre");
		form.nombre.value="";
		form.nombre.focus();
		return false;
	}
	
	if(form.apellido.value==0)
	{
		alert("Ingrese el apellido");
		form.apellido.value="";
		form.apellido.focus();
		return false;
	}
	
	if (form.dni.value==0)
	{
		alert("Ingrese el dni");
		form.dni.value="";
		form.dni.focus();
		return false;
	}
	
	if (form.fechanacimiento.value==0)
	{
		alert("Ingrese la fecha de nacimiento");
		form.fechanacimiento.value="";
		form.fechanacimiento.focus();
		return false;
	}
	
	if(form.estadocivil.value==0)
	{
		alert("Ingrese el estado civil");
		form.estadocivil.value="";
		form.estadocivil.focus();
		return false;
	}

	if(form.cuil.value==0)
	{
		alert("Ingrese el cuil");
		form.cuil.value="";
		form.cuil.focus();
		return false;
	}

	if(form.telefono.value==0)
	{
		alert("Ingrese el telefono");
		form.telefono.value="";
		form.telefono.focus();
		return false;
	}

	if(form.direccion.value==0)
	{
		alert("Ingrese la direccion");
		form.direccion.value="";
		form.direccion.focus();
		return false;
	}

	if(form.cp.value==0)
	{
		alert("Ingrese el codigo postal");
		form.cp.value="";
		form.cp.focus();
		return false;
	}

	if(form.localidad.value==0)
	{
		alert("Ingrese la localidad");
		form.localidad.value="";
		form.localidad.focus();
		return false;
	}

	if(form.provincia.value==0)
	{
		alert("Ingrese la provincia");
		form.provincia.value="";
		form.provincia.focus();
		return false;
	}

	if(form.sector.value==0)
	{
		alert("Ingrese el sector");
		form.sector.value="";
		form.sector.focus();
		return false;
	}

	if(form.antiguedad.value==0)
	{
		alert("Ingrese la antiguedad");
		form.antiguedad.value="";
		form.antiguedad.focus();
		return false;
	}
	
	form.submit();
}

function validar_usuario()
{
	var form=document.form;
	
	if (form.username.value==0)
	{
		alert("Ingrese el username");
		form.username.value="";
		form.username.focus();
		return false;
	}
	
	if(form.password.value==0)
	{
		alert("Ingrese el password");
		form.password.value="";
		form.password.focus();
		return false;
	}
	
	form.submit();
}

function validar_usuario2()
{
	var form=document.form;
	
	if (form.username.value==0)
	{
		alert("Ingrese el username");
		form.username.value="";
		form.username.focus();
		return false;
	}
	
	form.submit();
}

function validar_licencia()
{
	var form=document.form;
	
	if (form.tipo.value==0)
	{
		alert("Ingrese el tipo de licencia");
		form.tipo.value="";
		form.tipo.focus();
		return false;
	}
	
	if(form.desde.value==0)
	{
		alert("Ingrese la fecha de inicio de la licencia");
		form.desde.value="";
		form.desde.focus();
		return false;
	}
	
	if (form.hasta.value==0)
	{
		alert("Ingrese la fecha de finalizacion de la licencia");
		form.hasta.value="";
		form.hasta.focus();
		return false;
	}

	if (form.desde.value>form.hasta.value)
	{
		alert("Elija un intervalo valido para la licencia");
		form.desde.value="";
		form.hasta.value="";
		form.desde.focus();
		return false;
	}
	
	form.submit();
}

function confirmar ( mensaje ) {
return confirm( mensaje );
}

function validar_horas_extra()
{
	var form=document.form;
	
	if(form.fecha.value==0)
	{
		alert("Ingrese la fecha");
		form.user.value="";
		fom.user.focus();
		return false;
	}
	
	if(form.cant_horas.value==0)
	{
		alert("Ingrese la cantidad de horas");
		form.pass.value="";
		form.pass.focus();
		return false;
	}
	
	form.submit();
}

function validar_reporte_estudio()
{
	var form=document.form;

	if(form.desde.value==0)
	{
		alert("Ingrese la fecha de inicio");
		form.desde.value="";
		fom.desde.focus();
		return false;
	}
	
	if(form.hasta.value==0)
	{
		alert("Ingrese la fecha de termino");
		form.hasta.value="";
		form.hasta.focus();
		return false;
	}
	
	form.submit();
}

function validar_producto()
{
	var form=document.form;
	
	if (form.descripcion.value==0)
	{
		alert("Ingrese la descripción");
		form.descripcion.value="";
		form.descripcion.focus();
		return false;
	}
	
	
	if (form.precio.value==0)
	{
		alert("Ingrese el precio");
		form.precio.value="";
		form.precio.focus();
		return false;
	}
	
	form.submit();
}


function validarNro(e) {
var key;
if(window.event) // IE
{
key = e.keyCode;
}
else if(e.which) // Netscape/Firefox/Opera
{
key = e.which;
}
if (key < 48 || key > 57)
{
if(key == 8 ) // Detectar backspace (retroceso)
{ return true; } else { return false; }
}
return true;

}
