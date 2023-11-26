<?php

$request = $_SERVER["REQUEST_URI"];
$viewDirectory = "/pages/";

// Show homepage if we have no URI or URI is an explicit link to homepage
if ($request == ""
	|| $request == "/"
	|| $request == "/home"
	|| $request == "/index"
	|| $request == "/index.html")
{
	require __DIR__ . $viewDirectory . "home.php";
	exit;
}

// Build a path for a template file with a name matching this URI + ".php" in our pages directory
$uriAsTemplatePath = __DIR__ . $viewDirectory . ltrim($request, "/html") . ".php";

// Show 404 page if no matching template was found
if (!file_exists($uriAsTemplatePath))
{
	require(__DIR__ . $viewDirectory . "404.php");
	exit;
}

// Use matching PHP file from pages directory
require($uriAsTemplatePath);

exit;