<?php

/* soap-return.html.twig */
class __TwigTemplate_60ea1be17eb4da2d4cf6917327992410d36376eec28dc05d48cb4322ba715b19 extends Twig_Template
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
            <br />
            <hr />
        <h2><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Return Home</a></h2>
    </div>
    </div>
</div>
<!-- end of instructions -->
";
        // line 14
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
        return array (  44 => 14,  36 => 9,  30 => 6,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "soap-return.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/soap-return.html.twig");
    }
}
