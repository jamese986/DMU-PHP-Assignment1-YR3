<?php

/* nav.html.twig */
class __TwigTemplate_26d382614d720289b42466180d89ec7cf11347f6f0c36f98f80e01950f728dfc extends Twig_Template
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
        echo "<body>
<nav id=\"make-bootstrap-menu\" class=\"navbar navbar-default navbar-dark\">
    <div class=\"container\">
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["homepage"] ?? null), "html", null, true);
        echo "\" data-balloon=\"Right Click To Edit\" data-balloon-pos=\"down\">SMS-App</a>
        </div>
        <div id=\"navbar\" class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav navbar-right\">
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
                <li><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/#contact\">Contact Us</a></li>
            </ul>
        </div>
    </div>
</nav>
";
    }

    public function getTemplateName()
    {
        return "nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  44 => 15,  40 => 14,  36 => 13,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "nav.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/nav.html.twig");
    }
}
