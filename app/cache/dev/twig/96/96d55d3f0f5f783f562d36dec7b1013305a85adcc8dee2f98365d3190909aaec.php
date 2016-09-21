<?php

/* MopaBootstrapBundle::icons.html.twig */
class __TwigTemplate_5ab3b3e7d4606f3998f36f97b834f8bb0e77c458843a2d0947f9d7c3880c3305 extends Twig_Template
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
        $__internal_22245814ef0c33b569a4af24db535ce5ba4fa63c9622d53a47cfc9982f78aab6 = $this->env->getExtension("native_profiler");
        $__internal_22245814ef0c33b569a4af24db535ce5ba4fa63c9622d53a47cfc9982f78aab6->enter($__internal_22245814ef0c33b569a4af24db535ce5ba4fa63c9622d53a47cfc9982f78aab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::icons.html.twig"));

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
        
        $__internal_22245814ef0c33b569a4af24db535ce5ba4fa63c9622d53a47cfc9982f78aab6->leave($__internal_22245814ef0c33b569a4af24db535ce5ba4fa63c9622d53a47cfc9982f78aab6_prof);

    }

    // line 5
    public function block_fontawesome($context, array $blocks = array())
    {
        $__internal_d6cf9ded03a4e509424df95d19cbf62cd0515daccca50351eb905599412a4e98 = $this->env->getExtension("native_profiler");
        $__internal_d6cf9ded03a4e509424df95d19cbf62cd0515daccca50351eb905599412a4e98->enter($__internal_d6cf9ded03a4e509424df95d19cbf62cd0515daccca50351eb905599412a4e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fontawesome"));

        // line 6
        echo "<i class=\"icon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo (((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted"))) ? (" inverted") : (""));
        echo "\"></i>";
        
        $__internal_d6cf9ded03a4e509424df95d19cbf62cd0515daccca50351eb905599412a4e98->leave($__internal_d6cf9ded03a4e509424df95d19cbf62cd0515daccca50351eb905599412a4e98_prof);

    }

    // line 9
    public function block_fontawesome4($context, array $blocks = array())
    {
        $__internal_b2064c01d8ce3dc00dfee7aace0be03e19719869d6e41e62dcd003df36985045 = $this->env->getExtension("native_profiler");
        $__internal_b2064c01d8ce3dc00dfee7aace0be03e19719869d6e41e62dcd003df36985045->enter($__internal_b2064c01d8ce3dc00dfee7aace0be03e19719869d6e41e62dcd003df36985045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fontawesome4"));

        // line 10
        echo "<i class=\"fa fa-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo (((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted"))) ? (" fa-inverse") : (""));
        echo "\"></i>";
        
        $__internal_b2064c01d8ce3dc00dfee7aace0be03e19719869d6e41e62dcd003df36985045->leave($__internal_b2064c01d8ce3dc00dfee7aace0be03e19719869d6e41e62dcd003df36985045_prof);

    }

    // line 13
    public function block_glyphicons($context, array $blocks = array())
    {
        $__internal_f7888fce12ea4717d7024dfc99c8fe87b76cfe3c9e6be147eff8f1cedbe40427 = $this->env->getExtension("native_profiler");
        $__internal_f7888fce12ea4717d7024dfc99c8fe87b76cfe3c9e6be147eff8f1cedbe40427->enter($__internal_f7888fce12ea4717d7024dfc99c8fe87b76cfe3c9e6be147eff8f1cedbe40427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "glyphicons"));

        // line 14
        echo "<span class=\"glyphicon glyphicon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo "\"";
        if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted")), false)) : (false))) {
            echo " style=\"color: white;\"";
        }
        echo "></span>";
        
        $__internal_f7888fce12ea4717d7024dfc99c8fe87b76cfe3c9e6be147eff8f1cedbe40427->leave($__internal_f7888fce12ea4717d7024dfc99c8fe87b76cfe3c9e6be147eff8f1cedbe40427_prof);

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
            $__internal_9512ffbb1841715aecc0df50439f42f9463098476462358c9c5f4046cfe5af83 = $this->env->getExtension("native_profiler");
            $__internal_9512ffbb1841715aecc0df50439f42f9463098476462358c9c5f4046cfe5af83->enter($__internal_9512ffbb1841715aecc0df50439f42f9463098476462358c9c5f4046cfe5af83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "icon"));

            // line 2
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted")), false)) : (false))) {
                echo " style=\"color: white;\"";
            }
            echo "></span>
";
            
            $__internal_9512ffbb1841715aecc0df50439f42f9463098476462358c9c5f4046cfe5af83->leave($__internal_9512ffbb1841715aecc0df50439f42f9463098476462358c9c5f4046cfe5af83_prof);

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
        return array (  112 => 2,  96 => 1,  83 => 14,  77 => 13,  67 => 10,  61 => 9,  51 => 6,  45 => 5,  38 => 13,  35 => 12,  33 => 9,  30 => 8,  28 => 5,  25 => 4,);
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
