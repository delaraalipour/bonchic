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
        $__internal_298832999e6dc6847e570a01194acdacd94bcc88d64a29d547e0db4416e45fbd = $this->env->getExtension("native_profiler");
        $__internal_298832999e6dc6847e570a01194acdacd94bcc88d64a29d547e0db4416e45fbd->enter($__internal_298832999e6dc6847e570a01194acdacd94bcc88d64a29d547e0db4416e45fbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_298832999e6dc6847e570a01194acdacd94bcc88d64a29d547e0db4416e45fbd->leave($__internal_298832999e6dc6847e570a01194acdacd94bcc88d64a29d547e0db4416e45fbd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_820a6dea3ba5a9022ab830c7338730cdacc2114b9128765b2bf689a4f5a2adaf = $this->env->getExtension("native_profiler");
        $__internal_820a6dea3ba5a9022ab830c7338730cdacc2114b9128765b2bf689a4f5a2adaf->enter($__internal_820a6dea3ba5a9022ab830c7338730cdacc2114b9128765b2bf689a4f5a2adaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_820a6dea3ba5a9022ab830c7338730cdacc2114b9128765b2bf689a4f5a2adaf->leave($__internal_820a6dea3ba5a9022ab830c7338730cdacc2114b9128765b2bf689a4f5a2adaf_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_8907362d1994394d1fd1531e5204f79961ed0831ccf80bf8987d00575700b6ab = $this->env->getExtension("native_profiler");
        $__internal_8907362d1994394d1fd1531e5204f79961ed0831ccf80bf8987d00575700b6ab->enter($__internal_8907362d1994394d1fd1531e5204f79961ed0831ccf80bf8987d00575700b6ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_8907362d1994394d1fd1531e5204f79961ed0831ccf80bf8987d00575700b6ab->leave($__internal_8907362d1994394d1fd1531e5204f79961ed0831ccf80bf8987d00575700b6ab_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_f81e9ea3f9d9b2e472054b1296fe53fd347ed5467cb7afb223fe6596f23acd23 = $this->env->getExtension("native_profiler");
        $__internal_f81e9ea3f9d9b2e472054b1296fe53fd347ed5467cb7afb223fe6596f23acd23->enter($__internal_f81e9ea3f9d9b2e472054b1296fe53fd347ed5467cb7afb223fe6596f23acd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
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
        
        $__internal_f81e9ea3f9d9b2e472054b1296fe53fd347ed5467cb7afb223fe6596f23acd23->leave($__internal_f81e9ea3f9d9b2e472054b1296fe53fd347ed5467cb7afb223fe6596f23acd23_prof);

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
