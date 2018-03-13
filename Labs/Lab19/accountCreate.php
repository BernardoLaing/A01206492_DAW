<?php include("partials/_header.html"); ?>
<?php include("partials/_top_bar.html"); ?>
<br /><br />
<div class="container mdiv shadow">
    <div class="mx-auto text-center"> <!-- mx-auto da un padding y border automatico-->
        <div class="display-3">Cuentas</div> <!--display son headdings mas grandes-->
    </div>
    <br>
    <br>
    <div class="row text-center center-block mx-auto">
        <div class="col-sm-12 col-md-4">Nombre: <input type="text" name="name" required="true"></div>
        <div class="col-sm-12 col-md-4">Nombre Usuario: <input type="text" name="user" required="true"></div>
        <div class="col-sm-12 col-md-4">Rol: 
            <select name="rol" required="true">
						<option>-select-</option>
						<option>Becas</option>
						<option>Administrador</option>
						<option>Bibliotecario</option>
            </select>
        </div>
        <br>
        <br>
        <div class="col-sm-12 col-md-4">Contraseña: <input type="password" name="pw" required="true"></div>
        <div class="col-sm-12 col-md-4">Validar Contraseña: <input type="password" name="pw2" required="true"></div>
    </div>
    <br>
    <br>
    <div class="row mx-auto">
        <div class="col-sm-2 center-block"><a href="cuentas.php" class="btn btn-secondary py-0"><i class="material-icons alagin-middle">arrow_back</i></a></div>
        <div class="col-lg-6 col-sm-4"></div>
        <div class="col-lg-2 col-sm-4">
            <button type="button" class="btn btn-secondary btn-block"> Registrar</button>
        </div>
        <div class="col-lg-5 col-sm-4"></div>
    </div>
    
</div>

<?php include("partials/_footer.html"); ?>