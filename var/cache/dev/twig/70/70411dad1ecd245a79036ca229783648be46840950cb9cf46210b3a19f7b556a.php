<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_6c0b2c86e7ee534617385c749bab1120b134802fbf06d2950613a270e90c86eb extends Twig_Template
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
        $__internal_bade96908f484b2b41d9ead9dd2a451920b67f07e2fce34bd6ea582270bcc429 = $this->env->getExtension("native_profiler");
        $__internal_bade96908f484b2b41d9ead9dd2a451920b67f07e2fce34bd6ea582270bcc429->enter($__internal_bade96908f484b2b41d9ead9dd2a451920b67f07e2fce34bd6ea582270bcc429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bade96908f484b2b41d9ead9dd2a451920b67f07e2fce34bd6ea582270bcc429->leave($__internal_bade96908f484b2b41d9ead9dd2a451920b67f07e2fce34bd6ea582270bcc429_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ff4622e291879212e351ee9c28e7213cfc53cd98297d5c035eb53f837d782d8c = $this->env->getExtension("native_profiler");
        $__internal_ff4622e291879212e351ee9c28e7213cfc53cd98297d5c035eb53f837d782d8c->enter($__internal_ff4622e291879212e351ee9c28e7213cfc53cd98297d5c035eb53f837d782d8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ff4622e291879212e351ee9c28e7213cfc53cd98297d5c035eb53f837d782d8c->leave($__internal_ff4622e291879212e351ee9c28e7213cfc53cd98297d5c035eb53f837d782d8c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ee74fab3c0dd7e9717962fe032b388a40eab7530f41f0cde3ef16e0e2a07ecbe = $this->env->getExtension("native_profiler");
        $__internal_ee74fab3c0dd7e9717962fe032b388a40eab7530f41f0cde3ef16e0e2a07ecbe->enter($__internal_ee74fab3c0dd7e9717962fe032b388a40eab7530f41f0cde3ef16e0e2a07ecbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ee74fab3c0dd7e9717962fe032b388a40eab7530f41f0cde3ef16e0e2a07ecbe->leave($__internal_ee74fab3c0dd7e9717962fe032b388a40eab7530f41f0cde3ef16e0e2a07ecbe_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_eb265ed6487ff5e77488b2edc2de11b8391db032dee79710d3846fa7d95638f3 = $this->env->getExtension("native_profiler");
        $__internal_eb265ed6487ff5e77488b2edc2de11b8391db032dee79710d3846fa7d95638f3->enter($__internal_eb265ed6487ff5e77488b2edc2de11b8391db032dee79710d3846fa7d95638f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_eb265ed6487ff5e77488b2edc2de11b8391db032dee79710d3846fa7d95638f3->leave($__internal_eb265ed6487ff5e77488b2edc2de11b8391db032dee79710d3846fa7d95638f3_prof);

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
