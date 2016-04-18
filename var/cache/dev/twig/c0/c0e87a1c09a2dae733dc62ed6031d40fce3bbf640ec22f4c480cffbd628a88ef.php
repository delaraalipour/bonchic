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
        $__internal_85a18b4822ab64d553ab66f98681577ef94dbda199c66ad4bc11548d971cb20f = $this->env->getExtension("native_profiler");
        $__internal_85a18b4822ab64d553ab66f98681577ef94dbda199c66ad4bc11548d971cb20f->enter($__internal_85a18b4822ab64d553ab66f98681577ef94dbda199c66ad4bc11548d971cb20f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85a18b4822ab64d553ab66f98681577ef94dbda199c66ad4bc11548d971cb20f->leave($__internal_85a18b4822ab64d553ab66f98681577ef94dbda199c66ad4bc11548d971cb20f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8875b2b3a4de7ccd8948b45cf45fd6e1d0d5e4ea310d5617c94e1a4139ece6dc = $this->env->getExtension("native_profiler");
        $__internal_8875b2b3a4de7ccd8948b45cf45fd6e1d0d5e4ea310d5617c94e1a4139ece6dc->enter($__internal_8875b2b3a4de7ccd8948b45cf45fd6e1d0d5e4ea310d5617c94e1a4139ece6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_8875b2b3a4de7ccd8948b45cf45fd6e1d0d5e4ea310d5617c94e1a4139ece6dc->leave($__internal_8875b2b3a4de7ccd8948b45cf45fd6e1d0d5e4ea310d5617c94e1a4139ece6dc_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_fd59baab0ca783d7e58f028af0171a4111a00888c0af3cdf439c4bc918b69937 = $this->env->getExtension("native_profiler");
        $__internal_fd59baab0ca783d7e58f028af0171a4111a00888c0af3cdf439c4bc918b69937->enter($__internal_fd59baab0ca783d7e58f028af0171a4111a00888c0af3cdf439c4bc918b69937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_fd59baab0ca783d7e58f028af0171a4111a00888c0af3cdf439c4bc918b69937->leave($__internal_fd59baab0ca783d7e58f028af0171a4111a00888c0af3cdf439c4bc918b69937_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_77d6fc73e0ca51c76b2fc2af701330bc22b2be4f30669221eb0eadc0a243b507 = $this->env->getExtension("native_profiler");
        $__internal_77d6fc73e0ca51c76b2fc2af701330bc22b2be4f30669221eb0eadc0a243b507->enter($__internal_77d6fc73e0ca51c76b2fc2af701330bc22b2be4f30669221eb0eadc0a243b507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_77d6fc73e0ca51c76b2fc2af701330bc22b2be4f30669221eb0eadc0a243b507->leave($__internal_77d6fc73e0ca51c76b2fc2af701330bc22b2be4f30669221eb0eadc0a243b507_prof);

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
