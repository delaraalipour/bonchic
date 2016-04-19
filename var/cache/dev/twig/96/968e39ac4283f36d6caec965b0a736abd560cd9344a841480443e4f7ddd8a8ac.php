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
        $__internal_8745f04c6de7fe7cbfaf69d12ec286c06c3f76f023c539f3cdb5f29332ef1cc3 = $this->env->getExtension("native_profiler");
        $__internal_8745f04c6de7fe7cbfaf69d12ec286c06c3f76f023c539f3cdb5f29332ef1cc3->enter($__internal_8745f04c6de7fe7cbfaf69d12ec286c06c3f76f023c539f3cdb5f29332ef1cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/delete.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8745f04c6de7fe7cbfaf69d12ec286c06c3f76f023c539f3cdb5f29332ef1cc3->leave($__internal_8745f04c6de7fe7cbfaf69d12ec286c06c3f76f023c539f3cdb5f29332ef1cc3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_92d135f52c12b97f23f45bbfefc5715ca2b5ed202c2f20084723e45ba980942d = $this->env->getExtension("native_profiler");
        $__internal_92d135f52c12b97f23f45bbfefc5715ca2b5ed202c2f20084723e45ba980942d->enter($__internal_92d135f52c12b97f23f45bbfefc5715ca2b5ed202c2f20084723e45ba980942d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete.product"), "html", null, true);
        
        $__internal_92d135f52c12b97f23f45bbfefc5715ca2b5ed202c2f20084723e45ba980942d->leave($__internal_92d135f52c12b97f23f45bbfefc5715ca2b5ed202c2f20084723e45ba980942d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_0315cfe2de636e8788c5f324209bb734599b503d324d0a62cc2b0a52755c8163 = $this->env->getExtension("native_profiler");
        $__internal_0315cfe2de636e8788c5f324209bb734599b503d324d0a62cc2b0a52755c8163->enter($__internal_0315cfe2de636e8788c5f324209bb734599b503d324d0a62cc2b0a52755c8163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_0315cfe2de636e8788c5f324209bb734599b503d324d0a62cc2b0a52755c8163->leave($__internal_0315cfe2de636e8788c5f324209bb734599b503d324d0a62cc2b0a52755c8163_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_38a1719cd05e48dd6b9001f0dfd6b07183ca709973a8c9307ef818af98d3ecb8 = $this->env->getExtension("native_profiler");
        $__internal_38a1719cd05e48dd6b9001f0dfd6b07183ca709973a8c9307ef818af98d3ecb8->enter($__internal_38a1719cd05e48dd6b9001f0dfd6b07183ca709973a8c9307ef818af98d3ecb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_38a1719cd05e48dd6b9001f0dfd6b07183ca709973a8c9307ef818af98d3ecb8->leave($__internal_38a1719cd05e48dd6b9001f0dfd6b07183ca709973a8c9307ef818af98d3ecb8_prof);

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
/* {% block title %}{{ 'app.delete.product' | trans }}{% endblock %}*/
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
