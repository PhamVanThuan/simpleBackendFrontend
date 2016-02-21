<?php

/* :crud:edit.html.twig */
class __TwigTemplate_e691c4b6e3b9b61710d8f05feaceb688f1409802cc6a201c0df092592b3d9a34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:backend.html.twig", ":crud:edit.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7fd353c00c8bdfd0a0f5a138c6d8cf4224a071a83d1b4dd5161847deb8281a1a = $this->env->getExtension("native_profiler");
        $__internal_7fd353c00c8bdfd0a0f5a138c6d8cf4224a071a83d1b4dd5161847deb8281a1a->enter($__internal_7fd353c00c8bdfd0a0f5a138c6d8cf4224a071a83d1b4dd5161847deb8281a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":crud:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fd353c00c8bdfd0a0f5a138c6d8cf4224a071a83d1b4dd5161847deb8281a1a->leave($__internal_7fd353c00c8bdfd0a0f5a138c6d8cf4224a071a83d1b4dd5161847deb8281a1a_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_ab9d855eb0830dc7c196e69413908dc88013d552c8e22c73149debbd1b6f6653 = $this->env->getExtension("native_profiler");
        $__internal_ab9d855eb0830dc7c196e69413908dc88013d552c8e22c73149debbd1b6f6653->enter($__internal_ab9d855eb0830dc7c196e69413908dc88013d552c8e22c73149debbd1b6f6653_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

                    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "                    
                    <button id=\"edit\" class=\"hidden\" type=\"submit\" class=\"btn btn-sm btn-info\"> 
                        Edit
                    </button>
                    ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button id=\"del\" class=\"hidden\" type=\"submit\" class=\"btn btn-sm btn-info\"> 
                        Delete
                    </button>
                    ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                    ";
        // line 34
        echo "                    
                     <a href=\"";
        // line 35
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
        
        $__internal_ab9d855eb0830dc7c196e69413908dc88013d552c8e22c73149debbd1b6f6653->leave($__internal_ab9d855eb0830dc7c196e69413908dc88013d552c8e22c73149debbd1b6f6653_prof);

    }

    // line 8
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_13b1f4239ca8d2ea01ea6cd41418ba9616f4927dfc11cb51c0ca14b2d17a302b = $this->env->getExtension("native_profiler");
        $__internal_13b1f4239ca8d2ea01ea6cd41418ba9616f4927dfc11cb51c0ca14b2d17a302b->enter($__internal_13b1f4239ca8d2ea01ea6cd41418ba9616f4927dfc11cb51c0ca14b2d17a302b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_13b1f4239ca8d2ea01ea6cd41418ba9616f4927dfc11cb51c0ca14b2d17a302b->leave($__internal_13b1f4239ca8d2ea01ea6cd41418ba9616f4927dfc11cb51c0ca14b2d17a302b_prof);

    }

    // line 35
    public function block_return($context, array $blocks = array())
    {
        $__internal_e8db32fe9f8e8f780741a6129ecc10e3ef74af4381e5089c75a59ef7bf664ffc = $this->env->getExtension("native_profiler");
        $__internal_e8db32fe9f8e8f780741a6129ecc10e3ef74af4381e5089c75a59ef7bf664ffc->enter($__internal_e8db32fe9f8e8f780741a6129ecc10e3ef74af4381e5089c75a59ef7bf664ffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        
        $__internal_e8db32fe9f8e8f780741a6129ecc10e3ef74af4381e5089c75a59ef7bf664ffc->leave($__internal_e8db32fe9f8e8f780741a6129ecc10e3ef74af4381e5089c75a59ef7bf664ffc_prof);

    }

    public function getTemplateName()
    {
        return ":crud:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  108 => 8,  89 => 35,  86 => 34,  81 => 26,  74 => 22,  69 => 20,  62 => 16,  57 => 14,  48 => 8,  42 => 4,  36 => 3,  11 => 1,);
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
/*                     {{ form_start(edit_form) }}*/
/* */
/*                     {{ form_widget(edit_form) }}                    */
/*                     <button id="edit" class="hidden" type="submit" class="btn btn-sm btn-info"> */
/*                         Edit*/
/*                     </button>*/
/*                     {{ form_end(edit_form) }}*/
/* */
/*                     {{ form_start(delete_form) }}*/
/*                     <button id="del" class="hidden" type="submit" class="btn btn-sm btn-info"> */
/*                         Delete*/
/*                     </button>*/
/*                     {{ form_end(delete_form) }}*/
/* */
/*                     {#<button id="editV"  type="button" class="btn btn-sm btn-success" onClick="$('#edit').click();"> */
/*                         Edit*/
/*                     </button>*/
/*                     <button id="delV"  type="button" class="btn btn-sm btn-danger" onClick="$('#del').click();"> */
/*                         Delete*/
/*                     </button>#}*/
/*                     */
/*                      <a href="{% block return %}{% endblock return %}">*/
/*                        <button id="back"  type="button" class="btn btn-sm btn-info" > */
/*                        <i class="fa fa-reply-all"></i> */
/*                     </button>*/
/* </a>*/
/* */
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock page %}*/
/* */
/* */
