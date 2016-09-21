<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_587403e2c1cf0803a021a090a79490d7629055e006d557e5be15bd6f13dcd70a extends Twig_Template
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
        $__internal_759dd7b87ff0b2d6c06bb75089c4f876ab4a3cc7a24ea13fe1470cfbd1ef4558 = $this->env->getExtension("native_profiler");
        $__internal_759dd7b87ff0b2d6c06bb75089c4f876ab4a3cc7a24ea13fe1470cfbd1ef4558->enter($__internal_759dd7b87ff0b2d6c06bb75089c4f876ab4a3cc7a24ea13fe1470cfbd1ef4558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_759dd7b87ff0b2d6c06bb75089c4f876ab4a3cc7a24ea13fe1470cfbd1ef4558->leave($__internal_759dd7b87ff0b2d6c06bb75089c4f876ab4a3cc7a24ea13fe1470cfbd1ef4558_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
