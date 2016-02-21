<?php

/* base.html.twig */
class __TwigTemplate_49ba090874168ad1985726bfedfb49026ccae1509409e0a028500164ea285c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'meta' => array($this, 'block_meta'),
            'origenStyles' => array($this, 'block_origenStyles'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d99771c5874a8143a60886bae3c9af6887d630e1d8052695b8675b9841c72ddf = $this->env->getExtension("native_profiler");
        $__internal_d99771c5874a8143a60886bae3c9af6887d630e1d8052695b8675b9841c72ddf->enter($__internal_d99771c5874a8143a60886bae3c9af6887d630e1d8052695b8675b9841c72ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 5
        $this->displayBlock('meta', $context, $blocks);
        // line 12
        echo "        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        ";
        // line 13
        $this->displayBlock('origenStyles', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/favicon.ico"), "html", null, true);
        echo "\" />
        
         ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "    </head>
    <body class=\"nav-md\">
        ";
        // line 29
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "
       
    </body>
</html>
";
        
        $__internal_d99771c5874a8143a60886bae3c9af6887d630e1d8052695b8675b9841c72ddf->leave($__internal_d99771c5874a8143a60886bae3c9af6887d630e1d8052695b8675b9841c72ddf_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_178a19c146ac6830a9c638d02e4abfcb1db816e18ff7061ba42189e637227e1e = $this->env->getExtension("native_profiler");
        $__internal_178a19c146ac6830a9c638d02e4abfcb1db816e18ff7061ba42189e637227e1e->enter($__internal_178a19c146ac6830a9c638d02e4abfcb1db816e18ff7061ba42189e637227e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_178a19c146ac6830a9c638d02e4abfcb1db816e18ff7061ba42189e637227e1e->leave($__internal_178a19c146ac6830a9c638d02e4abfcb1db816e18ff7061ba42189e637227e1e_prof);

    }

    // line 5
    public function block_meta($context, array $blocks = array())
    {
        $__internal_62addd4177331d771c036678a5fafa3e2d9ee23b6a21b6de79364ea628f3037b = $this->env->getExtension("native_profiler");
        $__internal_62addd4177331d771c036678a5fafa3e2d9ee23b6a21b6de79364ea628f3037b->enter($__internal_62addd4177331d771c036678a5fafa3e2d9ee23b6a21b6de79364ea628f3037b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "meta"));

        // line 6
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
            <!-- Meta, title, CSS, favicons, etc. -->
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        ";
        
        $__internal_62addd4177331d771c036678a5fafa3e2d9ee23b6a21b6de79364ea628f3037b->leave($__internal_62addd4177331d771c036678a5fafa3e2d9ee23b6a21b6de79364ea628f3037b_prof);

    }

    // line 13
    public function block_origenStyles($context, array $blocks = array())
    {
        $__internal_0fb091de4e1e3717c66121110614a664bbaae2398f96fd1d6a3f53f83c40fa1c = $this->env->getExtension("native_profiler");
        $__internal_0fb091de4e1e3717c66121110614a664bbaae2398f96fd1d6a3f53f83c40fa1c->enter($__internal_0fb091de4e1e3717c66121110614a664bbaae2398f96fd1d6a3f53f83c40fa1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "origenStyles"));

        // line 14
        echo "             <!-- Bootstrap -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
            <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
            ";
        // line 17
        $this->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig", "base.html.twig", 17)->display($context);
        // line 18
        echo "        ";
        
        $__internal_0fb091de4e1e3717c66121110614a664bbaae2398f96fd1d6a3f53f83c40fa1c->leave($__internal_0fb091de4e1e3717c66121110614a664bbaae2398f96fd1d6a3f53f83c40fa1c_prof);

    }

    // line 19
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a018a91afdb04bd98095493c9cf10b29cf13e1ce4124ae886873ce72e2e02fb = $this->env->getExtension("native_profiler");
        $__internal_7a018a91afdb04bd98095493c9cf10b29cf13e1ce4124ae886873ce72e2e02fb->enter($__internal_7a018a91afdb04bd98095493c9cf10b29cf13e1ce4124ae886873ce72e2e02fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 20
        echo "           
        ";
        
        $__internal_7a018a91afdb04bd98095493c9cf10b29cf13e1ce4124ae886873ce72e2e02fb->leave($__internal_7a018a91afdb04bd98095493c9cf10b29cf13e1ce4124ae886873ce72e2e02fb_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e0ee749034589cff1f0ecdc76a50bdf36baf9e319ba40b09bcd8f0f2925bf077 = $this->env->getExtension("native_profiler");
        $__internal_e0ee749034589cff1f0ecdc76a50bdf36baf9e319ba40b09bcd8f0f2925bf077->enter($__internal_e0ee749034589cff1f0ecdc76a50bdf36baf9e319ba40b09bcd8f0f2925bf077_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 25
        echo "          
        ";
        
        $__internal_e0ee749034589cff1f0ecdc76a50bdf36baf9e319ba40b09bcd8f0f2925bf077->leave($__internal_e0ee749034589cff1f0ecdc76a50bdf36baf9e319ba40b09bcd8f0f2925bf077_prof);

    }

    // line 29
    public function block_body($context, array $blocks = array())
    {
        $__internal_03936c628d585e65d93343bd0547b7400ffccd3a9f614d1ddcab8cb6cb2613c6 = $this->env->getExtension("native_profiler");
        $__internal_03936c628d585e65d93343bd0547b7400ffccd3a9f614d1ddcab8cb6cb2613c6->enter($__internal_03936c628d585e65d93343bd0547b7400ffccd3a9f614d1ddcab8cb6cb2613c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 30
        echo "
        ";
        
        $__internal_03936c628d585e65d93343bd0547b7400ffccd3a9f614d1ddcab8cb6cb2613c6->leave($__internal_03936c628d585e65d93343bd0547b7400ffccd3a9f614d1ddcab8cb6cb2613c6_prof);

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
        return array (  158 => 30,  152 => 29,  144 => 25,  138 => 24,  130 => 20,  124 => 19,  117 => 18,  115 => 17,  110 => 15,  107 => 14,  101 => 13,  89 => 6,  83 => 5,  72 => 4,  61 => 32,  59 => 29,  55 => 27,  53 => 24,  47 => 22,  44 => 19,  42 => 13,  39 => 12,  37 => 5,  33 => 4,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <title>{% block title %}{% endblock %}</title>*/
/*         {% block meta %}*/
/*             <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*             <!-- Meta, title, CSS, favicons, etc. -->*/
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*             <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*         {% endblock meta  %}*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*         {% block origenStyles %}*/
/*              <!-- Bootstrap -->*/
/*             <link href="{{ asset('web/css/bootstrap.css') }}" rel="stylesheet" media="screen">*/
/*             <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->*/
/*             {% include 'BraincraftedBootstrapBundle::ie8-support.html.twig' %}*/
/*         {% endblock origenStyles %}*/
/*         {% block stylesheets %}*/
/*            */
/*         {% endblock stylesheets %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('web/favicon.ico') }}" />*/
/*         */
/*          {% block javascripts %}*/
/*           */
/*         {% endblock %}*/
/*     </head>*/
/*     <body class="nav-md">*/
/*         {% block body %}*/
/* */
/*         {% endblock %}*/
/* */
/*        */
/*     </body>*/
/* </html>*/
/* */
