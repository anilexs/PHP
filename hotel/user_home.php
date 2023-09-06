<?php 
session_start();
include_once "./model/functions.php"; 
include_once "./inc/header.php"; 
$userBookList = userBookList($_SESSION['id_user']);
$price = 0;
?>
    <div class="container">
      <table class="table">
            <thead>
                  <tr>
                        <th>Id reservation</th>
                        <th>start Date</th>
                        <th>End Date</th>
                        <th>State</th>
                        <th>Price</th>
                        <th>Action</th>
                  </tr>
            </thead>
            <tbody>
                  <?php foreach($userBookList as $book){ $price += $book['booking_price'];?> 
                        <tr>
                              <td><?= $book['id_booking']; ?></td>
                              <td><?= $book['booking_start_date']; ?></td>
                              <td><?= $book['booking_end_date']; ?></td>
                              <td><?= $book['booking_state']; ?></td>
                              <td><?= $book['booking_price']; ?></td>
                              <td><a href="./model/db_booking.php?idbook=<?php echo $book['id_booking']; ?>" class="btn btn-warning">Cancel</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
                <tfoot>
                    <tr class="table-active">
                        <td colspan="4">Total de vos reservation : </td>
                        <td><?= $price; ?></td>
                    </tr>
                </tfoot>
            </table>
</div>
<?php include_once "./inc/footer.php"?>