<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_185fb4cb3a0abacd047e4710b1c287cfd703716aea519867996d1a01155c7f25 extends Twig_Template
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
        $__internal_e8c3675254636bf34eff62a2ebc190637eeba3056ba4a075945eae704ac31160 = $this->env->getExtension("native_profiler");
        $__internal_e8c3675254636bf34eff62a2ebc190637eeba3056ba4a075945eae704ac31160->enter($__internal_e8c3675254636bf34eff62a2ebc190637eeba3056ba4a075945eae704ac31160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_e8c3675254636bf34eff62a2ebc190637eeba3056ba4a075945eae704ac31160->leave($__internal_e8c3675254636bf34eff62a2ebc190637eeba3056ba4a075945eae704ac31160_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
