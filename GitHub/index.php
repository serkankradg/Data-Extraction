<?php

$bot = file_get_contents("https://discord.com");
preg_match_all('@<img class="(.*?)" alt="(.*?)" src="(.*?)">@si', $bot, $ninja);
$hedef = $ninja[1];
$parcala = explode('src="', $hedef[4]);
$foto = $parcala[1];

?>
<img src="https://discord.com/<?=$foto?>" alt="Discord">
