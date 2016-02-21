<?php

/* user/index.html.twig */
class __TwigTemplate_6f0b6df5f3ab4e01aa626467dcd22833645086e5e461697d84515c894c42b52e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":crud:select.html.twig", "user/index.html.twig", 1);
        $this->blocks = array(
            'pagetitle' => array($this, 'block_pagetitle'),
            'headerselect' => array($this, 'block_headerselect'),
            'tablecont' => array($this, 'block_tablecont'),
            'newelement' => array($this, 'block_newelement'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":crud:select.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13ed9d0b5f2d3b5c21442d430d4f45992e2cec3840d155b9038ed82bec9143ca = $this->env->getExtension("native_profiler");
        $__internal_13ed9d0b5f2d3b5c21442d430d4f45992e2cec3840d155b9038ed82bec9143ca->enter($__internal_13ed9d0b5f2d3b5c21442d430d4f45992e2cec3840d155b9038ed82bec9143ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "user/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13ed9d0b5f2d3b5c21442d430d4f45992e2cec3840d155b9038ed82bec9143ca->leave($__internal_13ed9d0b5f2d3b5c21442d430d4f45992e2cec3840d155b9038ed82bec9143ca_prof);

    }

    // line 3
    public function block_pagetitle($context, array $blocks = array())
    {
        $__internal_da269fb8e55e071166af892b4829797971f1e0190c8978256dc9be4d5564ea81 = $this->env->getExtension("native_profiler");
        $__internal_da269fb8e55e071166af892b4829797971f1e0190c8978256dc9be4d5564ea81->enter($__internal_da269fb8e55e071166af892b4829797971f1e0190c8978256dc9be4d5564ea81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pagetitle"));

        echo "User List";
        
        $__internal_da269fb8e55e071166af892b4829797971f1e0190c8978256dc9be4d5564ea81->leave($__internal_da269fb8e55e071166af892b4829797971f1e0190c8978256dc9be4d5564ea81_prof);

    }

    // line 5
    public function block_headerselect($context, array $blocks = array())
    {
        $__internal_132fdcf2ea6cf35772ebc0141b379766f034b337c3a2ad74fa04e447ce78d68b = $this->env->getExtension("native_profiler");
        $__internal_132fdcf2ea6cf35772ebc0141b379766f034b337c3a2ad74fa04e447ce78d68b->enter($__internal_132fdcf2ea6cf35772ebc0141b379766f034b337c3a2ad74fa04e447ce78d68b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "headerselect"));

        // line 6
        echo "    <th class=\"column-title\">Username </th>
    <th class=\"column-title\">Email </th>
    <th class=\"column-title\">Roles </th>
    <th class=\"column-title no-link last\"><span class=\"nobr\">Edit</span></th>
    <th class=\"bulk-actions\" colspan=\"7\">
        <a class=\"antoo\" style=\"color:#fff; font-weight:500;\">Bulk Actions ( <span class=\"action-cnt\"> </span> ) <i class=\"fa fa-chevron-down\"></i></a>
    </th>
";
        
        $__internal_132fdcf2ea6cf35772ebc0141b379766f034b337c3a2ad74fa04e447ce78d68b->leave($__internal_132fdcf2ea6cf35772ebc0141b379766f034b337c3a2ad74fa04e447ce78d68b_prof);

    }

    // line 16
    public function block_tablecont($context, array $blocks = array())
    {
        $__internal_e70cf7661f619d8e925cd62472f4a57082cf957cdb8448205664a66de76ae0d9 = $this->env->getExtension("native_profiler");
        $__internal_e70cf7661f619d8e925cd62472f4a57082cf957cdb8448205664a66de76ae0d9->enter($__internal_e70cf7661f619d8e925cd62472f4a57082cf957cdb8448205664a66de76ae0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tablecont"));

        // line 17
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 18
            echo "        <tr class=\"even pointer\">
            <td><p class=\"pTd\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</p></td>
            <td><p class=\"pTd\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
            echo "</p></td>
";
            // line 22
            echo "            <td class=\"\">
                <button type=\"button\" class=\"btn btn-sm btn-info\"> 
                    <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">show</a>
                </button>
            </td> 
            <td class=\" last\">
                <button type=\"button\" class=\"btn btn-sm btn-warning\">
                    <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                </button>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e70cf7661f619d8e925cd62472f4a57082cf957cdb8448205664a66de76ae0d9->leave($__internal_e70cf7661f619d8e925cd62472f4a57082cf957cdb8448205664a66de76ae0d9_prof);

    }

    // line 35
    public function block_newelement($context, array $blocks = array())
    {
        $__internal_856da70df808213ecfb57e7ac977fd1c934fe4bb1867fcf3511c936fd495fb13 = $this->env->getExtension("native_profiler");
        $__internal_856da70df808213ecfb57e7ac977fd1c934fe4bb1867fcf3511c936fd495fb13->enter($__internal_856da70df808213ecfb57e7ac977fd1c934fe4bb1867fcf3511c936fd495fb13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "newelement"));

        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("user_new");
        echo "\">Create a new entry</a>";
        
        $__internal_856da70df808213ecfb57e7ac977fd1c934fe4bb1867fcf3511c936fd495fb13->leave($__internal_856da70df808213ecfb57e7ac977fd1c934fe4bb1867fcf3511c936fd495fb13_prof);

    }

    public function getTemplateName()
    {
        return "user/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  103 => 29,  95 => 24,  91 => 22,  87 => 20,  83 => 19,  80 => 18,  75 => 17,  69 => 16,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends ':crud:select.html.twig' %}*/
/* */
/* {% block pagetitle %}User List{%endblock pagetitle %} */
/* */
/* {% block headerselect %}*/
/*     <th class="column-title">Username </th>*/
/*     <th class="column-title">Email </th>*/
/*     <th class="column-title">Roles </th>*/
/*     <th class="column-title no-link last"><span class="nobr">Edit</span></th>*/
/*     <th class="bulk-actions" colspan="7">*/
/*         <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>*/
/*     </th>*/
/* {%endblock headerselect %} */
/* */
/* */
/* {% block tablecont %}*/
/*     {% for user in users %}*/
/*         <tr class="even pointer">*/
/*             <td><p class="pTd">{{ user.username }}</p></td>*/
/*             <td><p class="pTd">{{ user.email}}</p></td>*/
/* {#            <td><p class="pTd">{{ user.roles}}</p></td>#}*/
/*             <td class="">*/
/*                 <button type="button" class="btn btn-sm btn-info"> */
/*                     <a href="{{ path('user_show', { 'id': user.id }) }}">show</a>*/
/*                 </button>*/
/*             </td> */
/*             <td class=" last">*/
/*                 <button type="button" class="btn btn-sm btn-warning">*/
/*                     <a href="{{ path('user_edit', { 'id': user.id }) }}">edit</a>*/
/*                 </button>*/
/*             </td>*/
/*         </tr>*/
/*     {% endfor %}*/
/* {% endblock tablecont %}*/
/* {%block newelement %}<a href="{{ path('user_new') }}">Create a new entry</a>{% endblock newelement %}*/
/* */
