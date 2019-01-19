<?php

/* homepage.html.twig */
class __TwigTemplate_364400e4a21eaa85c3d527ca8fa7254de2187fca06d46e9ff956beb0c0dbae8e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_include($this->env, $context, "header.html.twig");
        echo "
";
        // line 2
        echo twig_include($this->env, $context, "nav.html.twig");
        echo "
";
        // line 3
        echo twig_include($this->env, $context, "hp.content.html.twig");
        echo "
";
        // line 4
        echo twig_include($this->env, $context, "map.html.twig");
        echo "
";
        // line 5
        echo twig_include($this->env, $context, "hp1.form.html.twig");
        echo "
";
        // line 6
        echo twig_include($this->env, $context, "footer.html.twig");
    }

    public function getTemplateName()
    {
        return "homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "homepage.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/homepage.html.twig");
    }
}
