<?php

/* :front:nav.html.twig */
class __TwigTemplate_3575ab8e9eb14baee4ac1bd47696f456d1f4d368eb872b753fea30cd3deea6fa extends Twig_Template
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
        $__internal_bdec47719e4fd17e563847ea09afb12d5583ee1b2e2518e4d1bc28e2428e6b36 = $this->env->getExtension("native_profiler");
        $__internal_bdec47719e4fd17e563847ea09afb12d5583ee1b2e2518e4d1bc28e2428e6b36->enter($__internal_bdec47719e4fd17e563847ea09afb12d5583ee1b2e2518e4d1bc28e2428e6b36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":front:nav.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse navbar-fixed-top\" role=\"navigation\">
    <div class=\"container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\">Simple Front</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">

                ";
        // line 18
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 19
            echo "                    <li>
                        <a href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("git");
            echo "\">Git</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("ftp");
            echo "\">Ftp</a>
                    </li>                        
                ";
        }
        // line 26
        echo "
                ";
        // line 27
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 28
            echo "                    <li>
                        <a href=\"";
            // line 29
            echo $this->env->getExtension('routing')->getPath("backend");
            echo "\">Backend</a>
                    </li>
                ";
        }
        // line 32
        echo "
                <li>
                    <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("about");
        echo "\">About</a>
                </li>
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                ";
        // line 38
        if (($this->env->getExtension('security')->isGranted("ROLE_USER") || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
            // line 39
            echo "                    <li class=\"\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">                            Hi ";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            <span class=\" fa fa-angle-down\"></span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                            <li>  <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                    ";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                    </li>

                ";
        } else {
            // line 52
            echo "                     <li class=\"\">
                        <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">                            Login
                            <span class=\" fa fa-angle-down\"></span>
                        </a>
                        <ul class=\"dropdown-menu dropdown-usermenu animated fadeInDown pull-right\">
                            <li>  <a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("login_route");
            echo "\">
                                    ";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        </ul>
                    </li>
                ";
        }
        // line 64
        echo "                </ul>
            </div>


            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>";
        
        $__internal_bdec47719e4fd17e563847ea09afb12d5583ee1b2e2518e4d1bc28e2428e6b36->leave($__internal_bdec47719e4fd17e563847ea09afb12d5583ee1b2e2518e4d1bc28e2428e6b36_prof);

    }

    public function getTemplateName()
    {
        return ":front:nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 64,  123 => 58,  119 => 57,  112 => 52,  102 => 45,  98 => 44,  91 => 40,  88 => 39,  86 => 38,  79 => 34,  75 => 32,  69 => 29,  66 => 28,  64 => 27,  61 => 26,  55 => 23,  49 => 20,  46 => 19,  44 => 18,  34 => 11,  22 => 1,);
    }
}
/* <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">*/
/*     <div class="container">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{ path('index') }}">Simple Front</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/* */
/*                 {% if (is_granted("ROLE_USER") or is_granted("ROLE_SUPER_ADMIN"))%}*/
/*                     <li>*/
/*                         <a href="{{ path('git') }}">Git</a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('ftp') }}">Ftp</a>*/
/*                     </li>                        */
/*                 {% endif %}*/
/* */
/*                 {% if (is_granted("ROLE_SUPER_ADMIN"))%}*/
/*                     <li>*/
/*                         <a href="{{ path('backend') }}">Backend</a>*/
/*                     </li>*/
/*                 {% endif %}*/
/* */
/*                 <li>*/
/*                     <a href="{{ path('about') }}">About</a>*/
/*                 </li>*/
/*             </ul>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 {% if (is_granted("ROLE_USER") or is_granted("ROLE_SUPER_ADMIN"))%}*/
/*                     <li class="">*/
/*                         <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                            Hi {{ app.user.username }}*/
/*                             <span class=" fa fa-angle-down"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                             <li>  <a href="{{ path('fos_user_security_logout') }}">*/
/*                                     {{ 'layout.logout'|trans({}, 'FOSUserBundle') }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/* */
/*                 {% else %}*/
/*                      <li class="">*/
/*                         <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">                            Login*/
/*                             <span class=" fa fa-angle-down"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">*/
/*                             <li>  <a href="{{ path('login_route') }}">*/
/*                                     {{ 'layout.login'|trans({}, 'FOSUserBundle') }}*/
/*                                 </a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endif %}*/
/*                 </ul>*/
/*             </div>*/
/* */
/* */
/*             <!-- /.navbar-collapse -->*/
/*         </div>*/
/*         <!-- /.container -->*/
/*     </nav>*/
