<?php

/* hp1.form.html.twig */
class __TwigTemplate_4d604da3c2a0cc24757d90ec369ec499d39c47fdbb8a7c7355263d856b770fcf extends Twig_Template
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
        echo "        <!-- Contact us form -->
        <div id=\"contact\"></div>
        <div class=\"container text-center \">
            <div class=\"row \">
                <div class=\"col-md-8 col-md-offset-2 \">
                    <div class=\"section-title center \">
                        <h2 class=\"mb-small \">Contact | <strong>Us</strong></h2>
                        <p>If you have any problems please contact us using the form below...</p>
                    </div>
                    <!-- Contact us form -->
                    <form action=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" id=\"contactform\" class=\"main-contact-form\">
                        <div class=\"row \">
                            <div class=\"col-md-6 \">
                                <div class=\"form-group \">
                                    <label>Name</label>
                                    <input class=\"form-control\" type=\"text\" id=\"name\" name=\"Name\" placeholder=\"Enter Your Name\" size=\"15\" maxlength=\"15\" required>
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Email address</label>
                                    <input class=\"form-control\" type=\"email\" id=\"email\" name=\"E-mail\" placeholder=\"Enter Your E-mail Address\" size=\"15\" maxlength=\"30\" required>
                                </div>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label>Message</label>
                            <textarea class=\"form-control\" name=\"Message\" rows=\"10\" cols=\"50\" placeholder=\"Enter Your Message Here\"></textarea>
                        </div>
                        <button type=\"submit\" class=\"btn btn-primary \"> Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- Contact us form End -->";
    }

    public function getTemplateName()
    {
        return "hp1.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 11,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "hp1.form.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/hp1.form.html.twig");
    }
}
