<?php

/* @MopaBootstrap/base_sass_3.2.html.twig */
class __TwigTemplate_c88755d883a126597e3da53aa325b8094cb43aa33e6d4577a2e085f9495c5f35 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "d8fa282_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8fa282_0") : $this->env->getExtension('asset')->getAssetUrl("css/d8fa282_mopabootstrapbundle-3.2_1.css");
            // line 8
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        } else {
            // asset "d8fa282"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_d8fa282") : $this->env->getExtension('asset')->getAssetUrl("css/d8fa282.css");
            echo "    <link href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : null), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    ";
        }
        unset($context["asset_url"]);
        // line 10
        echo "    ";
    }

    // line 16
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        // line 17
        echo "    ";
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
        return array (  60 => 17,  57 => 16,  53 => 10,  39 => 8,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
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
