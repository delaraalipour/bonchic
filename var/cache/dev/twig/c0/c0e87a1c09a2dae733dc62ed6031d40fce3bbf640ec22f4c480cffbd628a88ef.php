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
        $__internal_99ee04ec281f88f72d3cf391d56a89864d6bca7caf6a9c6b55f5847079a13e98 = $this->env->getExtension("native_profiler");
        $__internal_99ee04ec281f88f72d3cf391d56a89864d6bca7caf6a9c6b55f5847079a13e98->enter($__internal_99ee04ec281f88f72d3cf391d56a89864d6bca7caf6a9c6b55f5847079a13e98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_99ee04ec281f88f72d3cf391d56a89864d6bca7caf6a9c6b55f5847079a13e98->leave($__internal_99ee04ec281f88f72d3cf391d56a89864d6bca7caf6a9c6b55f5847079a13e98_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67d1152c021cd6d28a5677100f17d06a3bf5b43b7bba7da216002a1d9b2819e2 = $this->env->getExtension("native_profiler");
        $__internal_67d1152c021cd6d28a5677100f17d06a3bf5b43b7bba7da216002a1d9b2819e2->enter($__internal_67d1152c021cd6d28a5677100f17d06a3bf5b43b7bba7da216002a1d9b2819e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_67d1152c021cd6d28a5677100f17d06a3bf5b43b7bba7da216002a1d9b2819e2->leave($__internal_67d1152c021cd6d28a5677100f17d06a3bf5b43b7bba7da216002a1d9b2819e2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_4f8914bcf31480b4c2257b8fa444dfca93c36fe0769af201b0e2bd9bd03844c6 = $this->env->getExtension("native_profiler");
        $__internal_4f8914bcf31480b4c2257b8fa444dfca93c36fe0769af201b0e2bd9bd03844c6->enter($__internal_4f8914bcf31480b4c2257b8fa444dfca93c36fe0769af201b0e2bd9bd03844c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_4f8914bcf31480b4c2257b8fa444dfca93c36fe0769af201b0e2bd9bd03844c6->leave($__internal_4f8914bcf31480b4c2257b8fa444dfca93c36fe0769af201b0e2bd9bd03844c6_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_4a14291248f4d3b795bd038f0904fc214efc41bd78e3f97e39dba5a89beaacb2 = $this->env->getExtension("native_profiler");
        $__internal_4a14291248f4d3b795bd038f0904fc214efc41bd78e3f97e39dba5a89beaacb2->enter($__internal_4a14291248f4d3b795bd038f0904fc214efc41bd78e3f97e39dba5a89beaacb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <div class=\"product-form\">
        ";
        // line 18
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
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        </div>
        <div class=\"product-price\">
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
        </div>
        <div class=\"product-category\">
            ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tag", array()), 'row');
        echo "
            <button>Add!</button>
            <div id=\"messages\"></div>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script>
                \$(document).ready(function() {
                    \$('button').click(function() {
                        var toAdd = \$(\"input[name=product[tag]]\").val();
                        \$('#messages').append(\"<p>\" + toAdd + \"</p>\");
                    });
                });
            </script>
            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
        </div>
            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 46
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveproduct"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_4a14291248f4d3b795bd038f0904fc214efc41bd78e3f97e39dba5a89beaacb2->leave($__internal_4a14291248f4d3b795bd038f0904fc214efc41bd78e3f97e39dba5a89beaacb2_prof);

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
        return array (  148 => 49,  143 => 47,  137 => 46,  132 => 44,  127 => 42,  112 => 30,  106 => 27,  100 => 24,  94 => 21,  90 => 20,  85 => 18,  82 => 17,  76 => 16,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newproduct' | trans }}{% endblock %}*/
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
/*         <div class="product-description">*/
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/*         <div class="product-image">*/
/*             {{ form_row(form.file) }}*/
/*         </div>*/
/*         <div class="product-price">*/
/*             {{ form_row(form.price) }}*/
/*         </div>*/
/*         <div class="product-category">*/
/*             {{ form_row(form.tag) }}*/
/*             <button>Add!</button>*/
/*             <div id="messages"></div>*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*             <script>*/
/*                 $(document).ready(function() {*/
/*                     $('button').click(function() {*/
/*                         var toAdd = $("input[name=product[tag]]").val();*/
/*                         $('#messages').append("<p>" + toAdd + "</p>");*/
/*                     });*/
/*                 });*/
/*             </script>*/
/*             {{ form_row(form.category) }}*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
