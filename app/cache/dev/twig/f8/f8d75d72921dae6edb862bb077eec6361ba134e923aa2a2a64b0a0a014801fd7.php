<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_37f83603357ff21f4a6efc7a9740b9b924f16ab576e33e246497377459bf02f1 extends Twig_Template
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
        $__internal_e3d907d3867f7f769f1e038e6c461551cf89def9ff104ff579a4645cdc621aac = $this->env->getExtension("native_profiler");
        $__internal_e3d907d3867f7f769f1e038e6c461551cf89def9ff104ff579a4645cdc621aac->enter($__internal_e3d907d3867f7f769f1e038e6c461551cf89def9ff104ff579a4645cdc621aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e3d907d3867f7f769f1e038e6c461551cf89def9ff104ff579a4645cdc621aac->leave($__internal_e3d907d3867f7f769f1e038e6c461551cf89def9ff104ff579a4645cdc621aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
