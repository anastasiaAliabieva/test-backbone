<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_3ea370416aba1322446c60525d4c8811ccb7b3872ab6c2133f978e6dc2e9c292 extends Twig_Template
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
        $__internal_dfe3e46a9712725bf279a086020f031b055df6f30477c0f129c8ab405e2c21e9 = $this->env->getExtension("native_profiler");
        $__internal_dfe3e46a9712725bf279a086020f031b055df6f30477c0f129c8ab405e2c21e9->enter($__internal_dfe3e46a9712725bf279a086020f031b055df6f30477c0f129c8ab405e2c21e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_dfe3e46a9712725bf279a086020f031b055df6f30477c0f129c8ab405e2c21e9->leave($__internal_dfe3e46a9712725bf279a086020f031b055df6f30477c0f129c8ab405e2c21e9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
