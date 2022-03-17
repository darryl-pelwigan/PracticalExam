<?php 

$palindrome = 'madam';
$palindrome2 = 'nurses run';

$checked = checkPalindrome($palindrome2);
if($checked){
  echo $palindrome2. " is a palindrome";
}

// Solved this with the help of interview. I search the strrev function.
function checkPalindrome($string){
  $trimString = str_replace(' ', '', $string);
  if(strrev(strtolower($trimString)) == strtolower($trimString)) {
    return true;
  }
  return false;
}

?>