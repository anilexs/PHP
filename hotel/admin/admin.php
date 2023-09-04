<?php include_once "../inc/header.php"?>

<div class="container d-flex justify-content-around .bg-secondary">
    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>
        <div class="card-body">
        <h5 class="card-title">ajout hotel</h5>
        <p class="card-text">cliquez ici pour ajouter un hotel</p>
        <a href="add_hotel.php" class="btn btn-primary">ajouter un hotel</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-plus text-center"></i>
        <div class="card-body">
        <h5 class="card-title">ajout chambre</h5>
        <p class="card-text">cliquez ici pour ajouter une chambre</p>
        <a href="add_room.php" class="btn btn-primary">ajouter une chambre</a>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
        <i class="fa-solid fa-list text-center"></i>
        <div class="card-body">
        <h5 class="card-title">liste reservations</h5>
        <p class="card-text">cliquez ici pour voir la liste des reservations</p>
        <a href="#" class="btn btn-primary">liste reservation</a>
      </div>
    </div>
</div>

<?php include_once "../inc/footer.php"?>