<?php

/* :Admin/product/new.html.twig */
class __TwigTemplate_52ac63ea3c95af89efec7ed807e239061ad2474ab5697fb05662940861ddf94f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/product/new.html.twig", 1);
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
        $__internal_65426a947276260f03e32d74b2cd4f5ab048c016eb92f1e7ffa15f54d3e49c80 = $this->env->getExtension("native_profiler");
        $__internal_65426a947276260f03e32d74b2cd4f5ab048c016eb92f1e7ffa15f54d3e49c80->enter($__internal_65426a947276260f03e32d74b2cd4f5ab048c016eb92f1e7ffa15f54d3e49c80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_65426a947276260f03e32d74b2cd4f5ab048c016eb92f1e7ffa15f54d3e49c80->leave($__internal_65426a947276260f03e32d74b2cd4f5ab048c016eb92f1e7ffa15f54d3e49c80_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7965bfe954bb729db296de6895b963dd98a0875d36293dc0c8884763e8064079 = $this->env->getExtension("native_profiler");
        $__internal_7965bfe954bb729db296de6895b963dd98a0875d36293dc0c8884763e8064079->enter($__internal_7965bfe954bb729db296de6895b963dd98a0875d36293dc0c8884763e8064079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "محصول جدید";
        
        $__internal_7965bfe954bb729db296de6895b963dd98a0875d36293dc0c8884763e8064079->leave($__internal_7965bfe954bb729db296de6895b963dd98a0875d36293dc0c8884763e8064079_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_0a2e0d663da596f16b39ce416b73f0233e042ae13a21c10af2eb8a788b7016a1 = $this->env->getExtension("native_profiler");
        $__internal_0a2e0d663da596f16b39ce416b73f0233e042ae13a21c10af2eb8a788b7016a1->enter($__internal_0a2e0d663da596f16b39ce416b73f0233e042ae13a21c10af2eb8a788b7016a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_0a2e0d663da596f16b39ce416b73f0233e042ae13a21c10af2eb8a788b7016a1->leave($__internal_0a2e0d663da596f16b39ce416b73f0233e042ae13a21c10af2eb8a788b7016a1_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_179604e1145156cf6bcb03367c913988a6ab4ed8da10d6915a4a1db0a2025955 = $this->env->getExtension("native_profiler");
        $__internal_179604e1145156cf6bcb03367c913988a6ab4ed8da10d6915a4a1db0a2025955->enter($__internal_179604e1145156cf6bcb03367c913988a6ab4ed8da10d6915a4a1db0a2025955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"product-form\">
        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"product-description\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>

        <div class=\"product-image\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
        </div>

        <div class=\"product-price\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
        </div>

        <div class=\"product-category\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
        </div>
        ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 38
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveproduct"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_179604e1145156cf6bcb03367c913988a6ab4ed8da10d6915a4a1db0a2025955->leave($__internal_179604e1145156cf6bcb03367c913988a6ab4ed8da10d6915a4a1db0a2025955_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 41,  132 => 39,  126 => 38,  121 => 36,  116 => 34,  109 => 30,  102 => 26,  95 => 22,  91 => 21,  85 => 18,  82 => 17,  76 => 16,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}محصول جدید{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_product_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.newproduct' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {%  block content %}*/
/*     <div class="product-form">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="product-description">*/
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/* */
/*         <div class="product-image">*/
/*             {{ form_row(form.image) }}*/
/*         </div>*/
/* */
/*         <div class="product-price">*/
/*             {{ form_row(form.price) }}*/
/*         </div>*/
/* */
/*         <div class="product-category">*/
/*             {{ form_row(form.category) }}*/
/*         </div>*/
/*         {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
