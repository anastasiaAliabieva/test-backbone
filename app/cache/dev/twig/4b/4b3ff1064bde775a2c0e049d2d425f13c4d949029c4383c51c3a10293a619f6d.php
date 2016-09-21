<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_8fa6d2f1b21a6dd5c8b056ec1328e68609201fd1aecdd7734821ae55f3974fd9 extends Twig_Template
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
        $__internal_ce05da46f55d660eecbf555c10b2e5a48097dd9f83eef36fe3fec2cf6492e648 = $this->env->getExtension("native_profiler");
        $__internal_ce05da46f55d660eecbf555c10b2e5a48097dd9f83eef36fe3fec2cf6492e648->enter($__internal_ce05da46f55d660eecbf555c10b2e5a48097dd9f83eef36fe3fec2cf6492e648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_ce05da46f55d660eecbf555c10b2e5a48097dd9f83eef36fe3fec2cf6492e648->leave($__internal_ce05da46f55d660eecbf555c10b2e5a48097dd9f83eef36fe3fec2cf6492e648_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
