<?php
if ($_FILES["video"]["name"] == "") {
    $error = "No video imported.";
} elseif (file_exists("web/bundles/framework/mp4/" . $_FILES["video"]["name"])) {
    $error = "The file already exists.";
} elseif ($_FILES["video"]["type"] != "video/mp4") {
    $error = "File format not supported.";
} elseif ($_FILES["video"]["size"] > 26214400) {
    $error = "Only files <= 25??.";
} else {
    move_uploaded_file($_FILES["video"]["tmp_name"], "web/bundles/framework/mp4//" . $_FILES["video"]["name"]);
}

?>