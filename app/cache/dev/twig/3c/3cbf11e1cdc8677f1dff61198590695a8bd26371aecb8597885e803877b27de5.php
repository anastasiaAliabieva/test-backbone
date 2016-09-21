<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_bf6b311a021adda7c3906ca0fbe6eec559ddfa223a07d75efba2dcde0e11213e extends Twig_Template
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
        $__internal_990c99e2b02df3350b6f789da173ebda2b5e9cfb97fc2242ae2a980d159edc41 = $this->env->getExtension("native_profiler");
        $__internal_990c99e2b02df3350b6f789da173ebda2b5e9cfb97fc2242ae2a980d159edc41->enter($__internal_990c99e2b02df3350b6f789da173ebda2b5e9cfb97fc2242ae2a980d159edc41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_990c99e2b02df3350b6f789da173ebda2b5e9cfb97fc2242ae2a980d159edc41->leave($__internal_990c99e2b02df3350b6f789da173ebda2b5e9cfb97fc2242ae2a980d159edc41_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
