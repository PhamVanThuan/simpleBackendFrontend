<?php

/* security/login.html.twig */
class __TwigTemplate_861c1fa6d4c9b85d120beda7090c6bf80c54d7cd0f5c8d64fd733d2ff2628558 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":security:layoutc.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":security:layoutc.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cad5cfbcb607e557ae54d8c60c77ed72a915cb72ef18f6a82afc9ebc27c9b2d3 = $this->env->getExtension("native_profiler");
        $__internal_cad5cfbcb607e557ae54d8c60c77ed72a915cb72ef18f6a82afc9ebc27c9b2d3->enter($__internal_cad5cfbcb607e557ae54d8c60c77ed72a915cb72ef18f6a82afc9ebc27c9b2d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cad5cfbcb607e557ae54d8c60c77ed72a915cb72ef18f6a82afc9ebc27c9b2d3->leave($__internal_cad5cfbcb607e557ae54d8c60c77ed72a915cb72ef18f6a82afc9ebc27c9b2d3_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_358f47c34243d91a32606303532db49f2472fe065d01ce5bab08c5c00ef3a17e = $this->env->getExtension("native_profiler");
        $__internal_358f47c34243d91a32606303532db49f2472fe065d01ce5bab08c5c00ef3a17e->enter($__internal_358f47c34243d91a32606303532db49f2472fe065d01ce5bab08c5c00ef3a17e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("web/css/login_css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">
";
        
        $__internal_358f47c34243d91a32606303532db49f2472fe065d01ce5bab08c5c00ef3a17e->leave($__internal_358f47c34243d91a32606303532db49f2472fe065d01ce5bab08c5c00ef3a17e_prof);

    }

    // line 9
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c7278706994128e46e25fd06fea14bdc6fd7f148bceb08c2cba6fb4e939925bc = $this->env->getExtension("native_profiler");
        $__internal_c7278706994128e46e25fd06fea14bdc6fd7f148bceb08c2cba6fb4e939925bc->enter($__internal_c7278706994128e46e25fd06fea14bdc6fd7f148bceb08c2cba6fb4e939925bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 10
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "    <div id=\"fullscreen_bg\" class=\"fullscreen_bg\"/>

    <div class=\"container\">
        <form action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\" class=\"form-signin\">
            ";
        // line 18
        echo "            ";
        // line 19
        echo "            <h1 class=\"form-signin-heading text-muted\">Sign In</h1>
            ";
        // line 21
        echo "            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Email address\" required=\"\" autofocus=\"\"/>

            ";
        // line 24
        echo "            <input type=\"password\" id=\"password\" name=\"_password\"  class=\"form-control\" placeholder=\"Password\" required=\"\">

            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" class=\"form-control\" value=\"on\" />
            ";
        // line 28
        echo "
            <button type=\"submit\"  class=\"btn btn-lg btn-primary btn-block\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" >
                Sing in
            </button>
        </form>
    </div>
";
        
        $__internal_c7278706994128e46e25fd06fea14bdc6fd7f148bceb08c2cba6fb4e939925bc->leave($__internal_c7278706994128e46e25fd06fea14bdc6fd7f148bceb08c2cba6fb4e939925bc_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 29,  91 => 28,  86 => 24,  80 => 21,  77 => 19,  75 => 18,  71 => 16,  66 => 13,  60 => 11,  57 => 10,  51 => 9,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":security:layoutc.html.twig" %}*/
/* */
/* {% block stylesheets %}*/
/*     <link href="{{ asset('web/css/login_css.css') }}" rel="stylesheet" media="screen">*/
/* {%endblock stylesheets %}     */
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div id="fullscreen_bg" class="fullscreen_bg"/>*/
/* */
/*     <div class="container">*/
/*         <form action="{{ path("fos_user_security_check") }}" method="post" class="form-signin">*/
/*             {#<input type="hidden" name="_csrf_token" value="{{form_rest(form) }}" />#}*/
/*             {#<input type="hidden" name="_csrf_token" value="{% render('BackendBundle:SecurityController:getToken') %}" />#}*/
/*             <h1 class="form-signin-heading text-muted">Sign In</h1>*/
/*             {# <label for="username">{{ 'security.login.username'|trans }}</label>#}*/
/*             <input type="text" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Email address" required="" autofocus=""/>*/
/* */
/*             {# <label for="password">{{ 'security.login.password'|trans }}</label>#}*/
/*             <input type="password" id="password" name="_password"  class="form-control" placeholder="Password" required="">*/
/* */
/*             <input type="checkbox" id="remember_me" name="_remember_me" class="form-control" value="on" />*/
/*             {#  <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>#}*/
/* */
/*             <button type="submit"  class="btn btn-lg btn-primary btn-block" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" >*/
/*                 Sing in*/
/*             </button>*/
/*         </form>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
