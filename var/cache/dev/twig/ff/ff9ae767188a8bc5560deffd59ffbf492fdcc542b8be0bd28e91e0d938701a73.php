<?php

/* service/show.html.twig */
class __TwigTemplate_84c207362b169096e231022a958512359a60130769f8f5252be44c42df0ffcbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":crud:show.html.twig", "service/show.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'return' => array($this, 'block_return'),
            'edit' => array($this, 'block_edit'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":crud:show.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ca97185e737444f9a70577c9d34f21cdf21ae466c4f27e86ab842e0653087ea1 = $this->env->getExtension("native_profiler");
        $__internal_ca97185e737444f9a70577c9d34f21cdf21ae466c4f27e86ab842e0653087ea1->enter($__internal_ca97185e737444f9a70577c9d34f21cdf21ae466c4f27e86ab842e0653087ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "service/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca97185e737444f9a70577c9d34f21cdf21ae466c4f27e86ab842e0653087ea1->leave($__internal_ca97185e737444f9a70577c9d34f21cdf21ae466c4f27e86ab842e0653087ea1_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_e76420425fac995ef634253d0715825a07b513405ccd21d2c87f60f430236349 = $this->env->getExtension("native_profiler");
        $__internal_e76420425fac995ef634253d0715825a07b513405ccd21d2c87f60f430236349->enter($__internal_e76420425fac995ef634253d0715825a07b513405ccd21d2c87f60f430236349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "Service details";
        
        $__internal_e76420425fac995ef634253d0715825a07b513405ccd21d2c87f60f430236349->leave($__internal_e76420425fac995ef634253d0715825a07b513405ccd21d2c87f60f430236349_prof);

    }

    // line 5
    public function block_return($context, array $blocks = array())
    {
        $__internal_f033f48b2c978019acbd59aa8e00eeccb75150d935c7fb7d6ad01b77eb6a7d0f = $this->env->getExtension("native_profiler");
        $__internal_f033f48b2c978019acbd59aa8e00eeccb75150d935c7fb7d6ad01b77eb6a7d0f->enter($__internal_f033f48b2c978019acbd59aa8e00eeccb75150d935c7fb7d6ad01b77eb6a7d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        echo $this->env->getExtension('routing')->getPath("service_index");
        
        $__internal_f033f48b2c978019acbd59aa8e00eeccb75150d935c7fb7d6ad01b77eb6a7d0f->leave($__internal_f033f48b2c978019acbd59aa8e00eeccb75150d935c7fb7d6ad01b77eb6a7d0f_prof);

    }

    // line 7
    public function block_edit($context, array $blocks = array())
    {
        $__internal_ed62ada955bfc9f4e566b14df162feddbd9f40243293c141c93160833340d690 = $this->env->getExtension("native_profiler");
        $__internal_ed62ada955bfc9f4e566b14df162feddbd9f40243293c141c93160833340d690->enter($__internal_ed62ada955bfc9f4e566b14df162feddbd9f40243293c141c93160833340d690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute((isset($context["service"]) ? $context["service"] : $this->getContext($context, "service")), "id", array()))), "html", null, true);
        
        $__internal_ed62ada955bfc9f4e566b14df162feddbd9f40243293c141c93160833340d690->leave($__internal_ed62ada955bfc9f4e566b14df162feddbd9f40243293c141c93160833340d690_prof);

    }

    public function getTemplateName()
    {
        return "service/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ':crud:show.html.twig' %}*/
/* */
/* {% block pagetitle %}Service details{%endblock pagetitle %} */
/* */
/* {% block return %}{{ path('service_index') }}{% endblock return %}*/
/* */
/* {% block edit %}{{ path('service_edit', { 'id': service.id }) }}{% endblock edit %}*/
/* */
