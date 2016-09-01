<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16bee57e8f712ca0e576f6a8c8ddb5c345e4e417650d9df78bf7d5377e340b8c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06c05fb176ce952c5ca015f0f07bdea7d9197abd87f0d0b10b131dff9fbb41a3 = $this->env->getExtension("native_profiler");
        $__internal_06c05fb176ce952c5ca015f0f07bdea7d9197abd87f0d0b10b131dff9fbb41a3->enter($__internal_06c05fb176ce952c5ca015f0f07bdea7d9197abd87f0d0b10b131dff9fbb41a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c05fb176ce952c5ca015f0f07bdea7d9197abd87f0d0b10b131dff9fbb41a3->leave($__internal_06c05fb176ce952c5ca015f0f07bdea7d9197abd87f0d0b10b131dff9fbb41a3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e35a8b1d5e15396cc8dabf52ac60a0e46393505576ada7b5cc92993843b4f40a = $this->env->getExtension("native_profiler");
        $__internal_e35a8b1d5e15396cc8dabf52ac60a0e46393505576ada7b5cc92993843b4f40a->enter($__internal_e35a8b1d5e15396cc8dabf52ac60a0e46393505576ada7b5cc92993843b4f40a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e35a8b1d5e15396cc8dabf52ac60a0e46393505576ada7b5cc92993843b4f40a->leave($__internal_e35a8b1d5e15396cc8dabf52ac60a0e46393505576ada7b5cc92993843b4f40a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_928c19eaf37995c67cfe1c16792dd0d46d120914a199b270511386247c3c3105 = $this->env->getExtension("native_profiler");
        $__internal_928c19eaf37995c67cfe1c16792dd0d46d120914a199b270511386247c3c3105->enter($__internal_928c19eaf37995c67cfe1c16792dd0d46d120914a199b270511386247c3c3105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_928c19eaf37995c67cfe1c16792dd0d46d120914a199b270511386247c3c3105->leave($__internal_928c19eaf37995c67cfe1c16792dd0d46d120914a199b270511386247c3c3105_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5f81a97eff5cccdce38bbc1d11edb4869dc8ad67b6ab92e39e020e85c0927b4 = $this->env->getExtension("native_profiler");
        $__internal_e5f81a97eff5cccdce38bbc1d11edb4869dc8ad67b6ab92e39e020e85c0927b4->enter($__internal_e5f81a97eff5cccdce38bbc1d11edb4869dc8ad67b6ab92e39e020e85c0927b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e5f81a97eff5cccdce38bbc1d11edb4869dc8ad67b6ab92e39e020e85c0927b4->leave($__internal_e5f81a97eff5cccdce38bbc1d11edb4869dc8ad67b6ab92e39e020e85c0927b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
