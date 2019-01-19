<?php

/* map.html.twig */
class __TwigTemplate_8a5a0548783ac137a08c45e893e41cc7edff793bc7d016fa1c97c05ab1522f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'map' => array($this, 'block_map'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('map', $context, $blocks);
    }

    public function block_map($context, array $blocks = array())
    {
        // line 2
        echo "    <!-- Google Map End-->
    <div class=\"container\">
    <section class=\"section-wrapper block section-padding container mb-medium\">
        <div id=\"map-wrapper\" class=\"edit-map\">
            <h4>Find Us at | GH6.12</h4>
            <div id=\"map\"></div>
        </div>
    </section>
    </div>
    <!-- Google Map End-->
";
    }

    public function getTemplateName()
    {
        return "map.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "map.html.twig", "H:\\p3t\\phpappfolder\\public_php\\php18\\sms-private\\app\\templates\\map.html.twig");
    }
}
