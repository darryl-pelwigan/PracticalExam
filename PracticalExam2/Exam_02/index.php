<?php 

// Solved this with the help of interview. I search the fwrite content function.
function createNewFile($content){
  echo "A file name hell_there.php is created";
  $fp = fopen('hello_there.php', 'w');
  fwrite($fp, $content);
  fclose($fp);
}

$content = '
  <?php 
    echo "This is a test page!";
    echo "Exam number two";
  ?>
';

createNewFile($content);

?>