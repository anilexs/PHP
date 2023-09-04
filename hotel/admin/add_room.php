<?php include_once "../inc/header.php"; 
      include_once "../model/functions.php";
      $listHotel = hotelList();
?>
<div class="container">
    <form action="../model/db_room.php" method="post" enctype="multipart/form-data">


        <div class="form-group">
            <label>Hotel :</label>
            <select name="hotel" id="" class="form-control">
                <option value="">Choose hotel</option>
                <?php foreach ($listHotel as $hotel) { ?>
                    <option value="<?= $hotel['id_hotel']; ?>"><?= $hotel['hotel_name']; ?></option>
                <?php } ?>
            </select>
        </div>
 
        <div class="form-group">
            <label>Room Number :</label>
            <input type="text" class="form-control" name="room_number" >
        </div>
 
        <div class="form-group">
            <label>Room Price :</label>
            <input type="text" class="form-control" name="room_price" >
        </div>
 
        <div class="form-group">
            <label>Persons :</label>
            <input type="number" class="form-control" name="person" >
        </div>
 
        <div class="form-group">
            <label>Category :</label>
            <select name="category" id="" class="form-control">
                <option value="">Choose category</option>
                <option value="classic">Classic</option>
                <option value="vip">Vip</option>
            </select>
        </div>

        <div class="form-group">
            <label>photo :</label>
            <input type="file" class="form-control" name="image" >
        </div>
    
    
        <button type="submit" id="bouton" class="btn btn-primary mt-5 mb-5" name="add_room" value="submit">add_room</button>
    </form>
</div>

<?php include_once "../inc/footer.php"; ?>