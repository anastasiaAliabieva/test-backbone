<?php

/* MopaBootstrapBundle:Modal:modal.html.twig */
class __TwigTemplate_721f61cbb0e0c9e33c9fb4653e60dcc268badedef594966884e4e916391f4b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_12fd7bbc15addbe1d3ee6c1caefd1f251929e2a0a6db9c4a9a53a9f56538dded = $this->env->getExtension("native_profiler");
        $__internal_12fd7bbc15addbe1d3ee6c1caefd1f251929e2a0a6db9c4a9a53a9f56538dded->enter($__internal_12fd7bbc15addbe1d3ee6c1caefd1f251929e2a0a6db9c4a9a53a9f56538dded_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle:Modal:modal.html.twig"));

        // line 1
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => ((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " modal")));
        // line 2
        echo "<div";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
    <div class=\"modal-header\">
        ";
        // line 4
        $this->displayBlock('header', $context, $blocks);
        // line 5
        echo "    </div>
    <div class=\"modal-body\">
        ";
        // line 7
        $this->displayBlock('body', $context, $blocks);
        // line 8
        echo "    </div>
    <div class=\"modal-footer\">
        ";
        // line 10
        $this->displayBlock('footer', $context, $blocks);
        // line 11
        echo "    </div>
</div>
";
        
        $__internal_12fd7bbc15addbe1d3ee6c1caefd1f251929e2a0a6db9c4a9a53a9f56538dded->leave($__internal_12fd7bbc15addbe1d3ee6c1caefd1f251929e2a0a6db9c4a9a53a9f56538dded_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_47d8687470cbb301d00a243d1a4d7ded892a0c1633b28724564325a2043af117 = $this->env->getExtension("native_profiler");
        $__internal_47d8687470cbb301d00a243d1a4d7ded892a0c1633b28724564325a2043af117->enter($__internal_47d8687470cbb301d00a243d1a4d7ded892a0c1633b28724564325a2043af117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_47d8687470cbb301d00a243d1a4d7ded892a0c1633b28724564325a2043af117->leave($__internal_47d8687470cbb301d00a243d1a4d7ded892a0c1633b28724564325a2043af117_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_84729c07ba241bb8e175838ff394b390d1f70cd26b2b20300b9e8b04ddc33ac5 = $this->env->getExtension("native_profiler");
        $__internal_84729c07ba241bb8e175838ff394b390d1f70cd26b2b20300b9e8b04ddc33ac5->enter($__internal_84729c07ba241bb8e175838ff394b390d1f70cd26b2b20300b9e8b04ddc33ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_84729c07ba241bb8e175838ff394b390d1f70cd26b2b20300b9e8b04ddc33ac5->leave($__internal_84729c07ba241bb8e175838ff394b390d1f70cd26b2b20300b9e8b04ddc33ac5_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4d1e231c61f4b2acf042c2f94372783c08114a795ad4a9862dd3603c826f5dd5 = $this->env->getExtension("native_profiler");
        $__internal_4d1e231c61f4b2acf042c2f94372783c08114a795ad4a9862dd3603c826f5dd5->enter($__internal_4d1e231c61f4b2acf042c2f94372783c08114a795ad4a9862dd3603c826f5dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4d1e231c61f4b2acf042c2f94372783c08114a795ad4a9862dd3603c826f5dd5->leave($__internal_4d1e231c61f4b2acf042c2f94372783c08114a795ad4a9862dd3603c826f5dd5_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle:Modal:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 10,  78 => 7,  67 => 4,  58 => 11,  56 => 10,  52 => 8,  50 => 7,  46 => 5,  44 => 4,  27 => 2,  25 => 1,);
    }
}
/* {% set attr = attr|merge({ 'class': attr.class|default('') ~ ' modal' }) %}*/
/* <div{% for attrname, attrvalue in attr %} {{ attrname }}="{{- attrvalue -}}"{% endfor %}>*/
/*     <div class="modal-header">*/
/*         {% block header %}{% endblock %}*/
/*     </div>*/
/*     <div class="modal-body">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*     <div class="modal-footer">*/
/*         {% block footer %}{% endblock %}*/
/*     </div>*/
/* </div>*/
/* */
