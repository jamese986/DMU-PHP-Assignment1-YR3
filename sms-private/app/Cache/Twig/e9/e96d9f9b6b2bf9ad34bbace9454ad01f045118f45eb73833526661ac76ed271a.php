<?php

/* soap-return.html.twig */
class __TwigTemplate_189bedc5b9218f37ace842d952824bf43d9c7f4d4c2531e4236ce28d18d8ca21 extends Twig_Template
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
<div class=\"section-wrapper block section-padding text-center container\">
    <div class=\"row\">
        <div class=\"col-md-8 col-md-offset-2\">
            ";
        // line 6
        echo twig_escape_filter($this->env, ($context["messages"] ?? null), "html", null, true);
        echo "
        <p class=\"curr_page\"><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Return Home</a></p>
    </div>
    </div>
</div>
<!-- end of instructions -->
";
        // line 12
        echo twig_include($this->env, $context, "footer.html.twig");
    }

    public function getTemplateName()
    {
        return "soap-return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  34 => 7,  30 => 6,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "soap-return.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php-final-v1\\sms-private\\app\\templates\\soap-return.html.twig");
    }
}
