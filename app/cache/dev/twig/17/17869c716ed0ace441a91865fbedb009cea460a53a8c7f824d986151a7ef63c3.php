<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_111bc2fab553db442582636fc846d0672326c1280cf0fe79fe6c65f3a9c27800 extends Twig_Template
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
        $__internal_c74fa09df39109f4d8826242695a9a74b63528af25651c3f48b53b2771a44366 = $this->env->getExtension("native_profiler");
        $__internal_c74fa09df39109f4d8826242695a9a74b63528af25651c3f48b53b2771a44366->enter($__internal_c74fa09df39109f4d8826242695a9a74b63528af25651c3f48b53b2771a44366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c74fa09df39109f4d8826242695a9a74b63528af25651c3f48b53b2771a44366->leave($__internal_c74fa09df39109f4d8826242695a9a74b63528af25651c3f48b53b2771a44366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
