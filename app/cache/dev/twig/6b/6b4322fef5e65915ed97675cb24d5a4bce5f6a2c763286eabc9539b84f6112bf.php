<?php

/* @MopaBootstrap/base_sass_3.2.html.twig */
class __TwigTemplate_01e3141f8d1658363546693da652b13f783e7977905aced41dd933ed800a5f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base.html.twig", "@MopaBootstrap/base_sass_3.2.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8849d68afc7f0dc4a364f0bff5f351ab8d17ea916e5485c84033d1d94dd8b33b = $this->env->getExtension("native_profiler");
        $__internal_8849d68afc7f0dc4a364f0bff5f351ab8d17ea916e5485c84033d1d94dd8b33b->enter($__internal_8849d68afc7f0dc4a364f0bff5f351ab8d17ea916e5485c84033d1d94dd8b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MopaBootstrap/base_sass_3.2.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8849d68afc7f0dc4a364f0bff5f351ab8d17ea916e5485c84033d1d94dd8b33b->leave($__internal_8849d68afc7f0dc4a364f0bff5f351ab8d17ea916e5485c84033d1d94dd8b33b_prof);

    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_6ab1f6065e2f52b0fa54e885d939dff6dddd06b1d3456fbb45469e37c1c4cf7c = $this->env->getExtension("native_profiler");
        $__internal_6ab1f6065e2f52b0fa54e885d939dff6dddd06b1d3456fbb45469e37c1c4cf7c->enter($__internal_6ab1f6065e2f52b0fa54e885d939dff6dddd06b1d3456fbb45469e37c1c4cf7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d8fa282_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8fa282_0") : $this->env->getExtension('asset')->getAssetUrl("css/d8fa282_mopabootstrapbundle-3.2_1.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "d8fa282"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8fa282") : $this->env->getExtension('asset')->getAssetUrl("css/d8fa282.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
        
        $__internal_6ab1f6065e2f52b0fa54e885d939dff6dddd06b1d3456fbb45469e37c1c4cf7c->leave($__internal_6ab1f6065e2f52b0fa54e885d939dff6dddd06b1d3456fbb45469e37c1c4cf7c_prof);

    }

    // line 16
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        $__internal_1454bfe2275ce833f11724bb6f78dd02930a498613539c257bb86abd97eeb1cb = $this->env->getExtension("native_profiler");
        $__internal_1454bfe2275ce833f11724bb6f78dd02930a498613539c257bb86abd97eeb1cb->enter($__internal_1454bfe2275ce833f11724bb6f78dd02930a498613539c257bb86abd97eeb1cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_assetic"));

        // line 17
        echo "    ";
        
        $__internal_1454bfe2275ce833f11724bb6f78dd02930a498613539c257bb86abd97eeb1cb->leave($__internal_1454bfe2275ce833f11724bb6f78dd02930a498613539c257bb86abd97eeb1cb_prof);

    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/base_sass_3.2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 17,  69 => 16,  62 => 10,  48 => 8,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base.html.twig' %}*/
/* */
/* {% block head_style %}*/
/*     {# Override this block to add your own files! #}*/
/*     {% stylesheets*/
/*     '@MopaBootstrapBundle/Resources/public/sass/mopabootstrapbundle-3.2.scss'*/
/*     %}*/
/*     <link href="{{ asset_url }}" type="text/css" rel="stylesheet" media="screen" />*/
/*     {% endstylesheets %}*/
/*     {# To use this without less use the base_css.html.twig template as your base*/
/*      # Be sure you understand whats going on: have a look into*/
/*      # https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/css-vs-less.md*/
/*      #}*/
/* {% endblock head_style %}*/
/* */
/* {% block foot_script_assetic %}*/
/*     {# Please add the javascripts you need in your project*/
/*     {% javascripts*/
/*     '@MopaBootstrapBundle/Resources/public/bootstrap-sass/assets/javascripts/bootstrap/tooltip.js'*/
/*     '@MopaBootstrapBundle/Resources/public/bootstrap-sass/assets/javascripts/bootstrap/*.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-collection.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-subnav.js'*/
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     #}*/
/* {% endblock foot_script_assetic %}*/
/* */
