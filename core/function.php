<?php

function sifrele($sifre){

return password_hash($sifre, PASSWORD_DEFAULT);

}


?>