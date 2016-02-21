<?php

/* service/new.html.twig */
class __TwigTemplate_4b261668f6c7ff7e213d90b6d114bc5162aa53c58d249c8c7b42423902535e9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":crud:new.html.twig", "service/new.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":crud:new.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b52156b9a40e0c1b5ed8ef251d31d804407b5faf92d3d961b106c664f9903047 = $this->env->getExtension("native_profiler");
        $__internal_b52156b9a40e0c1b5ed8ef251d31d804407b5faf92d3d961b106c664f9903047->enter($__internal_b52156b9a40e0c1b5ed8ef251d31d804407b5faf92d3d961b106c664f9903047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b52156b9a40e0c1b5ed8ef251d31d804407b5faf92d3d961b106c664f9903047->leave($__internal_b52156b9a40e0c1b5ed8ef251d31d804407b5faf92d3d961b106c664f9903047_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_23c96e802af282c3c4d50e6681f55c656aba57eaf20b8206f4c80e216f2858a2 = $this->env->getExtension("native_profiler");
        $__internal_23c96e802af282c3c4d50e6681f55c656aba57eaf20b8206f4c80e216f2858a2->enter($__internal_23c96e802af282c3c4d50e6681f55c656aba57eaf20b8206f4c80e216f2858a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "Nuevo Servicio";
        
        $__internal_23c96e802af282c3c4d50e6681f55c656aba57eaf20b8206f4c80e216f2858a2->leave($__internal_23c96e802af282c3c4d50e6681f55c656aba57eaf20b8206f4c80e216f2858a2_prof);

    }

    // line 5
    public function block_return($context, array $blocks = array())
    {
        $__internal_024825f719c9fbb77cdcca71288c00f7d68605768c12e4fa84953406c52902e6 = $this->env->getExtension("native_profiler");
        $__internal_024825f719c9fbb77cdcca71288c00f7d68605768c12e4fa84953406c52902e6->enter($__internal_024825f719c9fbb77cdcca71288c00f7d68605768c12e4fa84953406c52902e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        echo $this->env->getExtension('routing')->getPath("service_index");
        
        $__internal_024825f719c9fbb77cdcca71288c00f7d68605768c12e4fa84953406c52902e6->leave($__internal_024825f719c9fbb77cdcca71288c00f7d68605768c12e4fa84953406c52902e6_prof);

    }

    public function getTemplateName()
    {
        return "service/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ':crud:new.html.twig' %}*/
/* */
/* {% block pagetitle %}Nuevo Servicio{%endblock pagetitle %} */
/* */
/* {% block return %}{{ path('service_index') }}{% endblock return %}*/
/* */
