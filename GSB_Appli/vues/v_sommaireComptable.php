    <!-- Division pour le sommaire -->
    <div id="menuGauche">
     <div id="infosUtil">
    
        <h2>
		<?php  
			echo $_SESSION['prenom']."  ".$_SESSION['nom'];
		?>   
		</h2>
         <h3>Comptable</h3>    
      </div>  
        <ul id="menuList">
			<li class="smenu">
              <a href="index.php?uc=validerFrais&action=selectionnerVisiteur" title="Validation des fiches de frais">Validation des fiches de frais</a>
			</li>
			<li class="smenu">
              <a href="index.php?uc=suivrePaiement&action=selectionnerVisiteur" title="Suivi de paiement">Suivi de paiement</a>
			</li>
			<li class="smenu">
              <a href="index.php?uc=connexion&action=deconnexion" title="Se déconnecter">Déconnexion</a>
			</li>
         </ul>
        
    </div>
    