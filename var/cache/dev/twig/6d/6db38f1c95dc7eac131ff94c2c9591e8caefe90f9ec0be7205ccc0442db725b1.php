<?php

/* :crud:show.html.twig */
class __TwigTemplate_a19b9c8e80673731bbebfb73fdad47b6a05b9d9ff5895cc0be2f7ffdd26a2855 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:backend.html.twig", ":crud:show.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'entitydata' => array($this, 'block_entitydata'),
            'edit' => array($this, 'block_edit'),
            'return' => array($this, 'block_return'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6f0e259bae343436b257ff6232dc560127d4e1ff4a679746ef6028f459f0291b = $this->env->getExtension("native_profiler");
        $__internal_6f0e259bae343436b257ff6232dc560127d4e1ff4a679746ef6028f459f0291b->enter($__internal_6f0e259bae343436b257ff6232dc560127d4e1ff4a679746ef6028f459f0291b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":crud:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f0e259bae343436b257ff6232dc560127d4e1ff4a679746ef6028f459f0291b->leave($__internal_6f0e259bae343436b257ff6232dc560127d4e1ff4a679746ef6028f459f0291b_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_7d8852fdf65859593c6375bc037d5e84039ddd5766f3cf44c322d6ba4b2766a9 = $this->env->getExtension("native_profiler");
        $__internal_7d8852fdf65859593c6375bc037d5e84039ddd5766f3cf44c322d6ba4b2766a9->enter($__internal_7d8852fdf65859593c6375bc037d5e84039ddd5766f3cf44c322d6ba4b2766a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-md-12 col-sm-12 col-xs-12\">
            <div class=\"x_panel \" >
                <div class=\"x_title\">
                    <h2>";
        // line 8
        $this->displayBlock('pagetitle', $context, $blocks);
        echo " </h2>
                    <div class=\"clearfix\"></div>
                </div>

                <div class=\"x_content\">
                    <form id=\"demo-form2\" data-parsley-validate class=\"form-horizontal form-label-left\">
                        ";
        // line 14
        $this->displayBlock('entitydata', $context, $blocks);
        // line 22
        echo "                    </form>

                    ";
        // line 24
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                    <button id=\"del\" class=\"hidden\" type=\"submit\" class=\"btn btn-sm btn-info\"> 
                        Delete
                    </button>
                    ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "

                    <a href=\"";
        // line 30
        $this->displayBlock('edit', $context, $blocks);
        echo "\"> 
                        <button id=\"editV\"  type=\"button\" class=\"btn btn-sm btn-success\"> 
                            Edit
                        </button>
                    </a>

                    <button id=\"delV\"  type=\"button\" class=\"btn btn-sm btn-danger\" onClick=\"\$('#del').click();\"> 
                        Delete
                    </button>
                    <a href=\"";
        // line 39
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
        
        $__internal_7d8852fdf65859593c6375bc037d5e84039ddd5766f3cf44c322d6ba4b2766a9->leave($__internal_7d8852fdf65859593c6375bc037d5e84039ddd5766f3cf44c322d6ba4b2766a9_prof);

    }

    // line 8
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_6687aae27c96d5f342f497a7f7342d9fdc3349be2f8eca243a5e900c443922b3 = $this->env->getExtension("native_profiler");
        $__internal_6687aae27c96d5f342f497a7f7342d9fdc3349be2f8eca243a5e900c443922b3->enter($__internal_6687aae27c96d5f342f497a7f7342d9fdc3349be2f8eca243a5e900c443922b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_6687aae27c96d5f342f497a7f7342d9fdc3349be2f8eca243a5e900c443922b3->leave($__internal_6687aae27c96d5f342f497a7f7342d9fdc3349be2f8eca243a5e900c443922b3_prof);

    }

    // line 14
    public function block_entitydata($context, array $blocks = array())
    {
        $__internal_c94227549e34fba06f6c9e932512bf30dbc5afa4a6befd5d13c9b1e451ad3a9a = $this->env->getExtension("native_profiler");
        $__internal_c94227549e34fba06f6c9e932512bf30dbc5afa4a6befd5d13c9b1e451ad3a9a->enter($__internal_c94227549e34fba06f6c9e932512bf30dbc5afa4a6befd5d13c9b1e451ad3a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entitydata"));

        // line 15
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrProperties"]) ? $context["arrProperties"] : $this->getContext($context, "arrProperties")));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 16
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label required\" for=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "</label>
                                    <input id =\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo "\" type=\"text\" disabled=\"true\" required=\"required\" class=\"form-control col-md-7 col-xs-12\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "property", array()), "html", null, true);
            echo "\">
                                </div>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                        ";
        
        $__internal_c94227549e34fba06f6c9e932512bf30dbc5afa4a6befd5d13c9b1e451ad3a9a->leave($__internal_c94227549e34fba06f6c9e932512bf30dbc5afa4a6befd5d13c9b1e451ad3a9a_prof);

    }

    // line 30
    public function block_edit($context, array $blocks = array())
    {
        $__internal_09cc7b2e95ba8d9faa93c3c4372ad2040bf24506d9a6c2fe378ec699553469db = $this->env->getExtension("native_profiler");
        $__internal_09cc7b2e95ba8d9faa93c3c4372ad2040bf24506d9a6c2fe378ec699553469db->enter($__internal_09cc7b2e95ba8d9faa93c3c4372ad2040bf24506d9a6c2fe378ec699553469db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "edit"));

        
        $__internal_09cc7b2e95ba8d9faa93c3c4372ad2040bf24506d9a6c2fe378ec699553469db->leave($__internal_09cc7b2e95ba8d9faa93c3c4372ad2040bf24506d9a6c2fe378ec699553469db_prof);

    }

    // line 39
    public function block_return($context, array $blocks = array())
    {
        $__internal_440dc9583b4e9533309d793ed6c26638a8116295d0fad4c226ab629ddd91a38c = $this->env->getExtension("native_profiler");
        $__internal_440dc9583b4e9533309d793ed6c26638a8116295d0fad4c226ab629ddd91a38c->enter($__internal_440dc9583b4e9533309d793ed6c26638a8116295d0fad4c226ab629ddd91a38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "return"));

        
        $__internal_440dc9583b4e9533309d793ed6c26638a8116295d0fad4c226ab629ddd91a38c->leave($__internal_440dc9583b4e9533309d793ed6c26638a8116295d0fad4c226ab629ddd91a38c_prof);

    }

    public function getTemplateName()
    {
        return ":crud:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 39,  157 => 30,  150 => 21,  139 => 18,  133 => 17,  130 => 16,  125 => 15,  119 => 14,  108 => 8,  89 => 39,  77 => 30,  72 => 28,  65 => 24,  61 => 22,  59 => 14,  50 => 8,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends ':backend:backend.html.twig' %}*/
/* */
/* {% block page %}*/
/*     <div class="row">*/
/*         <div class="col-md-12 col-sm-12 col-xs-12">*/
/*             <div class="x_panel " >*/
/*                 <div class="x_title">*/
/*                     <h2>{% block pagetitle %}{%endblock pagetitle %} </h2>*/
/*                     <div class="clearfix"></div>*/
/*                 </div>*/
/* */
/*                 <div class="x_content">*/
/*                     <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">*/
/*                         {% block entitydata %}*/
/*                             {% for property in arrProperties %}*/
/*                                 <div class="form-group">*/
/*                                     <label class="control-label required" for="{{property.name}}">{{property.name}}</label>*/
/*                                     <input id ="{{property.name}}" type="text" disabled="true" required="required" class="form-control col-md-7 col-xs-12" value="{{ property.property }}">*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         {%endblock entitydata  %}*/
/*                     </form>*/
/* */
/*                     {{ form_start(delete_form) }}*/
/*                     <button id="del" class="hidden" type="submit" class="btn btn-sm btn-info"> */
/*                         Delete*/
/*                     </button>*/
/*                     {{ form_end(delete_form) }}*/
/* */
/*                     <a href="{% block edit %}{% endblock edit %}"> */
/*                         <button id="editV"  type="button" class="btn btn-sm btn-success"> */
/*                             Edit*/
/*                         </button>*/
/*                     </a>*/
/* */
/*                     <button id="delV"  type="button" class="btn btn-sm btn-danger" onClick="$('#del').click();"> */
/*                         Delete*/
/*                     </button>*/
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
