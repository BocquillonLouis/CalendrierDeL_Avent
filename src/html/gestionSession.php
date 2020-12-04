<?php
    // Start the session
    session_start();

    // Session timeout duration in seconds
    // Specify value lesser than the PHPs default timeout of 24 minutes
    $timeout = 900;
         
    // Check existing timeout variable
    if (isset($_SESSION['lastaccess']) && isset($_SESSION['pseudo'])) {

        // Time difference since user sent last request
        $duration = time() - intval($_SESSION['lastaccess']);

        // Destroy if last request was sent before the current time minus last request
        if ( $duration > $timeout ) {

            // Clear the session
            session_unset();

            // Destroy the session
            session_destroy();

            // Restart the session
            session_start();

            echo "<script>alert(\"Vous avez été déconnecté pour cause d'inactivité durant 15 minutes.\")</script>";
        }
    }

    // Set the last request variable
    $_SESSION['lastaccess'] = time();
?>