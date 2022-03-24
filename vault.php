<?php
include 'includes/head.php';
include 'database.php';
?>
<!DOCTYPE html>
  </head>
    <body>
      <div class="container" style="padding:100px;">
        <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 10px;">
              <div class="page-header">
                <br><h2 class="specialHead text-center">Selecteer hier een partij waarop u wilt stemmen:</h2>
               <p>Klik op de partij waarop u wilt stemmen</p>
              </div>
          
          <form action="candidates.php" method="GET">
            <div class="form-group">
              <div class="radio text-center">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                  

                      
                    
<div class="partijen">
                    <?php  
$sql = "SELECT * FROM partijen";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?>
  
        <div class="partij">   <a href="<?php echo $row["links"]?>"> <img src="images/<?php echo $row["image"]?>" alt="cda_img"  width="" height="75"></a><br>
        <label for="">  <?php echo "". $row["Naam"];?> </label><br>
        </div>       
<?php }
} else {
  echo "0 results";
}
?>
</div>
</div>
</div>
  </div>
    </div>
      <hr>
        <div class="button">
        <a href="https://localhost/stemwijzer/login.php/" target="_blank">Annuleren</a>
        </div>
    </div>
  </div>
</form>
</div>
  <div class="col-sm-3"></div>
  </div>
</div>
</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
