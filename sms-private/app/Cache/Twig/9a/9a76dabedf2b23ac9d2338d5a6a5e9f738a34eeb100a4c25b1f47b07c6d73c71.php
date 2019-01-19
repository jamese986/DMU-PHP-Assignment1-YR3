<?php

/* navigation.html.twig */
class __TwigTemplate_948df0b247c9ff86aa37277c6cd41473c0ea6d84a40e6f5111bb790bf5a6d075 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("header.html.twig", "navigation.html.twig", 1);
        $this->blocks = array(
            'navigation' => array($this, 'block_navigation'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "header.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_navigation($context, array $blocks = array())
    {
        echo " 
    <nav id=\"make-bootstrap-menu\" class=\"navbar navbar-default navbar-dark\">
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
        return "navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 15,  47 => 14,  43 => 13,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "navigation.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php18\\sms-private\\app\\templates\\navigation.html.twig");
    }
}
