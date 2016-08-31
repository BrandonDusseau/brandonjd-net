<?php

/* main.twig */
class __TwigTemplate_cf2bfe3dea116e4eb53b61dffdb991b78190b8e3033ba4af783c0def9e1e8b4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["maintitle"] = "Brandon Dusseau";
        // line 2
        echo "<!DOCTYPE html>
<html>
\t<head>
\t\t<meta charset=\"UTF-8\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/fawesome.css\">
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"css/main.css\">
\t\t<title>
\t\t\t";
        // line 9
        $context["titleblock"] = $this->renderBlock("title", $context, $blocks);
        // line 10
        echo "\t\t\t";
        if ( !twig_test_empty((isset($context["titleblock"]) ? $context["titleblock"] : null))) {
            // line 11
            echo "\t\t\t\t";
            echo (isset($context["titleblock"]) ? $context["titleblock"] : null);
            echo " - ";
            echo twig_escape_filter($this->env, (isset($context["maintitle"]) ? $context["maintitle"] : null), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 13
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["maintitle"]) ? $context["maintitle"] : null), "html", null, true);
            echo "
\t\t\t";
        }
        // line 15
        echo "\t\t</title>
\t</head>
\t<body>
\t\t<main>
\t\t\t<aside>
\t\t\t\t";
        // line 20
        echo twig_include($this->env, $context, "sidebar.twig");
        echo "
\t\t\t</aside>
\t\t\t<article>
\t\t\t\t";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 25
        echo "\t\t\t</article>
\t\t</main>
\t</body>
</html>
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "\t\t\t\t";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 24,  73 => 23,  65 => 25,  63 => 23,  57 => 20,  50 => 15,  44 => 13,  36 => 11,  33 => 10,  31 => 9,  22 => 2,  20 => 1,);
    }
}
/* {% set maintitle = "Brandon Dusseau" %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/* 	<head>*/
/* 		<meta charset="UTF-8">*/
/* 		<link rel="stylesheet" type="text/css" href="css/fawesome.css">*/
/* 		<link rel="stylesheet" type="text/css" href="css/main.css">*/
/* 		<title>*/
/* 			{% set titleblock = block('title') %}*/
/* 			{% if titleblock is not empty %}*/
/* 				{{ titleblock|raw }} - {{ maintitle }}*/
/* 			{% else %}*/
/* 				{{ maintitle }}*/
/* 			{% endif %}*/
/* 		</title>*/
/* 	</head>*/
/* 	<body>*/
/* 		<main>*/
/* 			<aside>*/
/* 				{{ include('sidebar.twig') }}*/
/* 			</aside>*/
/* 			<article>*/
/* 				{% block content %}*/
/* 				{% endblock %}*/
/* 			</article>*/
/* 		</main>*/
/* 	</body>*/
/* </html>*/
/* */
