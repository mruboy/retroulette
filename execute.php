<?php
$game = $_POST["game"];
//exec('open -a OpenEmu /Users/ryanyoo/Emulators/Super\ Nintendo/Mortal\ Kombat\ 3.zip');
//echo $game;
//echo " Escaped: ".escapeshellarg($game);
exec('open -a OpenEmu '.$game);
//exec('open -a OpenEmu '.$game);
