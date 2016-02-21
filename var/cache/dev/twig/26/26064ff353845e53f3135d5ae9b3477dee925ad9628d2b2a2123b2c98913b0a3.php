<?php

/* :backend:backend.html.twig */
class __TwigTemplate_6cffc5f0fccbde35ab7fed80211540a04f82250dba73aed12626289cb5beee14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":backend:backend.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0591c9772bfc3c761c0fc6caf8749da994a39f187fefe1b4d7d505d87b0d32 = $this->env->getExtension("native_profiler");
        $__internal_8a0591c9772bfc3c761c0fc6caf8749da994a39f187fefe1b4d7d505d87b0d32->enter($__internal_8a0591c9772bfc3c761c0fc6caf8749da994a39f187fefe1b4d7d505d87b0d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a0591c9772bfc3c761c0fc6caf8749da994a39f187fefe1b4d7d505d87b0d32->leave($__internal_8a0591c9772bfc3c761c0fc6caf8749da994a39f187fefe1b4d7d505d87b0d32_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_48057b2807665fc4a0c1d8f95de48713e6ed4d5a56387202704499b1a01473dd = $this->env->getExtension("native_profiler");
        $__internal_48057b2807665fc4a0c1d8f95de48713e6ed4d5a56387202704499b1a01473dd->enter($__internal_48057b2807665fc4a0c1d8f95de48713e6ed4d5a56387202704499b1a01473dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/fonts/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/animate.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styling plus plugins -->
    <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/backend/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/icheck/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!--[if lt IE 9]>
       <script src=\"../assets/js/ie8-responsive-file-warning.js\"></script>
       <![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
          <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
          <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
        <![endif]-->

";
        
        $__internal_48057b2807665fc4a0c1d8f95de48713e6ed4d5a56387202704499b1a01473dd->leave($__internal_48057b2807665fc4a0c1d8f95de48713e6ed4d5a56387202704499b1a01473dd_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7980c793e24ba450d30e45a92aca2e588368f76f39461ebd743d2f6a0c12e622 = $this->env->getExtension("native_profiler");
        $__internal_7980c793e24ba450d30e45a92aca2e588368f76f39461ebd743d2f6a0c12e622->enter($__internal_7980c793e24ba450d30e45a92aca2e588368f76f39461ebd743d2f6a0c12e622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <!-- jQuery (necessary for Bootstraps JavaScript plugins) -->
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Include all JavaScripts, compiled by Assetic -->
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <!-- chart js -->
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/chartjs/chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap progress js -->
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/nicescroll/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
    <!-- icheck -->
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/js/icheck/icheck.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/bundles/backend/js/custom.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7980c793e24ba450d30e45a92aca2e588368f76f39461ebd743d2f6a0c12e622->leave($__internal_7980c793e24ba450d30e45a92aca2e588368f76f39461ebd743d2f6a0c12e622_prof);

    }

    // line 39
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf7be8bac8092efe879aad02e27e85cfa51c8b4693d70119b48a7a1fb361e7a4 = $this->env->getExtension("native_profiler");
        $__internal_cf7be8bac8092efe879aad02e27e85cfa51c8b4693d70119b48a7a1fb361e7a4->enter($__internal_cf7be8bac8092efe879aad02e27e85cfa51c8b4693d70119b48a7a1fb361e7a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 40
        echo "    <div class=\"container body\">
        ";
        // line 41
        $this->displayBlock('content', $context, $blocks);
        // line 66
        echo "</div>

<div id=\"custom_notifications\" class=\"custom-notifications dsp_none\">
    <ul class=\"list-unstyled notifications clearfix\" data-tabbed_notifications=\"notif-group\">
    </ul>
    <div class=\"clearfix\"></div>
    <div id=\"notif-group\" class=\"tabbed_notifications\"></div>
</div>

";
        
        $__internal_cf7be8bac8092efe879aad02e27e85cfa51c8b4693d70119b48a7a1fb361e7a4->leave($__internal_cf7be8bac8092efe879aad02e27e85cfa51c8b4693d70119b48a7a1fb361e7a4_prof);

    }

    // line 41
    public function block_content($context, array $blocks = array())
    {
        $__internal_6d9b51ccbf0ca53d0c61e592ead339347b22d5d9c4f6a2dcfcc1dc8caa4f08fb = $this->env->getExtension("native_profiler");
        $__internal_6d9b51ccbf0ca53d0c61e592ead339347b22d5d9c4f6a2dcfcc1dc8caa4f08fb->enter($__internal_6d9b51ccbf0ca53d0c61e592ead339347b22d5d9c4f6a2dcfcc1dc8caa4f08fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 42
        echo "        <div class=\"main_container\">

            ";
        // line 44
        $this->loadTemplate(":backend:backend.html.twig", ":backend:backend.html.twig", 44, "1894600499")->display($context);
        // line 46
        echo "
            ";
        // line 47
        $this->loadTemplate(":backend:backend.html.twig", ":backend:backend.html.twig", 47, "362600715")->display($context);
        // line 49
        echo "            
            <!-- page content -->
            <div class=\"right_col\" role=\"main\">
                <div class=\"\">

                ";
        // line 54
        $this->displayBlock('page', $context, $blocks);
        // line 55
        echo "

            </div>

            ";
        // line 59
        $this->loadTemplate(":backend:backend.html.twig", ":backend:backend.html.twig", 59, "362842011")->display($context);
        // line 61
        echo "
        </div>
        <!-- /page content -->
    </div>
";
        
        $__internal_6d9b51ccbf0ca53d0c61e592ead339347b22d5d9c4f6a2dcfcc1dc8caa4f08fb->leave($__internal_6d9b51ccbf0ca53d0c61e592ead339347b22d5d9c4f6a2dcfcc1dc8caa4f08fb_prof);

    }

    // line 54
    public function block_page($context, array $blocks = array())
    {
        $__internal_7ee7c7d26cfb0a1579d9aeeb7610fc5be712145b56f18d9d97b65c670f1c19fa = $this->env->getExtension("native_profiler");
        $__internal_7ee7c7d26cfb0a1579d9aeeb7610fc5be712145b56f18d9d97b65c670f1c19fa->enter($__internal_7ee7c7d26cfb0a1579d9aeeb7610fc5be712145b56f18d9d97b65c670f1c19fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        
        $__internal_7ee7c7d26cfb0a1579d9aeeb7610fc5be712145b56f18d9d97b65c670f1c19fa->leave($__internal_7ee7c7d26cfb0a1579d9aeeb7610fc5be712145b56f18d9d97b65c670f1c19fa_prof);

    }

    public function getTemplateName()
    {
        return ":backend:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 54,  187 => 61,  185 => 59,  179 => 55,  177 => 54,  170 => 49,  168 => 47,  165 => 46,  163 => 44,  159 => 42,  153 => 41,  137 => 66,  135 => 41,  132 => 40,  126 => 39,  117 => 36,  112 => 34,  107 => 32,  103 => 31,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  79 => 23,  59 => 9,  55 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}


/* :backend:backend.html.twig */
class __TwigTemplate_6cffc5f0fccbde35ab7fed80211540a04f82250dba73aed12626289cb5beee14_1894600499 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 44
        $this->parent = $this->loadTemplate(":backend:navsidebar.html.twig", ":backend:backend.html.twig", 44);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:navsidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a50c49bef8248bb41b6f439c894a31a3aa6cf567a3814298c9ddf5341276f978 = $this->env->getExtension("native_profiler");
        $__internal_a50c49bef8248bb41b6f439c894a31a3aa6cf567a3814298c9ddf5341276f978->enter($__internal_a50c49bef8248bb41b6f439c894a31a3aa6cf567a3814298c9ddf5341276f978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a50c49bef8248bb41b6f439c894a31a3aa6cf567a3814298c9ddf5341276f978->leave($__internal_a50c49bef8248bb41b6f439c894a31a3aa6cf567a3814298c9ddf5341276f978_prof);

    }

    public function getTemplateName()
    {
        return ":backend:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 44,  198 => 54,  187 => 61,  185 => 59,  179 => 55,  177 => 54,  170 => 49,  168 => 47,  165 => 46,  163 => 44,  159 => 42,  153 => 41,  137 => 66,  135 => 41,  132 => 40,  126 => 39,  117 => 36,  112 => 34,  107 => 32,  103 => 31,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  79 => 23,  59 => 9,  55 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}


/* :backend:backend.html.twig */
class __TwigTemplate_6cffc5f0fccbde35ab7fed80211540a04f82250dba73aed12626289cb5beee14_362600715 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 47
        $this->parent = $this->loadTemplate(":backend:topnav.html.twig", ":backend:backend.html.twig", 47);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:topnav.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd83c2915abff53f0a3c108da02ef19f5e632195669d14918ad7b204664cf640 = $this->env->getExtension("native_profiler");
        $__internal_cd83c2915abff53f0a3c108da02ef19f5e632195669d14918ad7b204664cf640->enter($__internal_cd83c2915abff53f0a3c108da02ef19f5e632195669d14918ad7b204664cf640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd83c2915abff53f0a3c108da02ef19f5e632195669d14918ad7b204664cf640->leave($__internal_cd83c2915abff53f0a3c108da02ef19f5e632195669d14918ad7b204664cf640_prof);

    }

    public function getTemplateName()
    {
        return ":backend:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 47,  233 => 44,  198 => 54,  187 => 61,  185 => 59,  179 => 55,  177 => 54,  170 => 49,  168 => 47,  165 => 46,  163 => 44,  159 => 42,  153 => 41,  137 => 66,  135 => 41,  132 => 40,  126 => 39,  117 => 36,  112 => 34,  107 => 32,  103 => 31,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  79 => 23,  59 => 9,  55 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}


/* :backend:backend.html.twig */
class __TwigTemplate_6cffc5f0fccbde35ab7fed80211540a04f82250dba73aed12626289cb5beee14_362842011 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 59
        $this->parent = $this->loadTemplate(":backend:footer.html.twig", ":backend:backend.html.twig", 59);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:footer.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4cdedbb970edad7491773d7e0d57091461eda5b8bac56a5f63b2082b240c5a3b = $this->env->getExtension("native_profiler");
        $__internal_4cdedbb970edad7491773d7e0d57091461eda5b8bac56a5f63b2082b240c5a3b->enter($__internal_4cdedbb970edad7491773d7e0d57091461eda5b8bac56a5f63b2082b240c5a3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:backend.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cdedbb970edad7491773d7e0d57091461eda5b8bac56a5f63b2082b240c5a3b->leave($__internal_4cdedbb970edad7491773d7e0d57091461eda5b8bac56a5f63b2082b240c5a3b_prof);

    }

    public function getTemplateName()
    {
        return ":backend:backend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  325 => 59,  279 => 47,  233 => 44,  198 => 54,  187 => 61,  185 => 59,  179 => 55,  177 => 54,  170 => 49,  168 => 47,  165 => 46,  163 => 44,  159 => 42,  153 => 41,  137 => 66,  135 => 41,  132 => 40,  126 => 39,  117 => 36,  112 => 34,  107 => 32,  103 => 31,  98 => 29,  93 => 27,  88 => 25,  85 => 24,  79 => 23,  59 => 9,  55 => 8,  49 => 5,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('web/fonts/css/font-awesome.min.css')}}" rel="stylesheet">*/
/*     <link href="{{ asset('web/css/animate.min.css')}}" rel="stylesheet">*/
/* */
/*     <!-- Custom styling plus plugins -->*/
/*     <link href="{{ asset('web/bundles/backend/css/custom.css')}}" rel="stylesheet">*/
/*     <link href="{{ asset('web/css/icheck/flat/green.css')}}" rel="stylesheet">*/
/* */
/*     <!--[if lt IE 9]>*/
/*        <script src="../assets/js/ie8-responsive-file-warning.js"></script>*/
/*        <![endif]-->*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*           <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*           <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*         <![endif]-->*/
/* */
/* {%endblock stylesheets %}   */
/* */
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
/*     <script src="{{ asset('web/bundles/backend/js/custom.js') }}"></script>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container body">*/
/*         {% block content %}*/
/*         <div class="main_container">*/
/* */
/*             {% embed ":backend:navsidebar.html.twig" %}*/
/*             {% endembed %}*/
/* */
/*             {% embed ":backend:topnav.html.twig" %}*/
/*             {% endembed %}*/
/*             */
/*             <!-- page content -->*/
/*             <div class="right_col" role="main">*/
/*                 <div class="">*/
/* */
/*                 {% block page %}{% endblock page %}*/
/* */
/* */
/*             </div>*/
/* */
/*             {% embed ":backend:footer.html.twig" %}*/
/*             {% endembed %}*/
/* */
/*         </div>*/
/*         <!-- /page content -->*/
/*     </div>*/
/* {% endblock content %}*/
/* </div>*/
/* */
/* <div id="custom_notifications" class="custom-notifications dsp_none">*/
/*     <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">*/
/*     </ul>*/
/*     <div class="clearfix"></div>*/
/*     <div id="notif-group" class="tabbed_notifications"></div>*/
/* </div>*/
/* */
/* {% endblock body %}*/
