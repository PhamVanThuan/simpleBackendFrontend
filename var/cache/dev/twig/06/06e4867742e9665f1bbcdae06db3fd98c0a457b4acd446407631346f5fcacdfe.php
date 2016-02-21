<?php

/* :backend:topnav.html.twig */
class __TwigTemplate_b7b55ed840132916a3d85cea33bcad0de37574544acbb068ef531cd517100c5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3061c5c75b1d8ffb84f67115c6fe289eae75be0a132452fddf74c1f314b7d112 = $this->env->getExtension("native_profiler");
        $__internal_3061c5c75b1d8ffb84f67115c6fe289eae75be0a132452fddf74c1f314b7d112->enter($__internal_3061c5c75b1d8ffb84f67115c6fe289eae75be0a132452fddf74c1f314b7d112_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:topnav.html.twig"));

        // line 1
        echo "<!-- top navigation -->
<div class=\"top_nav\">
    <div class=\"nav_menu\">
        <nav class=\"\" role=\"navigation\">
            <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
            </div>

            <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                    <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                        ";
        // line 12
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 13
            echo "                            Hi ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                        ";
        }
        // line 15
        echo "
                        <span class=\" fa fa-angle-down\"></span>
                    </a>
                    <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                        <li>  <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">
                                ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
        echo "
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->";
        
        $__internal_3061c5c75b1d8ffb84f67115c6fe289eae75be0a132452fddf74c1f314b7d112->leave($__internal_3061c5c75b1d8ffb84f67115c6fe289eae75be0a132452fddf74c1f314b7d112_prof);

    }

    public function getTemplateName()
    {
        return ":backend:topnav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 20,  49 => 19,  43 => 15,  37 => 13,  35 => 12,  22 => 1,);
    }
}
/* <!-- top navigation -->*/
/* <div class="top_nav">*/
/*     <div class="nav_menu">*/
/*         <nav class="" role="navigation">*/
/*             <div class="nav toggle">*/
/*                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*             </div>*/
/* */
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="">*/
/*                     <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                         {% if is_granted("ROLE_USER") %}*/
/*                             Hi {{ app.user.username }}*/
/*                         {% endif %}*/
/* */
/*                         <span class=" fa fa-angle-down"></span>*/
/*                     </a>*/
/*                     <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                         <li>  <a href="{{ path('fos_user_security_logout') }}">*/
/*                                 {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                             </a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </nav>*/
/*     </div>*/
/* </div>*/
/* <!-- /top navigation -->*/
