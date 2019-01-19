<?php

/* register-return.html.twig */
class __TwigTemplate_95b678007712982194400b7022a9516d559f5f8e9de0314f92a98af3b3ed1cb6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
        $this->displayBlock('content', $context, $blocks);
        // line 32
        echo twig_include($this->env, $context, "footer.html.twig");
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<section class=\"block section-padding\">
    <div class=\"container\">
    <div id=\"page-content-div\">
        <h3>";
        // line 7
        echo twig_escape_filter($this->env, ($context["page_heading_2"] ?? null), "html", null, true);
        echo "</h3>
        <h4>";
        // line 8
        echo twig_escape_filter($this->env, ($context["sid_text"] ?? null), "html", null, true);
        echo twig_escape_filter($this->env, ($context["sid"] ?? null), "html", null, true);
        echo "</h4>
        <h4>Original text entries:</h4>
        <p>Entered user name: ";
        // line 10
        echo twig_escape_filter($this->env, ($context["username"] ?? null), "html", null, true);
        echo "</p>
        <p>Entered password: ";
        // line 11
        echo twig_escape_filter($this->env, ($context["password"] ?? null), "html", null, true);
        echo "</p>
        <p>Entered email: ";
        // line 12
        echo twig_escape_filter($this->env, ($context["email"] ?? null), "html", null, true);
        echo "</p>

        <h4>Cleaned text entries:</h4>
        <p>Entered user name: ";
        // line 15
        echo twig_escape_filter($this->env, ($context["sanitised_username"] ?? null), "html", null, true);
        echo "</p>
        <p>Entered password: ";
        // line 16
        echo twig_escape_filter($this->env, ($context["cleaned_password"] ?? null), "html", null, true);
        echo "</p>
        <p>Entered email: ";
        // line 17
        echo twig_escape_filter($this->env, ($context["sanitised_email"] ?? null), "html", null, true);
        echo "</p>

        <h4>Hashed values:</h4>
        <h5>NB Values were hashed with the BCrypt library</h5>
        <p>Hashed password: ";
        // line 21
        echo twig_escape_filter($this->env, ($context["hashed_password"] ?? null), "html", null, true);
        echo "</p>

        <h4>Base64 Encoded strings from the encrypted entries:</h4>
        <p>Encoded user name: ";
        // line 24
        echo twig_escape_filter($this->env, ($context["encoded_username"] ?? null), "html", null, true);
        echo "</p>
        <p>Encoded email: ";
        // line 25
        echo twig_escape_filter($this->env, ($context["encoded_email"] ?? null), "html", null, true);
        echo "</p>

        <p class=\"curr_page\"><a href=\"";
        // line 27
        echo twig_escape_filter($this->env, ($context["landing_page"] ?? null), "html", null, true);
        echo "\">Return To Homepage</a></p>
    </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "register-return.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 27,  91 => 25,  87 => 24,  81 => 21,  74 => 17,  70 => 16,  66 => 15,  60 => 12,  56 => 11,  52 => 10,  46 => 8,  42 => 7,  37 => 4,  34 => 3,  30 => 32,  28 => 3,  24 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "register-return.html.twig", "/var/www/html/public/php18/sms-private/app/templates/register-return.html.twig");
    }
}
