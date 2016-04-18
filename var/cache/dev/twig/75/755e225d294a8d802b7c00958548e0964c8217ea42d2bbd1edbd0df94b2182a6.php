<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_4399e6cdd050ad7ba38992184b63eae85223512e49d7077236bf547f28511fe0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_03a25c79a012d0742f3415457b80a0a062e312f6bf0b84ccdcd2748812797abc = $this->env->getExtension("native_profiler");
        $__internal_03a25c79a012d0742f3415457b80a0a062e312f6bf0b84ccdcd2748812797abc->enter($__internal_03a25c79a012d0742f3415457b80a0a062e312f6bf0b84ccdcd2748812797abc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03a25c79a012d0742f3415457b80a0a062e312f6bf0b84ccdcd2748812797abc->leave($__internal_03a25c79a012d0742f3415457b80a0a062e312f6bf0b84ccdcd2748812797abc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_992f1f9bb52723ad2f2cc00b8ad038f48401ab6cd6ea7eee7da4e1cba63aa1e0 = $this->env->getExtension("native_profiler");
        $__internal_992f1f9bb52723ad2f2cc00b8ad038f48401ab6cd6ea7eee7da4e1cba63aa1e0->enter($__internal_992f1f9bb52723ad2f2cc00b8ad038f48401ab6cd6ea7eee7da4e1cba63aa1e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_992f1f9bb52723ad2f2cc00b8ad038f48401ab6cd6ea7eee7da4e1cba63aa1e0->leave($__internal_992f1f9bb52723ad2f2cc00b8ad038f48401ab6cd6ea7eee7da4e1cba63aa1e0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
