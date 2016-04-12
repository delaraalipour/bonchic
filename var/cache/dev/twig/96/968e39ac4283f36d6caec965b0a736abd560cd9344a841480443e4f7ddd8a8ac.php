<?php

/* :Admin/product/delete.html.twig */
class __TwigTemplate_b8dad52f865caf6e5ffecb78dccc33999bb8a0aa7cb46d1260940e58f0acebb7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/product/delete.html.twig", 1);
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
        $__internal_2bfb30ad7ff1acbac87fc045dfff7e926f179b9ebeab987025a47969c34f6046 = $this->env->getExtension("native_profiler");
        $__internal_2bfb30ad7ff1acbac87fc045dfff7e926f179b9ebeab987025a47969c34f6046->enter($__internal_2bfb30ad7ff1acbac87fc045dfff7e926f179b9ebeab987025a47969c34f6046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bfb30ad7ff1acbac87fc045dfff7e926f179b9ebeab987025a47969c34f6046->leave($__internal_2bfb30ad7ff1acbac87fc045dfff7e926f179b9ebeab987025a47969c34f6046_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1559f2d684a4d81df241ff7d7d9c6b55713c7d6c3365acc008d2fd880153b10 = $this->env->getExtension("native_profiler");
        $__internal_e1559f2d684a4d81df241ff7d7d9c6b55713c7d6c3365acc008d2fd880153b10->enter($__internal_e1559f2d684a4d81df241ff7d7d9c6b55713c7d6c3365acc008d2fd880153b10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "حذف محصول";
        
        $__internal_e1559f2d684a4d81df241ff7d7d9c6b55713c7d6c3365acc008d2fd880153b10->leave($__internal_e1559f2d684a4d81df241ff7d7d9c6b55713c7d6c3365acc008d2fd880153b10_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_3a9562cf64377cb9e0eb293d52d7102e34a79fb3a24e69d8cbff54feef4723a4 = $this->env->getExtension("native_profiler");
        $__internal_3a9562cf64377cb9e0eb293d52d7102e34a79fb3a24e69d8cbff54feef4723a4->enter($__internal_3a9562cf64377cb9e0eb293d52d7102e34a79fb3a24e69d8cbff54feef4723a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.delete"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_3a9562cf64377cb9e0eb293d52d7102e34a79fb3a24e69d8cbff54feef4723a4->leave($__internal_3a9562cf64377cb9e0eb293d52d7102e34a79fb3a24e69d8cbff54feef4723a4_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_93b274de9c72f983c05c5b7ee7ebde263a7fd3e4c8e7df0d6df1d90a16341ad3 = $this->env->getExtension("native_profiler");
        $__internal_93b274de9c72f983c05c5b7ee7ebde263a7fd3e4c8e7df0d6df1d90a16341ad3->enter($__internal_93b274de9c72f983c05c5b7ee7ebde263a7fd3e4c8e7df0d6df1d90a16341ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete.product"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_93b274de9c72f983c05c5b7ee7ebde263a7fd3e4c8e7df0d6df1d90a16341ad3->leave($__internal_93b274de9c72f983c05c5b7ee7ebde263a7fd3e4c8e7df0d6df1d90a16341ad3_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/product/delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 42,  133 => 40,  127 => 39,  121 => 36,  116 => 34,  109 => 30,  102 => 26,  95 => 22,  91 => 21,  85 => 18,  82 => 17,  76 => 16,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}حذف محصول{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_product_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.product.delete' | trans }}</span>*/
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
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.delete.product' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
