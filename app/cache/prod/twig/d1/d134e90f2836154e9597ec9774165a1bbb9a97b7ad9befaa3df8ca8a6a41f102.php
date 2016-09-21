<?php

/* MopaBootstrapBundle::icons.html.twig */
class __TwigTemplate_eae68c486b9726dbe465bca54a64bbe76be20f65602d7b2f245708f270ccfaa8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fontawesome' => array($this, 'block_fontawesome'),
            'fontawesome4' => array($this, 'block_fontawesome4'),
            'glyphicons' => array($this, 'block_glyphicons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fontawesome', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('fontawesome4', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('glyphicons', $context, $blocks);
    }

    // line 5
    public function block_fontawesome($context, array $blocks = array())
    {
        // line 6
        echo "<i class=\"icon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo (((isset($context["inverted"]) ? $context["inverted"] : null)) ? (" inverted") : (""));
        echo "\"></i>";
    }

    // line 9
    public function block_fontawesome4($context, array $blocks = array())
    {
        // line 10
        echo "<i class=\"fa fa-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo (((isset($context["inverted"]) ? $context["inverted"] : null)) ? (" fa-inverse") : (""));
        echo "\"></i>";
    }

    // line 13
    public function block_glyphicons($context, array $blocks = array())
    {
        // line 14
        echo "<span class=\"glyphicon glyphicon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : null), "html", null, true);
        echo "\"";
        if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : null), false)) : (false))) {
            echo " style=\"color: white;\"";
        }
        echo "></span>";
    }

    // line 1
    public function geticon($__name__ = null, $__inverted__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "inverted" => $__inverted__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\"";
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : null), false)) : (false))) {
                echo " style=\"color: white;\"";
            }
            echo "></span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 2,  72 => 1,  62 => 14,  59 => 13,  52 => 10,  49 => 9,  42 => 6,  39 => 5,  35 => 13,  32 => 12,  30 => 9,  27 => 8,  25 => 5,  22 => 4,);
    }
}
/* {% macro icon(name, inverted) %}*/
/* <span class="glyphicon glyphicon-{{ name }}"{% if inverted|default(false) %} style="color: white;"{% endif %}></span>*/
/* {% endmacro %}*/
/* */
/* {% block fontawesome -%}*/
/* <i class="icon-{{ icon }}{{ inverted ? ' inverted' : '' }}"></i>*/
/* {%- endblock %}*/
/* */
/* {% block fontawesome4 -%}*/
/*     <i class="fa fa-{{ icon }}{{ inverted ? ' fa-inverse' : '' }}"></i>*/
/* {%- endblock %}*/
/* */
/* {% block glyphicons -%}*/
/* <span class="glyphicon glyphicon-{{ icon }}"{% if inverted|default(false) %} style="color: white;"{% endif %}></span>*/
/* {%- endblock %}*/
/* */
