<div class="modal fade" id="iniciSesionPopUp" role="dialog"> 
    <div class="modal-dialog modal-lg"> 

        <div class="modal-content"> 
            <form action="../../controlador/controlador_login.php" method="POST">
                <div class="modal-header"> 
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                    <h4 class="modal-title">¡Bienvenido!</h4>
                </div> 
                <div class="modal-body"> 
                    <div class="form-group"> 
                        
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" maxlength="50" required> 
                    </div> 
                    <div class="form-group"> 
                       
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Contraseña" maxlength="255" required>
                    </div>
                </div> 
                <div class="modal-footer"> 
                    <input type="submit" class="btn btn-default" value="Enviar" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button> 
                </div> 
            </form>
        </div> 

    </div> 
</div>
