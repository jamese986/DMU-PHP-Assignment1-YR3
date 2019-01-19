<?php

/* nav.html.twig */
class __TwigTemplate_7f56c0e81d8039e666026edba87897254af4aa55c7ecade57bd91b4089074c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
";
        // line 2
        $this->displayBlock('navigation', $context, $blocks);
    }

    public function block_navigation($context, array $blocks = array())
    {
        // line 3
        echo "    <nav id=\"make-bootstrap-menu\" class=\"navbar navbar-default navbar-dark\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                </button>
                <a class=\"navbar-brand\" href=\"index.html\">SMS Application</a>
            </div>
            <div id=\"navbar \" class=\"navbar-collapse collapse\">
                <ul class=\"nav navbar-nav navbar-right \">
                    <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["homepage"] ?? null), "html", null, true);
        echo "\">Home</a></li>
                    <li><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["register"] ?? null), "html", null, true);
        echo "\">Register</a></li>
                    <li><a href=\"";
        // line 15
        echo twig_escape_filter($this->env, ($context["login"] ?? null), "html", null, true);
        echo "\">Log-In</a></li>
                    <li><a href=\"index.html#contact\">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Nav End -->
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  49 => 15,  45 => 14,  41 => 13,  29 => 3,  23 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nav.html.twig", "/var/www/html/public/php18/sms-private/app/templates/nav.html.twig");
    }
}
