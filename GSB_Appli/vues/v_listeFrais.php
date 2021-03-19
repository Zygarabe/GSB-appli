  <!-- Division principale -->
  <div id="contenu">
      <h2>Validation des frais</h2>
      <form action="index.php?uc=validerFrais&action=validerFicheVisiteur" method="post">
          <div class="corpsForm">
              <!-- Combo visiteur -->
              <p>
                  <label for="lstVisiteur">Choisir le visiteur</label>
                  <select name='lstVisiteur' id='lstVisiteur'>

                      <option value="<?php echo $lesVisteur['id']?>"><?php echo $lesVisteur['nom']. " " . $lesVisteur['prenom'];?></option>


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


      <form action="index.php?uc=suivrefrais&action=selectionnerVisiteur" method="post">

          <div class="corpsForm">
              <!-- Frais forfait -->
              <input type="hidden" name="txtVisiteur" value="">
              <div style="clear:left;">
                  <h3>Frais au forfait </h3>
                  <table style="color:white;" border="1">
                      <tr>
                          <th></th>
                          <th>Afficher les différents libellés</th>
                          <th></th>
                      </tr>
                      <tr align="center">
                          <th>Quantité</th>
                          <td width="80"> <input type="text" id="idFrais" name=" " size="10" maxlength="5" value=""> </td>

                      </tr>
                  </table>
                  <p class="titre"><label class="titre">&nbsp;</label><input class="zone" type="submit" value="Valider" />
              </div>
          </div>

      </form>

      <form action="index.php?uc= &action=  "method="post">

          <div class="corpsForm">
                <input type="hidden" name = "txtVisiteur" value="">
              <!-- Frais hors-forfait -->

              <p class="titre">
                        <div style="clear:left;"><h3>Hors Forfait</h3>
                        <table style="color:white;" border="1">
                        <tr><th>Date</th><th>Libellé </th><th>Montant</th></tr>


                            <tr>
                              <td width='100'><input type='text' size='12' name='txtDate' value='' /></td>
                              <td width='220'><input type='text' size='30' name='txtLibelle' value='' /></td>
                              <td width='90'><input type='text' size='10' name='txtMontant' value='' /></td>
                            <td width='90'><a href="index,php?uc+ &action+ &idFrais+ &txtVisiteur= " 
                                       onclick="return confirm('Voulez-vous vraiment supprimer cette ligne de frais hors forfait ?');" 
                                    title="Supprimer la ligne de frais hors forfait">Supprimer</a></td>
                            <td width='90'><a href="index.php?uc= &action= &idFrais= &txtVisiteur= " 
                                     onclick="return confirm('Voulez-vous vraiment reporter cette ligne de frais hors forfait ?');" 
                                    title="Reporter la ligne de frais hors forfait">Reporter</a></td>
                            </tr>
                                  <?php

                          
                                  ?>
                                                <tr align='center'>

                      </table>
                  </div>
                  <br></br>
                  <p class="titre">
                  <div style="clear:left;"><h3>Hors classification</h3>
                  <b>Nombres de justificatifs : </b><input type='text' class='zone' size='8' name='txtNbJustificatifs' value=''><br>
                  <b>Montant total de la fiche : </b><input type='text' class='zone' size='8' name='txtMontant' value=''>
                  <p class="titre"><label class="titre">&nbsp;</label><input class="zone" type="submit" value="Valider" />
                    <input id="annuler" type="reset" value="Annuler" size="20" />
                  </div>


          </div>
      </form>




  </div>