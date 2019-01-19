<?php

/* reg.content.html.twig */
class __TwigTemplate_d66f333fb68876f722acd00e6935c7cdc9897fd876741004876b5cacaa244b3e extends Twig_Template
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
        $this->displayBlock('hpcontact', $context, $blocks);
    }

    public function block_hpcontact($context, array $blocks = array())
    {
        // line 2
        echo "  <!-- Sign-Up Form  -->
  <div class=\"section-wrapper block section-padding text-center container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <div class=\"section-title center\">
          <h2 class=\"mb-small\">Register | <strong>Below</strong></h2>
          <p>Please register using the form below.</p>
        </div>
        <!-- end of instructions -->

        <div id=\"message\"></div>
        <form action=\"";
        // line 13
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" id=\"contactform\" class=\"main-contact-form\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                <label for=\"username\">Username:</label>
                <input class=\"form-control col-md-4\" id=\"username\" name=\"username\" placeholder=\"Please Enter Your Name\" type=\"text\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"15\">
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input class=\"form-control col-md-4\" id=\"password\" name=\"password\" placeholder=\"Please Enter Your Password\" type=\"password\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"15\">
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"email\">Email:</label>
            <input class=\"form-control col-md-4\" id=\"email\" name=\"email\" placeholder=\"Please Enter Your Email\" type=\"text\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"30\">
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
        return array (  67 => 30,  58 => 24,  49 => 18,  39 => 13,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg.content.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php-final-v1\\sms-private\\app\\templates\\reg.content.html.twig");
    }
}
