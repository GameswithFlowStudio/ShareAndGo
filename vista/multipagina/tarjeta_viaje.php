<div class="tarjetaViaje" ng-repeat="item in listaTrayectos">
   <!-- <div id="mapa" class="mapa">
        <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d46534.551673009046!2d-2.7173421818677883!3d43.20090005954047!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0xd4e32f83a8c7c6b%3A0xa858b2d5d7300d7f!2sYurreta!3m2!1d43.176978299999995!2d-2.633813!4m5!1s0xd4e3426975c2913%3A0x404f58273cb9dc0!2sAmorebieta-Echano!3m2!1d43.2204692!2d-2.733068!5e0!3m2!1ses!2ses!4v1515405462954" width="100%" height="25%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div> --> 
    <div id="nombreConductor" >
        <nombreConductor class="nombreExperiencia">
            <nombre class="nombre">{{item.conductor}}</nombre>
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
            <img src="../img/icono_volante.png" class="iconoVolante">
        </nombreConductor>
    </div>
    <div id="informacion" class="informacion">
        <div id="tipo_trayecto" class="tipoTrayecto" >
            <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '0' , 'tipoSeleccionado' : item.ocasional == '1'}">ocasional</tipoviaje>
            <tipoViaje ng-class="{'tipoNoSeleccionado' : item.ocasional == '1' , 'tipoSeleccionado' : item.ocasional == '0'}">frecuente</tipoviaje>
        </div>
        <table class="dias">
            <tr>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Lunes','dia':item.dias != 'Lunes'}">L</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Martes','dia':item.dias != 'Martes'}">M</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Miercoles','dia':item.dias != 'Miercoles'}">X</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Jueves','dia':item.dias != 'Jueves'}">J</div></td>
                <td><div ng-class="{'diaSeleccionado' : item.dias == 'Viernes','dia':item.dias!= 'Viernes'}">V</div></td>
            </tr>   
        </table>
    </div>
    <div id="informacion" class="informacion">
        <div id="plazas_disponibles" class="zonaPlazas">
            Numero de plazas: <numero id="numeroPlazas" class="plazas">{{item.plazas_disponibles}}</numero>
        </div>
    </div>
    <button type="button" class="btn btn-default btn-sm">
        <span class="glyphicon glyphicon-envelope"></span> Enviar solicitud 
    </button>
</div>