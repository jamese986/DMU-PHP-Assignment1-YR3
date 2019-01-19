<?php

/* login.content.html.twig */
class __TwigTemplate_be7f3ead8dcea3480243937d961e22d1c42fd21519c7701b687b72c5314dee46 extends Twig_Template
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
        echo "<!-- Sign-Up Form  -->
<section class=\"block section-padding\">
    <div class=\"container text-center\">
        <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"section-title center\">
                <h2 class=\"mb-small\">Login | <strong>Below</strong></h2>
                <p>Please enter your login details below.</p>
            </div>
            <form action=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" id=\"contactform\" class=\"main-contact-form\">
                <div class=\"row\">
                    <div class=\"col-md-6 col-md-offset-1\">
                        <div class=\"form-group\">
                            <label for=\"email\">E-mail:</label>
                            <input class=\"form-control col-md-4\" id=\"email\" name=\"email\" placeholder=\"Please Enter Your Email\" type=\"text\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"50\">
                        </div>
                    </div>
                    <div class=\"col-md-6 col-md-offset-1\">
                        <div class=\"form-group\">
                            <label for=\"password\">Password:</label>
                            <input class=\"form-control col-md-4\" id=\"password\" name=\"password\" placeholder=\"Please Enter Your Password\" type=\"password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"30\" maxlength=\"15\">
                        </div>
                    </div>
                    <br />
                    <p>Forgotten your details? <a href=\"pwd-reset.html\"> Click Here</a></p>
                    <button type=\"submit\" class=\"btn btn-primary\" data-balloon=\"Right Click To Edit\" data-balloon-pos=\"down\">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Sign-Up Form  -->";
    }

    public function getTemplateName()
    {
        return "login.content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  39 => 14,  29 => 9,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "login.content.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php-final-v1\\sms-private\\app\\templates\\login.content.html.twig");
    }
}
