<?php

/* @MopaBootstrap/base_less.html.twig */
class __TwigTemplate_b134d21b569f512c5a4a021d0cc5bca70394e9786d4db80630653141cbeb093d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::layout.html.twig", "@MopaBootstrap/base_less.html.twig", 1);
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
        $__internal_92ee9aad06eeff380b8a682f9fd963fe9831c70cf5cec5c7903fc9398685aa6c = $this->env->getExtension("native_profiler");
        $__internal_92ee9aad06eeff380b8a682f9fd963fe9831c70cf5cec5c7903fc9398685aa6c->enter($__internal_92ee9aad06eeff380b8a682f9fd963fe9831c70cf5cec5c7903fc9398685aa6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@MopaBootstrap/base_less.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_92ee9aad06eeff380b8a682f9fd963fe9831c70cf5cec5c7903fc9398685aa6c->leave($__internal_92ee9aad06eeff380b8a682f9fd963fe9831c70cf5cec5c7903fc9398685aa6c_prof);

    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_a93b622cc353953c8048ceac328a8b0eb5c64d20e2a4dc90c653bb9da3d71c5d = $this->env->getExtension("native_profiler");
        $__internal_a93b622cc353953c8048ceac328a8b0eb5c64d20e2a4dc90c653bb9da3d71c5d->enter($__internal_a93b622cc353953c8048ceac328a8b0eb5c64d20e2a4dc90c653bb9da3d71c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "bab9907_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bab9907_0") : $this->env->getExtension('asset')->getAssetUrl("css/bab9907_mopabootstrapbundle_1.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "bab9907"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_bab9907") : $this->env->getExtension('asset')->getAssetUrl("css/bab9907.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
        
        $__internal_a93b622cc353953c8048ceac328a8b0eb5c64d20e2a4dc90c653bb9da3d71c5d->leave($__internal_a93b622cc353953c8048ceac328a8b0eb5c64d20e2a4dc90c653bb9da3d71c5d_prof);

    }

    // line 16
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        $__internal_2d7c08f7b5018bf6438001edb6648e26e219b7c021f5c3ee74c70ea0b0575ef5 = $this->env->getExtension("native_profiler");
        $__internal_2d7c08f7b5018bf6438001edb6648e26e219b7c021f5c3ee74c70ea0b0575ef5->enter($__internal_2d7c08f7b5018bf6438001edb6648e26e219b7c021f5c3ee74c70ea0b0575ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_assetic"));

        // line 17
        echo "    ";
        
        $__internal_2d7c08f7b5018bf6438001edb6648e26e219b7c021f5c3ee74c70ea0b0575ef5->leave($__internal_2d7c08f7b5018bf6438001edb6648e26e219b7c021f5c3ee74c70ea0b0575ef5_prof);

    }

    public function getTemplateName()
    {
        return "@MopaBootstrap/base_less.html.twig";
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
/*         '@MopaBootstrapBundle/Resources/public/less/mopabootstrapbundle.less'*/
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
/*     '@MopaBootstrapBundle/Resources/public/bootstrap/js/tooltip.js'*/
/*     '@MopaBootstrapBundle/Resources/public/bootstrap/js/*.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-collection.js'*/
/*     '@MopaBootstrapBundle/Resources/public/js/mopabootstrap-subnav.js'*/
/*     %}*/
/*     <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*     #}*/
/* {% endblock foot_script_assetic %}*/
/* */
