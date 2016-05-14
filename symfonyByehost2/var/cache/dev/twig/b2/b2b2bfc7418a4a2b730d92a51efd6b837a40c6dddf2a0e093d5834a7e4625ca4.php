<?php

/* base.html.twig */
class __TwigTemplate_2dfd4198e7e7c4a485156d832634e8a707a2e4965f60b17b3b2739862ff2573e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba9f49b7770ae07d4934e0138502aad0acb0c37b3c58116fe1c0a2f95809dfaf = $this->env->getExtension("native_profiler");
        $__internal_ba9f49b7770ae07d4934e0138502aad0acb0c37b3c58116fe1c0a2f95809dfaf->enter($__internal_ba9f49b7770ae07d4934e0138502aad0acb0c37b3c58116fe1c0a2f95809dfaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_ba9f49b7770ae07d4934e0138502aad0acb0c37b3c58116fe1c0a2f95809dfaf->leave($__internal_ba9f49b7770ae07d4934e0138502aad0acb0c37b3c58116fe1c0a2f95809dfaf_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e95bd378e9cca1e63cb77ced21e1724ba2861128e8fec6b28c068e7cd8704b78 = $this->env->getExtension("native_profiler");
        $__internal_e95bd378e9cca1e63cb77ced21e1724ba2861128e8fec6b28c068e7cd8704b78->enter($__internal_e95bd378e9cca1e63cb77ced21e1724ba2861128e8fec6b28c068e7cd8704b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e95bd378e9cca1e63cb77ced21e1724ba2861128e8fec6b28c068e7cd8704b78->leave($__internal_e95bd378e9cca1e63cb77ced21e1724ba2861128e8fec6b28c068e7cd8704b78_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26e6b9e6d8448c353e505c6ec37f70079c185416d67c7a4d0d60c9fa0111763c = $this->env->getExtension("native_profiler");
        $__internal_26e6b9e6d8448c353e505c6ec37f70079c185416d67c7a4d0d60c9fa0111763c->enter($__internal_26e6b9e6d8448c353e505c6ec37f70079c185416d67c7a4d0d60c9fa0111763c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_26e6b9e6d8448c353e505c6ec37f70079c185416d67c7a4d0d60c9fa0111763c->leave($__internal_26e6b9e6d8448c353e505c6ec37f70079c185416d67c7a4d0d60c9fa0111763c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f80e0383df7387a85a8f71cef3b1fb0128097ab43654aa952a1ee2c29744d38c = $this->env->getExtension("native_profiler");
        $__internal_f80e0383df7387a85a8f71cef3b1fb0128097ab43654aa952a1ee2c29744d38c->enter($__internal_f80e0383df7387a85a8f71cef3b1fb0128097ab43654aa952a1ee2c29744d38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f80e0383df7387a85a8f71cef3b1fb0128097ab43654aa952a1ee2c29744d38c->leave($__internal_f80e0383df7387a85a8f71cef3b1fb0128097ab43654aa952a1ee2c29744d38c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_faba7dd8a489dc75a3cc2192683c16612716f574fdb88e9216629eadfb7e5588 = $this->env->getExtension("native_profiler");
        $__internal_faba7dd8a489dc75a3cc2192683c16612716f574fdb88e9216629eadfb7e5588->enter($__internal_faba7dd8a489dc75a3cc2192683c16612716f574fdb88e9216629eadfb7e5588_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_faba7dd8a489dc75a3cc2192683c16612716f574fdb88e9216629eadfb7e5588->leave($__internal_faba7dd8a489dc75a3cc2192683c16612716f574fdb88e9216629eadfb7e5588_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
