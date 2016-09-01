<?php

/* default/registration.html.twig */
class __TwigTemplate_73076c89316788e1324098d5addcdb41b584b8e5d9251d0c6d94d11b93fed6bb extends Twig_Template
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
        $__internal_f984f765336bf63126532be362eeedc418ffaaf620859bb1c6f2b6dc04405d37 = $this->env->getExtension("native_profiler");
        $__internal_f984f765336bf63126532be362eeedc418ffaaf620859bb1c6f2b6dc04405d37->enter($__internal_f984f765336bf63126532be362eeedc418ffaaf620859bb1c6f2b6dc04405d37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/registration.html.twig"));

        // line 2
        echo "<h3>You did it! You registered!</h3>

Hi ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "! You're successfully registered.

";
        // line 7
        echo "To login, go to: <a href=\"http://www.google.com\">...</a>.

Thanks!

";
        // line 12
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("images/logo.png")), "html", null, true);
        echo "\">
";
        
        $__internal_f984f765336bf63126532be362eeedc418ffaaf620859bb1c6f2b6dc04405d37->leave($__internal_f984f765336bf63126532be362eeedc418ffaaf620859bb1c6f2b6dc04405d37_prof);

    }

    public function getTemplateName()
    {
        return "default/registration.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  31 => 7,  26 => 4,  22 => 2,);
    }
}
/* {# app/Resources/views/Emails/registration.html.twig #}*/
/* <h3>You did it! You registered!</h3>*/
/* */
/* Hi {{ name }}! You're successfully registered.*/
/* */
/* {# example, assuming you have a route named "login" #}*/
/* To login, go to: <a href="http://www.google.com">...</a>.*/
/* */
/* Thanks!*/
/* */
/* {# Makes an absolute URL to the /images/logo.png file #}*/
/* <img src="{{ absolute_url(asset('images/logo.png')) }}">*/
/* */
