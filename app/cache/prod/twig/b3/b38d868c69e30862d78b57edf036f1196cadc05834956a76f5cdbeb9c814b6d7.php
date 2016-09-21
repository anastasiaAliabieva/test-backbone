<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_f19a1fac8ec2a2ae012e56cde4234645792eea727531dd28959f572dd8c52ef6 extends Twig_Template
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
        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : null) > 1)) {
            // line 2
            echo "    ";
            $context["item"] = "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
            // line 3
            echo "
    <ul class=\"";
            // line 4
            echo twig_escape_filter($this->env, ((array_key_exists("pagination_class", $context)) ? (_twig_default_filter((isset($context["pagination_class"]) ? $context["pagination_class"] : null), "pagination")) : ("pagination")), "html", null, true);
            echo "\">
        ";
            // line 5
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : null), "MopaBootstrapBundle:Pagination:sliding.html.twig", 5)->display(array_merge($context, array("name" => "first", "text" => $this->env->getExtension('translator')->trans(((            // line 6
array_key_exists("first_text", $context)) ? (_twig_default_filter((isset($context["first_text"]) ? $context["first_text"] : null), "«")) : ("«")), array(), "pagination"), "page" => ((            // line 7
array_key_exists("first", $context)) ? ((isset($context["first"]) ? $context["first"] : null)) : (null)), "clickable" => (            // line 8
array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["first"]) ? $context["first"] : null))))));
            // line 11
            echo "
        ";
            // line 12
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : null), "MopaBootstrapBundle:Pagination:sliding.html.twig", 12)->display(array_merge($context, array("name" => "prev", "text" => ("‹ " . $this->env->getExtension('translator')->trans(((            // line 13
array_key_exists("prev_text", $context)) ? (_twig_default_filter((isset($context["prev_text"]) ? $context["prev_text"] : null), "Previous")) : ("Previous")), array(), "pagination")), "page" => ((            // line 14
array_key_exists("previous", $context)) ? ((isset($context["previous"]) ? $context["previous"] : null)) : (null)), "clickable" =>             // line 15
array_key_exists("previous", $context))));
            // line 18
            echo "
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : null));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 20
                echo "            ";
                $this->loadTemplate((isset($context["item"]) ? $context["item"] : null), "MopaBootstrapBundle:Pagination:sliding.html.twig", 20)->display($context);
                // line 21
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "
        ";
            // line 24
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : null), "MopaBootstrapBundle:Pagination:sliding.html.twig", 24)->display(array_merge($context, array("name" => "next", "text" => ($this->env->getExtension('translator')->trans(((            // line 26
array_key_exists("next_text", $context)) ? (_twig_default_filter((isset($context["next_text"]) ? $context["next_text"] : null), "Next")) : ("Next")), array(), "pagination") . " ›"), "page" => ((            // line 27
array_key_exists("next", $context)) ? ((isset($context["next"]) ? $context["next"] : null)) : (null)), "clickable" =>             // line 28
array_key_exists("next", $context))));
            // line 31
            echo "
        ";
            // line 33
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : null), "MopaBootstrapBundle:Pagination:sliding.html.twig", 33)->display(array_merge($context, array("name" => "last", "text" => $this->env->getExtension('translator')->trans(((            // line 35
array_key_exists("last_text", $context)) ? (_twig_default_filter((isset($context["last_text"]) ? $context["last_text"] : null), "»")) : ("»")), array(), "pagination"), "page" => ((            // line 36
array_key_exists("last", $context)) ? ((isset($context["last"]) ? $context["last"] : null)) : (null)), "clickable" => (            // line 37
array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : null) != (isset($context["last"]) ? $context["last"] : null))))));
            // line 40
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Pagination:sliding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 40,  95 => 37,  94 => 36,  93 => 35,  92 => 33,  89 => 31,  87 => 28,  86 => 27,  85 => 26,  84 => 24,  81 => 22,  67 => 21,  64 => 20,  47 => 19,  44 => 18,  42 => 15,  41 => 14,  40 => 13,  39 => 12,  36 => 11,  34 => 8,  33 => 7,  32 => 6,  31 => 5,  27 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if pageCount > 1 %}*/
/*     {% set item = 'MopaBootstrapBundle:Pagination:sliding_item.html.twig' %}*/
/* */
/*     <ul class="{{ pagination_class|default('pagination') }}">*/
/*         {% include item with {name: 'first',*/
/*                 text: first_text|default('«') | trans({}, 'pagination'),*/
/*                 page: first is defined ? first : null,*/
/*                 clickable: first is defined and current != first*/
/*             }*/
/*         %}*/
/* */
/*         {% include item with {name: 'prev',*/
/*                 text: '‹ ' ~ prev_text|default('Previous') | trans({}, 'pagination'),*/
/*                 page: previous is defined ? previous : null,*/
/*                 clickable: previous is defined*/
/*             }*/
/*         %}*/
/* */
/*         {% for page in pagesInRange %}*/
/*             {% include item %}*/
/*         {% endfor %}*/
/* */
/*         {%*/
/*             include item with {*/
/*                 name: 'next',*/
/*                 text: next_text|default('Next') | trans({}, 'pagination') ~ ' ›',*/
/*                 page: next is defined ? next : null,*/
/*                 clickable: next is defined*/
/*             }*/
/*         %}*/
/* */
/*         {%*/
/*             include item with {*/
/*                 name: 'last',*/
/*                 text: last_text|default('»') | trans({}, 'pagination'),*/
/*                 page: last is defined ? last : null,*/
/*                 clickable: last is defined and current != last*/
/*             }*/
/*         %}*/
/*     </ul>*/
/* {% endif %}*/
/* */
