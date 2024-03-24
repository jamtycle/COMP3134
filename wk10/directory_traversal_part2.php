<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $path=isset($_GET['q']) ? $_GET['q'] : '';

    # validate if path contains a dot in it
    if (strpos($path, '.') !== false) {
        die('Path contains invalid characters');
    }

    # make that path never gets out of the current directory
    #   not really lol, but it's a good start, what really makes
    #   that the path never gets out of the current directory is
    #   the strpos function above
    $final_path = join(DIRECTORY_SEPARATOR, array(__DIR__, $path));


    # check if the path exists
    if (!file_exists($final_path)) {
        die('Path does not exist');
    }

    print "<pre>";

    print_r(scandir($final_path));

    print "</pre>";
?>