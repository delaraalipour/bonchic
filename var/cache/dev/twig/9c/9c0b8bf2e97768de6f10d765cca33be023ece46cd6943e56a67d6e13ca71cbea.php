<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_5fea239931c48906357a5050a186805a6f3d52e57d18cde79e5212ca07713b69 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a6a79dfe6da79a20d28b5fe69d4e27626d66ea4fcefe0c8e0ab80a0f8bcd706 = $this->env->getExtension("native_profiler");
        $__internal_4a6a79dfe6da79a20d28b5fe69d4e27626d66ea4fcefe0c8e0ab80a0f8bcd706->enter($__internal_4a6a79dfe6da79a20d28b5fe69d4e27626d66ea4fcefe0c8e0ab80a0f8bcd706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4a6a79dfe6da79a20d28b5fe69d4e27626d66ea4fcefe0c8e0ab80a0f8bcd706->leave($__internal_4a6a79dfe6da79a20d28b5fe69d4e27626d66ea4fcefe0c8e0ab80a0f8bcd706_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_f975d5292ce9d2f611584e00f203be8e9450d89b6fe8c07c27553999030cdc00 = $this->env->getExtension("native_profiler");
        $__internal_f975d5292ce9d2f611584e00f203be8e9450d89b6fe8c07c27553999030cdc00->enter($__internal_f975d5292ce9d2f611584e00f203be8e9450d89b6fe8c07c27553999030cdc00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_f975d5292ce9d2f611584e00f203be8e9450d89b6fe8c07c27553999030cdc00->leave($__internal_f975d5292ce9d2f611584e00f203be8e9450d89b6fe8c07c27553999030cdc00_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9131e5b396d99a2937aaa5f466f129d381889eb5054efe3b93c2c37dfd33e1a1 = $this->env->getExtension("native_profiler");
        $__internal_9131e5b396d99a2937aaa5f466f129d381889eb5054efe3b93c2c37dfd33e1a1->enter($__internal_9131e5b396d99a2937aaa5f466f129d381889eb5054efe3b93c2c37dfd33e1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9131e5b396d99a2937aaa5f466f129d381889eb5054efe3b93c2c37dfd33e1a1->leave($__internal_9131e5b396d99a2937aaa5f466f129d381889eb5054efe3b93c2c37dfd33e1a1_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_da4a53035018039f2ed7b52ada1c2e2e341935d6689c43db016617d34be8bc7e = $this->env->getExtension("native_profiler");
        $__internal_da4a53035018039f2ed7b52ada1c2e2e341935d6689c43db016617d34be8bc7e->enter($__internal_da4a53035018039f2ed7b52ada1c2e2e341935d6689c43db016617d34be8bc7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_da4a53035018039f2ed7b52ada1c2e2e341935d6689c43db016617d34be8bc7e->leave($__internal_da4a53035018039f2ed7b52ada1c2e2e341935d6689c43db016617d34be8bc7e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
