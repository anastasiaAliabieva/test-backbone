<?php

/* MopaBootstrapBundle::base_initializr.html.twig */
class __TwigTemplate_8f03e24037e2dfeeb45a1a9eaa3b572c27a90d700e3e8418db7356f4279263db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("MopaBootstrapBundle::base_less.html.twig", "MopaBootstrapBundle::base_initializr.html.twig", 1);
        $this->blocks = array(
            'html_tag' => array($this, 'block_html_tag'),
            'head' => array($this, 'block_head'),
            'dns_prefetch' => array($this, 'block_dns_prefetch'),
            'title' => array($this, 'block_title'),
            'head_style' => array($this, 'block_head_style'),
            'head_script' => array($this, 'block_head_script'),
            'body_start' => array($this, 'block_body_start'),
            'body' => array($this, 'block_body'),
            'navbar' => array($this, 'block_navbar'),
            'container' => array($this, 'block_container'),
            'foot_script' => array($this, 'block_foot_script'),
            'jquery' => array($this, 'block_jquery'),
            'jquery_cdn_url' => array($this, 'block_jquery_cdn_url'),
            'jquery_local_url' => array($this, 'block_jquery_local_url'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "MopaBootstrapBundle::base_less.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97ab51fc5a79b63f20cca0f6a4d266fa247848a9e280338dc65bba78d3bbd89a = $this->env->getExtension("native_profiler");
        $__internal_97ab51fc5a79b63f20cca0f6a4d266fa247848a9e280338dc65bba78d3bbd89a->enter($__internal_97ab51fc5a79b63f20cca0f6a4d266fa247848a9e280338dc65bba78d3bbd89a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "MopaBootstrapBundle::base_initializr.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97ab51fc5a79b63f20cca0f6a4d266fa247848a9e280338dc65bba78d3bbd89a->leave($__internal_97ab51fc5a79b63f20cca0f6a4d266fa247848a9e280338dc65bba78d3bbd89a_prof);

    }

    // line 3
    public function block_html_tag($context, array $blocks = array())
    {
        $__internal_2471f53d8eeac7938de32f98e0cbd8e7876eaa9f93ea35e551887b8a97f4dbdb = $this->env->getExtension("native_profiler");
        $__internal_2471f53d8eeac7938de32f98e0cbd8e7876eaa9f93ea35e551887b8a97f4dbdb->enter($__internal_2471f53d8eeac7938de32f98e0cbd8e7876eaa9f93ea35e551887b8a97f4dbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "html_tag"));

        // line 4
        echo "<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\"> <!--<![endif]-->

";
        
        $__internal_2471f53d8eeac7938de32f98e0cbd8e7876eaa9f93ea35e551887b8a97f4dbdb->leave($__internal_2471f53d8eeac7938de32f98e0cbd8e7876eaa9f93ea35e551887b8a97f4dbdb_prof);

    }

    // line 14
    public function block_head($context, array $blocks = array())
    {
        $__internal_bd380e3f6b5b6a1ede09a4b09de0ca0cdc1c3df93905e3277565f4fd24a40dda = $this->env->getExtension("native_profiler");
        $__internal_bd380e3f6b5b6a1ede09a4b09de0ca0cdc1c3df93905e3277565f4fd24a40dda->enter($__internal_bd380e3f6b5b6a1ede09a4b09de0ca0cdc1c3df93905e3277565f4fd24a40dda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 15
        echo "<head>
    <meta charset=\"utf-8\" />

    ";
        // line 20
        echo "    ";
        $this->displayBlock('dns_prefetch', $context, $blocks);
        // line 27
        echo "
    ";
        // line 33
        echo "    <!--[if IE]><meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\" /><![endif]-->

    ";
        // line 37
        echo "    <meta name=\"viewport\" content=\"width=device-width\" />

    ";
        // line 39
        $context["meta_robots"] = "";
        // line 40
        echo "    ";
        $context["metatitle"] = "";
        // line 41
        echo "    ";
        if (array_key_exists("meta", $context)) {
            // line 42
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "description", array(), "any", true, true)) {
                // line 43
                echo "            <meta name=\"description\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "description", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 45
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "keywords", array(), "any", true, true)) {
                // line 46
                echo "            <meta name=\"keywords\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "keywords", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 48
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true)) {
                // line 49
                echo "            <meta name=\"author\" content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 51
            echo "        ";
            if (($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_url", array(), "any", true, true) && $this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "author_name", array(), "any", true, true))) {
                // line 52
                echo "            ";
                // line 53
                echo "            <link rel=\"author\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_url", array(), "array"), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "author_name", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 55
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "title", array(), "any", true, true)) {
                // line 56
                echo "            ";
                $context["metatitle"] = $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "title", array());
                // line 57
                echo "        ";
            }
            // line 58
            echo "
        ";
            // line 61
            echo "
        ";
            // line 65
            echo "
        ";
            // line 68
            echo "
        <link rel=\"shortcut icon\" href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
            echo "\" />
        <link rel=\"apple-touch-icon\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("apple-touch-icon.png"), "html", null, true);
            echo "\" />

        ";
            // line 73
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "sitemap", array(), "array", true, true)) {
                // line 74
                echo "        <link rel=\"sitemap\" type=\"application/xml\" title=\"Sitemap\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "sitemap", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 76
            echo "
        ";
            // line 78
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_atom", array(), "array", true, true)) {
                // line 79
                echo "        <link rel=\"alternate\" type=\"application/atom+xml\" title=\"Atom\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "feed_atom", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 81
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : null), "feed_rss", array(), "array", true, true)) {
                // line 82
                echo "        <link rel=\"alternate\" type=\"application/rss+xml\" title=\"RSS\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "feed_rss", array(), "array"), "html", null, true);
                echo "\" />
        ";
            }
            // line 84
            echo "
        ";
            // line 86
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "noindex", array(), "array")) {
                // line 87
                echo "            ";
                $context["meta_robots"] = "noindex,";
                // line 88
                echo "        ";
            }
            // line 89
            echo "        ";
            if ($this->getAttribute((isset($context["meta"]) ? $context["meta"] : $this->getContext($context, "meta")), "nofollow", array(), "array")) {
                // line 90
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")) . "nofollow");
                // line 91
                echo "        ";
            } else {
                // line 92
                echo "            ";
                $context["meta_robots"] = ((isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")) . "follow");
                // line 93
                echo "        ";
            }
            // line 94
            echo "    ";
        }
        // line 95
        echo "
    <meta name=\"robots\" content=\"";
        // line 96
        echo twig_escape_filter($this->env, (isset($context["meta_robots"]) ? $context["meta_robots"] : $this->getContext($context, "meta_robots")), "html", null, true);
        echo "\" />
    <title>";
        // line 97
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 99
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "wt", array(), "array", true, true)) {
            // line 100
            echo "        <meta name=\"google-site-verification\" content=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "wt", array(), "array"), "html", null, true);
            echo "\" />
    ";
        }
        // line 102
        echo "
    ";
        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        $this->displayBlock('head_style', $context, $blocks);
        // line 117
        echo "
    ";
        // line 118
        $this->displayBlock('head_script', $context, $blocks);
        // line 121
        echo "</head>
";
        
        $__internal_bd380e3f6b5b6a1ede09a4b09de0ca0cdc1c3df93905e3277565f4fd24a40dda->leave($__internal_bd380e3f6b5b6a1ede09a4b09de0ca0cdc1c3df93905e3277565f4fd24a40dda_prof);

    }

    // line 20
    public function block_dns_prefetch($context, array $blocks = array())
    {
        $__internal_78215a3b3d662c9de7f96dfa7364acec5d747a9651a07336ddbf79c63146810c = $this->env->getExtension("native_profiler");
        $__internal_78215a3b3d662c9de7f96dfa7364acec5d747a9651a07336ddbf79c63146810c->enter($__internal_78215a3b3d662c9de7f96dfa7364acec5d747a9651a07336ddbf79c63146810c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dns_prefetch"));

        // line 21
        echo "        ";
        if (array_key_exists("dns_prefetch", $context)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["dns_prefetch"]) ? $context["dns_prefetch"] : $this->getContext($context, "dns_prefetch")));
            foreach ($context['_seq'] as $context["_key"] => $context["domain"]) {
                // line 23
                echo "            <link rel=\"dns-prefetch\" href=\"";
                echo twig_escape_filter($this->env, $context["domain"], "html", null, true);
                echo "\" />
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['domain'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        ";
        }
        // line 26
        echo "    ";
        
        $__internal_78215a3b3d662c9de7f96dfa7364acec5d747a9651a07336ddbf79c63146810c->leave($__internal_78215a3b3d662c9de7f96dfa7364acec5d747a9651a07336ddbf79c63146810c_prof);

    }

    // line 97
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6f4fe166cc00cef3c08a99dc5ec77cd83d46842ecac5ef70e23b625c95c2798 = $this->env->getExtension("native_profiler");
        $__internal_c6f4fe166cc00cef3c08a99dc5ec77cd83d46842ecac5ef70e23b625c95c2798->enter($__internal_c6f4fe166cc00cef3c08a99dc5ec77cd83d46842ecac5ef70e23b625c95c2798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["metatitle"]) ? $context["metatitle"] : $this->getContext($context, "metatitle")), "html", null, true);
        
        $__internal_c6f4fe166cc00cef3c08a99dc5ec77cd83d46842ecac5ef70e23b625c95c2798->leave($__internal_c6f4fe166cc00cef3c08a99dc5ec77cd83d46842ecac5ef70e23b625c95c2798_prof);

    }

    // line 108
    public function block_head_style($context, array $blocks = array())
    {
        $__internal_eedaa1ee6fd3638f2a792381263a9939b4a215229c77b93798b7a2153d54245a = $this->env->getExtension("native_profiler");
        $__internal_eedaa1ee6fd3638f2a792381263a9939b4a215229c77b93798b7a2153d54245a->enter($__internal_eedaa1ee6fd3638f2a792381263a9939b4a215229c77b93798b7a2153d54245a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_style"));

        // line 109
        echo "        ";
        $this->displayParentBlock("head_style", $context, $blocks);
        echo "

        ";
        // line 113
        echo "        ";
        if ((isset($context["diagnostic_mode"]) ? $context["diagnostic_mode"] : $this->getContext($context, "diagnostic_mode"))) {
            // line 114
            echo "            <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mopabootstrap/css/diagnostic.css"), "html", null, true);
            echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
        ";
        }
        // line 116
        echo "    ";
        
        $__internal_eedaa1ee6fd3638f2a792381263a9939b4a215229c77b93798b7a2153d54245a->leave($__internal_eedaa1ee6fd3638f2a792381263a9939b4a215229c77b93798b7a2153d54245a_prof);

    }

    // line 118
    public function block_head_script($context, array $blocks = array())
    {
        $__internal_33c15cfedb463cc3ed461bed4f4816b5c9e18005665b76eac234f66cb22315ad = $this->env->getExtension("native_profiler");
        $__internal_33c15cfedb463cc3ed461bed4f4816b5c9e18005665b76eac234f66cb22315ad->enter($__internal_33c15cfedb463cc3ed461bed4f4816b5c9e18005665b76eac234f66cb22315ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_script"));

        // line 119
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/mopabootstrap/js/modernizr-2.7.1-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    ";
        
        $__internal_33c15cfedb463cc3ed461bed4f4816b5c9e18005665b76eac234f66cb22315ad->leave($__internal_33c15cfedb463cc3ed461bed4f4816b5c9e18005665b76eac234f66cb22315ad_prof);

    }

    // line 124
    public function block_body_start($context, array $blocks = array())
    {
        $__internal_c16ba0cad0b722bab8d559c46ef65ef6c15e364cd5e8550b470b1d338230428c = $this->env->getExtension("native_profiler");
        $__internal_c16ba0cad0b722bab8d559c46ef65ef6c15e364cd5e8550b470b1d338230428c->enter($__internal_c16ba0cad0b722bab8d559c46ef65ef6c15e364cd5e8550b470b1d338230428c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_start"));

        // line 125
        echo "<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href=\"http://browsehappy.com/\">Upgrade to a different browser</a> or <a href=\"http://www.google.com/chromeframe/?redirect=true\">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
";
        
        $__internal_c16ba0cad0b722bab8d559c46ef65ef6c15e364cd5e8550b470b1d338230428c->leave($__internal_c16ba0cad0b722bab8d559c46ef65ef6c15e364cd5e8550b470b1d338230428c_prof);

    }

    // line 128
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6f054f7aada4369b5ed22477f552e368ab5f30ee5f79dac18369b3be693ac89 = $this->env->getExtension("native_profiler");
        $__internal_a6f054f7aada4369b5ed22477f552e368ab5f30ee5f79dac18369b3be693ac89->enter($__internal_a6f054f7aada4369b5ed22477f552e368ab5f30ee5f79dac18369b3be693ac89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 129
        echo "    ";
        $this->displayBlock('navbar', $context, $blocks);
        // line 132
        echo "
    ";
        // line 133
        $this->displayBlock('container', $context, $blocks);
        // line 136
        echo "
    ";
        // line 137
        $this->displayBlock('foot_script', $context, $blocks);
        
        $__internal_a6f054f7aada4369b5ed22477f552e368ab5f30ee5f79dac18369b3be693ac89->leave($__internal_a6f054f7aada4369b5ed22477f552e368ab5f30ee5f79dac18369b3be693ac89_prof);

    }

    // line 129
    public function block_navbar($context, array $blocks = array())
    {
        $__internal_cf91038eb8114f044d8a2517a10eaaa3536d21347a59cfd9332d77c2fe40847d = $this->env->getExtension("native_profiler");
        $__internal_cf91038eb8114f044d8a2517a10eaaa3536d21347a59cfd9332d77c2fe40847d->enter($__internal_cf91038eb8114f044d8a2517a10eaaa3536d21347a59cfd9332d77c2fe40847d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navbar"));

        // line 130
        echo "    ";
        $this->displayParentBlock("navbar", $context, $blocks);
        echo "
    ";
        
        $__internal_cf91038eb8114f044d8a2517a10eaaa3536d21347a59cfd9332d77c2fe40847d->leave($__internal_cf91038eb8114f044d8a2517a10eaaa3536d21347a59cfd9332d77c2fe40847d_prof);

    }

    // line 133
    public function block_container($context, array $blocks = array())
    {
        $__internal_a355077339fb5c90784a41700742d5dbccf909ad9881852773e73ef7261242be = $this->env->getExtension("native_profiler");
        $__internal_a355077339fb5c90784a41700742d5dbccf909ad9881852773e73ef7261242be->enter($__internal_a355077339fb5c90784a41700742d5dbccf909ad9881852773e73ef7261242be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 134
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        
        $__internal_a355077339fb5c90784a41700742d5dbccf909ad9881852773e73ef7261242be->leave($__internal_a355077339fb5c90784a41700742d5dbccf909ad9881852773e73ef7261242be_prof);

    }

    // line 137
    public function block_foot_script($context, array $blocks = array())
    {
        $__internal_d94ceffc9fe254307f82536c2e16ac217e1e76a1515f4ccbcba77463537195f3 = $this->env->getExtension("native_profiler");
        $__internal_d94ceffc9fe254307f82536c2e16ac217e1e76a1515f4ccbcba77463537195f3->enter($__internal_d94ceffc9fe254307f82536c2e16ac217e1e76a1515f4ccbcba77463537195f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "foot_script"));

        // line 138
        echo "    ";
        $this->displayBlock('jquery', $context, $blocks);
        // line 144
        echo "    ";
        // line 146
        echo "    ";
        // line 148
        echo "    ";
        if ($this->getAttribute((isset($context["google"]) ? $context["google"] : null), "analytics", array(), "array", true, true)) {
            // line 149
            echo "    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','";
            // line 155
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "analytics", array(), "array"), "html", null, true);
            echo "');ga('send','pageview');
\t";
            // line 156
            if ($this->getAttribute((isset($context["google"]) ? $context["google"] : $this->getContext($context, "google")), "extendedanalytics", array(), "array")) {
                // line 157
                echo "\t\tga('require', 'displayfeatures');
\t";
            }
            // line 159
            echo "    </script>
    ";
        }
        // line 161
        echo "    ";
        $this->displayParentBlock("foot_script", $context, $blocks);
        echo "
    ";
        
        $__internal_d94ceffc9fe254307f82536c2e16ac217e1e76a1515f4ccbcba77463537195f3->leave($__internal_d94ceffc9fe254307f82536c2e16ac217e1e76a1515f4ccbcba77463537195f3_prof);

    }

    // line 138
    public function block_jquery($context, array $blocks = array())
    {
        $__internal_f1347e9a700bb6e6dc5da6fcdb1199da1697509256d55cb3647d5c2f7caab1ac = $this->env->getExtension("native_profiler");
        $__internal_f1347e9a700bb6e6dc5da6fcdb1199da1697509256d55cb3647d5c2f7caab1ac->enter($__internal_f1347e9a700bb6e6dc5da6fcdb1199da1697509256d55cb3647d5c2f7caab1ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery"));

        // line 139
        echo "      ";
        // line 141
        echo "      <script src=\"";
        $this->displayBlock('jquery_cdn_url', $context, $blocks);
        echo "\"></script>
      <script>window.jQuery || document.write('<script src=\"";
        // line 142
        $this->displayBlock('jquery_local_url', $context, $blocks);
        echo "\"><\\/script>')</script>
    ";
        
        $__internal_f1347e9a700bb6e6dc5da6fcdb1199da1697509256d55cb3647d5c2f7caab1ac->leave($__internal_f1347e9a700bb6e6dc5da6fcdb1199da1697509256d55cb3647d5c2f7caab1ac_prof);

    }

    // line 141
    public function block_jquery_cdn_url($context, array $blocks = array())
    {
        $__internal_7156e0ef02a9addb8cb4eef45fcf6b86036cee46615c5ccef65518479f3fcc25 = $this->env->getExtension("native_profiler");
        $__internal_7156e0ef02a9addb8cb4eef45fcf6b86036cee46615c5ccef65518479f3fcc25->enter($__internal_7156e0ef02a9addb8cb4eef45fcf6b86036cee46615c5ccef65518479f3fcc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery_cdn_url"));

        echo "//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js";
        
        $__internal_7156e0ef02a9addb8cb4eef45fcf6b86036cee46615c5ccef65518479f3fcc25->leave($__internal_7156e0ef02a9addb8cb4eef45fcf6b86036cee46615c5ccef65518479f3fcc25_prof);

    }

    // line 142
    public function block_jquery_local_url($context, array $blocks = array())
    {
        $__internal_2d40d6554d5f6a32f7d24bf179d8ed1b48306fef2f3a8a215dea649f0a691ca0 = $this->env->getExtension("native_profiler");
        $__internal_2d40d6554d5f6a32f7d24bf179d8ed1b48306fef2f3a8a215dea649f0a691ca0->enter($__internal_2d40d6554d5f6a32f7d24bf179d8ed1b48306fef2f3a8a215dea649f0a691ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jquery_local_url"));

        echo "../js/libs/jquery-1.11.0.min.js";
        
        $__internal_2d40d6554d5f6a32f7d24bf179d8ed1b48306fef2f3a8a215dea649f0a691ca0->leave($__internal_2d40d6554d5f6a32f7d24bf179d8ed1b48306fef2f3a8a215dea649f0a691ca0_prof);

    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::base_initializr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  511 => 142,  499 => 141,  490 => 142,  485 => 141,  483 => 139,  477 => 138,  467 => 161,  463 => 159,  459 => 157,  457 => 156,  453 => 155,  445 => 149,  442 => 148,  440 => 146,  438 => 144,  435 => 138,  429 => 137,  419 => 134,  413 => 133,  403 => 130,  397 => 129,  390 => 137,  387 => 136,  385 => 133,  382 => 132,  379 => 129,  373 => 128,  365 => 125,  359 => 124,  349 => 119,  343 => 118,  336 => 116,  330 => 114,  327 => 113,  321 => 109,  315 => 108,  303 => 97,  296 => 26,  293 => 25,  284 => 23,  279 => 22,  276 => 21,  270 => 20,  262 => 121,  260 => 118,  257 => 117,  254 => 108,  251 => 106,  248 => 102,  242 => 100,  240 => 99,  235 => 97,  231 => 96,  228 => 95,  225 => 94,  222 => 93,  219 => 92,  216 => 91,  213 => 90,  210 => 89,  207 => 88,  204 => 87,  201 => 86,  198 => 84,  192 => 82,  189 => 81,  183 => 79,  180 => 78,  177 => 76,  171 => 74,  168 => 73,  163 => 70,  159 => 69,  156 => 68,  153 => 65,  150 => 61,  147 => 58,  144 => 57,  141 => 56,  138 => 55,  130 => 53,  128 => 52,  125 => 51,  119 => 49,  116 => 48,  110 => 46,  107 => 45,  101 => 43,  98 => 42,  95 => 41,  92 => 40,  90 => 39,  86 => 37,  82 => 33,  79 => 27,  76 => 20,  71 => 15,  65 => 14,  53 => 4,  47 => 3,  11 => 1,);
    }
}
/* {% extends 'MopaBootstrapBundle::base_less.html.twig' %}*/
/* */
/* {% block html_tag %}*/
/* <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->*/
/* */
/* {# make your site working offline with Application Cache (AppCache)*/
/*    http://www.html5rocks.com/en/tutorials/appcache/beginner/*/
/* <html manifest="manifest.appcache"> #}*/
/* {% endblock html_tag %}*/
/* */
/* {% block head %}*/
/* <head>*/
/*     <meta charset="utf-8" />*/
/* */
/*     {# About DNS prefetching: http://html5boilerplate.com/docs/DNS-Prefetching/*/
/*        If you fetch data from other domains, add them too #}*/
/*     {% block dns_prefetch %}*/
/*         {% if dns_prefetch is defined %}*/
/*             {% for domain in dns_prefetch %}*/
/*             <link rel="dns-prefetch" href="{{ domain }}" />*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     {% endblock dns_prefetch %}*/
/* */
/*     {# IE10 does not support plugins, such as Flash, in Metro Mode.*/
/*        If your site requires plugins, you can let users know that via the*/
/*        X-UA-Compatible meta element, which will prompt them to switch to Desktop Mode.*/
/*        http://html5boilerplate.com/docs/html-head/#prompt-users-to-switch-to-desktop-mode-in-ie10-metro*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1,requiresActiveX=true"> #}*/
/*     <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->*/
/* */
/*     {# WARNING: do not add "initial-scale=1" to viewport, breaks iOS view!*/
/*        https://github.com/h5bp/html5-boilerplate/issues/824 #}*/
/*     <meta name="viewport" content="width=device-width" />*/
/* */
/*     {% set meta_robots = '' %}*/
/*     {% set metatitle = '' %}*/
/*     {% if meta is defined %}*/
/*         {% if meta.description is defined %}*/
/*             <meta name="description" content="{{ meta['description'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.keywords is defined %}*/
/*             <meta name="keywords" content="{{ meta['keywords'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.author_name is defined %}*/
/*             <meta name="author" content="{{ meta['author_name'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.author_url is defined and meta.author_name is defined %}*/
/*             {# example: href="/humans.txt" #}*/
/*             <link rel="author" href="{{ meta['author_url'] }}" title="{{ meta['author_name'] }}" />*/
/*         {% endif %}*/
/*         {% if meta.title is defined %}*/
/*             {% set metatitle = meta.title %}*/
/*         {% endif %}*/
/* */
/*         {# to be removed as HTML5 has no such tag*/
/*         <meta name="title" content="{{ meta_title|default('') }}"> #}*/
/* */
/*         {# read more about canonical urls and then decide whether enable this part or remove*/
/*            http://html5boilerplate.com/docs/html-head/#canonical-url*/
/*         <link rel="canonical" href=""> #}*/
/* */
/*         {# Official short link, poorly supported now*/
/*         <link rel="shortlink" href="h5bp.com"> #}*/
/* */
/*         <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />*/
/*         <link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}" />*/
/* */
/*         {# allow BOTs see SITEMAP #}*/
/*         {% if meta['sitemap'] is defined %}*/
/*         <link rel="sitemap" type="application/xml" title="Sitemap" href="{{ meta['sitemap'] }}" />*/
/*         {% endif %}*/
/* */
/*         {# Feeds RSS & ATOM #}*/
/*         {% if meta['feed_atom'] is defined %}*/
/*         <link rel="alternate" type="application/atom+xml" title="Atom" href="{{ meta['feed_atom'] }}" />*/
/*         {% endif %}*/
/*         {% if meta['feed_rss'] is defined %}*/
/*         <link rel="alternate" type="application/rss+xml" title="RSS" href="{{ meta['feed_rss'] }}" />*/
/*         {% endif %}*/
/* */
/*         {# this should be allowed to be changed from controller scope #}*/
/*         {% if meta['noindex'] %}*/
/*             {% set meta_robots = 'noindex,' %}*/
/*         {% endif %}*/
/*         {% if meta['nofollow'] %}*/
/*             {% set meta_robots = meta_robots ~ 'nofollow' %}*/
/*         {% else %}*/
/*             {% set meta_robots = meta_robots ~ 'follow' %}*/
/*         {% endif %}*/
/*     {% endif %}*/
/* */
/*     <meta name="robots" content="{{ meta_robots }}" />*/
/*     <title>{% block title%}{{ metatitle }}{% endblock %}</title>*/
/* */
/*     {% if google['wt'] is defined %}*/
/*         <meta name="google-site-verification" content="{{ google['wt'] }}" />*/
/*     {% endif %}*/
/* */
/*     {# Site Search Browser plugin:*/
/*        http://www.google.com/search?ie=UTF-8&q=how+to+make+browser+search+plugin*/
/*     <link rel="search" title="" type="application/opensearchdescription+xml" href=""> #}*/
/* */
/*     {# Override this block to add your own files! #}*/
/*     {% block head_style %}*/
/*         {{ parent() }}*/
/* */
/*         {# Find places where your CSS is broken, docs how to use:*/
/*            http://meyerweb.com/eric/tools/css/diagnostics/' #}*/
/*         {% if diagnostic_mode %}*/
/*             <link href="{{ asset('bundles/mopabootstrap/css/diagnostic.css') }}" type="text/css" rel="stylesheet" media="screen" />*/
/*         {% endif %}*/
/*     {% endblock head_style %}*/
/* */
/*     {% block head_script %}*/
/*         <script type="text/javascript" src="{{ asset('bundles/mopabootstrap/js/modernizr-2.7.1-respond-1.4.2.min.js') }}"></script>*/
/*     {% endblock head_script %}*/
/* </head>*/
/* {% endblock head %}*/
/* */
/* {% block body_start %}*/
/* <!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->*/
/* {% endblock body_start %}*/
/* */
/* {% block body %}*/
/*     {% block navbar %}*/
/*     {{ parent() }}*/
/*     {% endblock navbar %}*/
/* */
/*     {% block container %}*/
/*     {{ parent() }}*/
/*     {% endblock container %}*/
/* */
/*     {% block foot_script %}*/
/*     {% block jquery %}*/
/*       {# Load jQuery from Google CDN*/
/*        http://encosia.com/3-reasons-why-you-should-let-google-host-jquery-for-you/ #}*/
/*       <script src="{% block jquery_cdn_url %}//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js{% endblock jquery_cdn_url %}"></script>*/
/*       <script>window.jQuery || document.write('<script src="{% block jquery_local_url %}../js/libs/jquery-1.11.0.min.js{% endblock jquery_local_url %}"><\/script>')</script>*/
/*     {% endblock jquery %}*/
/*     {# Asynchronous Google Analytics snippet grabbed from:*/
/*        http://mathiasbynens.be/notes/async-analytics-snippet#dont-push-it #}*/
/*     {# more GA tweaks:*/
/*        http://html5boilerplate.com/docs/ga-augments/ #}*/
/*     {% if google['analytics'] is defined %}*/
/*     <script>*/
/*         (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=*/
/*         function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;*/
/*         e=o.createElement(i);r=o.getElementsByTagName(i)[0];*/
/*         e.src='//www.google-analytics.com/analytics.js';*/
/*         r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));*/
/*         ga('create','{{ google['analytics'] }}');ga('send','pageview');*/
/* 	{% if google['extendedanalytics'] %}*/
/* 		ga('require', 'displayfeatures');*/
/* 	{% endif %}*/
/*     </script>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/*     {% endblock foot_script %}*/
/* {% endblock body %}*/
/* */
