<?php

/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_b0b75ffc93e370fc84b9c7df6804565e5e0de494f1732578c9ee1243547a7e48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:backend.html.twig", "BackendBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9c305522c5d2940801ef84c46fa0ce7ba64cb878bc8dfa8029af94330058d2e4 = $this->env->getExtension("native_profiler");
        $__internal_9c305522c5d2940801ef84c46fa0ce7ba64cb878bc8dfa8029af94330058d2e4->enter($__internal_9c305522c5d2940801ef84c46fa0ce7ba64cb878bc8dfa8029af94330058d2e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c305522c5d2940801ef84c46fa0ce7ba64cb878bc8dfa8029af94330058d2e4->leave($__internal_9c305522c5d2940801ef84c46fa0ce7ba64cb878bc8dfa8029af94330058d2e4_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_089f590024df2432591b9d9f1c0943cfd7fe1370e0577658e07ba0ef9e3758ef = $this->env->getExtension("native_profiler");
        $__internal_089f590024df2432591b9d9f1c0943cfd7fe1370e0577658e07ba0ef9e3758ef->enter($__internal_089f590024df2432591b9d9f1c0943cfd7fe1370e0577658e07ba0ef9e3758ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    ";
        $this->loadTemplate("BackendBundle:Default:index.html.twig", "BackendBundle:Default:index.html.twig", 4, "2062162528")->display($context);
        // line 15
        echo "
";
        
        $__internal_089f590024df2432591b9d9f1c0943cfd7fe1370e0577658e07ba0ef9e3758ef->leave($__internal_089f590024df2432591b9d9f1c0943cfd7fe1370e0577658e07ba0ef9e3758ef_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}


/* BackendBundle:Default:index.html.twig */
class __TwigTemplate_b0b75ffc93e370fc84b9c7df6804565e5e0de494f1732578c9ee1243547a7e48_2062162528 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate(":backend:page.html.twig", "BackendBundle:Default:index.html.twig", 4);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'pagecontent' => array($this, 'block_pagecontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715bb11df64448ae4cff5aff468cbfd6807262a6c45522d1e20284ab31024bdc = $this->env->getExtension("native_profiler");
        $__internal_715bb11df64448ae4cff5aff468cbfd6807262a6c45522d1e20284ab31024bdc->enter($__internal_715bb11df64448ae4cff5aff468cbfd6807262a6c45522d1e20284ab31024bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BackendBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715bb11df64448ae4cff5aff468cbfd6807262a6c45522d1e20284ab31024bdc->leave($__internal_715bb11df64448ae4cff5aff468cbfd6807262a6c45522d1e20284ab31024bdc_prof);

    }

    // line 5
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_6604d4f1128baec7243f9fd9eb9dbee4514cf4fcb1aabf4b269ad3e680d07c13 = $this->env->getExtension("native_profiler");
        $__internal_6604d4f1128baec7243f9fd9eb9dbee4514cf4fcb1aabf4b269ad3e680d07c13->enter($__internal_6604d4f1128baec7243f9fd9eb9dbee4514cf4fcb1aabf4b269ad3e680d07c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        // line 6
        echo "            Backend Index
        ";
        
        $__internal_6604d4f1128baec7243f9fd9eb9dbee4514cf4fcb1aabf4b269ad3e680d07c13->leave($__internal_6604d4f1128baec7243f9fd9eb9dbee4514cf4fcb1aabf4b269ad3e680d07c13_prof);

    }

    // line 8
    public function block_pagecontent($context, array $blocks = array())
    {
        $__internal_c505dec100b94a82ba2c2121c9bb163eb8e82200fe2ed651e046d40b3e5f8eaf = $this->env->getExtension("native_profiler");
        $__internal_c505dec100b94a82ba2c2121c9bb163eb8e82200fe2ed651e046d40b3e5f8eaf->enter($__internal_c505dec100b94a82ba2c2121c9bb163eb8e82200fe2ed651e046d40b3e5f8eaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagecontent"));

        // line 9
        echo "            <div  class=\"tab-pane fade active in\" id=\"tab_content1\" aria-labelledby=\"home-tab\">
                <p>Bienvenido a la página principal del gestor gitFpt.</p>
                <p>Desde aquí podrá gestionar sus cuentas ftp y git para realizar todas las operaciones necesarias en el frontend.</p>
            </div>
        ";
        
        $__internal_c505dec100b94a82ba2c2121c9bb163eb8e82200fe2ed651e046d40b3e5f8eaf->leave($__internal_c505dec100b94a82ba2c2121c9bb163eb8e82200fe2ed651e046d40b3e5f8eaf_prof);

    }

    public function getTemplateName()
    {
        return "BackendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 9,  113 => 8,  105 => 6,  99 => 5,  75 => 4,  43 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ':backend:backend.html.twig' %}*/
/* */
/* {% block page %}*/
/*     {% embed ":backend:page.html.twig" %}*/
/*         {% block pagetitle %}*/
/*             Backend Index*/
/*         {%endblock pagetitle %}*/
/*         {% block pagecontent %}*/
/*             <div  class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">*/
/*                 <p>Bienvenido a la página principal del gestor gitFpt.</p>*/
/*                 <p>Desde aquí podrá gestionar sus cuentas ftp y git para realizar todas las operaciones necesarias en el frontend.</p>*/
/*             </div>*/
/*         {%endblock pagecontent %} */
/*     {% endembed %}*/
/* */
/* {% endblock page %}*/
/* */
/* */
/* */
