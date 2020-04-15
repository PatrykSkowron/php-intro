<?php

function sayWhat($what){
    echo("Saying: {$what}\n");
}


function selectAnything($choices, $id){
echo(
"<p>
<select id='{$id}' name='{$id}'>");

foreach ($choices as $item) {
echo("<option value={$item}>{$item}</option>");
}

echo('</select>
</p>');
}
?>