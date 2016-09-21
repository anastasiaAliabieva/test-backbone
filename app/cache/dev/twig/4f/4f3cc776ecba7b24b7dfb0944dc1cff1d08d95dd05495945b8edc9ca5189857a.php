<?php

/* MopaBootstrapBundle:Navbar:navbar.html.twig */
class __TwigTemplate_0e8426722436bff812fa7033d9acb7a24bf6cf6dc5253cf7392e7c550db5a61b extends Twig_Template
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
        $__internal_f362d0fb6259ef9689b1c686067d4a1f1f7a06702057eaf288babdd0971bd5d9 = $this->env->getExtension("native_profiler");
        $__internal_f362d0fb6259ef9689b1c686067d4a1f1f7a06702057eaf288babdd0971bd5d9->enter($__internal_f362d0fb6259ef9689b1c686067d4a1f1f7a06702057eaf288babdd0971bd5d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Navbar:navbar.html.twig"));

        // line 1
        echo "<div ";
        if (((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), false)) : (false))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\" ";
        }
        echo "role=\"navigation\" class=\"navbar";
        echo ((((array_key_exists("inverse", $context)) ? (_twig_default_filter((isset($context["inverse"]) ? $context["inverse"] : $this->getContext($context, "inverse")), false)) : (false))) ? (" navbar-inverse") : (" navbar-default"));
        echo ((((array_key_exists("fixedTop", $context)) ? (_twig_default_filter((isset($context["fixedTop"]) ? $context["fixedTop"] : $this->getContext($context, "fixedTop")), false)) : (false))) ? (" navbar-fixed-top") : (""));
        echo ((((array_key_exists("staticTop", $context)) ? (_twig_default_filter((isset($context["staticTop"]) ? $context["staticTop"] : $this->getContext($context, "staticTop")), false)) : (false))) ? (" navbar-static-top") : (""));
        echo "\">
    <div class=\"container";
        // line 2
        echo ((((array_key_exists("fluid", $context)) ? (_twig_default_filter((isset($context["fluid"]) ? $context["fluid"] : $this->getContext($context, "fluid")), false)) : (false))) ? ("-fluid") : (""));
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
        
        $__internal_f362d0fb6259ef9689b1c686067d4a1f1f7a06702057eaf288babdd0971bd5d9->leave($__internal_f362d0fb6259ef9689b1c686067d4a1f1f7a06702057eaf288babdd0971bd5d9_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_6d45effebd2136a3f3a45fb5756307623a5c805316b4a81d7626501cc1680e03 = $this->env->getExtension("native_profiler");
        $__internal_6d45effebd2136a3f3a45fb5756307623a5c805316b4a81d7626501cc1680e03->enter($__internal_6d45effebd2136a3f3a45fb5756307623a5c805316b4a81d7626501cc1680e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_6d45effebd2136a3f3a45fb5756307623a5c805316b4a81d7626501cc1680e03->leave($__internal_6d45effebd2136a3f3a45fb5756307623a5c805316b4a81d7626501cc1680e03_prof);

    }

    // line 5
    public function block_toggle($context, array $blocks = array())
    {
        $__internal_cd0718f8c5ea87422f00d51ea3ddaa4c50d60848e8be8315df96d1ff72aca7df = $this->env->getExtension("native_profiler");
        $__internal_cd0718f8c5ea87422f00d51ea3ddaa4c50d60848e8be8315df96d1ff72aca7df->enter($__internal_cd0718f8c5ea87422f00d51ea3ddaa4c50d60848e8be8315df96d1ff72aca7df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toggle"));

        // line 6
        echo "            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\" >
            <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            ";
        
        $__internal_cd0718f8c5ea87422f00d51ea3ddaa4c50d60848e8be8315df96d1ff72aca7df->leave($__internal_cd0718f8c5ea87422f00d51ea3ddaa4c50d60848e8be8315df96d1ff72aca7df_prof);

    }

    // line 13
    public function block_brand($context, array $blocks = array())
    {
        $__internal_137259487f50144e22fb6f41786ba7ab9e39e33efa29611ae5c0ccfdba342644 = $this->env->getExtension("native_profiler");
        $__internal_137259487f50144e22fb6f41786ba7ab9e39e33efa29611ae5c0ccfdba342644->enter($__internal_137259487f50144e22fb6f41786ba7ab9e39e33efa29611ae5c0ccfdba342644_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "brand"));

        
        $__internal_137259487f50144e22fb6f41786ba7ab9e39e33efa29611ae5c0ccfdba342644->leave($__internal_137259487f50144e22fb6f41786ba7ab9e39e33efa29611ae5c0ccfdba342644_prof);

    }

    // line 16
    public function block_menu_container($context, array $blocks = array())
    {
        $__internal_cc360c140bb4fd429a441244b06a75b1d92ed40488ae8e583f5cc68aea9a1b18 = $this->env->getExtension("native_profiler");
        $__internal_cc360c140bb4fd429a441244b06a75b1d92ed40488ae8e583f5cc68aea9a1b18->enter($__internal_cc360c140bb4fd429a441244b06a75b1d92ed40488ae8e583f5cc68aea9a1b18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu_container"));

        // line 17
        echo "        <div class=\"collapse navbar-collapse navbar-responsive-collapse\">
            ";
        // line 18
        $this->displayBlock('menu', $context, $blocks);
        // line 19
        echo "        </div>
        ";
        
        $__internal_cc360c140bb4fd429a441244b06a75b1d92ed40488ae8e583f5cc68aea9a1b18->leave($__internal_cc360c140bb4fd429a441244b06a75b1d92ed40488ae8e583f5cc68aea9a1b18_prof);

    }

    // line 18
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7b6f5b2632776722f3dce6050ee9657f63cb93c10c51a1910324c4695cf517b0 = $this->env->getExtension("native_profiler");
        $__internal_7b6f5b2632776722f3dce6050ee9657f63cb93c10c51a1910324c4695cf517b0->enter($__internal_7b6f5b2632776722f3dce6050ee9657f63cb93c10c51a1910324c4695cf517b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        
        $__internal_7b6f5b2632776722f3dce6050ee9657f63cb93c10c51a1910324c4695cf517b0->leave($__internal_7b6f5b2632776722f3dce6050ee9657f63cb93c10c51a1910324c4695cf517b0_prof);

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
        return array (  129 => 18,  121 => 19,  119 => 18,  116 => 17,  110 => 16,  99 => 13,  86 => 6,  80 => 5,  72 => 14,  69 => 13,  67 => 5,  64 => 4,  58 => 3,  49 => 21,  46 => 16,  44 => 3,  40 => 2,  27 => 1,);
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
