<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_6a8507277414f4ba905bb38a68bf61e6ac30f78768f039c1e48f8b491f021c5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_20198af54f3b9dfc9ef966f13e0e3d7897da4d9cf68d95fbb5a39508b08e81bd = $this->env->getExtension("native_profiler");
        $__internal_20198af54f3b9dfc9ef966f13e0e3d7897da4d9cf68d95fbb5a39508b08e81bd->enter($__internal_20198af54f3b9dfc9ef966f13e0e3d7897da4d9cf68d95fbb5a39508b08e81bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20198af54f3b9dfc9ef966f13e0e3d7897da4d9cf68d95fbb5a39508b08e81bd->leave($__internal_20198af54f3b9dfc9ef966f13e0e3d7897da4d9cf68d95fbb5a39508b08e81bd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cffb1906393c2852e86348bec11241a2d8b37a177d23339b8b1d2ea98cfff4bc = $this->env->getExtension("native_profiler");
        $__internal_cffb1906393c2852e86348bec11241a2d8b37a177d23339b8b1d2ea98cfff4bc->enter($__internal_cffb1906393c2852e86348bec11241a2d8b37a177d23339b8b1d2ea98cfff4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_cffb1906393c2852e86348bec11241a2d8b37a177d23339b8b1d2ea98cfff4bc->leave($__internal_cffb1906393c2852e86348bec11241a2d8b37a177d23339b8b1d2ea98cfff4bc_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
