<?php

/* footer.html.twig */
class __TwigTemplate_fd5abdd9f17f4710f12f8b4a7fa1e7da39de9d29d7f6f4f206157b2d60a3ad03 extends Twig_Template
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
        echo "    <footer class=\"footer-c footer-light section-padding text-center\">
        <div class=\"mb-medium footer-social\">
            <a href=\"https://www.facebook.com/dmuleicester\"><i class=\"fa fa-facebook fa-2x edit-icon\"></i></a>
            <a href=\"https://twitter.com/dmuleicester\"><i class=\"fa fa-twitter fa-2x edit-icon\"></i></a>
            <a href=\"https://plus.google.com/103011102637243054782/posts\"><i class=\"fa fa-google-plus fa-2x edit-icon\"></i></a>
            <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, ($context["homepage"] ?? null), "html", null, true);
        echo "\"><i class=\"fa fa-home fa-2x edit-icon\"></i></a>
        </div>
        <div class=\"copyright-tag\">17-3110-AA &copy; | Secure Web Assignment 2017 |<a href=\"\">sitemap</a></div>
        <br />
        <a href=\"http://css-validator.org/check/referer\"><img src=\"http://css-validator.org/images/vcss-blue.png\" alt=\"Valid CSS!\"></a>
    </footer>
    <!-- Footer End -->
    <!-- Scripts Start -->
    <script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyDZnPN2MlGPV4IpHBMjAxqnTgkA7i9501I&callback=initMap\"></script>

    <!-- Script end-->
    </body>
    </html>

";
    }

    public function getTemplateName()
    {
        return "footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 6,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.html.twig", "/home/p15224093/phpappfolder/public_php/php-final-v1/sms-private/app/templates/footer.html.twig");
    }
}
