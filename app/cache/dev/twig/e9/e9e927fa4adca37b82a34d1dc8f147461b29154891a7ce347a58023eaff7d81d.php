<?php

/* MopaBootstrapBundle:Menu:menu.html.twig */
class __TwigTemplate_1f869735da5f2459f7fd8c212d42816f67fdd75d6e4a9bee5a1b27fb5531b686 extends Twig_Template
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
        $__internal_074db638b5eb13b6ff53ce6136c0287b98f4d49bc8b1ee22b800131b2ccfb6b8 = $this->env->getExtension("native_profiler");
        $__internal_074db638b5eb13b6ff53ce6136c0287b98f4d49bc8b1ee22b800131b2ccfb6b8->enter($__internal_074db638b5eb13b6ff53ce6136c0287b98f4d49bc8b1ee22b800131b2ccfb6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Menu:menu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074db638b5eb13b6ff53ce6136c0287b98f4d49bc8b1ee22b800131b2ccfb6b8->leave($__internal_074db638b5eb13b6ff53ce6136c0287b98f4d49bc8b1ee22b800131b2ccfb6b8_prof);

    }

    // line 3
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_c1d2cd3bdd4fb2a491b6d4ecf4c3a4a9707aea3f1fda0d8c5c7720f840bb539b = $this->env->getExtension("native_profiler");
        $__internal_c1d2cd3bdd4fb2a491b6d4ecf4c3a4a9707aea3f1fda0d8c5c7720f840bb539b->enter($__internal_c1d2cd3bdd4fb2a491b6d4ecf4c3a4a9707aea3f1fda0d8c5c7720f840bb539b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 4
        ob_start();
        // line 5
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "MopaBootstrapBundle:Menu:menu.html.twig", 5);
        // line 6
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $context["macros"]->getattributes($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "linkAttributes", array()));
        echo ">
";
        // line 7
        if ((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon", array()), false)) : (false))) {
            // line 8
            echo "    ";
            echo $this->env->getExtension('mopa_bootstrap_icon')->renderIcon($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "extras", array()), "icon", array()), (($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon_white", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "extras", array(), "any", false, true), "icon_white", array()), false)) : (false)));
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
        
        $__internal_c1d2cd3bdd4fb2a491b6d4ecf4c3a4a9707aea3f1fda0d8c5c7720f840bb539b->leave($__internal_c1d2cd3bdd4fb2a491b6d4ecf4c3a4a9707aea3f1fda0d8c5c7720f840bb539b_prof);

    }

    // line 18
    public function block_label($context, array $blocks = array())
    {
        $__internal_87e30abd8c7b65558cc27a25b4eb02b94d8b2e98cd5000b74a0379bc840a9a39 = $this->env->getExtension("native_profiler");
        $__internal_87e30abd8c7b65558cc27a25b4eb02b94d8b2e98cd5000b74a0379bc840a9a39->enter($__internal_87e30abd8c7b65558cc27a25b4eb02b94d8b2e98cd5000b74a0379bc840a9a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        if (($this->getAttribute((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), "allow_safe_labels", array()) && $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "getExtra", array(0 => "safe_label", 1 => false), "method"))) {
            echo $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array()));
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "label", array())), "html", null, true);
        }
        
        $__internal_87e30abd8c7b65558cc27a25b4eb02b94d8b2e98cd5000b74a0379bc840a9a39->leave($__internal_87e30abd8c7b65558cc27a25b4eb02b94d8b2e98cd5000b74a0379bc840a9a39_prof);

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
        return array (  76 => 18,  67 => 14,  63 => 12,  61 => 11,  59 => 10,  54 => 8,  52 => 7,  45 => 6,  43 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
