<?php

/* footer-html.twig */
class __TwigTemplate_11c668dbd2b34ab81435df195020ae13d2dfb00b10eb12868415d4237363e0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("navigation.html.twig", "footer-html.twig", 1);
        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "navigation.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_footer($context, array $blocks = array())
    {
        // line 3
        echo "<!-- Footer Start-->
    <footer class=\"footer-c footer-light section-padding text-center\">
      <div class=\"mb-medium footer-social\">
        <a href=\"https://www.facebook.com/dmuleicester\"><i class=\"fa fa-facebook fa-2x edit-icon\"></i></a>
        <a href=\"https://twitter.com/dmuleicester\"><i class=\"fa fa-twitter fa-2x edit-icon\"></i></a>
        <a href=\"https://plus.google.com/103011102637243054782/posts\"><i class=\"fa fa-google-plus fa-2x edit-icon\"></i></a>
        <a href=\"index.html\"><i class=\"fa fa-home fa-2x edit-icon\"></i></a>
      </div>
      <div class=\"copyright-tag\">17-3110-AA &copy; | Secure Web Assignment 2017 |<a href=\"\">sitemap</a></div>
    </footer>
    <!-- Footer End -->
    <!-- Scripts Start -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnPN2MlGPV4IpHBMjAxqnTgkA7i9501I&callback=initMap\"></script>
    <script src=\"assets/js/map.js\"></script>
    <!-- Script end-->
  </body>
  </html>
";
    }

    public function getTemplateName()
    {
        return "footer-html.twig";
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
        return new Twig_Source("", "footer-html.twig", "H:\\p3t\\phpappfolder\\public_php\\php18\\sms-private\\app\\templates\\footer-html.twig");
    }
}
