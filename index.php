<?php

  $FILE = 'html.html';

  $REPLACE = [
   '{#TITLE#}' 		         => 'Simple HTML/PHP - TEMPLATE/PARSER - PHP EVAL HACKS'
  ,'{#CONTENT#}' 		       => 'Simple HTML/PHP TEMPLATE'
  ,'{#TIMESTAMP#}' 		     => '<?php echo date("Y"); ?>'
  ];

  $EVALBOX = (preg_replace(array_keys($REPLACE), $REPLACE, file_get_contents($FILE) ));

  eval(" ?> $EVALBOX <?php ");

exit;

?>
