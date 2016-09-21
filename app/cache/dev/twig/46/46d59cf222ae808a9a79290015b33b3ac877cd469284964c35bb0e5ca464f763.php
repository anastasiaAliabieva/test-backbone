<?php

/* MopaBootstrapBundle:Pagination:sliding.html.twig */
class __TwigTemplate_b3908f509a3f3e2272c19b9ab4ee557a40d4f72be2f993adbc4354221f1c1e87 extends Twig_Template
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
        $__internal_9d485551bf2d8ad255e9aa4ccaad62a346a6ce762a491b0a31ca805f566168af = $this->env->getExtension("native_profiler");
        $__internal_9d485551bf2d8ad255e9aa4ccaad62a346a6ce762a491b0a31ca805f566168af->enter($__internal_9d485551bf2d8ad255e9aa4ccaad62a346a6ce762a491b0a31ca805f566168af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Pagination:sliding.html.twig"));

        // line 1
        if (((isset($context["pageCount"]) ? $context["pageCount"] : $this->getContext($context, "pageCount")) > 1)) {
            // line 2
            echo "    ";
            $context["item"] = "MopaBootstrapBundle:Pagination:sliding_item.html.twig";
            // line 3
            echo "
    <ul class=\"";
            // line 4
            echo twig_escape_filter($this->env, ((array_key_exists("pagination_class", $context)) ? (_twig_default_filter((isset($context["pagination_class"]) ? $context["pagination_class"] : $this->getContext($context, "pagination_class")), "pagination")) : ("pagination")), "html", null, true);
            echo "\">
        ";
            // line 5
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "MopaBootstrapBundle:Pagination:sliding.html.twig", 5)->display(array_merge($context, array("name" => "first", "text" => $this->env->getExtension('translator')->trans(((            // line 6
array_key_exists("first_text", $context)) ? (_twig_default_filter((isset($context["first_text"]) ? $context["first_text"] : $this->getContext($context, "first_text")), "«")) : ("«")), array(), "pagination"), "page" => ((            // line 7
array_key_exists("first", $context)) ? ((isset($context["first"]) ? $context["first"] : $this->getContext($context, "first"))) : (null)), "clickable" => (            // line 8
array_key_exists("first", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["first"]) ? $context["first"] : $this->getContext($context, "first")))))));
            // line 11
            echo "
        ";
            // line 12
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "MopaBootstrapBundle:Pagination:sliding.html.twig", 12)->display(array_merge($context, array("name" => "prev", "text" => ("‹ " . $this->env->getExtension('translator')->trans(((            // line 13
array_key_exists("prev_text", $context)) ? (_twig_default_filter((isset($context["prev_text"]) ? $context["prev_text"] : $this->getContext($context, "prev_text")), "Previous")) : ("Previous")), array(), "pagination")), "page" => ((            // line 14
array_key_exists("previous", $context)) ? ((isset($context["previous"]) ? $context["previous"] : $this->getContext($context, "previous"))) : (null)), "clickable" =>             // line 15
array_key_exists("previous", $context))));
            // line 18
            echo "
        ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagesInRange"]) ? $context["pagesInRange"] : $this->getContext($context, "pagesInRange")));
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
                $this->loadTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "MopaBootstrapBundle:Pagination:sliding.html.twig", 20)->display($context);
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
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "MopaBootstrapBundle:Pagination:sliding.html.twig", 24)->display(array_merge($context, array("name" => "next", "text" => ($this->env->getExtension('translator')->trans(((            // line 26
array_key_exists("next_text", $context)) ? (_twig_default_filter((isset($context["next_text"]) ? $context["next_text"] : $this->getContext($context, "next_text")), "Next")) : ("Next")), array(), "pagination") . " ›"), "page" => ((            // line 27
array_key_exists("next", $context)) ? ((isset($context["next"]) ? $context["next"] : $this->getContext($context, "next"))) : (null)), "clickable" =>             // line 28
array_key_exists("next", $context))));
            // line 31
            echo "
        ";
            // line 33
            $this->loadTemplate((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "MopaBootstrapBundle:Pagination:sliding.html.twig", 33)->display(array_merge($context, array("name" => "last", "text" => $this->env->getExtension('translator')->trans(((            // line 35
array_key_exists("last_text", $context)) ? (_twig_default_filter((isset($context["last_text"]) ? $context["last_text"] : $this->getContext($context, "last_text")), "»")) : ("»")), array(), "pagination"), "page" => ((            // line 36
array_key_exists("last", $context)) ? ((isset($context["last"]) ? $context["last"] : $this->getContext($context, "last"))) : (null)), "clickable" => (            // line 37
array_key_exists("last", $context) && ((isset($context["current"]) ? $context["current"] : $this->getContext($context, "current")) != (isset($context["last"]) ? $context["last"] : $this->getContext($context, "last")))))));
            // line 40
            echo "    </ul>
";
        }
        
        $__internal_9d485551bf2d8ad255e9aa4ccaad62a346a6ce762a491b0a31ca805f566168af->leave($__internal_9d485551bf2d8ad255e9aa4ccaad62a346a6ce762a491b0a31ca805f566168af_prof);

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
        return array (  100 => 40,  98 => 37,  97 => 36,  96 => 35,  95 => 33,  92 => 31,  90 => 28,  89 => 27,  88 => 26,  87 => 24,  84 => 22,  70 => 21,  67 => 20,  50 => 19,  47 => 18,  45 => 15,  44 => 14,  43 => 13,  42 => 12,  39 => 11,  37 => 8,  36 => 7,  35 => 6,  34 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
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
