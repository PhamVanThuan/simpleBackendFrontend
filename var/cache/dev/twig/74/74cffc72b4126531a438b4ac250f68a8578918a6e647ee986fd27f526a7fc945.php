<?php

/* :backend:navsidebar.html.twig */
class __TwigTemplate_dc575b4bc7745ff41775a2a7d9def39cc5f639a8907b700b7cf6537eb5bbfe79 extends Twig_Template
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
        $__internal_51cea1cc52c0b0b40bbe4294372bf3e274f4d65819d89802bba919b357739b9b = $this->env->getExtension("native_profiler");
        $__internal_51cea1cc52c0b0b40bbe4294372bf3e274f4d65819d89802bba919b357739b9b->enter($__internal_51cea1cc52c0b0b40bbe4294372bf3e274f4d65819d89802bba919b357739b9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":backend:navsidebar.html.twig"));

        // line 2
        echo "<div class=\"col-md-3 left_col\">
    <div class=\"left_col scroll-view\">

        <div class=\"navbar nav_title\" style=\"border: 0;\">
            <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("frontend");
        echo "\" class=\"site_title\"><i class=\"fa fa-sitemap\"></i> <span>Simple Backend</span></a>
        </div>
        <div class=\"clearfix\"></div>
        <br />

        <!-- sidebar menu -->
        <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">

            <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                    <li><a><i class=\"fa fa-shield\"></i> Entities <span class=\"fa fa-chevron-down\"></span></a>
                        <ul class=\"nav child_menu\" style=\"display: none\">
                            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("user_index");
        echo "\">Users</a></li>
                            <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("service_index");
        echo "\">Services</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
        </div>   
    </div>
</div>
";
        
        $__internal_51cea1cc52c0b0b40bbe4294372bf3e274f4d65819d89802bba919b357739b9b->leave($__internal_51cea1cc52c0b0b40bbe4294372bf3e274f4d65819d89802bba919b357739b9b_prof);

    }

    public function getTemplateName()
    {
        return ":backend:navsidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 20,  44 => 19,  28 => 6,  22 => 2,);
    }
}
/* {# empty Twig template #}*/
/* <div class="col-md-3 left_col">*/
/*     <div class="left_col scroll-view">*/
/* */
/*         <div class="navbar nav_title" style="border: 0;">*/
/*             <a href="{{ path('frontend') }}" class="site_title"><i class="fa fa-sitemap"></i> <span>Simple Backend</span></a>*/
/*         </div>*/
/*         <div class="clearfix"></div>*/
/*         <br />*/
/* */
/*         <!-- sidebar menu -->*/
/*         <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/* */
/*             <div class="menu_section">*/
/*                 <h3>General</h3>*/
/*                 <ul class="nav side-menu">*/
/*                     <li><a><i class="fa fa-shield"></i> Entities <span class="fa fa-chevron-down"></span></a>*/
/*                         <ul class="nav child_menu" style="display: none">*/
/*                             <li><a href="{{ path('user_index') }}">Users</a></li>*/
/*                             <li><a href="{{ path('service_index') }}">Services</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                     */
/*                 </ul>*/
/*             </div>*/
/*         </div>   */
/*     </div>*/
/* </div>*/
/* */
