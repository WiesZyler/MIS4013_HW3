<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'zylerwie_hw3user', 'Z@hAI2R8hZ5w', 'zylerwie_hw3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
