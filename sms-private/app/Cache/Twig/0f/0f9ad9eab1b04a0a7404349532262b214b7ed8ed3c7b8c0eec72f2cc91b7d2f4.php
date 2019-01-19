<?php

/* reg.content.html.twig */
class __TwigTemplate_03a907feae1a2b733e6ac442a6d97c293725a2ac158eb11b21a365386afe33bf extends Twig_Template
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
        echo "
    ";
        // line 2
        $this->displayBlock('hpcontact', $context, $blocks);
    }

    public function block_hpcontact($context, array $blocks = array())
    {
        // line 3
        echo "      <!-- Sign-Up Form  -->
      <div class=\"section-wrapper block section-padding text-center container\">
        <div class=\"row\">
          <div class=\"col-md-8 col-md-offset-2\">
            <div class=\"section-title center\">
              <h2 class=\"mb-small\">Register | <strong>Below</strong></h2>
              <p>Please register using the form below.</p>
            </div>
            <div id=\"message\"></div>
            <form method=\"post\" action=\"sendemail.php\" id=\"contactform\" class=\"main-contact-form\">
              <div class=\"row\">
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputName\">Name</label>
                    <input class=\"form-control col-md-4\" name=\"name\" placeholder=\"Your Name *\" id=\"name\" required=\"\" data-validation-required-message=\"Please enter your name.\"
                           autocomplete=\"off\" type=\"text\">
                  </div>
                </div>
                <div class=\"col-md-6\">
                  <div class=\"form-group\">
                    <label for=\"exampleInputPassword1\">Password</label>
                    <input class=\"form-control col-md-4\" name=\"password\" placeholder=\"Your Password *\" id=\"password\" required=\"\" data-validation-required-message=\"Please enter your password.\" type=\"text\">
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label for=\"exampleInputEmail\">Email</label>
                <input class=\"form-control col-md-4\" name=\"email\" placeholder=\"Your Email *\" id=\"email\" required=\"\" data-validation-required-message=\"Please enter your email address.\" type=\"text\">
              </div>
              <p>Forgotten your details? <a href=\"pwd-reset.html\"> Click Here</a></p>
              <button type=\"submit\" class=\"btn btn-primary\" data-balloon=\"Right Click To Edit\" data-balloon-pos=\"down\">Register</button>
            </form>
          </div>
        </div>
      </div>
      <!-- Sign-Up Form  -->
    ";
    }

    public function getTemplateName()
    {
        return "reg.content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  23 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg.content.html.twig", "/var/www/html/public/php18/sms-private/app/templates/reg.content.html.twig");
    }
}
