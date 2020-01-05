<?php
  session_start();
?>
<?php     
      
  if(($_POST) != NULL && ($_POST) != '0') {
      $_SESSION['unidade'] = ($_POST['unidade']);
      $_SESSION['clone'] = ($_POST['clone']);
      $_SESSION['forno'] = ($_POST['forno']);
      $_SESSION['hum_madeira'] = ($_POST['humidade_madeira']);
      $_SESSION['hum_ar'] = ($_POST['humidade_ar']);
      $_SESSION['temp_ambiente'] = ($_POST['temperatura_ambiente']);
      $_SESSION['diametro'] = ($_POST['diameter']);
      $_SESSION['comprimento'] = ($_POST['size']);
      $_SESSION['volume'] = ($_POST['volume']); 

    header('Location: graf_tab.php');
    } else {
      header('Location: inf.php');
  }
?>