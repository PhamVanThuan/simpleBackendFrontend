<?php

/* :crud:select.html.twig */
class __TwigTemplate_b73de37aab35c66f9d969d1710e87414013f5f5ca590022ceb7fab823876b696 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:backend.html.twig", ":crud:select.html.twig", 1);
        $this->blocks = array(
            'page' => array($this, 'block_page'),
            'pagetitle' => array($this, 'block_pagetitle'),
            'headerselect' => array($this, 'block_headerselect'),
            'tablecont' => array($this, 'block_tablecont'),
            'newelement_path' => array($this, 'block_newelement_path'),
            'newelement_text' => array($this, 'block_newelement_text'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:backend.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_41a6a010bd460d3bcc69b60d6c38097200dcfdac93fbfd322a0515b65f465402 = $this->env->getExtension("native_profiler");
        $__internal_41a6a010bd460d3bcc69b60d6c38097200dcfdac93fbfd322a0515b65f465402->enter($__internal_41a6a010bd460d3bcc69b60d6c38097200dcfdac93fbfd322a0515b65f465402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":crud:select.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41a6a010bd460d3bcc69b60d6c38097200dcfdac93fbfd322a0515b65f465402->leave($__internal_41a6a010bd460d3bcc69b60d6c38097200dcfdac93fbfd322a0515b65f465402_prof);

    }

    // line 3
    public function block_page($context, array $blocks = array())
    {
        $__internal_054737c98b95066b5d1c8184b138b7bd52015bcc100b241b3f57964af4761b51 = $this->env->getExtension("native_profiler");
        $__internal_054737c98b95066b5d1c8184b138b7bd52015bcc100b241b3f57964af4761b51->enter($__internal_054737c98b95066b5d1c8184b138b7bd52015bcc100b241b3f57964af4761b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page"));

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

                    <table class=\"table table-striped responsive-utilities jambo_table bulk_action\">
                        <thead>
                            <tr class=\"headings\">
                                ";
        // line 17
        $this->displayBlock('headerselect', $context, $blocks);
        // line 27
        echo "                            </tr>
                        </thead>

                        <tbody>
                            ";
        // line 31
        $this->displayBlock('tablecont', $context, $blocks);
        // line 57
        echo "
                        </tbody>

                    </table>

                    <a href=\"";
        // line 62
        $this->displayBlock('newelement_path', $context, $blocks);
        echo "\">
                        <button id=\"back\"  type=\"button\" class=\"btn btn-success\" > 
                        ";
        // line 64
        $this->displayBlock('newelement_text', $context, $blocks);
        // line 65
        echo "                    </button>
                </a>   

            </div>
        </div>
    </div>
</div>

";
        
        $__internal_054737c98b95066b5d1c8184b138b7bd52015bcc100b241b3f57964af4761b51->leave($__internal_054737c98b95066b5d1c8184b138b7bd52015bcc100b241b3f57964af4761b51_prof);

    }

    // line 8
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_e7267ab2a4a6445e99e25741130366a85f734582be08509b166b75c9c6ebf3df = $this->env->getExtension("native_profiler");
        $__internal_e7267ab2a4a6445e99e25741130366a85f734582be08509b166b75c9c6ebf3df->enter($__internal_e7267ab2a4a6445e99e25741130366a85f734582be08509b166b75c9c6ebf3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        
        $__internal_e7267ab2a4a6445e99e25741130366a85f734582be08509b166b75c9c6ebf3df->leave($__internal_e7267ab2a4a6445e99e25741130366a85f734582be08509b166b75c9c6ebf3df_prof);

    }

    // line 17
    public function block_headerselect($context, array $blocks = array())
    {
        $__internal_e86eb7b7313ee39f989453ebb42e12d96f455c452957b9a52769be962a7aa8fc = $this->env->getExtension("native_profiler");
        $__internal_e86eb7b7313ee39f989453ebb42e12d96f455c452957b9a52769be962a7aa8fc->enter($__internal_e86eb7b7313ee39f989453ebb42e12d96f455c452957b9a52769be962a7aa8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerselect"));

        // line 18
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrPropertiesName"]) ? $context["arrPropertiesName"] : $this->getContext($context, "arrPropertiesName")));
        foreach ($context['_seq'] as $context["_key"] => $context["property"]) {
            // line 19
            echo "                                        <th class=\"column-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["property"], "name", array()), "html", null, true);
            echo " </th>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['property'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                                    <th class=\"column-title\">Ver</th>
                                    <th class=\"column-title no-link last\"><span class=\"nobr\">Editar</span></th>
                                    <th class=\"bulk-actions\" colspan=\"7\">
                                        <a class=\"antoo\" style=\"color:#fff; font-weight:500;\">Bulk Actions ( <span class=\"action-cnt\"> </span> ) <i class=\"fa fa-chevron-down\"></i></a>
                                    </th>
                                ";
        
        $__internal_e86eb7b7313ee39f989453ebb42e12d96f455c452957b9a52769be962a7aa8fc->leave($__internal_e86eb7b7313ee39f989453ebb42e12d96f455c452957b9a52769be962a7aa8fc_prof);

    }

    // line 31
    public function block_tablecont($context, array $blocks = array())
    {
        $__internal_ee9f8f5c2c64e557197025db66f1ebf4d3ec148c25a8ca6a4ba1fc9a0068fd3e = $this->env->getExtension("native_profiler");
        $__internal_ee9f8f5c2c64e557197025db66f1ebf4d3ec148c25a8ca6a4ba1fc9a0068fd3e->enter($__internal_ee9f8f5c2c64e557197025db66f1ebf4d3ec148c25a8ca6a4ba1fc9a0068fd3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablecont"));

        // line 32
        echo "                                ";
        $context["i"] = 0;
        // line 33
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["arrEl"]) ? $context["arrEl"] : $this->getContext($context, "arrEl")));
        foreach ($context['_seq'] as $context["_key"] => $context["el"]) {
            // line 34
            echo "                                    
                                    <tr class=\"even pointer\">
                                        ";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["el"]);
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                echo "                                        
                                            <td><p class=\"pTd\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["p"], "property", array()), "html", null, true);
                echo "</p></td>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                                        <td class=\"\">
                                            <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath((isset($context["show"]) ? $context["show"] : $this->getContext($context, "show")), array("id" => $this->getAttribute($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-sm btn-info\"> 
                                                    Ver
                                                </button>
                                            </a>
                                        </td> 
                                        <td class=\" last\">
                                            <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("service_edit", array("id" => $this->getAttribute($this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")), array(), "array"), "id", array()))), "html", null, true);
            echo "\">
                                                <button type=\"button\" class=\"btn btn-sm btn-warning\">
                                                    Editar
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                    ";
            // line 54
            $context["i"] = ((isset($context["i"]) ? $context["i"] : $this->getContext($context, "i")) + 1);
            // line 55
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['el'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                            ";
        
        $__internal_ee9f8f5c2c64e557197025db66f1ebf4d3ec148c25a8ca6a4ba1fc9a0068fd3e->leave($__internal_ee9f8f5c2c64e557197025db66f1ebf4d3ec148c25a8ca6a4ba1fc9a0068fd3e_prof);

    }

    // line 62
    public function block_newelement_path($context, array $blocks = array())
    {
        $__internal_2a0f2bc7a321ad08d0825d1afa9ae8606c40b4a27e4b8899098c47a0492ce1ab = $this->env->getExtension("native_profiler");
        $__internal_2a0f2bc7a321ad08d0825d1afa9ae8606c40b4a27e4b8899098c47a0492ce1ab->enter($__internal_2a0f2bc7a321ad08d0825d1afa9ae8606c40b4a27e4b8899098c47a0492ce1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newelement_path"));

        
        $__internal_2a0f2bc7a321ad08d0825d1afa9ae8606c40b4a27e4b8899098c47a0492ce1ab->leave($__internal_2a0f2bc7a321ad08d0825d1afa9ae8606c40b4a27e4b8899098c47a0492ce1ab_prof);

    }

    // line 64
    public function block_newelement_text($context, array $blocks = array())
    {
        $__internal_5941beba81ce7510a853b41e8db1810bce647e1ac3b39a6a911038d47960b160 = $this->env->getExtension("native_profiler");
        $__internal_5941beba81ce7510a853b41e8db1810bce647e1ac3b39a6a911038d47960b160->enter($__internal_5941beba81ce7510a853b41e8db1810bce647e1ac3b39a6a911038d47960b160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newelement_text"));

        
        $__internal_5941beba81ce7510a853b41e8db1810bce647e1ac3b39a6a911038d47960b160->leave($__internal_5941beba81ce7510a853b41e8db1810bce647e1ac3b39a6a911038d47960b160_prof);

    }

    public function getTemplateName()
    {
        return ":crud:select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 64,  215 => 62,  208 => 56,  202 => 55,  200 => 54,  190 => 47,  180 => 40,  177 => 39,  169 => 37,  163 => 36,  159 => 34,  154 => 33,  151 => 32,  145 => 31,  133 => 21,  124 => 19,  119 => 18,  113 => 17,  102 => 8,  87 => 65,  85 => 64,  80 => 62,  73 => 57,  71 => 31,  65 => 27,  63 => 17,  51 => 8,  45 => 4,  39 => 3,  11 => 1,);
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
/* */
/*                     <table class="table table-striped responsive-utilities jambo_table bulk_action">*/
/*                         <thead>*/
/*                             <tr class="headings">*/
/*                                 {%block headerselect %}*/
/*                                     {% for property in arrPropertiesName %}*/
/*                                         <th class="column-title">{{property.name}} </th>*/
/*                                         {% endfor %}*/
/*                                     <th class="column-title">Ver</th>*/
/*                                     <th class="column-title no-link last"><span class="nobr">Editar</span></th>*/
/*                                     <th class="bulk-actions" colspan="7">*/
/*                                         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>*/
/*                                     </th>*/
/*                                 {% endblock headerselect %}*/
/*                             </tr>*/
/*                         </thead>*/
/* */
/*                         <tbody>*/
/*                             {%block tablecont %}*/
/*                                 {% set i = 0 %}*/
/*                                 {% for el in arrEl %}*/
/*                                     */
/*                                     <tr class="even pointer">*/
/*                                         {% for p in el %}                                        */
/*                                             <td><p class="pTd">{{ p.property}}</p></td>*/
/*                                         {% endfor %}*/
/*                                         <td class="">*/
/*                                             <a href="{{ path(show, { 'id': elements[i].id}) }}">*/
/*                                                 <button type="button" class="btn btn-sm btn-info"> */
/*                                                     Ver*/
/*                                                 </button>*/
/*                                             </a>*/
/*                                         </td> */
/*                                         <td class=" last">*/
/*                                             <a href="{{ path('service_edit', { 'id': elements[i].id }) }}">*/
/*                                                 <button type="button" class="btn btn-sm btn-warning">*/
/*                                                     Editar*/
/*                                                 </button>*/
/*                                             </a>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                     {% set i = i+1 %}*/
/*                                 {% endfor %}*/
/*                             {%endblock tablecont %}*/
/* */
/*                         </tbody>*/
/* */
/*                     </table>*/
/* */
/*                     <a href="{%block newelement_path %}{% endblock newelement_path %}">*/
/*                         <button id="back"  type="button" class="btn btn-success" > */
/*                         {%block newelement_text %}{% endblock newelement_text %}*/
/*                     </button>*/
/*                 </a>   */
/* */
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock page %}*/
/* */
/* */
/* */
