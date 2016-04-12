<?php

/* Storefront/category/list.html.twig */
class __TwigTemplate_482fd59d67a5401c67efb1f60df7b5c0ad14a106ea4ba7cf3659286710b2f841 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "Storefront/category/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54ec14ce9969172313d494e6acbe3d449002a6071c7c8f742caa6814b74dfa59 = $this->env->getExtension("native_profiler");
        $__internal_54ec14ce9969172313d494e6acbe3d449002a6071c7c8f742caa6814b74dfa59->enter($__internal_54ec14ce9969172313d494e6acbe3d449002a6071c7c8f742caa6814b74dfa59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Storefront/category/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54ec14ce9969172313d494e6acbe3d449002a6071c7c8f742caa6814b74dfa59->leave($__internal_54ec14ce9969172313d494e6acbe3d449002a6071c7c8f742caa6814b74dfa59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_890c1fb39ab8ac1c1a6d8a9beb9e91972be45c2ceb14fbd683d2bb1a81c3086e = $this->env->getExtension("native_profiler");
        $__internal_890c1fb39ab8ac1c1a6d8a9beb9e91972be45c2ceb14fbd683d2bb1a81c3086e->enter($__internal_890c1fb39ab8ac1c1a6d8a9beb9e91972be45c2ceb14fbd683d2bb1a81c3086e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "دسته محصولات";
        
        $__internal_890c1fb39ab8ac1c1a6d8a9beb9e91972be45c2ceb14fbd683d2bb1a81c3086e->leave($__internal_890c1fb39ab8ac1c1a6d8a9beb9e91972be45c2ceb14fbd683d2bb1a81c3086e_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ffe9e69a61d2f0e56ec93d6adbf1829c3ccd9abc5c0cc6b3f6a1d770843760e = $this->env->getExtension("native_profiler");
        $__internal_0ffe9e69a61d2f0e56ec93d6adbf1829c3ccd9abc5c0cc6b3f6a1d770843760e->enter($__internal_0ffe9e69a61d2f0e56ec93d6adbf1829c3ccd9abc5c0cc6b3f6a1d770843760e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "دسته محصولات";
        
        $__internal_0ffe9e69a61d2f0e56ec93d6adbf1829c3ccd9abc5c0cc6b3f6a1d770843760e->leave($__internal_0ffe9e69a61d2f0e56ec93d6adbf1829c3ccd9abc5c0cc6b3f6a1d770843760e_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_afb01d45c96c95984e7354969a30e045e72ab71f28765eec12b264ead70d011d = $this->env->getExtension("native_profiler");
        $__internal_afb01d45c96c95984e7354969a30e045e72ab71f28765eec12b264ead70d011d->enter($__internal_afb01d45c96c95984e7354969a30e045e72ab71f28765eec12b264ead70d011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <ul class=\"category\">
        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 10
            echo "            <li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
";
        
        $__internal_afb01d45c96c95984e7354969a30e045e72ab71f28765eec12b264ead70d011d->leave($__internal_afb01d45c96c95984e7354969a30e045e72ab71f28765eec12b264ead70d011d_prof);

    }

    public function getTemplateName()
    {
        return "Storefront/category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 12,  73 => 10,  69 => 9,  66 => 8,  60 => 7,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}دسته محصولات{% endblock %}*/
/* {% block header %}دسته محصولات{% endblock %}*/
/* */
/* */
/* {%  block content %}*/
/*     <ul class="category">*/
/*         {% for category in categories %}*/
/*             <li>{{ category.title }}</li>*/
/*         {% endfor %}*/
/*     </ul>*/
/* {% endblock %}*/
