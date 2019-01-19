<?php

/* imports.html.twig */
class __TwigTemplate_8841a04a36097dfdc41b8d7b2d0c2cb5ef2415096256af94906731bb6205c02c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<html lang=”en\">
<head>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"Content-Language\" content=\"en-gb\" />
    <meta name=\"author\" content=\"17-3110-AA\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\" type=\"text/css\"/>
    <link href=\"/H:/p3t/phpappfolder/public_php/php18/sms-public/assets/css/bootstrap.min.css\" rel=\"stylesheet\">
     <!-- js imports -->
    <script src=\"https://use.fontawesome.com/1fdc368cde.js\"></script>
    <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
";
    }

    public function block_title($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "imports.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  36 => 9,  27 => 2,  21 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "imports.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php18\\sms-private\\app\\templates\\imports.html.twig");
    }
}
