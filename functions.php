<?php
function sanitize($raw_data){
        global $conn
        mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data);
        return $data
    }

?>    
