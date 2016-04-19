<?php

/* :Admin/category/delete.html.twig */
class __TwigTemplate_7a7165b42c5f2aa0d57b081a486ca73eabd10b5fc9fe8d563690c898489a0bbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/category/delete.html.twig", 1);
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
        $__internal_34bee463864ce46b0fcc1620ba12f98a42a54a5f7d95a065d3a8f02fb6c35d3f = $this->env->getExtension("native_profiler");
        $__internal_34bee463864ce46b0fcc1620ba12f98a42a54a5f7d95a065d3a8f02fb6c35d3f->enter($__internal_34bee463864ce46b0fcc1620ba12f98a42a54a5f7d95a065d3a8f02fb6c35d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34bee463864ce46b0fcc1620ba12f98a42a54a5f7d95a065d3a8f02fb6c35d3f->leave($__internal_34bee463864ce46b0fcc1620ba12f98a42a54a5f7d95a065d3a8f02fb6c35d3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b698b760f95534b4da59f4ad6030201bb3a4e3ae4ae708e37d4a393f157041f2 = $this->env->getExtension("native_profiler");
        $__internal_b698b760f95534b4da59f4ad6030201bb3a4e3ae4ae708e37d4a393f157041f2->enter($__internal_b698b760f95534b4da59f4ad6030201bb3a4e3ae4ae708e37d4a393f157041f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete.category"), "html", null, true);
        
        $__internal_b698b760f95534b4da59f4ad6030201bb3a4e3ae4ae708e37d4a393f157041f2->leave($__internal_b698b760f95534b4da59f4ad6030201bb3a4e3ae4ae708e37d4a393f157041f2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_0ae97f3944f0e566e9927f5129479cb652a3290555a69dc380b720a9e0389155 = $this->env->getExtension("native_profiler");
        $__internal_0ae97f3944f0e566e9927f5129479cb652a3290555a69dc380b720a9e0389155->enter($__internal_0ae97f3944f0e566e9927f5129479cb652a3290555a69dc380b720a9e0389155_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-pencil\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.delete"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_0ae97f3944f0e566e9927f5129479cb652a3290555a69dc380b720a9e0389155->leave($__internal_0ae97f3944f0e566e9927f5129479cb652a3290555a69dc380b720a9e0389155_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_dc81480d796a1a7e573d15a9cf68ac3f67a9d0f2f084fcf047a4d543b2bb34a1 = $this->env->getExtension("native_profiler");
        $__internal_dc81480d796a1a7e573d15a9cf68ac3f67a9d0f2f084fcf047a4d543b2bb34a1->enter($__internal_dc81480d796a1a7e573d15a9cf68ac3f67a9d0f2f084fcf047a4d543b2bb34a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">

        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
            <div class=\"product-description\">
                ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            </div>
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete.category"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_dc81480d796a1a7e573d15a9cf68ac3f67a9d0f2f084fcf047a4d543b2bb34a1->leave($__internal_dc81480d796a1a7e573d15a9cf68ac3f67a9d0f2f084fcf047a4d543b2bb34a1_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/category/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 27,  107 => 25,  101 => 24,  96 => 22,  91 => 20,  86 => 18,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.delete.category' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_category_list') }}"><i class="glyphicon glyphicon-pencil"></i>{{ 'app.categorylist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.product.delete' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="product-form">*/
/* */
/*         {{ form_start(form) }}*/
/*             <div class="product-description">*/
/*                 {{ form_row(form.title) }}*/
/*             </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.delete.category' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
