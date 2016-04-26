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
        $__internal_915aa1509cf862dcfc9e6c691c56f46972533164f903a617c20e1523fef41611 = $this->env->getExtension("native_profiler");
        $__internal_915aa1509cf862dcfc9e6c691c56f46972533164f903a617c20e1523fef41611->enter($__internal_915aa1509cf862dcfc9e6c691c56f46972533164f903a617c20e1523fef41611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_915aa1509cf862dcfc9e6c691c56f46972533164f903a617c20e1523fef41611->leave($__internal_915aa1509cf862dcfc9e6c691c56f46972533164f903a617c20e1523fef41611_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8a800c8bb4bb1c4960ffc3ebdf10efe557e4d98f93a770eaf71748e95134aaaf = $this->env->getExtension("native_profiler");
        $__internal_8a800c8bb4bb1c4960ffc3ebdf10efe557e4d98f93a770eaf71748e95134aaaf->enter($__internal_8a800c8bb4bb1c4960ffc3ebdf10efe557e4d98f93a770eaf71748e95134aaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_8a800c8bb4bb1c4960ffc3ebdf10efe557e4d98f93a770eaf71748e95134aaaf->leave($__internal_8a800c8bb4bb1c4960ffc3ebdf10efe557e4d98f93a770eaf71748e95134aaaf_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_baac8ab0b1a651f170f041931b21cc13ea283954aa0648df712e3f588d4e1375 = $this->env->getExtension("native_profiler");
        $__internal_baac8ab0b1a651f170f041931b21cc13ea283954aa0648df712e3f588d4e1375->enter($__internal_baac8ab0b1a651f170f041931b21cc13ea283954aa0648df712e3f588d4e1375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_baac8ab0b1a651f170f041931b21cc13ea283954aa0648df712e3f588d4e1375->leave($__internal_baac8ab0b1a651f170f041931b21cc13ea283954aa0648df712e3f588d4e1375_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_46153a34870a8504c765e3ca10a231248f8bf60e4bcee89d112844597b5599cd = $this->env->getExtension("native_profiler");
        $__internal_46153a34870a8504c765e3ca10a231248f8bf60e4bcee89d112844597b5599cd->enter($__internal_46153a34870a8504c765e3ca10a231248f8bf60e4bcee89d112844597b5599cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
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
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveproduct"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 40
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_46153a34870a8504c765e3ca10a231248f8bf60e4bcee89d112844597b5599cd->leave($__internal_46153a34870a8504c765e3ca10a231248f8bf60e4bcee89d112844597b5599cd_prof);

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
        return array (  137 => 40,  132 => 38,  126 => 37,  121 => 35,  116 => 33,  109 => 29,  102 => 25,  95 => 21,  91 => 20,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             {{ form_row(form.file) }}*/
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
