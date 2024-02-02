<?php

// SALT & SHA1 & REVERSE

function pw_encode($password)
{
   for ($i = 1; $i <= 10; $i++)
       $seed = substr('0123456789abcdef', rand(0,15), 1);
       $shaseed = sha1($seed.$password.$seed).$seed;
   return strrev($shaseed);
}

// COMPARE HASH PASSWORD AND STORED VALUE

function pw_check($password, $stored_value)
{
   if (strlen($stored_value) != 50)
      return FALSE;
   $stored_seed = substr($stored_value,40,10);
   if (strrev(sha1($stored_seed.$password.$stored_seed)).$stored_seed == $stored_value)
     return TRUE;
   else
     return FALSE;
}

?>