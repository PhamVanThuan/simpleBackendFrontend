<?php

/* service/index.html.twig */
class __TwigTemplate_6961aa6c161622800a5c3c08af8739adde3aa38ccd7bb5fa8f260e20b7686883 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":crud:select.html.twig", "service/index.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'newelement_path' => array($this, 'block_newelement_path'),
            'newelement_text' => array($this, 'block_newelement_text'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":crud:select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a3aa484e8ca4fb2924490254521fdef54439c85e87f490197df45eaaefa70888 = $this->env->getExtension("native_profiler");
        $__internal_a3aa484e8ca4fb2924490254521fdef54439c85e87f490197df45eaaefa70888->enter($__internal_a3aa484e8ca4fb2924490254521fdef54439c85e87f490197df45eaaefa70888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3aa484e8ca4fb2924490254521fdef54439c85e87f490197df45eaaefa70888->leave($__internal_a3aa484e8ca4fb2924490254521fdef54439c85e87f490197df45eaaefa70888_prof);

    }

    // line 2
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_66b7f44ac6cbf4a60e70d0982b39b02762cbb628b600e5b3bc272f9a9039ab1b = $this->env->getExtension("native_profiler");
        $__internal_66b7f44ac6cbf4a60e70d0982b39b02762cbb628b600e5b3bc272f9a9039ab1b->enter($__internal_66b7f44ac6cbf4a60e70d0982b39b02762cbb628b600e5b3bc272f9a9039ab1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "Services List";
        
        $__internal_66b7f44ac6cbf4a60e70d0982b39b02762cbb628b600e5b3bc272f9a9039ab1b->leave($__internal_66b7f44ac6cbf4a60e70d0982b39b02762cbb628b600e5b3bc272f9a9039ab1b_prof);

    }

    // line 3
    public function block_newelement_path($context, array $blocks = array())
    {
        $__internal_a60d8d8fad6268db987def4dca361f6f403b683f64ed9d8a7bc1f215c55eae54 = $this->env->getExtension("native_profiler");
        $__internal_a60d8d8fad6268db987def4dca361f6f403b683f64ed9d8a7bc1f215c55eae54->enter($__internal_a60d8d8fad6268db987def4dca361f6f403b683f64ed9d8a7bc1f215c55eae54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newelement_path"));

        echo $this->env->getExtension('routing')->getPath("service_new");
        
        $__internal_a60d8d8fad6268db987def4dca361f6f403b683f64ed9d8a7bc1f215c55eae54->leave($__internal_a60d8d8fad6268db987def4dca361f6f403b683f64ed9d8a7bc1f215c55eae54_prof);

    }

    // line 4
    public function block_newelement_text($context, array $blocks = array())
    {
        $__internal_0b80c08f2bfaedbd7bbf30fd4ea5bd5d65d9a034e57be9e6fe27e306da4cd57b = $this->env->getExtension("native_profiler");
        $__internal_0b80c08f2bfaedbd7bbf30fd4ea5bd5d65d9a034e57be9e6fe27e306da4cd57b->enter($__internal_0b80c08f2bfaedbd7bbf30fd4ea5bd5d65d9a034e57be9e6fe27e306da4cd57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newelement_text"));

        echo "Nuevo servicio";
        
        $__internal_0b80c08f2bfaedbd7bbf30fd4ea5bd5d65d9a034e57be9e6fe27e306da4cd57b->leave($__internal_0b80c08f2bfaedbd7bbf30fd4ea5bd5d65d9a034e57be9e6fe27e306da4cd57b_prof);

    }

    public function getTemplateName()
    {
        return "service/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 4,  48 => 3,  36 => 2,  11 => 1,);
    }
}
/* {% extends ':crud:select.html.twig' %}*/
/* {% block pagetitle %}Services List{%endblock pagetitle %} */
/* {%block newelement_path %}{{ path('service_new') }}{% endblock newelement_path %}*/
/* {%block newelement_text %}Nuevo servicio{% endblock newelement_text %}*/
/* */
