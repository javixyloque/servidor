<?php
    function subirPrenda($prenda) {
        return ucwords(trim($prenda, " "));
    }

    function filtrado ($data) {
        $data = trim($data);
        $data = strip_tags($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>