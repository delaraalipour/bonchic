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
        $__internal_5280339b84378fd23d6d7c4f2d08ba26ccd87285a3444ab6be04a23f6bf55b8b = $this->env->getExtension("native_profiler");
        $__internal_5280339b84378fd23d6d7c4f2d08ba26ccd87285a3444ab6be04a23f6bf55b8b->enter($__internal_5280339b84378fd23d6d7c4f2d08ba26ccd87285a3444ab6be04a23f6bf55b8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5280339b84378fd23d6d7c4f2d08ba26ccd87285a3444ab6be04a23f6bf55b8b->leave($__internal_5280339b84378fd23d6d7c4f2d08ba26ccd87285a3444ab6be04a23f6bf55b8b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9099b6d38bda1a45dcc4bb75a319e32c484ff764ec7467f3cffd33baa013348b = $this->env->getExtension("native_profiler");
        $__internal_9099b6d38bda1a45dcc4bb75a319e32c484ff764ec7467f3cffd33baa013348b->enter($__internal_9099b6d38bda1a45dcc4bb75a319e32c484ff764ec7467f3cffd33baa013348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_9099b6d38bda1a45dcc4bb75a319e32c484ff764ec7467f3cffd33baa013348b->leave($__internal_9099b6d38bda1a45dcc4bb75a319e32c484ff764ec7467f3cffd33baa013348b_prof);

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
