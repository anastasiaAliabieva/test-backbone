<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_1c366bee129bf90ab66044b631401f09c795ba509428788601e9c3c37dc6be39 extends Twig_Template
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
        $__internal_ab800709ade597b449183ceb3474310914bd43a793ff8f9ba551f79a387f1b43 = $this->env->getExtension("native_profiler");
        $__internal_ab800709ade597b449183ceb3474310914bd43a793ff8f9ba551f79a387f1b43->enter($__internal_ab800709ade597b449183ceb3474310914bd43a793ff8f9ba551f79a387f1b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_ab800709ade597b449183ceb3474310914bd43a793ff8f9ba551f79a387f1b43->leave($__internal_ab800709ade597b449183ceb3474310914bd43a793ff8f9ba551f79a387f1b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
