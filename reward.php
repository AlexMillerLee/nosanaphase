<?php
$myAddress="";
$myEmail="";
$lastBlock=json_encode(getLastBlock());
if ($lastBlock['address']==$myAddress)
{
	mail($myEmail, "You got a reward", "You got a block at ".date("d.m.y H:i"));
}
