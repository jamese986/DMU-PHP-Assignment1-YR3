<?php

/* hp.form.html.twig */
class __TwigTemplate_8ca3a91ed49a2925a99234524e1e14709f83392d8abb88efaba5e5491b10ec81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("footer.html.twig", "hp.form.html.twig", 1);
        $this->blocks = array(
            'hpcontact' => array($this, 'block_hpcontact'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_hpcontact($context, array $blocks = array())
    {
        // line 3
        echo "    <!-- Contact us form -->
    <div id=\"contact\"></div>
    <div class=\"container text-center \">
      <div class=\"row \">
        <div class=\"col-md-8 col-md-offset-2 \">
          <div class=\"section-title center \">
            <h2 class=\"mb-small \">Contact | <strong>Us</strong></h2>
            <p>If you have any problems please contact us using the form below...</p>
          </div>
          <!-- Contact us form -->
          <form class=\"inline-handle \" method=\"post \" action=\"http://www.elizabethcastro.com/html6ed/examples/forms/showform.php \">
            <div class=\"row \">
              <div class=\"col-md-6 \">
                <div class=\"form-group \">
                  <label>Name</label>
                  <input class=\"form-control \" type=\"text \" name=\"Name \" placeholder=\"Enter Your Name \">
                </div>
              </div>
              <div class=\"col-md-6 \">
                <div class=\"form-group \">
                  <label>Email address</label>
                  <input class=\"form-control \" type=\"email \" name=\"E-mail \" placeholder=\"Enter Your E-mail Address \">
                </div>
              </div>
            </div>
            <div class=\"form-group \">
              <label>Message</label>
              <textarea class=\"form-control \" name=\"Message \" rows=\"10 \" cols=\"50 \" placeholder=\"Enter Your Message Here \"></textarea>
            </div>
            <button type=\"submit \" class=\"btn btn-primary \"> Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- Contact us form End -->
    ";
    }

    public function getTemplateName()
    {
        return "hp.form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "hp.form.html.twig", "/var/www/html/public/php18/sms-private/app/templates/hp.form.html.twig");
    }
}
