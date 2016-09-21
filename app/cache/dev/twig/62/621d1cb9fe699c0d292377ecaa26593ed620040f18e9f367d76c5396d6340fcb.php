<?php

/* base.html.twig */
class __TwigTemplate_1cd755088e86df5e8e590866cc00d73e6f49f172b239db284e4b2c4f491eba30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8dfb4a8743f9862ed1dc41a53c150f0225667acf11d1025193f445e7a3503ef = $this->env->getExtension("native_profiler");
        $__internal_d8dfb4a8743f9862ed1dc41a53c150f0225667acf11d1025193f445e7a3503ef->enter($__internal_d8dfb4a8743f9862ed1dc41a53c150f0225667acf11d1025193f445e7a3503ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
       <!-- Latest compiled and minified CSS -->
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" integrity=\"sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u\" crossorigin=\"anonymous\">

    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        echo " 
<script   src=\"https://code.jquery.com/jquery-3.1.0.min.js\"   integrity=\"sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s=\"   crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/components/underscore/underscore-min.js"), "html", null, true);
        echo "\"></script>
        

        <script type=\"text/javascript\" src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/components/backbone/backbone-min.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("app/dist/app.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_d8dfb4a8743f9862ed1dc41a53c150f0225667acf11d1025193f445e7a3503ef->leave($__internal_d8dfb4a8743f9862ed1dc41a53c150f0225667acf11d1025193f445e7a3503ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9549c8619b6d75d89d1ef1237d274e7ac2aa5889fecbb7bbef4d40c3e48728e6 = $this->env->getExtension("native_profiler");
        $__internal_9549c8619b6d75d89d1ef1237d274e7ac2aa5889fecbb7bbef4d40c3e48728e6->enter($__internal_9549c8619b6d75d89d1ef1237d274e7ac2aa5889fecbb7bbef4d40c3e48728e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9549c8619b6d75d89d1ef1237d274e7ac2aa5889fecbb7bbef4d40c3e48728e6->leave($__internal_9549c8619b6d75d89d1ef1237d274e7ac2aa5889fecbb7bbef4d40c3e48728e6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f55382f017452663511c46a8b86c84ffb6d26137f2d644359998c1a63e3b2fff = $this->env->getExtension("native_profiler");
        $__internal_f55382f017452663511c46a8b86c84ffb6d26137f2d644359998c1a63e3b2fff->enter($__internal_f55382f017452663511c46a8b86c84ffb6d26137f2d644359998c1a63e3b2fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f55382f017452663511c46a8b86c84ffb6d26137f2d644359998c1a63e3b2fff->leave($__internal_f55382f017452663511c46a8b86c84ffb6d26137f2d644359998c1a63e3b2fff_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e5e0e2cf5a52bcd8355678dce7c1c3f69a624e185bfba2e80652c35487b8a64 = $this->env->getExtension("native_profiler");
        $__internal_1e5e0e2cf5a52bcd8355678dce7c1c3f69a624e185bfba2e80652c35487b8a64->enter($__internal_1e5e0e2cf5a52bcd8355678dce7c1c3f69a624e185bfba2e80652c35487b8a64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e5e0e2cf5a52bcd8355678dce7c1c3f69a624e185bfba2e80652c35487b8a64->leave($__internal_1e5e0e2cf5a52bcd8355678dce7c1c3f69a624e185bfba2e80652c35487b8a64_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0790a29368ed29868a6667554925c22bc65beed2bacfa2c1e8a616efab144182 = $this->env->getExtension("native_profiler");
        $__internal_0790a29368ed29868a6667554925c22bc65beed2bacfa2c1e8a616efab144182->enter($__internal_0790a29368ed29868a6667554925c22bc65beed2bacfa2c1e8a616efab144182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0790a29368ed29868a6667554925c22bc65beed2bacfa2c1e8a616efab144182->leave($__internal_0790a29368ed29868a6667554925c22bc65beed2bacfa2c1e8a616efab144182_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 14,  100 => 13,  89 => 6,  77 => 5,  66 => 20,  62 => 19,  56 => 16,  50 => 14,  48 => 13,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*        <!-- Latest compiled and minified CSS -->*/
/*         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">*/
/* */
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %} */
/* <script   src="https://code.jquery.com/jquery-3.1.0.min.js"   integrity="sha256-cCueBR6CsyA4/9szpPfrX3s49M9vUU5BgtiJj06wt/s="   crossorigin="anonymous"></script>*/
/*         <script type="text/javascript" src="{{ asset('vendor/components/underscore/underscore-min.js') }}"></script>*/
/*         */
/* */
/*         <script type="text/javascript" src="{{ asset('vendor/components/backbone/backbone-min.js') }}"></script>*/
/*         <script type="text/javascript" src="{{ asset('app/dist/app.js') }}"></script>*/
/*     </body>*/
/* </html>*/
/* */
