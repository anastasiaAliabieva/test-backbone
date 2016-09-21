<?php

/* MopaBootstrapBundle:Menu:menu.html.twig */
class __TwigTemplate_6c0dfbe78bfa509869789b7d339b71158de5c986ee91522157f8048e491e67e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "MopaBootstrapBundle:Menu:menu.html.twig", 1);
        $this->blocks = array(
            'linkElement' => array($this, 'block_linkElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_linkElement($context, array $blocks = array())
    {
        // line 4
        ob_start();
        // line 5
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "MopaBootstrapBundle:Menu:menu.html.twig", 5);
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "linkAttributes", array()));
        echo ">
";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon", array()), false)) : (false))) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array()), "icon", array()), (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon_white", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon_white", array()), false)) : (false)));
            echo " ";
        }
        // line 10
        $this->displayBlock("label", $context, $blocks);
        // line 11
        if ((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "caret", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "caret", array()), false)) : (false))) {
            // line 12
            echo "    <b class=\"caret\"></b>
";
        }
        // line 14
        echo "</a>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 18
    public function block_label($context, array $blocks = array())
    {
        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : null), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array()));
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "label", array())), "html", null, true);
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Menu:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 18,  58 => 14,  54 => 12,  52 => 11,  50 => 10,  45 => 8,  43 => 7,  36 => 6,  34 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'knp_menu.html.twig' %}*/
/* */
/* {% block linkElement %}*/
/* {% spaceless %}*/
/* {% import 'knp_menu.html.twig' as macros %}*/
/* <a href="{{ item.uri }}"{{ macros.attributes(item.linkAttributes) }}>*/
/* {% if item.extras.icon|default(false) %}*/
/*     {{ mopa_bootstrap_icon(item.extras.icon, item.extras.icon_white|default(false)) }}{{ ' ' }}*/
/* {%- endif %}*/
/* {{ block('label') }}*/
/* {%- if item.extras.caret|default(false) %}*/
/*     <b class="caret"></b>*/
/* {% endif -%}*/
/* </a>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block label %}{% if options.allow_safe_labels and item.getExtra('safe_label', false) %}{{ item.label|trans()|raw }}{% else %}{{ item.label|trans() }}{% endif %}{% endblock %}*/
/* */
