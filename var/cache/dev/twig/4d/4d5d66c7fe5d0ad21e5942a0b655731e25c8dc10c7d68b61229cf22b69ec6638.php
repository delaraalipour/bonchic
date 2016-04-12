<?php

/* :Admin/product/update.html.twig */
class __TwigTemplate_7ccfd583ba1d0480a58b8cb1b0b36ed9501565f04e4de44b040813cdd23086a1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/product/update.html.twig", 1);
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
        $__internal_d7b50c8334df6560e21fb92b8638e70998fc612df5f723dc7d098c3f923c95ab = $this->env->getExtension("native_profiler");
        $__internal_d7b50c8334df6560e21fb92b8638e70998fc612df5f723dc7d098c3f923c95ab->enter($__internal_d7b50c8334df6560e21fb92b8638e70998fc612df5f723dc7d098c3f923c95ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7b50c8334df6560e21fb92b8638e70998fc612df5f723dc7d098c3f923c95ab->leave($__internal_d7b50c8334df6560e21fb92b8638e70998fc612df5f723dc7d098c3f923c95ab_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c082b4baa571c3239a14cdd0aa8c4fd57055f8d823a422cf9597c2e20e1825d = $this->env->getExtension("native_profiler");
        $__internal_3c082b4baa571c3239a14cdd0aa8c4fd57055f8d823a422cf9597c2e20e1825d->enter($__internal_3c082b4baa571c3239a14cdd0aa8c4fd57055f8d823a422cf9597c2e20e1825d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.edit"), "html", null, true);
        
        $__internal_3c082b4baa571c3239a14cdd0aa8c4fd57055f8d823a422cf9597c2e20e1825d->leave($__internal_3c082b4baa571c3239a14cdd0aa8c4fd57055f8d823a422cf9597c2e20e1825d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_d080cecae4d13a3ad05eaaf7dbe062e7555744d537fb336d8361cafea5c42ae6 = $this->env->getExtension("native_profiler");
        $__internal_d080cecae4d13a3ad05eaaf7dbe062e7555744d537fb336d8361cafea5c42ae6->enter($__internal_d080cecae4d13a3ad05eaaf7dbe062e7555744d537fb336d8361cafea5c42ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_d080cecae4d13a3ad05eaaf7dbe062e7555744d537fb336d8361cafea5c42ae6->leave($__internal_d080cecae4d13a3ad05eaaf7dbe062e7555744d537fb336d8361cafea5c42ae6_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_3f6f4c6dfdf1d51602a3d5ecb9d24929fe41a645fe3af81d4f9c2ed4c64e6c5b = $this->env->getExtension("native_profiler");
        $__internal_3f6f4c6dfdf1d51602a3d5ecb9d24929fe41a645fe3af81d4f9c2ed4c64e6c5b->enter($__internal_3f6f4c6dfdf1d51602a3d5ecb9d24929fe41a645fe3af81d4f9c2ed4c64e6c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"product-description\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>

        <div class=\"product-image\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row');
        echo "
        </div>

        <div class=\"product-price\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
        </div>

        <div class=\"product-category\">
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
        </div>
        ";
        // line 35
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
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_3f6f4c6dfdf1d51602a3d5ecb9d24929fe41a645fe3af81d4f9c2ed4c64e6c5b->leave($__internal_3f6f4c6dfdf1d51602a3d5ecb9d24929fe41a645fe3af81d4f9c2ed4c64e6c5b_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/product/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 41,  133 => 39,  127 => 38,  121 => 35,  116 => 33,  109 => 29,  102 => 25,  95 => 21,  91 => 20,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.product.edit' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_product_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.product.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
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
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
