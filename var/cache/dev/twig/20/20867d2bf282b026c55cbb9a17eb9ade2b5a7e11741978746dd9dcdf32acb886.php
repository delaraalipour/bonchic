<?php

/* FOSUserBundle:Registration:register_content.html.twig */
class __TwigTemplate_2524f8bed01c70cd3219f0cee83ee7ca70ce514fa76b8baa75498db12fdb2e09 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", "FOSUserBundle:Registration:register_content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9b79fe4341681ee84504b2bd65800a061958bd0b356347fb7b4367226276081 = $this->env->getExtension("native_profiler");
        $__internal_c9b79fe4341681ee84504b2bd65800a061958bd0b356347fb7b4367226276081->enter($__internal_c9b79fe4341681ee84504b2bd65800a061958bd0b356347fb7b4367226276081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9b79fe4341681ee84504b2bd65800a061958bd0b356347fb7b4367226276081->leave($__internal_c9b79fe4341681ee84504b2bd65800a061958bd0b356347fb7b4367226276081_prof);

    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        $__internal_71d52be5910f72c6483e356b3e8171e0286a9d0bca5668c252dc9915bc08da13 = $this->env->getExtension("native_profiler");
        $__internal_71d52be5910f72c6483e356b3e8171e0286a9d0bca5668c252dc9915bc08da13->enter($__internal_71d52be5910f72c6483e356b3e8171e0286a9d0bca5668c252dc9915bc08da13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "
    ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('routing')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"submit\">
            <input type=\"submit\" value=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"register-submit\" />
        </div>
    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_71d52be5910f72c6483e356b3e8171e0286a9d0bca5668c252dc9915bc08da13->leave($__internal_71d52be5910f72c6483e356b3e8171e0286a9d0bca5668c252dc9915bc08da13_prof);

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
        return array (  60 => 12,  55 => 10,  50 => 8,  46 => 7,  43 => 6,  40 => 5,  34 => 4,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {%  block content %}*/
/*     {% form_theme form 'bootstrap_3_layout.html.twig' %}*/
/* */
/*     {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div class="submit">*/
/*             <input type="submit" value="{{ 'registration.submit'|trans }}" class="register-submit" />*/
/*         </div>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
