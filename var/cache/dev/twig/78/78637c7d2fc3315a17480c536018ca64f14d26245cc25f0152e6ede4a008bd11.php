<?php

/* :crud:new.html.twig */
class __TwigTemplate_78a57ac01174e46d884f9cb41f28531dee0ec3edbe49b974875ee6e9b8c97147 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:backend.html.twig", ":crud:new.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'newBtnText' => array($this, 'block_newBtnText'),
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc19c3c3a7567a11645798fdf60b7529da914ad060d399340dec741e4e157948 = $this->env->getExtension("native_profiler");
        $__internal_cc19c3c3a7567a11645798fdf60b7529da914ad060d399340dec741e4e157948->enter($__internal_cc19c3c3a7567a11645798fdf60b7529da914ad060d399340dec741e4e157948_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":crud:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc19c3c3a7567a11645798fdf60b7529da914ad060d399340dec741e4e157948->leave($__internal_cc19c3c3a7567a11645798fdf60b7529da914ad060d399340dec741e4e157948_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_92abad2ec2767a081aff60de932e9c7b1096e61f46831845e74342d823e14c90 = $this->env->getExtension("native_profiler");
        $__internal_92abad2ec2767a081aff60de932e9c7b1096e61f46831845e74342d823e14c90->enter($__internal_92abad2ec2767a081aff60de932e9c7b1096e61f46831845e74342d823e14c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"x_panel \" >
                <div class=\"x_title\">
                    <h2>";
        // line 8
        $this->displayBlock('pagetitle', $context, $blocks);
        echo " </h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">

                    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                    <button id=\"new\" class=\"hidden\"  type=\"submit\" value=\"Create\" />
                    ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                    <button id=\"newV\" type=\"button\" class=\"btn btn-sm btn-success\" onClick=\"\$('#new').click();\"> 
                        ";
        // line 20
        $this->displayBlock('newBtnText', $context, $blocks);
        // line 21
        echo "                    </button>

                    <a href=\"";
        // line 23
        $this->displayBlock('return', $context, $blocks);
        echo "\">
                        <button id=\"back\"  type=\"button\" class=\"btn btn-sm btn-info\" > 
                            <i class=\"fa fa-reply-all\"></i> 
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_92abad2ec2767a081aff60de932e9c7b1096e61f46831845e74342d823e14c90->leave($__internal_92abad2ec2767a081aff60de932e9c7b1096e61f46831845e74342d823e14c90_prof);

    }

    // line 8
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_79008506842c3084e20383c44f16c155f051e73678846755ed99bad423e3b192 = $this->env->getExtension("native_profiler");
        $__internal_79008506842c3084e20383c44f16c155f051e73678846755ed99bad423e3b192->enter($__internal_79008506842c3084e20383c44f16c155f051e73678846755ed99bad423e3b192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_79008506842c3084e20383c44f16c155f051e73678846755ed99bad423e3b192->leave($__internal_79008506842c3084e20383c44f16c155f051e73678846755ed99bad423e3b192_prof);

    }

    // line 20
    public function block_newBtnText($context, array $blocks = array())
    {
        $__internal_8255f10f141424004d1b7a75cb56ce4ee35f81ee434de95e9494746e16340a03 = $this->env->getExtension("native_profiler");
        $__internal_8255f10f141424004d1b7a75cb56ce4ee35f81ee434de95e9494746e16340a03->enter($__internal_8255f10f141424004d1b7a75cb56ce4ee35f81ee434de95e9494746e16340a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newBtnText"));

        echo "Crear";
        
        $__internal_8255f10f141424004d1b7a75cb56ce4ee35f81ee434de95e9494746e16340a03->leave($__internal_8255f10f141424004d1b7a75cb56ce4ee35f81ee434de95e9494746e16340a03_prof);

    }

    // line 23
    public function block_return($context, array $blocks = array())
    {
        $__internal_0fd6c29b8845312d3920bec56440de96deb3f43e620b3bdee194266251f8624d = $this->env->getExtension("native_profiler");
        $__internal_0fd6c29b8845312d3920bec56440de96deb3f43e620b3bdee194266251f8624d->enter($__internal_0fd6c29b8845312d3920bec56440de96deb3f43e620b3bdee194266251f8624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        
        $__internal_0fd6c29b8845312d3920bec56440de96deb3f43e620b3bdee194266251f8624d->leave($__internal_0fd6c29b8845312d3920bec56440de96deb3f43e620b3bdee194266251f8624d_prof);

    }

    public function getTemplateName()
    {
        return ":crud:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 23,  109 => 20,  98 => 8,  79 => 23,  75 => 21,  73 => 20,  67 => 17,  62 => 15,  58 => 14,  49 => 8,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends ':backend:backend.html.twig' %}*/
/* */
/* {% block page %}*/
/*     <div class="row">*/
/*         <div class="col-md-12">*/
/*             <div class="x_panel " >*/
/*                 <div class="x_title">*/
/*                     <h2>{% block pagetitle %}{%endblock pagetitle %} </h2>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/* */
/*                 <div class="x_content">*/
/* */
/*                     {{ form_start(form) }}*/
/*                     {{ form_widget(form) }}*/
/*                     <button id="new" class="hidden"  type="submit" value="Create" />*/
/*                     {{ form_end(form) }}*/
/* */
/*                     <button id="newV" type="button" class="btn btn-sm btn-success" onClick="$('#new').click();"> */
/*                         {% block newBtnText %}Crear{% endblock newBtnText %}*/
/*                     </button>*/
/* */
/*                     <a href="{% block return %}{% endblock return %}">*/
/*                         <button id="back"  type="button" class="btn btn-sm btn-info" > */
/*                             <i class="fa fa-reply-all"></i> */
/*                         </button>*/
/*                     </a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page %}*/
/* */
/* */
