<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2524f8bed01c70cd3219f0cee83ee7ca70ce514fa76b8baa75498db12fdb2e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd8f793d183757e7f8d2d6a2d8502fd32b56405545eadf2021c6d4d778b9f741 = $this->env->getExtension("native_profiler");
        $__internal_bd8f793d183757e7f8d2d6a2d8502fd32b56405545eadf2021c6d4d778b9f741->enter($__internal_bd8f793d183757e7f8d2d6a2d8502fd32b56405545eadf2021c6d4d778b9f741_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd8f793d183757e7f8d2d6a2d8502fd32b56405545eadf2021c6d4d778b9f741->leave($__internal_bd8f793d183757e7f8d2d6a2d8502fd32b56405545eadf2021c6d4d778b9f741_prof);

    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        $__internal_9f4f4587a2d581e2fd3761abc7456c4cfb3711c41aeb2b8d0d152db959e889d0 = $this->env->getExtension("native_profiler");
        $__internal_9f4f4587a2d581e2fd3761abc7456c4cfb3711c41aeb2b8d0d152db959e889d0->enter($__internal_9f4f4587a2d581e2fd3761abc7456c4cfb3711c41aeb2b8d0d152db959e889d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.register"), "html", null, true);
        
        $__internal_9f4f4587a2d581e2fd3761abc7456c4cfb3711c41aeb2b8d0d152db959e889d0->leave($__internal_9f4f4587a2d581e2fd3761abc7456c4cfb3711c41aeb2b8d0d152db959e889d0_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_cc49166f0add204426d291f5ef36d5657e5cc9f55dea3fa407d5b3f1a346d596 = $this->env->getExtension("native_profiler");
        $__internal_cc49166f0add204426d291f5ef36d5657e5cc9f55dea3fa407d5b3f1a346d596->enter($__internal_cc49166f0add204426d291f5ef36d5657e5cc9f55dea3fa407d5b3f1a346d596_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "
    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"submit\">
            <input type=\"submit\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.registration.submit"), "html", null, true);
        echo "\" class=\"register-submit\" />
        </div>
    ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_cc49166f0add204426d291f5ef36d5657e5cc9f55dea3fa407d5b3f1a346d596->leave($__internal_cc49166f0add204426d291f5ef36d5657e5cc9f55dea3fa407d5b3f1a346d596_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  68 => 11,  63 => 9,  59 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 1,  11 => 3,);
    }
}
/* {% block title %}{{ 'app.register' | trans }}{% endblock %}*/
/* */
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {%  block content %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div class="submit">*/
/*             <input type="submit" value="{{ 'app.registration.submit'|trans }}" class="register-submit" />*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
