<?php
require 'form.php';

$form = new Form($_POST);

var_dump($form);
?>

<form    action ="#"   method="post">

     <?php
                  echo $form->input ('username');
                 // echo $form->input ('password');
                 echo $form->submit();
                 echo $form->verif('username');
                 echo "\n";
                echo $form->surround;
     ?>

</form>

<form method="post" action="#">
    <input type="text" name="zebi" value="    <?php if (isset($_POST['zebi'])){echo $_POST['zebi'];} ?>    " />
    <input type="submit" value="envoyer" />
  
</form>


