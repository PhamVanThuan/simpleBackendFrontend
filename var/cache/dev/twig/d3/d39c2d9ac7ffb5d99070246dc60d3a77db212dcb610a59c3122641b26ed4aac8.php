<?php

/* :security:layoutc.html.twig */
class __TwigTemplate_494d6dd09aaa214d41eaa0469170a50e084d8251c5096f9a56796a9a85d6fceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("base.html.twig", ":security:layoutc.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0e7963b2046560f0e5a1b616451860ec66dfeb709a3787702c51e2d22deab769 = $this->env->getExtension("native_profiler");
        $__internal_0e7963b2046560f0e5a1b616451860ec66dfeb709a3787702c51e2d22deab769->enter($__internal_0e7963b2046560f0e5a1b616451860ec66dfeb709a3787702c51e2d22deab769_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":security:layoutc.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e7963b2046560f0e5a1b616451860ec66dfeb709a3787702c51e2d22deab769->leave($__internal_0e7963b2046560f0e5a1b616451860ec66dfeb709a3787702c51e2d22deab769_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_7e9073b9cde7a1e4fbc67183777388ada1fadeea8265afba408d3cd8d100dee9 = $this->env->getExtension("native_profiler");
        $__internal_7e9073b9cde7a1e4fbc67183777388ada1fadeea8265afba408d3cd8d100dee9->enter($__internal_7e9073b9cde7a1e4fbc67183777388ada1fadeea8265afba408d3cd8d100dee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 16
        echo "
    ";
        // line 17
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 18
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 19
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 20
                    echo "                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                    ";
                    // line 21
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 24
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "    ";
        }
        // line 26
        echo "
    <div>
        ";
        // line 28
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 30
        echo "    </div>
";
        
        $__internal_7e9073b9cde7a1e4fbc67183777388ada1fadeea8265afba408d3cd8d100dee9->leave($__internal_7e9073b9cde7a1e4fbc67183777388ada1fadeea8265afba408d3cd8d100dee9_prof);

    }

    // line 28
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5d2ec5e2b08fd71436979f159e7e0ba21b006d4635b8e2c142979b342d604da0 = $this->env->getExtension("native_profiler");
        $__internal_5d2ec5e2b08fd71436979f159e7e0ba21b006d4635b8e2c142979b342d604da0->enter($__internal_5d2ec5e2b08fd71436979f159e7e0ba21b006d4635b8e2c142979b342d604da0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 29
        echo "        ";
        
        $__internal_5d2ec5e2b08fd71436979f159e7e0ba21b006d4635b8e2c142979b342d604da0->leave($__internal_5d2ec5e2b08fd71436979f159e7e0ba21b006d4635b8e2c142979b342d604da0_prof);

    }

    public function getTemplateName()
    {
        return ":security:layoutc.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 29,  95 => 28,  87 => 30,  85 => 28,  81 => 26,  78 => 25,  72 => 24,  63 => 21,  58 => 20,  53 => 19,  48 => 18,  46 => 17,  43 => 16,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# app/Resources/views/security/login.html.twig #}*/
/* {# ... you will probably extends your base template, like base.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     {#<div>*/
/*         {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*             {{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |*/
/*             <a href="{{ path('fos_user_security_logout') }}">*/
/*                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*             </a>*/
/*         {% else %}*/
/*             <a href="{{ path('fos_user_security_login') }}">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>*/
/*         {% endif %}*/
/*     </div>#}*/
/* */
/*     {% if app.request.hasPreviousSession %}*/
/*         {% for type, messages in app.session.flashbag.all() %}*/
/*             {% for message in messages %}*/
/*                 <div class="flash-{{ type }}">*/
/*                     {{ message }}*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* */
/*     <div>*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* {%endblock body%}*/
