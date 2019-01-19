<?php

/* hp1.form.html.twig */
class __TwigTemplate_653d2ee661b9b5d7f93f34e97edb81212b006c272f6ccd1d7308f9f81d53f672 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hpcontact' => array($this, 'block_hpcontact'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "    ";
        $this->displayBlock('hpcontact', $context, $blocks);
    }

    public function block_hpcontact($context, array $blocks = array())
    {
        // line 2
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
        // line 12
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" id=\"contactform\" class=\"main-contact-form\">
                        <div class=\"row \">
                            <div class=\"col-md-6 \">
                                <div class=\"form-group \">
                                    <label>Name</label>
                                    <input class=\"form-control\" type=\"text\" id=\"name\" name=\"Name\" placeholder=\"Enter Your Name\">
                                </div>
                            </div>
                            <div class=\"col-md-6\">
                                <div class=\"form-group\">
                                    <label>Email address</label>
                                    <input class=\"form-control\" type=\"email\" id=\"email\" name=\"E-mail\" placeholder=\"Enter Your E-mail Address\">
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
        <!-- Contact us form End -->
    ";
    }

    public function getTemplateName()
    {
        return "hp1.form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  39 => 12,  27 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "hp1.form.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php-final-v1\\sms-private\\app\\templates\\hp1.form.html.twig");
    }
}
