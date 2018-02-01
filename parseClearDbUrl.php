<?php

if (!empty($argv[1])) {
    $url = parse_url($argv[1]);
    print_r($url);
} else {
    echo "\nPlease enter your CLEARDB_DATABASE_URL environment variable.\nE.g. php -f parseClearDbUrl.php 'CLEARDB_DATABASE_URL' \n\n";
}

?>