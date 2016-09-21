<?php

/* MopaBootstrapBundle::flash.html.twig */
class __TwigTemplate_d28100f20e7d3ba786971218f8b73e00fb1642be89f1fbb42aca9a0974de0b58 extends Twig_Template
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
        // line 13
        echo "
";
        // line 32
        echo "
";
    }

    // line 1
    public function getflash($__type__ = null, $__message__ = null, $__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "message" => $__message__,
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => func_num_args() > 6 ? array_slice(func_get_args(), 6) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : null)) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : null))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : null), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
    ";
            // line 3
            if (((array_key_exists("close", $context)) ? (_twig_default_filter((isset($context["close"]) ? $context["close"] : null), false)) : (false))) {
                // line 4
                echo "        <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>
    ";
            }
            // line 6
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : null), false)) : (false))) {
                // line 7
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : null), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 9
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : null), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 11
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 14
    public function getadvanced_flash($__type__ = null, $__heading__ = null, $__message__ = null, $__close_tag__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "heading" => $__heading__,
            "message" => $__message__,
            "close_tag" => $__close_tag__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => func_num_args() > 7 ? array_slice(func_get_args(), 7) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 15
            echo "    <div class=\"alert";
            echo twig_escape_filter($this->env, (((isset($context["type"]) ? $context["type"] : null)) ? ((" alert-" . (isset($context["type"]) ? $context["type"] : null))) : ("")), "html", null, true);
            echo " fade in ";
            echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : null), "")) : ("")), "html", null, true);
            echo " ";
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : null), false)) : (false))) {
                echo "alert-dismissible";
            }
            echo "\">
    ";
            // line 16
            if (((array_key_exists("close_tag", $context)) ? (_twig_default_filter((isset($context["close_tag"]) ? $context["close_tag"] : null), false)) : (false))) {
                // line 17
                echo "        ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : null) == true)) {
                    // line 18
                    echo "            ";
                    $context["close_tag"] = "a";
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "        <";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : null), "html", null, true);
                echo " class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\" ";
                if (((isset($context["close_tag"]) ? $context["close_tag"] : null) == "a")) {
                    echo "href=\"#\"";
                } elseif (((isset($context["close_tag"]) ? $context["close_tag"] : null) == "button")) {
                    echo "type=\"button\"";
                }
                echo ">&times;</";
                echo twig_escape_filter($this->env, (isset($context["close_tag"]) ? $context["close_tag"] : null), "html", null, true);
                echo ">
    ";
            }
            // line 22
            echo "    ";
            if (((array_key_exists("heading", $context)) ? (_twig_default_filter((isset($context["heading"]) ? $context["heading"] : null), false)) : (false))) {
                // line 23
                echo "    <h4 class=\"alert-heading\">";
                echo twig_escape_filter($this->env, (isset($context["heading"]) ? $context["heading"] : null), "html", null, true);
                echo "</h4>
    ";
            }
            // line 25
            echo "    ";
            if (((array_key_exists("use_raw", $context)) ? (_twig_default_filter((isset($context["use_raw"]) ? $context["use_raw"] : null), false)) : (false))) {
                // line 26
                echo "        ";
                echo $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : null), "messages")) : ("messages")));
                echo "
    ";
            } else {
                // line 28
                echo "        ";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : null), array(), ((array_key_exists("domain", $context)) ? (_twig_default_filter((isset($context["domain"]) ? $context["domain"] : null), "messages")) : ("messages"))), "html", null, true);
                echo "
    ";
            }
            // line 30
            echo "    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 33
    public function getsession_flash($__close__ = null, $__use_raw__ = null, $__class__ = null, $__domain__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "close" => $__close__,
            "use_raw" => $__use_raw__,
            "class" => $__class__,
            "domain" => $__domain__,
            "varargs" => func_num_args() > 4 ? array_slice(func_get_args(), 4) : array(),
        ));

        $blocks = array();

        ob_start();
        try {
            // line 34
            echo "    ";
            $context["flash_messages"] = $this;
            // line 35
            echo "
    ";
            // line 36
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
                // line 37
                echo "        ";
                $context["mapping"] = twig_array_merge($this->env->getExtension('mopa_bootstrap_flash')->getMapping(), array("fos_user_success" => "success"));
                // line 38
                echo "        ";
                $context["flashes"] = array();
                // line 39
                echo "
        ";
                // line 40
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter((isset($context["mapping"]) ? $context["mapping"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                    // line 41
                    echo "            ";
                    $context["flashes"] = twig_array_merge((isset($context["flashes"]) ? $context["flashes"] : null), array($context["type"] => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "get", array(0 => $context["type"]), "method")));
                    // line 42
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["flashes"]) ? $context["flashes"] : null));
                foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                    // line 45
                    echo "            ";
                    if (($context["type"] == "fos_user_success")) {
                        // line 46
                        echo "                ";
                        $context["domain"] = "FOSUserBundle";
                        // line 47
                        echo "            ";
                    }
                    // line 48
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["messages"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                        // line 49
                        echo "                ";
                        echo $context["flash_messages"]->getflash($this->getAttribute((isset($context["mapping"]) ? $context["mapping"] : null), $context["type"], array(), "array"), $context["message"], (isset($context["close"]) ? $context["close"] : null), (isset($context["use_raw"]) ? $context["use_raw"] : null), (isset($context["class"]) ? $context["class"] : null), (isset($context["domain"]) ? $context["domain"] : null));
                        echo "
            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 51
                    echo "        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "    ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::flash.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 52,  253 => 51,  244 => 49,  239 => 48,  236 => 47,  233 => 46,  230 => 45,  226 => 44,  223 => 43,  217 => 42,  214 => 41,  210 => 40,  207 => 39,  204 => 38,  201 => 37,  199 => 36,  196 => 35,  193 => 34,  178 => 33,  166 => 30,  160 => 28,  154 => 26,  151 => 25,  145 => 23,  142 => 22,  128 => 20,  125 => 19,  122 => 18,  119 => 17,  117 => 16,  106 => 15,  88 => 14,  76 => 11,  70 => 9,  64 => 7,  61 => 6,  57 => 4,  55 => 3,  44 => 2,  27 => 1,  22 => 32,  19 => 13,);
    }
}
/* {% macro flash(type, message, close, use_raw, class, domain) %}*/
/*     <div class="alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close|default(false) %}alert-dismissible{% endif %}">*/
/*     {% if close|default(false) %}*/
/*         <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>*/
/*     {% endif %}*/
/*     {% if use_raw|default(false) %}*/
/*         {{ message|trans({}, domain|default('messages'))|raw }}*/
/*     {% else %}*/
/*         {{ message|trans({}, domain|default('messages')) }}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro advanced_flash(type, heading, message, close_tag, use_raw, class, domain) %}*/
/*     <div class="alert{{ type ? ' alert-'~type : '' }} fade in {{ class|default('') }} {% if close_tag|default(false) %}alert-dismissible{% endif %}">*/
/*     {% if close_tag|default(false) %}*/
/*         {% if close_tag == true %}*/
/*             {% set close_tag = 'a' %}*/
/*         {% endif %}*/
/*         <{{ close_tag }} class="close" data-dismiss="alert" aria-hidden="true" {% if close_tag == 'a' %}href="#"{% elseif close_tag =='button' %}type="button"{% endif %}>&times;</{{ close_tag }}>*/
/*     {% endif %}*/
/*     {% if heading|default(false) %}*/
/*     <h4 class="alert-heading">{{ heading }}</h4>*/
/*     {% endif %}*/
/*     {% if use_raw|default(false) %}*/
/*         {{ message|trans({}, domain|default('messages'))|raw }}*/
/*     {% else %}*/
/*         {{ message|trans({}, domain|default('messages')) }}*/
/*     {% endif %}*/
/*     </div>*/
/* {% endmacro %}*/
/* */
/* {% macro session_flash(close, use_raw, class, domain) %}*/
/*     {% import _self as flash_messages %}*/
/* */
/*     {% if app.session.flashbag.peekAll|length > 0 %}*/
/*         {% set mapping = mopa_bootstrap_flash_mapping()|merge({'fos_user_success':'success'}) %}*/
/*         {% set flashes = {} %}*/
/* */
/*         {% for type in mapping|keys %}*/
/*             {% set flashes = flashes | merge({ (type) : app.session.flashbag.get(type) }) %}*/
/*         {% endfor %}*/
/* */
/*         {% for type, messages in flashes %}*/
/*             {% if type == 'fos_user_success' %}*/
/*                 {% set domain = 'FOSUserBundle' %}*/
/*             {% endif %}*/
/*             {% for message in messages %}*/
/*                 {{ flash_messages.flash(mapping[type], message, close, use_raw, class, domain) }}*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endmacro %}*/
/* */
