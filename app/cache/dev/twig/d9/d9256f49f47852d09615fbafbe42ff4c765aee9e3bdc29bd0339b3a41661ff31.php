<?php

/* MopaBootstrapBundle::macros.html.twig */
class __TwigTemplate_2493af61b78e86991579f56058df492045a61500a42d88399df91eb687888524 extends Twig_Template
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
        $__internal_c178fbb7441c8b6e59678d0471a86bf828359a9d1780db40e47aec5e3b781362 = $this->env->getExtension("native_profiler");
        $__internal_c178fbb7441c8b6e59678d0471a86bf828359a9d1780db40e47aec5e3b781362->enter($__internal_c178fbb7441c8b6e59678d0471a86bf828359a9d1780db40e47aec5e3b781362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::macros.html.twig"));

        // line 4
        echo "
";
        // line 9
        echo "

";
        
        $__internal_c178fbb7441c8b6e59678d0471a86bf828359a9d1780db40e47aec5e3b781362->leave($__internal_c178fbb7441c8b6e59678d0471a86bf828359a9d1780db40e47aec5e3b781362_prof);

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
            $__internal_1c0cdfdbeda9fbf05535ebc097b8bfed10eeadf7ce70711d636f39cb42715e79 = $this->env->getExtension("native_profiler");
            $__internal_1c0cdfdbeda9fbf05535ebc097b8bfed10eeadf7ce70711d636f39cb42715e79->enter($__internal_1c0cdfdbeda9fbf05535ebc097b8bfed10eeadf7ce70711d636f39cb42715e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "badge"));

            // line 2
            echo "<span class=\"badge";
            echo twig_escape_filter($this->env, ((((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), false)) : (false))) ? ((" " . (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")))) : ("")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) ? ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))) : ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")))), "html", null, true);
            echo "</span>
";
            
            $__internal_1c0cdfdbeda9fbf05535ebc097b8bfed10eeadf7ce70711d636f39cb42715e79->leave($__internal_1c0cdfdbeda9fbf05535ebc097b8bfed10eeadf7ce70711d636f39cb42715e79_prof);

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
            $__internal_ea92cf5817ff89748389013f9f399ca3964eb27b4c5627522d5a7f5e5afd44e3 = $this->env->getExtension("native_profiler");
            $__internal_ea92cf5817ff89748389013f9f399ca3964eb27b4c5627522d5a7f5e5afd44e3->enter($__internal_ea92cf5817ff89748389013f9f399ca3964eb27b4c5627522d5a7f5e5afd44e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "label"));

            // line 6
            $context["tag"] = ((((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : $this->getContext($context, "block")), false)) : (false))) ? ("div") : ("span"));
            // line 7
            echo "<";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo " class=\"label ";
            echo twig_escape_filter($this->env, ((((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), false)) : (false))) ? (("label-" . (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")))) : ("label-default")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ((((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : $this->getContext($context, "use_raw")), false)) : (false))) ? ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))) : ((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, (isset($context["tag"]) ? $context["tag"] : $this->getContext($context, "tag")), "html", null, true);
            echo ">
";
            
            $__internal_ea92cf5817ff89748389013f9f399ca3964eb27b4c5627522d5a7f5e5afd44e3->leave($__internal_ea92cf5817ff89748389013f9f399ca3964eb27b4c5627522d5a7f5e5afd44e3_prof);

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
            $__internal_9ef7dd74fc847b1cd2309f937a8edc082a0d3f39f32dbf99f6203306564ffeab = $this->env->getExtension("native_profiler");
            $__internal_9ef7dd74fc847b1cd2309f937a8edc082a0d3f39f32dbf99f6203306564ffeab->enter($__internal_9ef7dd74fc847b1cd2309f937a8edc082a0d3f39f32dbf99f6203306564ffeab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "progressBar"));

            // line 12
            echo "<div class=\"progress ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"bar\" style=\"width: ";
            // line 13
            echo twig_escape_filter($this->env, ((array_key_exists("width", $context)) ? (_twig_default_filter((isset($context["width"]) ? $context["width"] : $this->getContext($context, "width")), 0)) : (0)), "html", null, true);
            echo "%;\"></div>
</div>
";
            
            $__internal_9ef7dd74fc847b1cd2309f937a8edc082a0d3f39f32dbf99f6203306564ffeab->leave($__internal_9ef7dd74fc847b1cd2309f937a8edc082a0d3f39f32dbf99f6203306564ffeab_prof);

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
        return array (  134 => 13,  129 => 12,  113 => 11,  90 => 7,  88 => 6,  70 => 5,  51 => 2,  34 => 1,  25 => 9,  22 => 4,);
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
