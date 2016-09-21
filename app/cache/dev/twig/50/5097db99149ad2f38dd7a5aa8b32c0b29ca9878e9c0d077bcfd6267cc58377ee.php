<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_8ece24ac18b4398ad06638e0980f9a3c2c3125d261a35be6247cd723d632961e extends Twig_Template
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
        $__internal_26afacd332a6062792329a1c95490f8a4fa0975969b1c37f0d09b4e97c41a555 = $this->env->getExtension("native_profiler");
        $__internal_26afacd332a6062792329a1c95490f8a4fa0975969b1c37f0d09b4e97c41a555->enter($__internal_26afacd332a6062792329a1c95490f8a4fa0975969b1c37f0d09b4e97c41a555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_26afacd332a6062792329a1c95490f8a4fa0975969b1c37f0d09b4e97c41a555->leave($__internal_26afacd332a6062792329a1c95490f8a4fa0975969b1c37f0d09b4e97c41a555_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
