<?php

/* reg.content.html.twig */
class __TwigTemplate_7c3a6b22f8bc040ae0f674c9d3bb1e78e24381c8d2ad322d7746c28f15576b78 extends Twig_Template
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
        // line 12
        echo twig_escape_filter($this->env, ($context["action"] ?? null), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, ($context["method"] ?? null), "html", null, true);
        echo "\" id=\"contactform\" class=\"main-contact-form\">
          <div class=\"row\">
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                <label for=\"name\">Name:</label>
                <input class=\"form-control col-md-4\" id=\"name\" name=\"name\" placeholder=\"Please Enter Your Name\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"15\" required>
              </div>
            </div>
            <div class=\"col-md-6\">
              <div class=\"form-group\">
                <label for=\"password\">Password:</label>
                <input class=\"form-control col-md-4\" id=\"password\" name=\"password\" placeholder=\"Please Enter Your Password\" type=\"password\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"15\" required>
              </div>
            </div>
          </div>
          <div class=\"form-group\">
            <label for=\"email\">Email:</label>
            <input class=\"form-control col-md-4\" id=\"emailAddress\" name=\"email\" placeholder=\"Please Enter Your Email\" type=\"email\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, ($context["initial_input_box_value"] ?? null), "html", null, true);
        echo "\" size=\"15\" maxlength=\"30\" required>
          </div>
          <p>Forgotten your details? <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Slim\Views\TwigExtension')->baseUrl(), "html", null, true);
        echo "/#contact\"> Click Here</a></p>
          <button type=\"submit\" class=\"btn btn-primary\" data-balloon=\"Right Click To Edit\" data-balloon-pos=\"down\">Register</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Sign-Up Form  -->";
    }

    public function getTemplateName()
    {
        return "reg.content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 31,  60 => 29,  51 => 23,  42 => 17,  32 => 12,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "reg.content.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/reg.content.html.twig");
    }
}
