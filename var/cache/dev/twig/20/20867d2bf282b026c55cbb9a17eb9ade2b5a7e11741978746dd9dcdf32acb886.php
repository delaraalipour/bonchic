<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2524f8bed01c70cd3219f0cee83ee7ca70ce514fa76b8baa75498db12fdb2e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 4
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 4);
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
        $__internal_ddd076f83a252871cbeda8a2f637b9d777055a4de08c61fb65db1d01406a4d86 = $this->env->getExtension("native_profiler");
        $__internal_ddd076f83a252871cbeda8a2f637b9d777055a4de08c61fb65db1d01406a4d86->enter($__internal_ddd076f83a252871cbeda8a2f637b9d777055a4de08c61fb65db1d01406a4d86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd076f83a252871cbeda8a2f637b9d777055a4de08c61fb65db1d01406a4d86->leave($__internal_ddd076f83a252871cbeda8a2f637b9d777055a4de08c61fb65db1d01406a4d86_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b7f87dc042710d94e0e0a69149b2238fc74943f4632e136a73bbf41475e91f20 = $this->env->getExtension("native_profiler");
        $__internal_b7f87dc042710d94e0e0a69149b2238fc74943f4632e136a73bbf41475e91f20->enter($__internal_b7f87dc042710d94e0e0a69149b2238fc74943f4632e136a73bbf41475e91f20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.register"), "html", null, true);
        
        $__internal_b7f87dc042710d94e0e0a69149b2238fc74943f4632e136a73bbf41475e91f20->leave($__internal_b7f87dc042710d94e0e0a69149b2238fc74943f4632e136a73bbf41475e91f20_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a12082cb869a0f932f501100deac8340d988308b7dfebc45421fc8c12f65b8a2 = $this->env->getExtension("native_profiler");
        $__internal_a12082cb869a0f932f501100deac8340d988308b7dfebc45421fc8c12f65b8a2->enter($__internal_a12082cb869a0f932f501100deac8340d988308b7dfebc45421fc8c12f65b8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a12082cb869a0f932f501100deac8340d988308b7dfebc45421fc8c12f65b8a2->leave($__internal_a12082cb869a0f932f501100deac8340d988308b7dfebc45421fc8c12f65b8a2_prof);

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
        return array (  73 => 13,  68 => 11,  63 => 9,  59 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 4,);
    }
}
/* */
/* */
/* {% block title %}{{ 'app.register' | trans }}{% endblock %}*/
/* {% extends ":Storefront:layout.html.twig" %}*/
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
