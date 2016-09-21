<?php

/* MopaBootstrapBundle::base_lessjs.html.twig */
class __TwigTemplate_458a51ae0a9b04b4e10c7ce06a6fda355e9dae2fa81ef7dc84091f397dbd1df7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base_less.html.twig", "MopaBootstrapBundle::base_lessjs.html.twig", 1);
        $this->blocks = array(
            'head_style' => array($this, 'block_head_style'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base_less.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/less/frontend.less"), "html", null, true);
        echo "\">
";
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_lessjs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base_less.html.twig' %}*/
/* */
/* {% block head_style %}*/
/* <link rel="stylesheet/less" href="{{ asset('web/less/frontend.less') }}">*/
/* {% endblock head_style %}*/
/* */
