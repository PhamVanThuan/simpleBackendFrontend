<?php

/* :front:simple_layout.html.twig */
class __TwigTemplate_6b2e6fd8ff4b815bcb332f9bac4a5f48595541320c21f24db22e86daf4c52a74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":front:simple_layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd45e70e950cee58979d35632911de73f55761ec488933aa517711f4ceb7608d = $this->env->getExtension("native_profiler");
        $__internal_dd45e70e950cee58979d35632911de73f55761ec488933aa517711f4ceb7608d->enter($__internal_dd45e70e950cee58979d35632911de73f55761ec488933aa517711f4ceb7608d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:simple_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd45e70e950cee58979d35632911de73f55761ec488933aa517711f4ceb7608d->leave($__internal_dd45e70e950cee58979d35632911de73f55761ec488933aa517711f4ceb7608d_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_aaee305040a29b9734113472723c38bccecbec71da54bde6e348a5fa24d98b04 = $this->env->getExtension("native_profiler");
        $__internal_aaee305040a29b9734113472723c38bccecbec71da54bde6e348a5fa24d98b04->enter($__internal_aaee305040a29b9734113472723c38bccecbec71da54bde6e348a5fa24d98b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <style>
        body{ padding-top:70px;}
    </style>
";
        
        $__internal_aaee305040a29b9734113472723c38bccecbec71da54bde6e348a5fa24d98b04->leave($__internal_aaee305040a29b9734113472723c38bccecbec71da54bde6e348a5fa24d98b04_prof);

    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aafbcaffc68e5ed4d675d16a338c8c65f6f6e9535e41db419b23f2de5d1c397d = $this->env->getExtension("native_profiler");
        $__internal_aafbcaffc68e5ed4d675d16a338c8c65f6f6e9535e41db419b23f2de5d1c397d->enter($__internal_aafbcaffc68e5ed4d675d16a338c8c65f6f6e9535e41db419b23f2de5d1c397d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 10
        echo "    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- chart js -->
    <script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap progress js -->
    <script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- icheck -->
    <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_aafbcaffc68e5ed4d675d16a338c8c65f6f6e9535e41db419b23f2de5d1c397d->leave($__internal_aafbcaffc68e5ed4d675d16a338c8c65f6f6e9535e41db419b23f2de5d1c397d_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_5d32677e0760d2b413f8ce85b59874c16ee96f282f842dfaafef97769c900503 = $this->env->getExtension("native_profiler");
        $__internal_5d32677e0760d2b413f8ce85b59874c16ee96f282f842dfaafef97769c900503->enter($__internal_5d32677e0760d2b413f8ce85b59874c16ee96f282f842dfaafef97769c900503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 25
        echo "
    ";
        // line 26
        $this->loadTemplate(":front:simple_layout.html.twig", ":front:simple_layout.html.twig", 26, "78519980")->display($context);
        // line 28
        echo "
    <!-- Page Content -->
    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-lg-12 text-center\">

                ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "            </div>
        </div>
        <!-- /.row -->

    </div>
";
        
        $__internal_5d32677e0760d2b413f8ce85b59874c16ee96f282f842dfaafef97769c900503->leave($__internal_5d32677e0760d2b413f8ce85b59874c16ee96f282f842dfaafef97769c900503_prof);

    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        $__internal_86f08bb0666f9b1ccf6d05d18402d7b1ad0bc68b2394cecf10430ee08b0a0297 = $this->env->getExtension("native_profiler");
        $__internal_86f08bb0666f9b1ccf6d05d18402d7b1ad0bc68b2394cecf10430ee08b0a0297->enter($__internal_86f08bb0666f9b1ccf6d05d18402d7b1ad0bc68b2394cecf10430ee08b0a0297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " ";
        
        $__internal_86f08bb0666f9b1ccf6d05d18402d7b1ad0bc68b2394cecf10430ee08b0a0297->leave($__internal_86f08bb0666f9b1ccf6d05d18402d7b1ad0bc68b2394cecf10430ee08b0a0297_prof);

    }

    public function getTemplateName()
    {
        return ":front:simple_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 35,  129 => 36,  127 => 35,  118 => 28,  116 => 26,  113 => 25,  107 => 24,  98 => 22,  93 => 20,  88 => 18,  84 => 17,  79 => 15,  74 => 13,  69 => 11,  66 => 10,  60 => 9,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}


/* :front:simple_layout.html.twig */
class __TwigTemplate_6b2e6fd8ff4b815bcb332f9bac4a5f48595541320c21f24db22e86daf4c52a74_78519980 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 26
        $this->parent = $this->loadTemplate(":front:nav.html.twig", ":front:simple_layout.html.twig", 26);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":front:nav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e772b9f8ec704339430aa5f204b2472dee458d274b46f481b30e9964889fdab = $this->env->getExtension("native_profiler");
        $__internal_1e772b9f8ec704339430aa5f204b2472dee458d274b46f481b30e9964889fdab->enter($__internal_1e772b9f8ec704339430aa5f204b2472dee458d274b46f481b30e9964889fdab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:simple_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e772b9f8ec704339430aa5f204b2472dee458d274b46f481b30e9964889fdab->leave($__internal_1e772b9f8ec704339430aa5f204b2472dee458d274b46f481b30e9964889fdab_prof);

    }

    public function getTemplateName()
    {
        return ":front:simple_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 26,  141 => 35,  129 => 36,  127 => 35,  118 => 28,  116 => 26,  113 => 25,  107 => 24,  98 => 22,  93 => 20,  88 => 18,  84 => 17,  79 => 15,  74 => 13,  69 => 11,  66 => 10,  60 => 9,  48 => 4,  43 => 3,  37 => 2,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* {% block stylesheets %}*/
/*     <link href="{{ asset('web/css/bootstrap.min.css') }}" rel="stylesheet" media="screen">*/
/*     <link href="{{ asset('web/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <style>*/
/*         body{ padding-top:70px;}*/
/*     </style>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->*/
/*     <script src="{{ asset('web/js/jquery.min.js') }}"></script>*/
/*     <!-- Include all JavaScripts, compiled by Assetic -->*/
/*     <script src="{{ asset('web/js/bootstrap.js') }}"></script>*/
/*     <!-- chart js -->*/
/*     <script src="{{ asset('web/js/chartjs/chart.min.js') }}"></script>*/
/*     <!-- bootstrap progress js -->*/
/*     <script src="{{ asset('web/js/progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/*     <script src="{{ asset('web/js/nicescroll/jquery.nicescroll.min.js') }}"></script>*/
/*     <!-- icheck -->*/
/*     <script src="{{ asset('web/js/icheck/icheck.min.js') }}"></script>*/
/* */
/*     <script src="{{ asset('web/js/custom.js') }}"></script>*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/*     {% embed ":front:nav.html.twig" %}*/
/*     {% endembed %}*/
/* */
/*     <!-- Page Content -->*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-12 text-center">*/
/* */
/*                 {% block content %} {% endblock content %}*/
/*             </div>*/
/*         </div>*/
/*         <!-- /.row -->*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
