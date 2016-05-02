<?php

/* :Admin/category/update.html.twig */
class __TwigTemplate_8356d777a17972da532ef6d9ded980ebd640961fc1177c5d2d769124833b3504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/category/update.html.twig", 1);
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
        $__internal_d4b02867aa8a632ae93e74b6ffc2d32bc1a56274106bf7c7ca236e4423aaa4f0 = $this->env->getExtension("native_profiler");
        $__internal_d4b02867aa8a632ae93e74b6ffc2d32bc1a56274106bf7c7ca236e4423aaa4f0->enter($__internal_d4b02867aa8a632ae93e74b6ffc2d32bc1a56274106bf7c7ca236e4423aaa4f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b02867aa8a632ae93e74b6ffc2d32bc1a56274106bf7c7ca236e4423aaa4f0->leave($__internal_d4b02867aa8a632ae93e74b6ffc2d32bc1a56274106bf7c7ca236e4423aaa4f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_518de9fcb10507bdd313f2a016a1cff92af6c8c833a9fc9e191d2161a15daf78 = $this->env->getExtension("native_profiler");
        $__internal_518de9fcb10507bdd313f2a016a1cff92af6c8c833a9fc9e191d2161a15daf78->enter($__internal_518de9fcb10507bdd313f2a016a1cff92af6c8c833a9fc9e191d2161a15daf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        
        $__internal_518de9fcb10507bdd313f2a016a1cff92af6c8c833a9fc9e191d2161a15daf78->leave($__internal_518de9fcb10507bdd313f2a016a1cff92af6c8c833a9fc9e191d2161a15daf78_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_557dfcf3d0fc9575a11fb893b7c2cd6fef0779e75ec20cb59637aba03de9bc11 = $this->env->getExtension("native_profiler");
        $__internal_557dfcf3d0fc9575a11fb893b7c2cd6fef0779e75ec20cb59637aba03de9bc11->enter($__internal_557dfcf3d0fc9575a11fb893b7c2cd6fef0779e75ec20cb59637aba03de9bc11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_557dfcf3d0fc9575a11fb893b7c2cd6fef0779e75ec20cb59637aba03de9bc11->leave($__internal_557dfcf3d0fc9575a11fb893b7c2cd6fef0779e75ec20cb59637aba03de9bc11_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_307417adea2b4b1c10bf1f7fef01f43759e12ee592b2a6267bef5fe213975dee = $this->env->getExtension("native_profiler");
        $__internal_307417adea2b4b1c10bf1f7fef01f43759e12ee592b2a6267bef5fe213975dee->enter($__internal_307417adea2b4b1c10bf1f7fef01f43759e12ee592b2a6267bef5fe213975dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"category-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"category-title\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        </div>

        <div class=\"category-image clearfix\">
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "vars", array()), "data", array()), "image", array()))), "html", null, true);
        echo "\" />
            <button><span>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.add.image"), "html", null, true);
        echo "</span>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</button>
        </div>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"buttons\">
            <a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savecategory"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_307417adea2b4b1c10bf1f7fef01f43759e12ee592b2a6267bef5fe213975dee->leave($__internal_307417adea2b4b1c10bf1f7fef01f43759e12ee592b2a6267bef5fe213975dee_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/category/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  121 => 31,  115 => 30,  109 => 27,  102 => 25,  98 => 24,  91 => 20,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.edit' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_category_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.categorylist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <div class="category-form">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="category-title">*/
/*             {{ form_row(form.title) }}*/
/*         </div>*/
/* */
/*         <div class="category-image clearfix">*/
/*             <img src="{{ asset('uploads/' ~ form.vars.data.image) }}" />*/
/*             <button><span>{{ 'app.add.image' | trans}}</span>{{ form_widget(form.file) }}</button>*/
/*         </div>*/
/*         {{ form_widget(form) }}*/
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savecategory' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
