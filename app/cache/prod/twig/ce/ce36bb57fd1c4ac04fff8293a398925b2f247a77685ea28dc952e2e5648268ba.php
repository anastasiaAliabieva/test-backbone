<?php

/* MopaBootstrapBundle:Navbar:navbar.html.twig */
class __TwigTemplate_a982034ea15a52312f654c533493fb1344a0eabd259829a7bfd12a3b64736f34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'toggle' => array($this, 'block_toggle'),
            'brand' => array($this, 'block_brand'),
            'menu_container' => array($this, 'block_menu_container'),
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div ";
        if (((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), false)) : (false))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
            echo "\" ";
        }
        echo "role=\"navigation\" class=\"navbar";
        echo ((((array_key_exists("inverse", $context)) ? (_twig_default_filter((isset($context["inverse"]) ? $context["inverse"] : null), false)) : (false))) ? (" navbar-inverse") : (" navbar-default"));
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : null), false)) : (false))) ? (" navbar-fixed-top") : (""));
        echo ((((array_key_exists("staticTop", $context)) ? (_twig_default_filter((isset($context["staticTop"]) ? $context["staticTop"] : null), false)) : (false))) ? (" navbar-static-top") : (""));
        echo "\">
    <div class=\"container";
        // line 2
        echo ((((array_key_exists("fluid", $context)) ? (_twig_default_filter((isset($context["fluid"]) ? $context["fluid"] : null), false)) : (false))) ? ("-fluid") : (""));
        echo "\">
        ";
        // line 3
        $this->displayBlock('header', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('menu_container', $context, $blocks);
        // line 21
        echo "    </div>
</div>
";
    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        // line 4
        echo "        <div class=\"navbar-header\">
            ";
        // line 5
        $this->displayBlock('toggle', $context, $blocks);
        // line 13
        echo "            ";
        $this->displayBlock('brand', $context, $blocks);
        // line 14
        echo "        </div>
        ";
    }

    // line 5
    public function block_toggle($context, array $blocks = array())
    {
        // line 6
        echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\" >
            <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
    }

    // line 13
    public function block_brand($context, array $blocks = array())
    {
    }

    // line 16
    public function block_menu_container($context, array $blocks = array())
    {
        // line 17
        echo "        <div class=\"collapse navbar-collapse navbar-responsive-collapse\">
            ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        </div>
        ";
    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Navbar:navbar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 18,  94 => 19,  92 => 18,  89 => 17,  86 => 16,  81 => 13,  71 => 6,  68 => 5,  63 => 14,  60 => 13,  58 => 5,  55 => 4,  52 => 3,  46 => 21,  43 => 16,  41 => 3,  37 => 2,  24 => 1,);
    }
}
/* <div {% if id|default(false) %}id="{{ id }}" {% endif %}role="navigation" class="navbar{{ inverse|default(false) ? ' navbar-inverse' : ' navbar-default' }}{{ fixedTop|default(false) ? ' navbar-fixed-top' : '' }}{{ staticTop|default(false) ? ' navbar-static-top' : '' }}">*/
/*     <div class="container{{ fluid|default(false) ? '-fluid' : '' }}">*/
/*         {% block header %}*/
/*         <div class="navbar-header">*/
/*             {% block toggle %}*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse" >*/
/*             <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             {% endblock toggle %}*/
/*             {% block brand %}{% endblock brand %}*/
/*         </div>*/
/*         {% endblock header %}*/
/*         {% block menu_container %}*/
/*         <div class="collapse navbar-collapse navbar-responsive-collapse">*/
/*             {% block menu %}{% endblock %}*/
/*         </div>*/
/*         {% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
