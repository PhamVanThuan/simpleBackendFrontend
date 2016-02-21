<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_1f551ebfa038892fb5fa002c7438925a7e7fcc06f8fa39c0b36facb4accf749f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":front:simple_layout.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":front:simple_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8cc5c0e2e44903c4ec5188707be9977707e1700d9ab64dbcceff4dbcc858a30e = $this->env->getExtension("native_profiler");
        $__internal_8cc5c0e2e44903c4ec5188707be9977707e1700d9ab64dbcceff4dbcc858a30e->enter($__internal_8cc5c0e2e44903c4ec5188707be9977707e1700d9ab64dbcceff4dbcc858a30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cc5c0e2e44903c4ec5188707be9977707e1700d9ab64dbcceff4dbcc858a30e->leave($__internal_8cc5c0e2e44903c4ec5188707be9977707e1700d9ab64dbcceff4dbcc858a30e_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a926b9872bf6fa5539ddff9f6f3f6ea757813dcfb5d2a51973df5129a6318db0 = $this->env->getExtension("native_profiler");
        $__internal_a926b9872bf6fa5539ddff9f6f3f6ea757813dcfb5d2a51973df5129a6318db0->enter($__internal_a926b9872bf6fa5539ddff9f6f3f6ea757813dcfb5d2a51973df5129a6318db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    Index page
";
        
        $__internal_a926b9872bf6fa5539ddff9f6f3f6ea757813dcfb5d2a51973df5129a6318db0->leave($__internal_a926b9872bf6fa5539ddff9f6f3f6ea757813dcfb5d2a51973df5129a6318db0_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ':front:simple_layout.html.twig' %}*/
/* */
/* {% block content %}*/
/*     Index page*/
/* {% endblock content %}*/
/* */
