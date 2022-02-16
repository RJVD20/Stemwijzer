<?php
include 'includes/head.php';
?>
<!DOCTYPE html>
  </head>
    <body>
      <div class="container" style="padding:100px;">
        <div class="row">
          <div class="col-sm-3"></div>
            <div class="col-sm-6" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
border-radius: 10px;">
          <div class="page-header">
            <br><h2 class="specialHead text-center">Selecteer hier een partij waarop u wilt stemmen:</h2>
          </div>
          
          <form action="saveVote.php" method="POST">
            <div class="form-group">
              <div class="radio text-center">
                <div class="container">
                  <div class="row">
                    <div class="col-sm">
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="JM"> <strong>CDA</strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="JRZ"> <strong>VVD</strong> 
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>PvdA</strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>GroenLinks</strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>Wens4U</strong>
                      </label><br>
                    </div>
                    <div class="col-sm">
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="MAD"> <strong>Seniorenpartij </strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="JW"> <strong>JESS Lokaal </strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>SP</strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>D66</strong>
                      </label><br>
                      <label class="partij" for="">
                        <input type="radio" name="selectedCandidate" value="DM"> <strong>PVV</strong>
                      </label><br>
                    </div>
                  </div>
                </div>
              <br>
              <hr>
              <button type="submit" name="submit" class="btn btn-success" style="border-radius:0%">Stem doorgeven</button>
              <button type="submit" class="btn btn-danger" style="border-radius:0%">Annuleren</button>
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
