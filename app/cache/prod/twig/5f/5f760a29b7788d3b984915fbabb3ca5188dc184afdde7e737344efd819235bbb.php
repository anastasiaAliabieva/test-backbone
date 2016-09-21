<?php

/* MopaBootstrapBundle:Navbar:subnavbar.html.twig */
class __TwigTemplate_39c07a4e9e17be8810821d9d92f0aa8230af7e4a0612c1a1c618864e556adfc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"subnav ";
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : null), false)) : (false))) ? ("subnavbar-fixed-top") : (""));
        echo "\">
    ";
        // line 2
        $this->displayBlock('menu', $context, $blocks);
        // line 3
        echo "</div>
";
    }

    // line 2
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:subnavbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 2,  27 => 3,  25 => 2,  20 => 1,);
    }
}
/* <div class="subnav {{ fixedTop|default(false) ? 'subnavbar-fixed-top' : '' }}">*/
/*     {% block menu %}{% endblock %}*/
/* </div>*/
/* */
