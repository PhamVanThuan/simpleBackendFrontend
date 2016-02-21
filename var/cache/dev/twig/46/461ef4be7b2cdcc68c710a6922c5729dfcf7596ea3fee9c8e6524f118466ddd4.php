<?php

/* service/edit.html.twig */
class __TwigTemplate_c369abc05f9f186b48a37485faf77085633978a4882ca336085478908cb40134 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":crud:edit.html.twig", "service/edit.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":crud:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_509ec6e35300d7f9b2651b5a07491f34daf0abf4f45525dd3d607695830946be = $this->env->getExtension("native_profiler");
        $__internal_509ec6e35300d7f9b2651b5a07491f34daf0abf4f45525dd3d607695830946be->enter($__internal_509ec6e35300d7f9b2651b5a07491f34daf0abf4f45525dd3d607695830946be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_509ec6e35300d7f9b2651b5a07491f34daf0abf4f45525dd3d607695830946be->leave($__internal_509ec6e35300d7f9b2651b5a07491f34daf0abf4f45525dd3d607695830946be_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_045705327880d87998437b9804cf73cfe832f893ef00f17ffa8203d05712d435 = $this->env->getExtension("native_profiler");
        $__internal_045705327880d87998437b9804cf73cfe832f893ef00f17ffa8203d05712d435->enter($__internal_045705327880d87998437b9804cf73cfe832f893ef00f17ffa8203d05712d435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "Service edit";
        
        $__internal_045705327880d87998437b9804cf73cfe832f893ef00f17ffa8203d05712d435->leave($__internal_045705327880d87998437b9804cf73cfe832f893ef00f17ffa8203d05712d435_prof);

    }

    // line 5
    public function block_return($context, array $blocks = array())
    {
        $__internal_6d4eedb22aa9e179c6412adb49a0d3ee3362da2758b2be23d6649b26a8a5c45a = $this->env->getExtension("native_profiler");
        $__internal_6d4eedb22aa9e179c6412adb49a0d3ee3362da2758b2be23d6649b26a8a5c45a->enter($__internal_6d4eedb22aa9e179c6412adb49a0d3ee3362da2758b2be23d6649b26a8a5c45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        echo $this->env->getExtension('routing')->getPath("service_index");
        
        $__internal_6d4eedb22aa9e179c6412adb49a0d3ee3362da2758b2be23d6649b26a8a5c45a->leave($__internal_6d4eedb22aa9e179c6412adb49a0d3ee3362da2758b2be23d6649b26a8a5c45a_prof);

    }

    public function getTemplateName()
    {
        return "service/edit.html.twig";
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
/* {% extends ':crud:edit.html.twig' %}*/
/* */
/* {% block pagetitle %}Service edit{%endblock pagetitle %} */
/* */
/* {% block return %}{{ path('service_index') }}{% endblock return %}*/
