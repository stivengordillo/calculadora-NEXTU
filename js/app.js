var campo = "";

function teclas(opc)
{
	display   = document.getElementById('display').innerHTML;
	tecla     = String(opc);
	//Valida si existe el punto dentro del valor
	function validarPunto(){
		if(tecla == "." && display.indexOf('.') != -1){
			console.log("ya existe un punto");
			return teclaValor = "";
		}else{
			return teclaValor = tecla;
		}
	}

	//Valida si el numero inicial es 0 y no deja poner más
	if(display=="0" && tecla == "0")
	{
		console.log("No se pueden agregar más 0");
	}
	else
	{
		validarPunto();
		numerosCampo = campo.length;
		//Limita la cantidad de teclas que se pueden precionar
		if(numerosCampo<=7){
			// si ya existe el menos lo elimina
			if(tecla == "-" && display.indexOf('-') != -1){
				console.log("ya existe un -");
				campo = display.slice(1,8);
			}
			// Si no existe el menos lo agrega
			else if(tecla == "-" && display.indexOf('-') == -1){
				console.log("no existe un menos");
				campo = "-"+display;
			}
			else{
				campo += teclaValor;
			}
			

			document.getElementById('display').innerHTML=campo;
		}
	}
	return campo;	
}

//Limpia el valor y lo vuelve a cero para una nueva operación y reinicia variables en 0
function borrar()
{
	document.getElementById('display').innerHTML= "0";
	valor1 = 0;
	valor2 = 0;
	return campo = "";
	return valor1;
	return valor2;
}

//Obtiene el valor del operador y guarda el primer valor
function operacion(operador){
	valor1   = Number(campo);
	operando = operador;
	campo    = "";
	document.getElementById('display').innerHTML= "";
	return valor1;
	return operando;
	return campo;
}

//Realiza la función de calculo y devuelve el resultado
function calcular(){
	valor2 = Number(campo);
	resultado = 0;

	switch (operando){
		case "+" :
			resultado = valor1 + valor2;
			campos(resultado);
			break;
		case "-" :
			resultado = valor1 - valor2;
			campos(resultado);
			break;
		case "*" :
			resultado = valor1 * valor2;
			campos(resultado);
			break;
		case "/" :
			resultado = valor1 / valor2;
			campos(resultado);
			break;
	}

	function campos(resultado){
		real = String(resultado);

		//mostrar resultado real en consola sin limite
		console.log(resultado)

		//Limita el resultado a solo 8 numeros
		mostrar = real.slice(0,8);

		//Valida si la respuesta es decimal y lo limita a solo 2 decimales

		convertirNumero = Number(mostrar);

		if(convertirNumero % 1 == 0)
		{
			mostrarValor = convertirNumero;
		}
		else
		{
			numMaximo    = convertirNumero.toFixed(2);
			mostrarValor = numMaximo.slice(0,8);
		}

		// Retorna el valor de la variable campo para seguir haciendo operaciones
		campo   = String(mostrarValor);
		document.getElementById('display').innerHTML= mostrarValor;
		return campo;
	}
}