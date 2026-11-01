<?php

/**
 * get the path file
 *@paramString $path
 */

function basePath($path = '')
{
    return __DIR__ . "/" . $path;
}

/**
 * Load View
 *@nameString
 */

function loadView($name)
{
    $viewPath = basePath("Views/{$name}.php");

    if (file_exists($viewPath)) {
        require_once $viewPath;
    } else {
        echo "view" . "(" . $name . "Not Found" . ")";
    }
}


/**
 * Load Partails
 *@nameString
 */

function loadPartial($name)
{
    $viewPath = basePath("Views/partials/{$name}.php");

    if (file_exists($viewPath)) {
        require_once $viewPath;
    } else {
        echo "view" . "(" . $name . "Not Found" . ")";
    }
}