<?php

/* hp.content.html.twig */
class __TwigTemplate_75d8ac00a73edd39b47bff8ba016a0d1a97117a51fec27197b978d10487b13bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'hpcontent' => array($this, 'block_hpcontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('hpcontent', $context, $blocks);
    }

    public function block_hpcontent($context, array $blocks = array())
    {
        // line 2
        echo "  <!-- banner -->
  <div class=\"section-wrapper\">
    <section class=\"block\">
      <div class=\"jumbotron mb0\">
        <div class=\"container\">
          <h1>Register | Here</h1>
          <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <p><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, ($context["register"] ?? null), "html", null, true);
        echo "\" class=\"btn btn-primary btn-lg\" role=\"button\">Click Here to Register</a></p>
        </div>
      </div>
    </section>
  </div>
  <!-- banner end -->
  <!-- steps -->
  <div class=\"section-wrapper\">
    <section class=\"block section-overlay section-padding\">
      <div class=\"container\">
        <div class=\"section-title center mb-medium text-center\">
          <h2 class=\"mb-small\">Quick Start | <strong>Guide</strong></h2>
          <p>Welcome to our web application please follow our 6 step quick start guide to get up and running as smooth as possible. If you need any assistance using the site please <a href=\"index.html#contact\">Contact us</a> and some one will be able to assist you.</p>
        </div>
        <div class=\"row\">
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Register</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Log-in</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Send</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Notification</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Read</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
          <div class=\"col-md-4 col-sm-6 mb-small\">
            <div class=\"card-item\">
              <i class=\"large-icon process-counter\"></i>
              <h4><strong>Log-Out</strong></h4>
              <p>Bacon ipsum dolor amet venison tenderloin pork loin porchetta, turducken t-bone frankfurter kevin pork chop drumstick. Chuck filet mignon tail meatball jerky boudin. Beef fatback biltong spare ribs ham swine tri-tip cow strip steak sausage chuck filet mignon pastrami.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- steps ends-->
";
    }

    public function getTemplateName()
    {
        return "hp.content.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 9,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "hp.content.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php18\\sms-private\\app\\templates\\hp.content.html.twig");
    }
}
