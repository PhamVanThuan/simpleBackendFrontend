<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_d6d21906ef145fdeaa9ae6a0d2b0b9cafd7a979e4429f65e7e7e2fa7ddf6b501 extends Twig_Template
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
        $__internal_1d12ef93ae639ca797f3b038d51eed64e632784ff53a35dbce316e3232970e08 = $this->env->getExtension("native_profiler");
        $__internal_1d12ef93ae639ca797f3b038d51eed64e632784ff53a35dbce316e3232970e08->enter($__internal_1d12ef93ae639ca797f3b038d51eed64e632784ff53a35dbce316e3232970e08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1d12ef93ae639ca797f3b038d51eed64e632784ff53a35dbce316e3232970e08->leave($__internal_1d12ef93ae639ca797f3b038d51eed64e632784ff53a35dbce316e3232970e08_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f0553b94e22732465602722fd3376197a0fd105712cc821387ccf2fd34a29c4 = $this->env->getExtension("native_profiler");
        $__internal_9f0553b94e22732465602722fd3376197a0fd105712cc821387ccf2fd34a29c4->enter($__internal_9f0553b94e22732465602722fd3376197a0fd105712cc821387ccf2fd34a29c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f0553b94e22732465602722fd3376197a0fd105712cc821387ccf2fd34a29c4->leave($__internal_9f0553b94e22732465602722fd3376197a0fd105712cc821387ccf2fd34a29c4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c08dc1c3aecd74bbc45136e8e722ab012ba7d4ad8d1a03c41e427f6b1cc77bde = $this->env->getExtension("native_profiler");
        $__internal_c08dc1c3aecd74bbc45136e8e722ab012ba7d4ad8d1a03c41e427f6b1cc77bde->enter($__internal_c08dc1c3aecd74bbc45136e8e722ab012ba7d4ad8d1a03c41e427f6b1cc77bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c08dc1c3aecd74bbc45136e8e722ab012ba7d4ad8d1a03c41e427f6b1cc77bde->leave($__internal_c08dc1c3aecd74bbc45136e8e722ab012ba7d4ad8d1a03c41e427f6b1cc77bde_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_74fe0cabb8fa2f05bb4f5599e743628aeb785f0379a4ea271347621692f43cbf = $this->env->getExtension("native_profiler");
        $__internal_74fe0cabb8fa2f05bb4f5599e743628aeb785f0379a4ea271347621692f43cbf->enter($__internal_74fe0cabb8fa2f05bb4f5599e743628aeb785f0379a4ea271347621692f43cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_74fe0cabb8fa2f05bb4f5599e743628aeb785f0379a4ea271347621692f43cbf->leave($__internal_74fe0cabb8fa2f05bb4f5599e743628aeb785f0379a4ea271347621692f43cbf_prof);

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
