<?php include("partials/_header.html"); ?>
<?php include("partials/_top_bar.html"); ?>
<br /><br />
<div class="container mdiv shadow">
    <div class="mx-auto text-center"> <!-- mx-auto da un padding y border automatico-->
        <div class="display-3">Actividades</div> <!--display son headdings mas grandes-->
    </div>
    <br>
    <br>
    <div class="row  center-block mx-auto">
        <div class="col-sm-12 col-md-4">Nombre: <input type="text" name="name"></div>
        <div class="col-sm-12 col-md-4">Hora: <input type="time" name="user"></div>
        <div class="col-sm-12 col-md-4">Fecha: <input type="date" name="user"></div>
        <br>
        <br>
        <div class="col-sm-12 col-md-12">Descripción: <textarea class="form-control" rows="5" id="comment"></textarea></div>
    </div>
    <br>
    <br>
    <div class="row mx-auto">
        <div class="col-sm-2"></div>
        <div class="col-sm-2 center-block"><a href="activities.php" class="btn btn-outline-secondary"><i class="material-icons alagin-middle">arrow_back</i></a></div>
        <div class="col-sm-4"></div>
        <div class="col-lg-2 col-sm-4">
            <button type="button" class="btn btn-secondary btn-lg btn-block"> Registrar</button>
        </div>
        <div class="col-lg-5 col-sm-4"></div>
    </div>
    
</div>
<?php include("partials/_footer.html"); ?>