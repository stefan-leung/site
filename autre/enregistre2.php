<?php
echo '<pre>';print_r($_FILES);echo '</pre>';
if((isset($_FILES['fichier'])) && ($_FILES['fichier']['error']==0)){
     copy($_FILES['fichier']['tmp_name'],'download_'.$_FILES['fichier']['name']);
}
?>