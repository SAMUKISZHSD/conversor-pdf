<?php

$arquivo_pdf = file_get_contents('converted.pdf');

$arquivo_base64_pdf = base64_encode($arquivo_pdf);

echo $arquivo_base64_pdf;