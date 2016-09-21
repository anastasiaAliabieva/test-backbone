<?php

/* MopaBootstrapBundle::base.html.twig */
class __TwigTemplate_8dd8fae48bcefe2280dcf042f800df79146203da5ccd42aba512ad0c393dd9ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'title' => array($this, 'block_title'),
            'favicon' => array($this, 'block_favicon'),
            'head_bottom' => array($this, 'block_head_bottom'),
            'body_tag' => array($this, 'block_body_tag'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'container_div_start' => array($this, 'block_container_div_start'),
            'container_class' => array($this, 'block_container_class'),
            'header' => array($this, 'block_header'),
            'content_div_start' => array($this, 'block_content_div_start'),
            'page_header' => array($this, 'block_page_header'),
            'headline' => array($this, 'block_headline'),
            'flashes' => array($this, 'block_flashes'),
            'content_row' => array($this, 'block_content_row'),
            'content' => array($this, 'block_content'),
            'content_content' => array($this, 'block_content_content'),
            'content_sidebar' => array($this, 'block_content_sidebar'),
            'content_div_end' => array($this, 'block_content_div_end'),
            'footer_tag_start' => array($this, 'block_footer_tag_start'),
            'footer' => array($this, 'block_footer'),
            'footer_tag_end' => array($this, 'block_footer_tag_end'),
            'container_div_end' => array($this, 'block_container_div_end'),
            'body_end_before_js' => array($this, 'block_body_end_before_js'),
            'foot_script' => array($this, 'block_foot_script'),
            'foot_script_assetic' => array($this, 'block_foot_script_assetic'),
            'body_end' => array($this, 'block_body_end'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_70e5aed616af93eb677d30a891613993cd57e7ec0b3f540d9bce43425e7cc857 = $this->env->getExtension("native_profiler");
        $__internal_70e5aed616af93eb677d30a891613993cd57e7ec0b3f540d9bce43425e7cc857->enter($__internal_70e5aed616af93eb677d30a891613993cd57e7ec0b3f540d9bce43425e7cc857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::base.html.twig"));

        // line 1
        $context["__internal_c40707f7ac279afb04dbab9ca04982a4738a9d0b2c362acbaaee0051fb516bc3"] = $this->loadTemplate("MopaBootstrapBundle::flash.html.twig", "MopaBootstrapBundle::base.html.twig", 1);
        // line 2
        echo "
<!DOCTYPE html>

";
        // line 5
        $this->displayBlock('html_tag', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('head', $context, $blocks);
        // line 38
        echo "
";
        // line 39
        $this->displayBlock('body_tag', $context, $blocks);
        // line 42
        echo "
";
        // line 43
        $this->displayBlock('body_start', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('body_end', $context, $blocks);
        // line 129
        echo "</body>
</html>
";
        
        $__internal_70e5aed616af93eb677d30a891613993cd57e7ec0b3f540d9bce43425e7cc857->leave($__internal_70e5aed616af93eb677d30a891613993cd57e7ec0b3f540d9bce43425e7cc857_prof);

    }

    // line 5
    public function block_html_tag($context, array $blocks = array())
    {
        $__internal_b9a3b85b7de9b894c7abfa7bfb904c73e055f95c408c7b7f492406a03aa96493 = $this->env->getExtension("native_profiler");
        $__internal_b9a3b85b7de9b894c7abfa7bfb904c73e055f95c408c7b7f492406a03aa96493->enter($__internal_b9a3b85b7de9b894c7abfa7bfb904c73e055f95c408c7b7f492406a03aa96493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_tag"));

        // line 6
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "\">
";
        
        $__internal_b9a3b85b7de9b894c7abfa7bfb904c73e055f95c408c7b7f492406a03aa96493->leave($__internal_b9a3b85b7de9b894c7abfa7bfb904c73e055f95c408c7b7f492406a03aa96493_prof);

    }

    // line 9
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4ed2befd8ba9724927430bceb6715618c62bbd06a8cfa0744616f90f98952c8 = $this->env->getExtension("native_profiler");
        $__internal_b4ed2befd8ba9724927430bceb6715618c62bbd06a8cfa0744616f90f98952c8->enter($__internal_b4ed2befd8ba9724927430bceb6715618c62bbd06a8cfa0744616f90f98952c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 10
        echo "<head>
    <meta charset=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
    ";
        // line 12
        $this->displayBlock('head_style', $context, $blocks);
        // line 19
        echo "
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    ";
        // line 22
        $this->displayBlock('head_script', $context, $blocks);
        // line 31
        echo "
    <title>";
        // line 32
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 33
        $this->displayBlock('favicon', $context, $blocks);
        // line 34
        echo "    ";
        $this->displayBlock('head_bottom', $context, $blocks);
        // line 36
        echo "</head>
";
        
        $__internal_b4ed2befd8ba9724927430bceb6715618c62bbd06a8cfa0744616f90f98952c8->leave($__internal_b4ed2befd8ba9724927430bceb6715618c62bbd06a8cfa0744616f90f98952c8_prof);

    }

    // line 12
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_255f9734ba0da0c8180cb09e5d0788d431e05b4433a4b59a22c22daff8882a78 = $this->env->getExtension("native_profiler");
        $__internal_255f9734ba0da0c8180cb09e5d0788d431e05b4433a4b59a22c22daff8882a78->enter($__internal_255f9734ba0da0c8180cb09e5d0788d431e05b4433a4b59a22c22daff8882a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 13
        echo "    ";
        // line 14
        echo "    ";
        // line 18
        echo "    ";
        
        $__internal_255f9734ba0da0c8180cb09e5d0788d431e05b4433a4b59a22c22daff8882a78->leave($__internal_255f9734ba0da0c8180cb09e5d0788d431e05b4433a4b59a22c22daff8882a78_prof);

    }

    // line 22
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_18b0b98203c74b4a5164570948fbff33e37923c2f97c6289a06ee2f5411e17c0 = $this->env->getExtension("native_profiler");
        $__internal_18b0b98203c74b4a5164570948fbff33e37923c2f97c6289a06ee2f5411e17c0->enter($__internal_18b0b98203c74b4a5164570948fbff33e37923c2f97c6289a06ee2f5411e17c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 23
        echo "    ";
        // line 30
        echo "    ";
        
        $__internal_18b0b98203c74b4a5164570948fbff33e37923c2f97c6289a06ee2f5411e17c0->leave($__internal_18b0b98203c74b4a5164570948fbff33e37923c2f97c6289a06ee2f5411e17c0_prof);

    }

    // line 32
    public function block_title($context, array $blocks = array())
    {
        $__internal_69a287d5f43d337f77772818cf272990841b8a7199b5fd68b45c0839ef59c3ad = $this->env->getExtension("native_profiler");
        $__internal_69a287d5f43d337f77772818cf272990841b8a7199b5fd68b45c0839ef59c3ad->enter($__internal_69a287d5f43d337f77772818cf272990841b8a7199b5fd68b45c0839ef59c3ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Mopa Bootstrap Bundle";
        
        $__internal_69a287d5f43d337f77772818cf272990841b8a7199b5fd68b45c0839ef59c3ad->leave($__internal_69a287d5f43d337f77772818cf272990841b8a7199b5fd68b45c0839ef59c3ad_prof);

    }

    // line 33
    public function block_favicon($context, array $blocks = array())
    {
        $__internal_684a3cf1d6ea91e0f7cbbc053389e842633fe6af55e0dd6cab1191e8d5a09673 = $this->env->getExtension("native_profiler");
        $__internal_684a3cf1d6ea91e0f7cbbc053389e842633fe6af55e0dd6cab1191e8d5a09673->enter($__internal_684a3cf1d6ea91e0f7cbbc053389e842633fe6af55e0dd6cab1191e8d5a09673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "favicon"));

        echo "<link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />";
        
        $__internal_684a3cf1d6ea91e0f7cbbc053389e842633fe6af55e0dd6cab1191e8d5a09673->leave($__internal_684a3cf1d6ea91e0f7cbbc053389e842633fe6af55e0dd6cab1191e8d5a09673_prof);

    }

    // line 34
    public function block_head_bottom($context, array $blocks = array())
    {
        $__internal_a4788a96d9f56c3cd1babc3b448204cda4766fb4c1be15380015a6ee014269fa = $this->env->getExtension("native_profiler");
        $__internal_a4788a96d9f56c3cd1babc3b448204cda4766fb4c1be15380015a6ee014269fa->enter($__internal_a4788a96d9f56c3cd1babc3b448204cda4766fb4c1be15380015a6ee014269fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_bottom"));

        // line 35
        echo "    ";
        
        $__internal_a4788a96d9f56c3cd1babc3b448204cda4766fb4c1be15380015a6ee014269fa->leave($__internal_a4788a96d9f56c3cd1babc3b448204cda4766fb4c1be15380015a6ee014269fa_prof);

    }

    // line 39
    public function block_body_tag($context, array $blocks = array())
    {
        $__internal_2ad03aa8f5850e82875d0b06ce5b574f56c1361887d349a6f454504d6102a911 = $this->env->getExtension("native_profiler");
        $__internal_2ad03aa8f5850e82875d0b06ce5b574f56c1361887d349a6f454504d6102a911->enter($__internal_2ad03aa8f5850e82875d0b06ce5b574f56c1361887d349a6f454504d6102a911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_tag"));

        // line 40
        echo "<body>
";
        
        $__internal_2ad03aa8f5850e82875d0b06ce5b574f56c1361887d349a6f454504d6102a911->leave($__internal_2ad03aa8f5850e82875d0b06ce5b574f56c1361887d349a6f454504d6102a911_prof);

    }

    // line 43
    public function block_body_start($context, array $blocks = array())
    {
        $__internal_2b79c937ee6feafc6d8d45f62bf80fa6c812dc1bbc6c9d2d85ff9c8d64bc81b4 = $this->env->getExtension("native_profiler");
        $__internal_2b79c937ee6feafc6d8d45f62bf80fa6c812dc1bbc6c9d2d85ff9c8d64bc81b4->enter($__internal_2b79c937ee6feafc6d8d45f62bf80fa6c812dc1bbc6c9d2d85ff9c8d64bc81b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_start"));

        
        $__internal_2b79c937ee6feafc6d8d45f62bf80fa6c812dc1bbc6c9d2d85ff9c8d64bc81b4->leave($__internal_2b79c937ee6feafc6d8d45f62bf80fa6c812dc1bbc6c9d2d85ff9c8d64bc81b4_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_0273b361687db30817c7cbdcdf6b8264f36b257fc885542844766e7704013d73 = $this->env->getExtension("native_profiler");
        $__internal_0273b361687db30817c7cbdcdf6b8264f36b257fc885542844766e7704013d73->enter($__internal_0273b361687db30817c7cbdcdf6b8264f36b257fc885542844766e7704013d73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 47
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('container', $context, $blocks);
        // line 105
        echo "
    ";
        // line 106
        $this->displayBlock('body_end_before_js', $context, $blocks);
        // line 108
        echo "
    ";
        // line 109
        $this->displayBlock('foot_script', $context, $blocks);
        
        $__internal_0273b361687db30817c7cbdcdf6b8264f36b257fc885542844766e7704013d73->leave($__internal_0273b361687db30817c7cbdcdf6b8264f36b257fc885542844766e7704013d73_prof);

    }

    // line 47
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_ebd3917b2a742d389df3ff78afa467ebfadcf45b31930a36ca6137184dfa67ef = $this->env->getExtension("native_profiler");
        $__internal_ebd3917b2a742d389df3ff78afa467ebfadcf45b31930a36ca6137184dfa67ef->enter($__internal_ebd3917b2a742d389df3ff78afa467ebfadcf45b31930a36ca6137184dfa67ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 48
        echo "    <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->
    ";
        
        $__internal_ebd3917b2a742d389df3ff78afa467ebfadcf45b31930a36ca6137184dfa67ef->leave($__internal_ebd3917b2a742d389df3ff78afa467ebfadcf45b31930a36ca6137184dfa67ef_prof);

    }

    // line 51
    public function block_container($context, array $blocks = array())
    {
        $__internal_8612c7af1dad59654fdebd414f05af0256324a633749cdf3943fc6cd05ea55c9 = $this->env->getExtension("native_profiler");
        $__internal_8612c7af1dad59654fdebd414f05af0256324a633749cdf3943fc6cd05ea55c9->enter($__internal_8612c7af1dad59654fdebd414f05af0256324a633749cdf3943fc6cd05ea55c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 52
        echo "    ";
        $this->displayBlock('container_div_start', $context, $blocks);
        // line 53
        echo "        ";
        $this->displayBlock('header', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('content_div_start', $context, $blocks);
        // line 57
        echo "            ";
        $this->displayBlock('page_header', $context, $blocks);
        // line 62
        echo "
            ";
        // line 63
        $this->displayBlock('flashes', $context, $blocks);
        // line 72
        echo "
            ";
        // line 73
        $this->displayBlock('content_row', $context, $blocks);
        // line 89
        echo "
        ";
        // line 90
        $this->displayBlock('content_div_end', $context, $blocks);
        // line 91
        echo "
        ";
        // line 92
        $this->displayBlock('footer_tag_start', $context, $blocks);
        // line 95
        echo "
        ";
        // line 96
        $this->displayBlock('footer', $context, $blocks);
        // line 99
        echo "
        ";
        // line 100
        $this->displayBlock('footer_tag_end', $context, $blocks);
        // line 103
        echo "    ";
        $this->displayBlock('container_div_end', $context, $blocks);
        // line 104
        echo "    ";
        
        $__internal_8612c7af1dad59654fdebd414f05af0256324a633749cdf3943fc6cd05ea55c9->leave($__internal_8612c7af1dad59654fdebd414f05af0256324a633749cdf3943fc6cd05ea55c9_prof);

    }

    // line 52
    public function block_container_div_start($context, array $blocks = array())
    {
        $__internal_3f0c84ba2ff14ebd01e12d9e09e5cf329812acd1e468e3af1688ba6187df5c4e = $this->env->getExtension("native_profiler");
        $__internal_3f0c84ba2ff14ebd01e12d9e09e5cf329812acd1e468e3af1688ba6187df5c4e->enter($__internal_3f0c84ba2ff14ebd01e12d9e09e5cf329812acd1e468e3af1688ba6187df5c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_div_start"));

        echo "<div class=\"";
        $this->displayBlock('container_class', $context, $blocks);
        echo "\">";
        
        $__internal_3f0c84ba2ff14ebd01e12d9e09e5cf329812acd1e468e3af1688ba6187df5c4e->leave($__internal_3f0c84ba2ff14ebd01e12d9e09e5cf329812acd1e468e3af1688ba6187df5c4e_prof);

    }

    public function block_container_class($context, array $blocks = array())
    {
        $__internal_6ae8b33c34cde559ec32c114e8a59dfc1cb7f4c453a4654514fb4cd3ff659917 = $this->env->getExtension("native_profiler");
        $__internal_6ae8b33c34cde559ec32c114e8a59dfc1cb7f4c453a4654514fb4cd3ff659917->enter($__internal_6ae8b33c34cde559ec32c114e8a59dfc1cb7f4c453a4654514fb4cd3ff659917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_class"));

        echo "container";
        
        $__internal_6ae8b33c34cde559ec32c114e8a59dfc1cb7f4c453a4654514fb4cd3ff659917->leave($__internal_6ae8b33c34cde559ec32c114e8a59dfc1cb7f4c453a4654514fb4cd3ff659917_prof);

    }

    // line 53
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ae8ea87ab2a7339af62f5be775682b5de7e611db8b46f50e3c937f443c6bbe0 = $this->env->getExtension("native_profiler");
        $__internal_0ae8ea87ab2a7339af62f5be775682b5de7e611db8b46f50e3c937f443c6bbe0->enter($__internal_0ae8ea87ab2a7339af62f5be775682b5de7e611db8b46f50e3c937f443c6bbe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 54
        echo "        ";
        
        $__internal_0ae8ea87ab2a7339af62f5be775682b5de7e611db8b46f50e3c937f443c6bbe0->leave($__internal_0ae8ea87ab2a7339af62f5be775682b5de7e611db8b46f50e3c937f443c6bbe0_prof);

    }

    // line 56
    public function block_content_div_start($context, array $blocks = array())
    {
        $__internal_6fcf0c07daefcdd9755c0352f8460076ead6a2495762a41e0a73451e8c546f36 = $this->env->getExtension("native_profiler");
        $__internal_6fcf0c07daefcdd9755c0352f8460076ead6a2495762a41e0a73451e8c546f36->enter($__internal_6fcf0c07daefcdd9755c0352f8460076ead6a2495762a41e0a73451e8c546f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_div_start"));

        echo "<div class=\"content\">";
        
        $__internal_6fcf0c07daefcdd9755c0352f8460076ead6a2495762a41e0a73451e8c546f36->leave($__internal_6fcf0c07daefcdd9755c0352f8460076ead6a2495762a41e0a73451e8c546f36_prof);

    }

    // line 57
    public function block_page_header($context, array $blocks = array())
    {
        $__internal_7612e96f60c78d56f1d4fc7dbc86acd668eca7626f84855aad627df424f0b85c = $this->env->getExtension("native_profiler");
        $__internal_7612e96f60c78d56f1d4fc7dbc86acd668eca7626f84855aad627df424f0b85c->enter($__internal_7612e96f60c78d56f1d4fc7dbc86acd668eca7626f84855aad627df424f0b85c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_header"));

        // line 58
        echo "            <div class=\"page-header\">
                  <h1>";
        // line 59
        $this->displayBlock('headline', $context, $blocks);
        echo "</h1>
            </div>
            ";
        
        $__internal_7612e96f60c78d56f1d4fc7dbc86acd668eca7626f84855aad627df424f0b85c->leave($__internal_7612e96f60c78d56f1d4fc7dbc86acd668eca7626f84855aad627df424f0b85c_prof);

    }

    public function block_headline($context, array $blocks = array())
    {
        $__internal_76accae41a92c6c17981b30fdcc5796e4d46d58d2d2d2b3990cd465fc902423d = $this->env->getExtension("native_profiler");
        $__internal_76accae41a92c6c17981b30fdcc5796e4d46d58d2d2d2b3990cd465fc902423d->enter($__internal_76accae41a92c6c17981b30fdcc5796e4d46d58d2d2d2b3990cd465fc902423d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headline"));

        echo "Mopa Bootstrap Bundle";
        
        $__internal_76accae41a92c6c17981b30fdcc5796e4d46d58d2d2d2b3990cd465fc902423d->leave($__internal_76accae41a92c6c17981b30fdcc5796e4d46d58d2d2d2b3990cd465fc902423d_prof);

    }

    // line 63
    public function block_flashes($context, array $blocks = array())
    {
        $__internal_f3a94ab6b03b98bb3d3173737b209c5db12e753be7c4ebbee8d243e57f434b9b = $this->env->getExtension("native_profiler");
        $__internal_f3a94ab6b03b98bb3d3173737b209c5db12e753be7c4ebbee8d243e57f434b9b->enter($__internal_f3a94ab6b03b98bb3d3173737b209c5db12e753be7c4ebbee8d243e57f434b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flashes"));

        // line 64
        echo "            ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "peekAll", array())) > 0)) {
            // line 65
            echo "            <div class=\"row\">
                <div class=\"col-sm-12\">
                ";
            // line 67
            echo $context["__internal_c40707f7ac279afb04dbab9ca04982a4738a9d0b2c362acbaaee0051fb516bc3"]->getsession_flash();
            echo "
                </div>
            </div>
            ";
        }
        // line 71
        echo "            ";
        
        $__internal_f3a94ab6b03b98bb3d3173737b209c5db12e753be7c4ebbee8d243e57f434b9b->leave($__internal_f3a94ab6b03b98bb3d3173737b209c5db12e753be7c4ebbee8d243e57f434b9b_prof);

    }

    // line 73
    public function block_content_row($context, array $blocks = array())
    {
        $__internal_31ad1d374c64a792585717c0447e51a3d6aa74d9f288af6571fe77d7f0a7443d = $this->env->getExtension("native_profiler");
        $__internal_31ad1d374c64a792585717c0447e51a3d6aa74d9f288af6571fe77d7f0a7443d->enter($__internal_31ad1d374c64a792585717c0447e51a3d6aa74d9f288af6571fe77d7f0a7443d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_row"));

        // line 74
        echo "            <div class=\"row\">
                ";
        // line 75
        $this->displayBlock('content', $context, $blocks);
        // line 87
        echo "            </div>
            ";
        
        $__internal_31ad1d374c64a792585717c0447e51a3d6aa74d9f288af6571fe77d7f0a7443d->leave($__internal_31ad1d374c64a792585717c0447e51a3d6aa74d9f288af6571fe77d7f0a7443d_prof);

    }

    // line 75
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca822e9d1c7341df7b268b943448a027de3e508c174b76dff3c879d730e18e44 = $this->env->getExtension("native_profiler");
        $__internal_ca822e9d1c7341df7b268b943448a027de3e508c174b76dff3c879d730e18e44->enter($__internal_ca822e9d1c7341df7b268b943448a027de3e508c174b76dff3c879d730e18e44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 76
        echo "                <div class=\"col-sm-9\">
                    ";
        // line 77
        $this->displayBlock('content_content', $context, $blocks);
        // line 80
        echo "                </div>
                <div class=\"col-sm-3\">
                    ";
        // line 82
        $this->displayBlock('content_sidebar', $context, $blocks);
        // line 85
        echo "                </div>
                ";
        
        $__internal_ca822e9d1c7341df7b268b943448a027de3e508c174b76dff3c879d730e18e44->leave($__internal_ca822e9d1c7341df7b268b943448a027de3e508c174b76dff3c879d730e18e44_prof);

    }

    // line 77
    public function block_content_content($context, array $blocks = array())
    {
        $__internal_c2457b9110f14b67cf171c796f0947116ca1b8a20d50f4aa86299c5a8f0e84d8 = $this->env->getExtension("native_profiler");
        $__internal_c2457b9110f14b67cf171c796f0947116ca1b8a20d50f4aa86299c5a8f0e84d8->enter($__internal_c2457b9110f14b67cf171c796f0947116ca1b8a20d50f4aa86299c5a8f0e84d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_content"));

        // line 78
        echo "                    <strong>Hier könnte Ihre Werbung stehen ... </strong>
                    ";
        
        $__internal_c2457b9110f14b67cf171c796f0947116ca1b8a20d50f4aa86299c5a8f0e84d8->leave($__internal_c2457b9110f14b67cf171c796f0947116ca1b8a20d50f4aa86299c5a8f0e84d8_prof);

    }

    // line 82
    public function block_content_sidebar($context, array $blocks = array())
    {
        $__internal_b92ba0d845b635e8c609c1b5db0900da9fab918d16ea4a4956d1eb5f82d87985 = $this->env->getExtension("native_profiler");
        $__internal_b92ba0d845b635e8c609c1b5db0900da9fab918d16ea4a4956d1eb5f82d87985->enter($__internal_b92ba0d845b635e8c609c1b5db0900da9fab918d16ea4a4956d1eb5f82d87985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_sidebar"));

        // line 83
        echo "                    <h2>Sidebar</h2>
                    ";
        
        $__internal_b92ba0d845b635e8c609c1b5db0900da9fab918d16ea4a4956d1eb5f82d87985->leave($__internal_b92ba0d845b635e8c609c1b5db0900da9fab918d16ea4a4956d1eb5f82d87985_prof);

    }

    // line 90
    public function block_content_div_end($context, array $blocks = array())
    {
        $__internal_14c1dd723a581274c28d7bcf17b4af5067ace695d592bf837002ccb0df63dde6 = $this->env->getExtension("native_profiler");
        $__internal_14c1dd723a581274c28d7bcf17b4af5067ace695d592bf837002ccb0df63dde6->enter($__internal_14c1dd723a581274c28d7bcf17b4af5067ace695d592bf837002ccb0df63dde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_div_end"));

        echo "</div>";
        
        $__internal_14c1dd723a581274c28d7bcf17b4af5067ace695d592bf837002ccb0df63dde6->leave($__internal_14c1dd723a581274c28d7bcf17b4af5067ace695d592bf837002ccb0df63dde6_prof);

    }

    // line 92
    public function block_footer_tag_start($context, array $blocks = array())
    {
        $__internal_e4916fe3afef2f178bcd5c032205340fe99954c7f0f6b548c70899027b92b6bc = $this->env->getExtension("native_profiler");
        $__internal_e4916fe3afef2f178bcd5c032205340fe99954c7f0f6b548c70899027b92b6bc->enter($__internal_e4916fe3afef2f178bcd5c032205340fe99954c7f0f6b548c70899027b92b6bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_tag_start"));

        // line 93
        echo "        <footer>
        ";
        
        $__internal_e4916fe3afef2f178bcd5c032205340fe99954c7f0f6b548c70899027b92b6bc->leave($__internal_e4916fe3afef2f178bcd5c032205340fe99954c7f0f6b548c70899027b92b6bc_prof);

    }

    // line 96
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dc019394c35166ec66947a7113e877cf768a6c56adb3884f0e8b2585a0dfe6d1 = $this->env->getExtension("native_profiler");
        $__internal_dc019394c35166ec66947a7113e877cf768a6c56adb3884f0e8b2585a0dfe6d1->enter($__internal_dc019394c35166ec66947a7113e877cf768a6c56adb3884f0e8b2585a0dfe6d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 97
        echo "        <p>&copy; <a href=\"http://www.mohrenweiserpartner.de\" target=\"_blank\">Mohrenweiser & Partner</a> 2011-2015</p>
        ";
        
        $__internal_dc019394c35166ec66947a7113e877cf768a6c56adb3884f0e8b2585a0dfe6d1->leave($__internal_dc019394c35166ec66947a7113e877cf768a6c56adb3884f0e8b2585a0dfe6d1_prof);

    }

    // line 100
    public function block_footer_tag_end($context, array $blocks = array())
    {
        $__internal_d5b1a78b5a541548b96a603dfaa638a7ae36709322a71293c59ff5e5482c6b07 = $this->env->getExtension("native_profiler");
        $__internal_d5b1a78b5a541548b96a603dfaa638a7ae36709322a71293c59ff5e5482c6b07->enter($__internal_d5b1a78b5a541548b96a603dfaa638a7ae36709322a71293c59ff5e5482c6b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_tag_end"));

        // line 101
        echo "        </footer>
        ";
        
        $__internal_d5b1a78b5a541548b96a603dfaa638a7ae36709322a71293c59ff5e5482c6b07->leave($__internal_d5b1a78b5a541548b96a603dfaa638a7ae36709322a71293c59ff5e5482c6b07_prof);

    }

    // line 103
    public function block_container_div_end($context, array $blocks = array())
    {
        $__internal_cf2d754196e431314d313b11c0f0e17febcf9fc38302a34871af3ee820387dbc = $this->env->getExtension("native_profiler");
        $__internal_cf2d754196e431314d313b11c0f0e17febcf9fc38302a34871af3ee820387dbc->enter($__internal_cf2d754196e431314d313b11c0f0e17febcf9fc38302a34871af3ee820387dbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container_div_end"));

        echo "</div><!-- /container -->";
        
        $__internal_cf2d754196e431314d313b11c0f0e17febcf9fc38302a34871af3ee820387dbc->leave($__internal_cf2d754196e431314d313b11c0f0e17febcf9fc38302a34871af3ee820387dbc_prof);

    }

    // line 106
    public function block_body_end_before_js($context, array $blocks = array())
    {
        $__internal_fa53db81bc41714f38b0e4e4e80195b01737c97d831196b7e937711e58e42ed3 = $this->env->getExtension("native_profiler");
        $__internal_fa53db81bc41714f38b0e4e4e80195b01737c97d831196b7e937711e58e42ed3->enter($__internal_fa53db81bc41714f38b0e4e4e80195b01737c97d831196b7e937711e58e42ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_end_before_js"));

        // line 107
        echo "    ";
        
        $__internal_fa53db81bc41714f38b0e4e4e80195b01737c97d831196b7e937711e58e42ed3->leave($__internal_fa53db81bc41714f38b0e4e4e80195b01737c97d831196b7e937711e58e42ed3_prof);

    }

    // line 109
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_5c127b57c3d85540989ff8471b203e1840efe0e77f1a2e06d3b2d3c5284e0d15 = $this->env->getExtension("native_profiler");
        $__internal_5c127b57c3d85540989ff8471b203e1840efe0e77f1a2e06d3b2d3c5284e0d15->enter($__internal_5c127b57c3d85540989ff8471b203e1840efe0e77f1a2e06d3b2d3c5284e0d15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 110
        echo "    ";
        // line 114
        echo "    ";
        $this->displayBlock('foot_script_assetic', $context, $blocks);
        // line 117
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function () {
            \$('[data-toggle=\"tooltip\"]').tooltip();
            \$('[data-toggle=\"popover\"]').popover();
        });
    </script>
    ";
        
        $__internal_5c127b57c3d85540989ff8471b203e1840efe0e77f1a2e06d3b2d3c5284e0d15->leave($__internal_5c127b57c3d85540989ff8471b203e1840efe0e77f1a2e06d3b2d3c5284e0d15_prof);

    }

    // line 114
    public function block_foot_script_assetic($context, array $blocks = array())
    {
        $__internal_851c891b47035f6dd0741125cd56aed6827a6d97aa006d835dff3831b1e2e3ec = $this->env->getExtension("native_profiler");
        $__internal_851c891b47035f6dd0741125cd56aed6827a6d97aa006d835dff3831b1e2e3ec->enter($__internal_851c891b47035f6dd0741125cd56aed6827a6d97aa006d835dff3831b1e2e3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script_assetic"));

        // line 115
        echo "        ";
        // line 116
        echo "    ";
        
        $__internal_851c891b47035f6dd0741125cd56aed6827a6d97aa006d835dff3831b1e2e3ec->leave($__internal_851c891b47035f6dd0741125cd56aed6827a6d97aa006d835dff3831b1e2e3ec_prof);

    }

    // line 127
    public function block_body_end($context, array $blocks = array())
    {
        $__internal_71d9d4c634a441b932740c3cbb2db7d075132e0664833c4924311428009b2eb0 = $this->env->getExtension("native_profiler");
        $__internal_71d9d4c634a441b932740c3cbb2db7d075132e0664833c4924311428009b2eb0->enter($__internal_71d9d4c634a441b932740c3cbb2db7d075132e0664833c4924311428009b2eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_end"));

        
        $__internal_71d9d4c634a441b932740c3cbb2db7d075132e0664833c4924311428009b2eb0->leave($__internal_71d9d4c634a441b932740c3cbb2db7d075132e0664833c4924311428009b2eb0_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  652 => 127,  645 => 116,  643 => 115,  637 => 114,  623 => 117,  620 => 114,  618 => 110,  612 => 109,  605 => 107,  599 => 106,  587 => 103,  579 => 101,  573 => 100,  565 => 97,  559 => 96,  551 => 93,  545 => 92,  533 => 90,  525 => 83,  519 => 82,  511 => 78,  505 => 77,  497 => 85,  495 => 82,  491 => 80,  489 => 77,  486 => 76,  480 => 75,  472 => 87,  470 => 75,  467 => 74,  461 => 73,  454 => 71,  447 => 67,  443 => 65,  440 => 64,  434 => 63,  413 => 59,  410 => 58,  404 => 57,  392 => 56,  385 => 54,  379 => 53,  354 => 52,  347 => 104,  344 => 103,  342 => 100,  339 => 99,  337 => 96,  334 => 95,  332 => 92,  329 => 91,  327 => 90,  324 => 89,  322 => 73,  319 => 72,  317 => 63,  314 => 62,  311 => 57,  309 => 56,  306 => 55,  303 => 53,  300 => 52,  294 => 51,  286 => 48,  280 => 47,  273 => 109,  270 => 108,  268 => 106,  265 => 105,  263 => 51,  260 => 50,  257 => 47,  251 => 46,  240 => 43,  232 => 40,  226 => 39,  219 => 35,  213 => 34,  199 => 33,  187 => 32,  180 => 30,  178 => 23,  172 => 22,  165 => 18,  163 => 14,  161 => 13,  155 => 12,  147 => 36,  144 => 34,  142 => 33,  138 => 32,  135 => 31,  133 => 22,  128 => 19,  126 => 12,  122 => 11,  119 => 10,  113 => 9,  103 => 6,  97 => 5,  88 => 129,  86 => 127,  83 => 126,  81 => 46,  78 => 45,  76 => 43,  73 => 42,  71 => 39,  68 => 38,  66 => 9,  63 => 8,  61 => 5,  56 => 2,  54 => 1,);
    }
}
/* {% from 'MopaBootstrapBundle::flash.html.twig' import session_flash %}*/
/* */
/* <!DOCTYPE html>*/
/* */
/* {% block html_tag %}*/
/* <html lang="{{ app.request.locale }}">*/
/* {% endblock html_tag %}*/
/* */
/* {% block head %}*/
/* <head>*/
/*     <meta charset="{{ _charset }}" />*/
/*     {% block head_style %}*/
/*     {# Override this block to add your own files! #}*/
/*     {# To use this without less or sass use the base.html.twig template as your base*/
/*      # Be sure you understand whats going on: have a look into*/
/*      # https://github.com/phiamo/MopaBootstrapBundle/blob/master/Resources/doc/css-vs-less.md*/
/*      #}*/
/*     {% endblock head_style %}*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     {% block head_script %}*/
/*     {# Overwrite this block to add your own js here, to get them generated into final files*/
/*     {% javascripts*/
/*         'http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'*/
/*     %}*/
/*         <script type="text/javascript" src="{{ asset_url }}"></script>*/
/*     {% endjavascripts %}*/
/*      #}*/
/*     {% endblock head_script %}*/
/* */
/*     <title>{% block title %}Mopa Bootstrap Bundle{% endblock title %}</title>*/
/*     {% block favicon %}<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />{% endblock %}*/
/*     {% block head_bottom %}*/
/*     {% endblock head_bottom %}*/
/* </head>*/
/* {% endblock head %}*/
/* */
/* {% block body_tag %}*/
/* <body>*/
/* {% endblock body_tag %}*/
/* */
/* {% block body_start %}*/
/* {% endblock body_start %}*/
/* */
/* {% block body %}*/
/*     {% block navbar %}*/
/*     <!-- No navbar included here to reduce dependencies, see https://github.com/phiamo/MopaBootstrapSandboxBundle/blob/master/Resources/views/base.html.twig for howto include it -->*/
/*     {% endblock navbar %}*/
/* */
/*     {% block container %}*/
/*     {% block container_div_start %}<div class="{% block container_class %}container{% endblock container_class %}">{% endblock container_div_start %}*/
/*         {% block header %}*/
/*         {% endblock header %}*/
/* */
/*         {% block content_div_start %}<div class="content">{% endblock content_div_start %}*/
/*             {% block page_header %}*/
/*             <div class="page-header">*/
/*                   <h1>{% block headline %}Mopa Bootstrap Bundle{% endblock headline %}</h1>*/
/*             </div>*/
/*             {% endblock page_header %}*/
/* */
/*             {% block flashes %}*/
/*             {% if app.session.flashbag.peekAll|length > 0 %}*/
/*             <div class="row">*/
/*                 <div class="col-sm-12">*/
/*                 {{ session_flash() }}*/
/*                 </div>*/
/*             </div>*/
/*             {% endif %}*/
/*             {% endblock flashes %}*/
/* */
/*             {% block content_row %}*/
/*             <div class="row">*/
/*                 {% block content %}*/
/*                 <div class="col-sm-9">*/
/*                     {% block content_content %}*/
/*                     <strong>Hier könnte Ihre Werbung stehen ... </strong>*/
/*                     {% endblock content_content %}*/
/*                 </div>*/
/*                 <div class="col-sm-3">*/
/*                     {% block content_sidebar %}*/
/*                     <h2>Sidebar</h2>*/
/*                     {% endblock content_sidebar %}*/
/*                 </div>*/
/*                 {% endblock content %}*/
/*             </div>*/
/*             {% endblock content_row %}*/
/* */
/*         {% block content_div_end %}</div>{% endblock content_div_end %}*/
/* */
/*         {% block footer_tag_start %}*/
/*         <footer>*/
/*         {% endblock footer_tag_start %}*/
/* */
/*         {% block footer %}*/
/*         <p>&copy; <a href="http://www.mohrenweiserpartner.de" target="_blank">Mohrenweiser & Partner</a> 2011-2015</p>*/
/*         {% endblock footer %}*/
/* */
/*         {% block footer_tag_end %}*/
/*         </footer>*/
/*         {% endblock footer_tag_end %}*/
/*     {% block container_div_end %}</div><!-- /container -->{% endblock container_div_end %}*/
/*     {% endblock container %}*/
/* */
/*     {% block body_end_before_js %}*/
/*     {% endblock body_end_before_js %}*/
/* */
/*     {% block foot_script %}*/
/*     {# To only use a subset or add more js overwrite and copy paste this block*/
/*     To speed up page loads save a copy of jQuery in your project and override this block to include the correct path*/
/*     Otherwise the regeneration is done on every load in dev more with use_controller: true*/
/*      #}*/
/*     {% block foot_script_assetic %}*/
/*         {# Please add the javascripts you need in your project #}*/
/*     {% endblock foot_script_assetic %}*/
/* */
/*     <script type="text/javascript">*/
/*         $(document).ready(function () {*/
/*             $('[data-toggle="tooltip"]').tooltip();*/
/*             $('[data-toggle="popover"]').popover();*/
/*         });*/
/*     </script>*/
/*     {% endblock foot_script %}*/
/* {% endblock body %}*/
/* */
/* {% block body_end %}*/
/* {% endblock body_end %}*/
/* </body>*/
/* </html>*/
/* */
