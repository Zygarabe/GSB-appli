  <!-- Division principale -->
  <div id="contenu">
      <h2>Validation des frais</h2>
      <form action="index.php?uc=validerFrais&action=validerFicheVisiteur" method="post">
          <div class="corpsForm">
              <!-- Combo visiteur -->
              <p>
                  <label for="lstVisiteur">Choisir le visiteur</label>
                  <select name='lstVisiteur' id='lstVisiteur'>
                    <?php foreach($lesVisiteurs as $unVisiteur){ ?>
                        <option value="<?php echo $unVisiteur['id']?>"><?php echo $unVisiteur['nom']." ".$unVisiteur['prenom'];?></option>
                    <?php } ?>
                      


                  </select>
              </p>

              <!-- Affichage du mois -->
              <p>
                  <label for="txtMois">Mois</label>
                  <input type="text" name="txtMois" size="12" value="" /><br><br>
              </p>

              <p class="titre"><label class="titre">&nbsp;</label><input class="zone" type="submit" value="Valider" size="20" />

          </div>

      </form>
  </div>/