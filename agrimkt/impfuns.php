<?php

function generateRandomNumber($length = 5)
{
  $random = "";
  srand((double) microtime() * 1000000);

  $data = "123456123456789071234567890890";
  // $data .= "aBCdefghijklmn123opq45rs67tuv89wxyz"; // if you need alphabatic also

  for ($i = 0; $i < $length; $i++) {
          $random .= substr($data, (rand() % (strlen($data))), 1);
  }

  return $random;

}
