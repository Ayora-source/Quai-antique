<?php
require ("../config2.php");
  // Initialiser la session
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["admin"])){
    header("Location: ../login.php");
    exit(); 
  }

?>
  <header>
        <?php 
include 'header-admin.php'
?>
  </header>
  <?php 
        $sql = "SELECT * FROM guest";
        $resultat = Exrequete($connect, $sql);
        while ($row = mysqli_fetch_assoc($resultat)) { ?>  
    <section style="margin-left: 200px;">
        <p> Rentrer le nombre de convive que peux accueillir le restaurent par tranche de 15 minutes</p>
        <form  action="modifconvive.php" method="post">
        <input type="text" name="guest" value="<?php echo $row['guest'] ; ?>">        
        <button type="submit" name= "Ajouter">Modifier</button>
      <?php }?>
      </form><br>
      </section>

            <section>
              <div class="box-body table-responsive no-padding">
                <table  class="display table table-striped" style="font-size:12px;" id="table_inscrits" cellspacing="0" width="100%">
                  <thead>
                     <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Couvert</th>
                        <th>allergies</th>
                      </tr>
                  </thead>
                  <tbody> 
                  <?php
                    $sql = "SELECT * FROM reservation";
                    $resultat = Exrequete($connect, $sql);
                   while ($row = mysqli_fetch_assoc($resultat)) { ?>       
                       <tr>                   
                         <td><?php echo htmlspecialchars($row['tel']); ?></td>
                         <td><?php echo htmlspecialchars($row['username']); ?></td>
                         <td><?php echo htmlspecialchars($row['firstname']); ?></td>
                         <td><?php echo htmlspecialchars($row['date']); ?></td>
                         <td><?php echo htmlspecialchars($row['time']); ?></td>
                         <td><?php echo htmlspecialchars($row['covers']); ?></td>
                         <td><?php echo htmlspecialchars($row['allergy']); ?></td>                
                         </tr>
                         <?php } ?>
                         </tbody>                          
                <tfoot>
                     <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Couvert</th>
                        <th>allergies</th>
                      </tr>
                </tfoot>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
        </div>
      </div>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->

  </body>
</html>
