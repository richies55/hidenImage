<?php
    function img($image) {           
        $fileName = $image; //file name
        $fileDir = "images/$image"; // image file directory
        if (file_exists($fileDir)) //check if image are exist
            {
                $b64image = base64_encode(file_get_contents($fileDir)); // make contents of image to be base64
                $data = "data:image/png;base64,$b64image"; // make data base64 as image/png
                return $data; // return image as data base64 image/png
            } else {
                return 0; // image are not exist, return 0
            }
    }
?>