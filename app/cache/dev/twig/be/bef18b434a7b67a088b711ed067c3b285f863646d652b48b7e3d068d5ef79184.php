<?php

/* @MopaBootstrap/base_sass.html.twig */
class __TwigTemplate_0b00c6d04740e10986e4a499778f35f2a6b129a0cda6d9e8f72e72ed6ba4057d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::layout.html.twig", "@MopaBootstrap/base_sass.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb0167bd31732ca0411de1cefea335af8b15e773aa77c8fd8441d0d6ebeb4d28 = $this->env->getExtension("native_profiler");
        $__internal_eb0167bd31732ca0411de1cefea335af8b15e773aa77c8fd8441d0d6ebeb4d28->enter($__internal_eb0167bd31732ca0411de1cefea335af8b15e773aa77c8fd8441d0d6ebeb4d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MopaBootstrap/base_sass.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb0167bd31732ca0411de1cefea335af8b15e773aa77c8fd8441d0d6ebeb4d28->leave($__internal_eb0167bd31732ca0411de1cefea335af8b15e773aa77c8fd8441d0d6ebeb4d28_prof);

    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_459cad17b708a4acd3afe3d79ab87183fd6169a0e8e768de6dac4a5530e024c6 = $this->env->getExtension("native_profiler");
        $__internal_459cad17b708a4acd3afe3d79ab87183fd6169a0e8e768de6dac4a5530e024c6->enter($__internal_459cad17b708a4acd3afe3d79ab87183fd6169a0e8e768de6dac4a5530e024c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "9eb40f7_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9eb40f7_0") : $this->env->getExtension('asset')->getAssetUrl("css/9eb40f7_mopabootstrapbundle_1.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "9eb40f7"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_9eb40f7") : $this->env->getExtension('asset')->getAssetUrl("css/9eb40f7.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
        
        $__internal_459cad17b708a4acd3afe3d79ab87183fd6169a0e8e768de6dac4a5530e024c6->leave($__internal_459cad17b708a4acd3afe3d79ab87183fd6169a0e8e768de6dac4a5530e024c6_prof);

    }

    // line 16
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        $__internal_1e64336eb1d238e81febe8306fe4425233066179d9e056ad393122db3a350504 = $this->env->getExtension("native_profiler");
        $__internal_1e64336eb1d238e81febe8306fe4425233066179d9e056ad393122db3a350504->enter($__internal_1e64336eb1d238e81febe8306fe4425233066179d9e056ad393122db3a350504_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_assetic"));

        // line 17
        echo "    ";
        
        $__internal_1e64336eb1d238e81febe8306fe4425233066179d9e056ad393122db3a350504->leave($__internal_1e64336eb1d238e81febe8306fe4425233066179d9e056ad393122db3a350504_prof);

    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/base_sass.html.twig";
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
/* {% extends 'MopaBootstrapBundle::layout.html.twig' %}*/
/* */
/* {% block head_style %}*/
/*     {# Override this block to add your own files! #}*/
/*     {% stylesheets*/
/*     '@MopaBootstrapBundle/Resources/public/sass/mopabootstrapbundle.scss'*/
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
/*     '@MopaBootstrapBundle/Resources/public/bootstrap-sass/vendor/assets/javascripts/bootstrap/tooltip.js'*/
/*     '@MopaBootstrapBundle/Resources/public/bootstrap-sass/vendor/assets/javascripts/bootstrap/*.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-collection.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-subnav.js'*/
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     #}*/
/* {% endblock foot_script_assetic %}*/
/* */
