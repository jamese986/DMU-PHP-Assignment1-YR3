<?php

/* footer.html.twig */
class __TwigTemplate_b6d8bf25e45eba4da85880d58a9c5ffeaa21193d653a80d2b77338199c7780ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "    <footer class=\"footer-c footer-light section-padding text-center\">
        <div class=\"mb-medium footer-social\">
            <a href=\"https://www.facebook.com/dmuleicester\"><i class=\"fa fa-facebook fa-2x edit-icon\"></i></a>
            <a href=\"https://twitter.com/dmuleicester\"><i class=\"fa fa-twitter fa-2x edit-icon\"></i></a>
            <a href=\"https://plus.google.com/103011102637243054782/posts\"><i class=\"fa fa-google-plus fa-2x edit-icon\"></i></a>
            <a href=\"";
        // line 7
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

    public function getDebugInfo()
    {
        return array (  33 => 7,  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "footer.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php-final-v1\\sms-private\\app\\templates\\footer.html.twig");
    }
}
