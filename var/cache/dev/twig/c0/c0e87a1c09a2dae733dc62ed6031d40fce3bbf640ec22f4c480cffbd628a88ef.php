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
        $__internal_55af6bd924d406373a11423bb0b01092eca5a2d5414bcbe8451b7fa902c639b4 = $this->env->getExtension("native_profiler");
        $__internal_55af6bd924d406373a11423bb0b01092eca5a2d5414bcbe8451b7fa902c639b4->enter($__internal_55af6bd924d406373a11423bb0b01092eca5a2d5414bcbe8451b7fa902c639b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55af6bd924d406373a11423bb0b01092eca5a2d5414bcbe8451b7fa902c639b4->leave($__internal_55af6bd924d406373a11423bb0b01092eca5a2d5414bcbe8451b7fa902c639b4_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ecf3e56081a94524cf0b5fb48ac9fc8b2be065977d3a210bdb577197fb99305 = $this->env->getExtension("native_profiler");
        $__internal_8ecf3e56081a94524cf0b5fb48ac9fc8b2be065977d3a210bdb577197fb99305->enter($__internal_8ecf3e56081a94524cf0b5fb48ac9fc8b2be065977d3a210bdb577197fb99305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_8ecf3e56081a94524cf0b5fb48ac9fc8b2be065977d3a210bdb577197fb99305->leave($__internal_8ecf3e56081a94524cf0b5fb48ac9fc8b2be065977d3a210bdb577197fb99305_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_c4675fb5546c06fecd07e57d22d3971986fce2f0138b61862c673f952ce9b7aa = $this->env->getExtension("native_profiler");
        $__internal_c4675fb5546c06fecd07e57d22d3971986fce2f0138b61862c673f952ce9b7aa->enter($__internal_c4675fb5546c06fecd07e57d22d3971986fce2f0138b61862c673f952ce9b7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_c4675fb5546c06fecd07e57d22d3971986fce2f0138b61862c673f952ce9b7aa->leave($__internal_c4675fb5546c06fecd07e57d22d3971986fce2f0138b61862c673f952ce9b7aa_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c97513c22f30130b89979d76704a5dfd9a103d153461ab43c0cc7e44381a10b = $this->env->getExtension("native_profiler");
        $__internal_1c97513c22f30130b89979d76704a5dfd9a103d153461ab43c0cc7e44381a10b->enter($__internal_1c97513c22f30130b89979d76704a5dfd9a103d153461ab43c0cc7e44381a10b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
            <div id=\"messages\"></div>
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
        </div>
            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons clearfix\">
            <a href=\" ";
        // line 35
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveproduct"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_1c97513c22f30130b89979d76704a5dfd9a103d153461ab43c0cc7e44381a10b->leave($__internal_1c97513c22f30130b89979d76704a5dfd9a103d153461ab43c0cc7e44381a10b_prof);

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
        return array (  134 => 38,  129 => 36,  123 => 35,  118 => 33,  113 => 31,  106 => 27,  100 => 24,  94 => 21,  90 => 20,  85 => 18,  82 => 17,  76 => 16,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <div id="messages"></div>*/
/*             {{ form_row(form.category) }}*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons clearfix">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
