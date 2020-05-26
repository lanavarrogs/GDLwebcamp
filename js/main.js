(function() {
    "use-strict";
    
    var regalo = document.getElementById('regalo');

    document.addEventListener('DOMContentLoaded',function(){
       
        //Campos datos usuarios
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');

        //Campos pases
        var paseDia = document.getElementById('pase_dia');
        var paseCompleto = document.getElementById('pase_completo');
        var paseDosDias = document.getElementById('pase_dosdias');


        //Botones y divs
        var calcular = document.getElementById('calcular');
        var errorDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var listaProductos = document.getElementById('lista-productos');
        var sumaTotal = document.getElementById('suma-total');

        //Extras
        var camisas = document.getElementById('camisa_evento');
        var etiquetas = document.getElementById('etiquetas');


        calcular.addEventListener('click',calcularMontos);

        paseDia.addEventListener('change',mostrarDias);
        paseDosDias.addEventListener('change',mostrarDias);
        paseCompleto.addEventListener('change',mostrarDias);

        nombre.addEventListener('blur',validacionCampos);
        apellido.addEventListener('blur',validacionCampos);
        email.addEventListener('blur',validacionCampos);
        email.addEventListener('blur',validarMail);


        //Funcion que calcula y muestra el resumen de la compra y su total
        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
            }else{
                let boletosDia = parseInt(paseDia.value,10)||0,
                     boletosDosDias = parseInt(paseDosDias.value,10)||0,
                     boletosCompletos = parseInt(paseCompleto.value,10)||0, 
                     cantidadCamisas = parseInt(camisas.value,10)||0,
                     cantidadEtiquetas = parseInt(etiquetas.value)||0;

                let totalPagar = (boletosDia*30) + (boletosDosDias*45) + (boletosCompletos*50) + ((cantidadCamisas*10)*.93) + (cantidadEtiquetas*2);

                let listadoProductos = [];

                if(boletosDia >=1){
                    listadoProductos.push(`${boletosDia} Pases por dia`);
                }
                if(boletosDosDias >=1){
                    listadoProductos.push(`${boletosDosDias} Pases por 2 dias`);
                }
                if(boletosCompletos >=1){
                    listadoProductos.push(`${boletosCompletos} Pases Completos`);
                }
                if(cantidadCamisas >=1){
                    listadoProductos.push(`${cantidadCamisas} Camisas`);
                }
                if(cantidadEtiquetas >=1){
                    listadoProductos.push(`${cantidadEtiquetas} Etiquetas`);
                }
                
                listaProductos.style.display="block";
                listaProductos.innerHTML=''
                for (let i = 0; i < listadoProductos.length; i++) {
                    listaProductos.innerHTML += `${listadoProductos[i]} <br/>`; 
                }

                sumaTotal.innerHTML = `<p>$ ${totalPagar.toFixed(2)}</p>`;
                
            }
        }

        //Funcion que muestra dependiendo de los pases los talleres por dia
        function mostrarDias(){
            let boletosDia = parseInt(paseDia.value,10)||0,
                boletosDosDias = parseInt(paseDosDias.value,10)||0,
                boletosCompletos = parseInt(paseCompleto.value,10)||0;

            let diasElegidos = [];

            if(boletosDia === 0){
                document.getElementById('viernes').style.display='none';
            }
            if(boletosCompletos === 0){
                document.getElementById('viernes').style.display='none';
                document.getElementById('sabado').style.display='none';
                document.getElementById('domingo').style.display='none';
            }
            if(boletosDosDias === 0){
                document.getElementById('viernes').style.display='none';
                document.getElementById('sabado').style.display='none';
            }
            if( boletosDia>0){
                diasElegidos.push('viernes');
            }
            if(boletosDosDias>0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletosCompletos>0){
                diasElegidos.push('viernes','sabado','domingo');
            }
            for(let i=0; i<diasElegidos.length;i++){
                document.getElementById(diasElegidos[i]).style.display='block';
            }

        }


        function validacionCampos(){
            if(this.value === ''){
                errorDiv.style.display='block';
                errorDiv.innerHTML = "Este campo es obligatorio";
                this.style.border = '2px solid red';
            }else{
                errorDiv.style.display = 'none';
                this.style.border = 'none';
            }
        }


        function validarMail(){
            if(this.value.indexOf("@") > -1){
                errorDiv.style.display = 'none';
                this.style.border = 'none';
            }else{
                errorDiv.style.display='block';
                errorDiv.innerHTML = "El correo no es valido";
                this.style.border = '2px solid red';
            }
        }


    });//Dom content Loaded
})();