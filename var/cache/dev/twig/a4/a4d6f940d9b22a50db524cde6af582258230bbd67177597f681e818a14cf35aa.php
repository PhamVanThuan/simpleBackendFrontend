<?php

/* :backend:page.html.twig */
class __TwigTemplate_3692f3e305bfd3c11ab2a8460607109e2f49e808cfaeea144bbdba15006a43d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'pagecontent' => array($this, 'block_pagecontent'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08f8fb31a4eb4aabcd21eaef2972d8f0779d851dfc12368ca027f86eab5790fd = $this->env->getExtension("native_profiler");
        $__internal_08f8fb31a4eb4aabcd21eaef2972d8f0779d851dfc12368ca027f86eab5790fd->enter($__internal_08f8fb31a4eb4aabcd21eaef2972d8f0779d851dfc12368ca027f86eab5790fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:page.html.twig"));

        // line 1
        echo "<div class=\"page-title\">
    <div class=\"title_left\">
      <h3> ";
        // line 3
        $this->displayBlock('pagetitle', $context, $blocks);
        echo "  </h3>
    </div>

</div>
<div class=\"clearfix\"></div>

<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"x_panel\">

            <div class=\"x_content\">

";
        // line 15
        $this->displayBlock('pagecontent', $context, $blocks);
        echo " 
               

            </div>
        </div>
    </div>


    <div class=\"clearfix\"></div>
</div>";
        
        $__internal_08f8fb31a4eb4aabcd21eaef2972d8f0779d851dfc12368ca027f86eab5790fd->leave($__internal_08f8fb31a4eb4aabcd21eaef2972d8f0779d851dfc12368ca027f86eab5790fd_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_852055498697e7b34e5d269bbfb73f7c09264b5c734b5ec5c8e9676ca92bafac = $this->env->getExtension("native_profiler");
        $__internal_852055498697e7b34e5d269bbfb73f7c09264b5c734b5ec5c8e9676ca92bafac->enter($__internal_852055498697e7b34e5d269bbfb73f7c09264b5c734b5ec5c8e9676ca92bafac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_852055498697e7b34e5d269bbfb73f7c09264b5c734b5ec5c8e9676ca92bafac->leave($__internal_852055498697e7b34e5d269bbfb73f7c09264b5c734b5ec5c8e9676ca92bafac_prof);

    }

    // line 15
    public function block_pagecontent($context, array $blocks = array())
    {
        $__internal_814a7870d504af3b12b08ee95beaee00afb00bef64ef9ab1dc69ccbf8749999e = $this->env->getExtension("native_profiler");
        $__internal_814a7870d504af3b12b08ee95beaee00afb00bef64ef9ab1dc69ccbf8749999e->enter($__internal_814a7870d504af3b12b08ee95beaee00afb00bef64ef9ab1dc69ccbf8749999e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagecontent"));

        
        $__internal_814a7870d504af3b12b08ee95beaee00afb00bef64ef9ab1dc69ccbf8749999e->leave($__internal_814a7870d504af3b12b08ee95beaee00afb00bef64ef9ab1dc69ccbf8749999e_prof);

    }

    public function getTemplateName()
    {
        return ":backend:page.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  71 => 15,  60 => 3,  43 => 15,  28 => 3,  24 => 1,);
    }
}
/* <div class="page-title">*/
/*     <div class="title_left">*/
/*       <h3> {% block pagetitle %}{%endblock pagetitle %}  </h3>*/
/*     </div>*/
/* */
/* </div>*/
/* <div class="clearfix"></div>*/
/* */
/* <div class="row">*/
/*     <div class="col-md-12">*/
/*         <div class="x_panel">*/
/* */
/*             <div class="x_content">*/
/* */
/* {% block pagecontent %}{%endblock pagecontent %} */
/*                */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="clearfix"></div>*/
/* </div>*/
