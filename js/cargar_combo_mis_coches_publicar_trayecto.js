//Se recogen los coches de cada usuario de la BBDD.
$(document).ready(function () {
        
    cargar_mis_coches_publicar_trayecto();
    
    function cargar_mis_coches_publicar_trayecto() {
        
        $.ajax({
            type: 'POST',
            dstaType: 'json',
            url: "../../controlador/controlador_mis_coches.php",
            success: function (datos) {
                midato = JSON.parse(datos)
                milista = "";
                $.each(midato, function (i, dato) {
                    milista += "<option id='" + dato['id_vehiculo'] + "' value='" + dato['nombre'] + "," + dato['matricula'] + "'></option>";
                });
                $('#poo3').append(milista);
                return false;
            },
            error: function (xhr) {
                alert("An error occured: " + xhr.status + " " + xhr.statusText);
            }
        });
    }
});