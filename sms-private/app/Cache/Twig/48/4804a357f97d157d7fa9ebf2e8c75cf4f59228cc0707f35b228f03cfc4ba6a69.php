<?php

/* login-submit.html.twig */
class __TwigTemplate_37ba67e04cba89ebfcf3f3ed61df5b72a6283f244d7298a22fca15973503992d extends Twig_Template
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
<section class=\"block section-padding\">
    <div class=\"container\">
        <div id=\"page-content-div\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h1>Login Succesful !</h1>
                <h2><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["process_soap"] ?? null), "html", null, true);
        echo "\">click here to view messages</a></h2>
            </div>
        </div>
    </section>
";
        // line 12
        echo twig_include($this->env, $context, "footer.html.twig");
    }

    public function getTemplateName()
    {
        return "login-submit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  32 => 8,  23 => 2,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login-submit.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/login-submit.html.twig");
    }
}
