<?php
if($_POST){
    if($_POST['select'] == 'suma'){
        echo $_POST['fi'] + $_POST['se'];
    }elseif($_POST['select'] == 'resta'){
        echo $_POST['fi'] - $_POST['se'];
    }else{
        echo $_POST['fi'] * $_POST['se'];
    }
}else{
    echo "<p>No se recibieron datos.<p>";
}
?>