<?php
require __DIR__ . "/../vendor/autoload.php";

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(__DIR__ . "/../templates");
$twig = new Twig_Environment($loader, [
	// 'cache' => __DIR__ . "/../twig_cache",
]);

function render_page($page_name)
{
	global $twig;

	try
	{
		echo $twig->render("content/{$page_name}.twig");
	}
	catch (Twig_Error_Loader $e)
	{
		render_not_found($twig);
	}
}

function render_not_found($twig)
{
	http_response_code(404);
	echo $twig->render("errors/404.twig");
}

// Set routes
$router = new AltoRouter();

$router->map("GET", "/", function () {
	render_page("home");
});

$router->map("GET", "/[a:page]", "render_page");

$match = $router->match();
if ($match && is_callable($match['target']))
{
	call_user_func_array($match['target'], $match['params']);
}
else
{
	render_not_found($twig);
}
