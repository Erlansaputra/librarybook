<?php

// Connecting, selecting database
$dbconn = pg_connect("host=localhost dbname=perpustakaan user=postgres password=localadmin")
    or die('Could not connect: ' . pg_last_error());

?>