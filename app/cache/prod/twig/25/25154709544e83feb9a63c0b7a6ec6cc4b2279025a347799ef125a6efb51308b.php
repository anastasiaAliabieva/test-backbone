<?php

/* MopaBootstrapBundle::macros.html.twig */
class __TwigTemplate_1f34d8974b8936cb1b7cf8c500f75afa8259bce0d2b043f844b5c8647a0a9972 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 9
        echo "

";
    }

    // line 1
    public function getbadge($__text__ = null, $__use_raw__ = null, $__class__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "varargs" => func_num_args() > 3 ? array_slice(func_get_args(), 3) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<span class=\"badge";
            echo twig_escape_filter($this->env, ((((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), false)) : (false))) ? ((" " . (isset($context["class"]) ? $context["class"] : null))) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : null), false)) : (false))) ? ((isset($context["text"]) ? $context["text"] : null)) : ((isset($context["text"]) ? $context["text"] : null))), "html", null, true);
            echo "</span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 5
    public function getlabel($__text__ = null, $__type__ = null, $__use_raw__ = null, $__block__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "text" => $__text__,
            "type" => $__type__,
            "use_raw" => $__use_raw__,
            "block" => $__block__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 6
            $context["tag"] = ((((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : null), false)) : (false))) ? ("div") : ("span"));
            // line 7
            echo "<";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
            echo " class=\"label ";
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), false)) : (false))) ? (("label-" . (isset($context["type"]) ? $context["type"] : null))) : ("label-default")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : null), false)) : (false))) ? ((isset($context["text"]) ? $context["text"] : null)) : ((isset($context["text"]) ? $context["text"] : null))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : null), "html", null, true);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 11
    public function getprogressBar($__class__ = null, $__width__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "class" => $__class__,
            "width" => $__width__,
            "varargs" => func_num_args() > 2 ? array_slice(func_get_args(), 2) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 12
            echo "<div class=\"progress ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"bar\" style=\"width: ";
            // line 13
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : null), 0)) : (0)), "html", null, true);
            echo "%;\"></div>
</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 13,  108 => 12,  95 => 11,  75 => 7,  73 => 6,  58 => 5,  42 => 2,  28 => 1,  22 => 9,  19 => 4,);
    }
}
/* {% macro badge(text, use_raw, class) %}*/
/* <span class="badge{{ class|default(false)?' '~class:'' }}">{{ use_raw|default(false) ? text|raw : text }}</span>*/
/* {% endmacro %}*/
/* */
/* {% macro label(text, type, use_raw, block) %}*/
/* {% set tag = block|default(false) ? 'div' : 'span' %}*/
/* <{{ tag }} class="label {{ type|default(false) ? 'label-'~type: 'label-default' }}">{{ use_raw|default(false) ? text|raw : text }}</{{ tag }}>*/
/* {% endmacro %}*/
/* */
/* */
/* {% macro progressBar(class, width) %}*/
/* <div class="progress {{ class|default('') }}">*/
/*     <div class="bar" style="width: {{ width|default(0) }}%;"></div>*/
/* </div>*/
/* {% endmacro %}*/
/* */
