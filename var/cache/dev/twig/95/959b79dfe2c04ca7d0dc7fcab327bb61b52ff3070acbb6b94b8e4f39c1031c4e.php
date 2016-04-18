<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_4831c622356967b02e0eb26667094f850307eaf2e257d7c6124f96153f27d410 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_aac5e55fe28292e480e1dd35edbc8b57397ec63c80294cfbad580bef0eb08067 = $this->env->getExtension("native_profiler");
        $__internal_aac5e55fe28292e480e1dd35edbc8b57397ec63c80294cfbad580bef0eb08067->enter($__internal_aac5e55fe28292e480e1dd35edbc8b57397ec63c80294cfbad580bef0eb08067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aac5e55fe28292e480e1dd35edbc8b57397ec63c80294cfbad580bef0eb08067->leave($__internal_aac5e55fe28292e480e1dd35edbc8b57397ec63c80294cfbad580bef0eb08067_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9952f39039677b8360b26054ca6a31d4a769dc2e4cf01bf2c65b3241ded3f4c = $this->env->getExtension("native_profiler");
        $__internal_e9952f39039677b8360b26054ca6a31d4a769dc2e4cf01bf2c65b3241ded3f4c->enter($__internal_e9952f39039677b8360b26054ca6a31d4a769dc2e4cf01bf2c65b3241ded3f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_e9952f39039677b8360b26054ca6a31d4a769dc2e4cf01bf2c65b3241ded3f4c->leave($__internal_e9952f39039677b8360b26054ca6a31d4a769dc2e4cf01bf2c65b3241ded3f4c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
