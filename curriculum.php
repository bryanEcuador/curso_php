<?php
require_once('jobs.php');

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1> <?php echo $informacion['nombre']; ?> </h1>
        <h2> <?php echo $informacion['profesion']; ?></h2>
        <ul>
          <li>Mail: <?php echo $informacion['correo']; ?></li>
          <li>Phone:<?php echo $informacion['celular']; ?></li>
          <li>LinkedIn: <?php echo $informacion['linkedin']; ?></li>
          <li>Twitter: <?php echo $informacion['twitter']; ?></li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          <?php echo $carrrer;?>          
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <li class="work-position">
              <?php 
              foreach ($works as $key => $value) {
                echo "<h5>$key</h5>";
                  foreach($value as $key2 => $value2){
                    if($key2 == "Descripcion"){
                       echo "<p>$value2</p>"; 
                    } elseif($key2 == "Achievements" ) {
                      echo "<strong>Achievements:</strong>
                            <ul>";
                       foreach ($value2 as $key3 => $value3) {
                         echo "<li>$value3</li>";
                       }
                       echo "</ul>"; 
                    }else {
                            echo "<p>";
                             echo  tiempo($value2); 
                            echo"</p>";
                    }
                     
                  }
              }
                
              
              ?>
            </li>

          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                    <?php
                      foreach ($proyect as $key => $value) {
                        echo  "<h5>$key</h5>
                              <div class='row'>
                                      <div class='col-3'>
                                      <img id='profile-picture' src='https://ui-avatars.com/api/?name=John+Doe&size=255' alt=''>
                                    </div>
                                    <div class='col'>";
                                      foreach ($value as $key2 => $value2) {
                                        if($key2 == "Descripcion" ) {
                                          echo "<p>$value2</p>";
                                        }else{
                                        echo "<strong>Technologies used:</strong>";
                                          foreach ($value2 as $key3 => $value3) {
                                            echo " <span class='badge badge-secondary'>$value3</span>";
                                          } 
                                        }    
                                      }
                              echo "</div>
                              </div>";       
                      }
                    ?>

            </div>

          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <?php
            foreach($skill as $key => $value){
              echo "<h4>$key</h4>
                    <ul>";
                      foreach ($value as $value2) {
                    echo "<li> $value2</li>";    
                      }
               echo "</ul>";   
            }
        ?>
        <h3 class="border-bottom-gray" >Languages</h3>
        <?php
        echo "<ul>";
            foreach ($languages as $value) {
              echo "<li> $value </li>";
            }
        
        echo "</ul>";
        
        ?>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>