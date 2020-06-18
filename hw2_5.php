<?php
$html = file_get_contents('mainHTML.html');
$html = str_replace('{{YEAR}}', date("Y"), $html);
echo $html;