<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_65bf495e933fe624ef19bf9a9576ac67e7fe4e7401b63434707ea37bbb9b461f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6858c5c4566757b4d5bbd0f681d24b28a9c51b70d64d40d3fc1b6ea14e534248 = $this->env->getExtension("native_profiler");
        $__internal_6858c5c4566757b4d5bbd0f681d24b28a9c51b70d64d40d3fc1b6ea14e534248->enter($__internal_6858c5c4566757b4d5bbd0f681d24b28a9c51b70d64d40d3fc1b6ea14e534248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6858c5c4566757b4d5bbd0f681d24b28a9c51b70d64d40d3fc1b6ea14e534248->leave($__internal_6858c5c4566757b4d5bbd0f681d24b28a9c51b70d64d40d3fc1b6ea14e534248_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5e5ffa1ea169d89f79bfa589d4218ecf94803ce9fb721d62e48e594cd28adfb3 = $this->env->getExtension("native_profiler");
        $__internal_5e5ffa1ea169d89f79bfa589d4218ecf94803ce9fb721d62e48e594cd28adfb3->enter($__internal_5e5ffa1ea169d89f79bfa589d4218ecf94803ce9fb721d62e48e594cd28adfb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_5e5ffa1ea169d89f79bfa589d4218ecf94803ce9fb721d62e48e594cd28adfb3->leave($__internal_5e5ffa1ea169d89f79bfa589d4218ecf94803ce9fb721d62e48e594cd28adfb3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
