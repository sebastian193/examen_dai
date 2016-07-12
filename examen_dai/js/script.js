function ponerMayusculas(x){ 
    x.value=x.value.toUpperCase(); } 

function ponerMinuscula(x){ 
    x.value=x.value.toLowerCase(); }   

/*validador de RUT*/     
function validadorRut( Objeto ){
    
    var tmpstr = "";
    var intlargo = Objeto.value
    if (intlargo.length> 0)
    {
        crut = Objeto.value
        largo = crut.length;
        if ( largo <2 )
        {
            alert('rut inválido')
            Objeto.focus()
            return false;
        }
        for ( i=0; i <crut.length ; i++ )
        if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != '-' )
        {
            tmpstr = tmpstr + crut.charAt(i);
        }
        rut = tmpstr;
        crut=tmpstr;
        largo = crut.length;
 
        if ( largo> 2 )
            rut = crut.substring(0, largo - 1);
        else
            rut = crut.charAt(0);
 
        dv = crut.charAt(largo-1);
 
        if ( rut == null || dv == null )
        return 0;
 
        var dvr = '0';
        suma = 0;
        mul  = 2;
 
        for (i= rut.length-1 ; i>= 0; i--)
        {
            suma = suma + rut.charAt(i) * mul;
            if (mul == 7)
                mul = 2;
            else
                mul++;
        }
 
        res = suma % 11;
        if (res==1)
            dvr = 'k';
        else if (res==0)
            dvr = '0';
        else
        {
            dvi = 11-res;
            dvr = dvi + "";
        }
 
        if ( dvr != dv.toLowerCase() )
        {
            alert('El Rut Ingreso es Invalido')
            Objeto.focus()
            return false;
        }
    }
}

/*validador de FCHA NAC.*/

function validaFecha(objeto){             
                var fecha = document.formulario_profesionales.FECHA_NACIMIENTO.value;       
                var fechaActual = new Date();//fecha actual
                var anoActual = fechaActual.getFullYear();//año actual              
                var dia = fecha.substring(0,2);
                var mes = fecha.substring(3,5);
                var ano = fecha.substring(6,10);
                
                //enero, marzo, mayo, julio, agosto, octubre y diciembre
                var maxDias = 31;               
                //abril, junio, septiembre y noviembre
                if (mes == 4 || mes == 6 || mes == 9 || mes == 11)
                    maxDias = 30;               
                //febrero   
                if (mes == 2){
                        if (ano % 4 == 0)
                                maxDias = 29;
                            else
                                maxDias = 28;
                    }
                
                if(mes>12 || mes< 1){
                    alert("Mes incorrecto, ingrese nuevamente");
                    return false;
                }else{
                    if (dia>maxDias || dia<1){  
                        alert("Dia incorrecto, ingrese nuevamente");
                        return false;
                    }else{
                        if (ano<1890 || ano>anoActual){
                            alert("Año de nacimiento incorrecto, ingrese nuevamente");
                            return false;
                        }else{
                            //alert("fecha correcta");
                            return true;
                        }                           
                    }
                }
}

/*confirmar contraseñas*/
function comprobarClave(){ 
   	clave1 = document.formUsuario.pass_user.value 
   	clave2 = document.formUsuario.repass_user.value 

   	if (pass_user == repass_user) 
      	alert("Las dos claves son iguales...\nRealizaríamos las acciones del caso positivo") 
   	else 
      	alert("Las dos claves son distintas...\nRealizaríamos las acciones del caso negativo") 
} 

/*confimacion de envio de formulario*/
function confirmar(){
    if(confirm("¿Realmente desea enviar esta información?"))
    {
        return true;
    }
    else{ 
        return false;
    }
}



      