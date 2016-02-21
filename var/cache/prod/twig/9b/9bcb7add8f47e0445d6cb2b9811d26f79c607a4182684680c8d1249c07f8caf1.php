<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_2287e4f763ef01ef563d29e1978c334f75560aee1e78de6c37826c4d4fcfa359 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a3b0a85b704d684bdd8308bc4dde5e6e38010babb54e7ac58982ac036a6201e = $this->env->getExtension("native_profiler");
        $__internal_7a3b0a85b704d684bdd8308bc4dde5e6e38010babb54e7ac58982ac036a6201e->enter($__internal_7a3b0a85b704d684bdd8308bc4dde5e6e38010babb54e7ac58982ac036a6201e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7a3b0a85b704d684bdd8308bc4dde5e6e38010babb54e7ac58982ac036a6201e->leave($__internal_7a3b0a85b704d684bdd8308bc4dde5e6e38010babb54e7ac58982ac036a6201e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0482ece6e5423eaa8e2ac3e851ecbecf0c55078cba79c5b979ba585911607bab = $this->env->getExtension("native_profiler");
        $__internal_0482ece6e5423eaa8e2ac3e851ecbecf0c55078cba79c5b979ba585911607bab->enter($__internal_0482ece6e5423eaa8e2ac3e851ecbecf0c55078cba79c5b979ba585911607bab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0482ece6e5423eaa8e2ac3e851ecbecf0c55078cba79c5b979ba585911607bab->leave($__internal_0482ece6e5423eaa8e2ac3e851ecbecf0c55078cba79c5b979ba585911607bab_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9ab0ae96efee8153a81cf5d916c7a88315a965c3f3ac2cf750ec45de2153181f = $this->env->getExtension("native_profiler");
        $__internal_9ab0ae96efee8153a81cf5d916c7a88315a965c3f3ac2cf750ec45de2153181f->enter($__internal_9ab0ae96efee8153a81cf5d916c7a88315a965c3f3ac2cf750ec45de2153181f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9ab0ae96efee8153a81cf5d916c7a88315a965c3f3ac2cf750ec45de2153181f->leave($__internal_9ab0ae96efee8153a81cf5d916c7a88315a965c3f3ac2cf750ec45de2153181f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d68f8f79cb49033ae488b69154f2ac0a7303e539c92f439267f81eac8544aa1a = $this->env->getExtension("native_profiler");
        $__internal_d68f8f79cb49033ae488b69154f2ac0a7303e539c92f439267f81eac8544aa1a->enter($__internal_d68f8f79cb49033ae488b69154f2ac0a7303e539c92f439267f81eac8544aa1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d68f8f79cb49033ae488b69154f2ac0a7303e539c92f439267f81eac8544aa1a->leave($__internal_d68f8f79cb49033ae488b69154f2ac0a7303e539c92f439267f81eac8544aa1a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
