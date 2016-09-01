<?php

/* base.html.twig */
class __TwigTemplate_2810d7d8f08d1bedbd1256888b4ea82c2cbc4408c52785d9e7eaf3f1a6f15c68 extends Twig_Template
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
        $__internal_273b5ab58ec389a00d387677344f3af4c83614e001f25ab5d8557e0ff058604c = $this->env->getExtension("native_profiler");
        $__internal_273b5ab58ec389a00d387677344f3af4c83614e001f25ab5d8557e0ff058604c->enter($__internal_273b5ab58ec389a00d387677344f3af4c83614e001f25ab5d8557e0ff058604c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_273b5ab58ec389a00d387677344f3af4c83614e001f25ab5d8557e0ff058604c->leave($__internal_273b5ab58ec389a00d387677344f3af4c83614e001f25ab5d8557e0ff058604c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_22ec3120ea11f9b13ca0108e3e008473b7942a7c92b412514e52e36ba2c07420 = $this->env->getExtension("native_profiler");
        $__internal_22ec3120ea11f9b13ca0108e3e008473b7942a7c92b412514e52e36ba2c07420->enter($__internal_22ec3120ea11f9b13ca0108e3e008473b7942a7c92b412514e52e36ba2c07420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_22ec3120ea11f9b13ca0108e3e008473b7942a7c92b412514e52e36ba2c07420->leave($__internal_22ec3120ea11f9b13ca0108e3e008473b7942a7c92b412514e52e36ba2c07420_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fa11614f26febcd92be5b064d3f108051900a5a1ad0da264158c584d338dd7e9 = $this->env->getExtension("native_profiler");
        $__internal_fa11614f26febcd92be5b064d3f108051900a5a1ad0da264158c584d338dd7e9->enter($__internal_fa11614f26febcd92be5b064d3f108051900a5a1ad0da264158c584d338dd7e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_fa11614f26febcd92be5b064d3f108051900a5a1ad0da264158c584d338dd7e9->leave($__internal_fa11614f26febcd92be5b064d3f108051900a5a1ad0da264158c584d338dd7e9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_05773b605bcd4c7919d9c30663dd410084982360eb006837cca26c9bded2c898 = $this->env->getExtension("native_profiler");
        $__internal_05773b605bcd4c7919d9c30663dd410084982360eb006837cca26c9bded2c898->enter($__internal_05773b605bcd4c7919d9c30663dd410084982360eb006837cca26c9bded2c898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_05773b605bcd4c7919d9c30663dd410084982360eb006837cca26c9bded2c898->leave($__internal_05773b605bcd4c7919d9c30663dd410084982360eb006837cca26c9bded2c898_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2de0662275b5357b3de058a6dffc7ae2aad2d9febc8906d5b8c2e480e066116d = $this->env->getExtension("native_profiler");
        $__internal_2de0662275b5357b3de058a6dffc7ae2aad2d9febc8906d5b8c2e480e066116d->enter($__internal_2de0662275b5357b3de058a6dffc7ae2aad2d9febc8906d5b8c2e480e066116d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_2de0662275b5357b3de058a6dffc7ae2aad2d9febc8906d5b8c2e480e066116d->leave($__internal_2de0662275b5357b3de058a6dffc7ae2aad2d9febc8906d5b8c2e480e066116d_prof);

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
