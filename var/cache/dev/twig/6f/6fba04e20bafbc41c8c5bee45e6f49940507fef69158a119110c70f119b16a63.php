<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9cf88099246bda92daa59bd397a4c1c15c05227418d789b6b986adfda3cb5aeb extends Twig_Template
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
        $__internal_4af739648bd0b979883e380d5184ca84201b3953f3c018641fd002f37b17a902 = $this->env->getExtension("native_profiler");
        $__internal_4af739648bd0b979883e380d5184ca84201b3953f3c018641fd002f37b17a902->enter($__internal_4af739648bd0b979883e380d5184ca84201b3953f3c018641fd002f37b17a902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4af739648bd0b979883e380d5184ca84201b3953f3c018641fd002f37b17a902->leave($__internal_4af739648bd0b979883e380d5184ca84201b3953f3c018641fd002f37b17a902_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e2049ce43020675e93ffcd76b7e09a961c221fd8aff8eecab714a9d8818a1171 = $this->env->getExtension("native_profiler");
        $__internal_e2049ce43020675e93ffcd76b7e09a961c221fd8aff8eecab714a9d8818a1171->enter($__internal_e2049ce43020675e93ffcd76b7e09a961c221fd8aff8eecab714a9d8818a1171_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e2049ce43020675e93ffcd76b7e09a961c221fd8aff8eecab714a9d8818a1171->leave($__internal_e2049ce43020675e93ffcd76b7e09a961c221fd8aff8eecab714a9d8818a1171_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_331d070dc41420eab2cdd32441385ff331da5e6d9398f0fd753e285cf65362c9 = $this->env->getExtension("native_profiler");
        $__internal_331d070dc41420eab2cdd32441385ff331da5e6d9398f0fd753e285cf65362c9->enter($__internal_331d070dc41420eab2cdd32441385ff331da5e6d9398f0fd753e285cf65362c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_331d070dc41420eab2cdd32441385ff331da5e6d9398f0fd753e285cf65362c9->leave($__internal_331d070dc41420eab2cdd32441385ff331da5e6d9398f0fd753e285cf65362c9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5db0034b5aff562b1ee93bbc457ed901824277be2e4f5aa470e119a6fe1a431f = $this->env->getExtension("native_profiler");
        $__internal_5db0034b5aff562b1ee93bbc457ed901824277be2e4f5aa470e119a6fe1a431f->enter($__internal_5db0034b5aff562b1ee93bbc457ed901824277be2e4f5aa470e119a6fe1a431f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5db0034b5aff562b1ee93bbc457ed901824277be2e4f5aa470e119a6fe1a431f->leave($__internal_5db0034b5aff562b1ee93bbc457ed901824277be2e4f5aa470e119a6fe1a431f_prof);

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
