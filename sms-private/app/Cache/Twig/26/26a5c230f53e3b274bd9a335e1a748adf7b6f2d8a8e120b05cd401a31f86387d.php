<?php

/* layout.html.twig */
class __TwigTemplate_8856d84116fa8b09b43d7c76753b97c52d18490ee7c3d0850f926a5c97488f31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=”en\">
<head>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
    <meta http-equiv=\"Content-Language\" content=\"en-gb\" />
    <meta name=\"author\" content=\"17-3110-AA\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["css_path"] ?? null), "html", null, true);
        echo "\" type=\"text/css\"/>
    <!-- js imports -->
    <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, ($context["js_path"] ?? null), "html", null, true);
        echo "\"></script>
    <script src=\"https://use.fontawesome.com/1fdc368cde.js\"></script>
    <title>";
        // line 12
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>
<body>
";
        // line 15
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "


</body>
</html>";
    }

    // line 12
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ($context["page_title"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 12,  45 => 15,  39 => 12,  34 => 10,  29 => 8,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layout.html.twig", "/var/www/html/public/php18/sms-private/app/templates/layout.html.twig");
    }
}
