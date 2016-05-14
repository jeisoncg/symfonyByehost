<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_559b60fe1abd68973bb9aa9ccc8a646fa092bef931332a672c2d30f05cbe1989 extends Twig_Template
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
        $__internal_a8b724cebb0fe60a6dfcc2119a936176d05de3dd8838e791d5344277ff091a2b = $this->env->getExtension("native_profiler");
        $__internal_a8b724cebb0fe60a6dfcc2119a936176d05de3dd8838e791d5344277ff091a2b->enter($__internal_a8b724cebb0fe60a6dfcc2119a936176d05de3dd8838e791d5344277ff091a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8b724cebb0fe60a6dfcc2119a936176d05de3dd8838e791d5344277ff091a2b->leave($__internal_a8b724cebb0fe60a6dfcc2119a936176d05de3dd8838e791d5344277ff091a2b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_96a8b8efc5dc794cc5c926baf66438b31c0ccac69e8185aec6becc293716da69 = $this->env->getExtension("native_profiler");
        $__internal_96a8b8efc5dc794cc5c926baf66438b31c0ccac69e8185aec6becc293716da69->enter($__internal_96a8b8efc5dc794cc5c926baf66438b31c0ccac69e8185aec6becc293716da69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_96a8b8efc5dc794cc5c926baf66438b31c0ccac69e8185aec6becc293716da69->leave($__internal_96a8b8efc5dc794cc5c926baf66438b31c0ccac69e8185aec6becc293716da69_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b43b0a144d291ccbd5b788c342a4cbd462323fcf8d8e6d8360871dbd13382eb2 = $this->env->getExtension("native_profiler");
        $__internal_b43b0a144d291ccbd5b788c342a4cbd462323fcf8d8e6d8360871dbd13382eb2->enter($__internal_b43b0a144d291ccbd5b788c342a4cbd462323fcf8d8e6d8360871dbd13382eb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b43b0a144d291ccbd5b788c342a4cbd462323fcf8d8e6d8360871dbd13382eb2->leave($__internal_b43b0a144d291ccbd5b788c342a4cbd462323fcf8d8e6d8360871dbd13382eb2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_8d5e72cdabe5cefe5597eb3723cbc824b8a3c91376a44a151cf591c424bb130f = $this->env->getExtension("native_profiler");
        $__internal_8d5e72cdabe5cefe5597eb3723cbc824b8a3c91376a44a151cf591c424bb130f->enter($__internal_8d5e72cdabe5cefe5597eb3723cbc824b8a3c91376a44a151cf591c424bb130f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_8d5e72cdabe5cefe5597eb3723cbc824b8a3c91376a44a151cf591c424bb130f->leave($__internal_8d5e72cdabe5cefe5597eb3723cbc824b8a3c91376a44a151cf591c424bb130f_prof);

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
