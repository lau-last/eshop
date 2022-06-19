<?php
function valid_pass($password)
{
   $r1 = '/[A-Z]/';  //Uppercase
   $r2 = '/[a-z]/';  //lowercase
   $r3 = '/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
   $r4 = '/[0-9]/';  //numbers

   if (preg_match_all($r1, $password, $o) < 1) return FALSE;

   if (preg_match_all($r2, $password, $o) < 1) return FALSE;

   if (preg_match_all($r3, $password, $o) < 1) return FALSE;

   if (preg_match_all($r4, $password, $o) < 1) return FALSE;

   if (mb_strlen($password, 'utf-8') < 8) return FALSE;

   return TRUE;
}
