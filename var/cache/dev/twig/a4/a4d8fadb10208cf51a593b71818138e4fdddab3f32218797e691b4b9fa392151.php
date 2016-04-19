<?php

/* :Admin/category/new.html.twig */
class __TwigTemplate_c7f174f7257e89cf43502f4e87c1718a10faabfdd01aa941ed8a5e24881f57be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/category/new.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1e69b36a496a3809eed35d6e30856fff8dd31076df39b2fb6c0ed60ae46f6717 = $this->env->getExtension("native_profiler");
        $__internal_1e69b36a496a3809eed35d6e30856fff8dd31076df39b2fb6c0ed60ae46f6717->enter($__internal_1e69b36a496a3809eed35d6e30856fff8dd31076df39b2fb6c0ed60ae46f6717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e69b36a496a3809eed35d6e30856fff8dd31076df39b2fb6c0ed60ae46f6717->leave($__internal_1e69b36a496a3809eed35d6e30856fff8dd31076df39b2fb6c0ed60ae46f6717_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3af93857e052e4164e63cc4638ff862fb984d0325c3fd9307ce541217ea53d3 = $this->env->getExtension("native_profiler");
        $__internal_c3af93857e052e4164e63cc4638ff862fb984d0325c3fd9307ce541217ea53d3->enter($__internal_c3af93857e052e4164e63cc4638ff862fb984d0325c3fd9307ce541217ea53d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newcategory"), "html", null, true);
        
        $__internal_c3af93857e052e4164e63cc4638ff862fb984d0325c3fd9307ce541217ea53d3->leave($__internal_c3af93857e052e4164e63cc4638ff862fb984d0325c3fd9307ce541217ea53d3_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_de15357beae180775699bb6f64b493975c8ddf86212b4f1dba0a5c9e3dbc4aa8 = $this->env->getExtension("native_profiler");
        $__internal_de15357beae180775699bb6f64b493975c8ddf86212b4f1dba0a5c9e3dbc4aa8->enter($__internal_de15357beae180775699bb6f64b493975c8ddf86212b4f1dba0a5c9e3dbc4aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newcategory"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_de15357beae180775699bb6f64b493975c8ddf86212b4f1dba0a5c9e3dbc4aa8->leave($__internal_de15357beae180775699bb6f64b493975c8ddf86212b4f1dba0a5c9e3dbc4aa8_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9d4527c9e34c0a6816d4a28401d222840f913bde40e86d6227429d5c92d71e6 = $this->env->getExtension("native_profiler");
        $__internal_a9d4527c9e34c0a6816d4a28401d222840f913bde40e86d6227429d5c92d71e6->enter($__internal_a9d4527c9e34c0a6816d4a28401d222840f913bde40e86d6227429d5c92d71e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">

        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"product-category\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    </div>
    <div class=\"product-category-image\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
    </div>

        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savecategory"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_a9d4527c9e34c0a6816d4a28401d222840f913bde40e86d6227429d5c92d71e6->leave($__internal_a9d4527c9e34c0a6816d4a28401d222840f913bde40e86d6227429d5c92d71e6_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 31,  114 => 29,  108 => 28,  103 => 26,  97 => 23,  91 => 20,  86 => 18,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newcategory' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_category_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.categorylist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.newcategory' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="product-form">*/
/* */
/*         {{ form_start(form) }}*/
/*     <div class="product-category">*/
/*         {{ form_row(form.title) }}*/
/*     </div>*/
/*     <div class="product-category-image">*/
/*         {{ form_row(form.file) }}*/
/*     </div>*/
/* */
/*         {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savecategory' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
