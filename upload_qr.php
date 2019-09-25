<?php

function base64_to_image($base64_image) {
    [$formatInfo, $data] = explode(",", $base64_image, 2);
    $imageFormat = explode("/", explode(";", $formatInfo, 2)[0], 2)[1];

    $imageFileName = "qr.${imageFormat}";

    $fp = fopen($imageFileName, "wb");

    fwrite($fp, base64_decode(
        str_replace(' ', '+', $data)
    ));

    fclose($fp);

    return $imageFileName;
}

$base64_image = @$_POST['base64_image'];
echo base64_to_image($base64_image);
