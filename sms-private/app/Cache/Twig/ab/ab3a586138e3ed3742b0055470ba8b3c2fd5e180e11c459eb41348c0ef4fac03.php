<?php

/* registration.html.twig */
class __TwigTemplate_c173f52ede1344a4b975563c83e2f41fc1f9605f54b3ae27538e6f7b270e503b extends Twig_Template
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
        echo twig_include($this->env, $context, "reg.content.html.twig");
        echo "
";
        // line 4
        echo twig_include($this->env, $context, "footer.html.twig");
    }

    public function getTemplateName()
    {
        return "registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  27 => 3,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "registration.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/registration.html.twig");
    }
}
