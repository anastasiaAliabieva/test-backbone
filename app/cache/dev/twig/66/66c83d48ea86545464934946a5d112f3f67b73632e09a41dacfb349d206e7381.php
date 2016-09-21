<?php

/* MopaBootstrapBundle::base_lessjs.html.twig */
class __TwigTemplate_351f07c84bdd6c8527e528914bae6322054f1fe10098e60aa4de30c67cedffba extends Twig_Template
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
        $__internal_84bc2bb25228f6d863dd54d1a944a68e67dba7ace2fc51a0ca1dec55894255fe = $this->env->getExtension("native_profiler");
        $__internal_84bc2bb25228f6d863dd54d1a944a68e67dba7ace2fc51a0ca1dec55894255fe->enter($__internal_84bc2bb25228f6d863dd54d1a944a68e67dba7ace2fc51a0ca1dec55894255fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::base_lessjs.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84bc2bb25228f6d863dd54d1a944a68e67dba7ace2fc51a0ca1dec55894255fe->leave($__internal_84bc2bb25228f6d863dd54d1a944a68e67dba7ace2fc51a0ca1dec55894255fe_prof);

    }

    // line 3
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_92867e48bb57613c543309fa4bd86c960cd34ab44fe30b33178900408b54e6fb = $this->env->getExtension("native_profiler");
        $__internal_92867e48bb57613c543309fa4bd86c960cd34ab44fe30b33178900408b54e6fb->enter($__internal_92867e48bb57613c543309fa4bd86c960cd34ab44fe30b33178900408b54e6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 4
        echo "<link rel=\"stylesheet/less\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/less/frontend.less"), "html", null, true);
        echo "\">
";
        
        $__internal_92867e48bb57613c543309fa4bd86c960cd34ab44fe30b33178900408b54e6fb->leave($__internal_92867e48bb57613c543309fa4bd86c960cd34ab44fe30b33178900408b54e6fb_prof);

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
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base_less.html.twig' %}*/
/* */
/* {% block head_style %}*/
/* <link rel="stylesheet/less" href="{{ asset('web/less/frontend.less') }}">*/
/* {% endblock head_style %}*/
/* */
