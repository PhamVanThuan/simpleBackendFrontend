<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f2a0cffaf06e21fe99d605af4ae24a2d354bc6e9fc5b3fbb977b7b30c701da15 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abce89a15837a721b477445f827ef0f0ee2ee9a02ef3663adfc27b8d5fbd4001 = $this->env->getExtension("native_profiler");
        $__internal_abce89a15837a721b477445f827ef0f0ee2ee9a02ef3663adfc27b8d5fbd4001->enter($__internal_abce89a15837a721b477445f827ef0f0ee2ee9a02ef3663adfc27b8d5fbd4001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abce89a15837a721b477445f827ef0f0ee2ee9a02ef3663adfc27b8d5fbd4001->leave($__internal_abce89a15837a721b477445f827ef0f0ee2ee9a02ef3663adfc27b8d5fbd4001_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_39517f05f4721ac0d74482a8490b61f8fc3f9c1ebf3e7675afab3fe3f8db107e = $this->env->getExtension("native_profiler");
        $__internal_39517f05f4721ac0d74482a8490b61f8fc3f9c1ebf3e7675afab3fe3f8db107e->enter($__internal_39517f05f4721ac0d74482a8490b61f8fc3f9c1ebf3e7675afab3fe3f8db107e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_39517f05f4721ac0d74482a8490b61f8fc3f9c1ebf3e7675afab3fe3f8db107e->leave($__internal_39517f05f4721ac0d74482a8490b61f8fc3f9c1ebf3e7675afab3fe3f8db107e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8685bd2d16c99f839a35eae734d7fa75b788bfc234d18147431967c8129037b1 = $this->env->getExtension("native_profiler");
        $__internal_8685bd2d16c99f839a35eae734d7fa75b788bfc234d18147431967c8129037b1->enter($__internal_8685bd2d16c99f839a35eae734d7fa75b788bfc234d18147431967c8129037b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_8685bd2d16c99f839a35eae734d7fa75b788bfc234d18147431967c8129037b1->leave($__internal_8685bd2d16c99f839a35eae734d7fa75b788bfc234d18147431967c8129037b1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7674043e52387c1033557dc09156d6478c34a7dd960c1a13163d5ebfad81e47d = $this->env->getExtension("native_profiler");
        $__internal_7674043e52387c1033557dc09156d6478c34a7dd960c1a13163d5ebfad81e47d->enter($__internal_7674043e52387c1033557dc09156d6478c34a7dd960c1a13163d5ebfad81e47d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7674043e52387c1033557dc09156d6478c34a7dd960c1a13163d5ebfad81e47d->leave($__internal_7674043e52387c1033557dc09156d6478c34a7dd960c1a13163d5ebfad81e47d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
