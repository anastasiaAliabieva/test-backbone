<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_cb34b48b3c5ed1239233f50124cecd869364bd3168ca26502b08d96388526873 extends Twig_Template
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
        $__internal_326f9570241431a4538a479e3f7ffbf38e33816a7212e4e64ecff060cb6f6b73 = $this->env->getExtension("native_profiler");
        $__internal_326f9570241431a4538a479e3f7ffbf38e33816a7212e4e64ecff060cb6f6b73->enter($__internal_326f9570241431a4538a479e3f7ffbf38e33816a7212e4e64ecff060cb6f6b73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_326f9570241431a4538a479e3f7ffbf38e33816a7212e4e64ecff060cb6f6b73->leave($__internal_326f9570241431a4538a479e3f7ffbf38e33816a7212e4e64ecff060cb6f6b73_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
