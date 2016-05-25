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
        $__internal_20416fadd36b5233b42d61eb1ae21f3cbecc1e98b0ed4fac9f2f0c25f8f9b805 = $this->env->getExtension("native_profiler");
        $__internal_20416fadd36b5233b42d61eb1ae21f3cbecc1e98b0ed4fac9f2f0c25f8f9b805->enter($__internal_20416fadd36b5233b42d61eb1ae21f3cbecc1e98b0ed4fac9f2f0c25f8f9b805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20416fadd36b5233b42d61eb1ae21f3cbecc1e98b0ed4fac9f2f0c25f8f9b805->leave($__internal_20416fadd36b5233b42d61eb1ae21f3cbecc1e98b0ed4fac9f2f0c25f8f9b805_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8764b66f1633d3860f1b7585aabe8b124f8c6c9091db402ac9637d349215fc96 = $this->env->getExtension("native_profiler");
        $__internal_8764b66f1633d3860f1b7585aabe8b124f8c6c9091db402ac9637d349215fc96->enter($__internal_8764b66f1633d3860f1b7585aabe8b124f8c6c9091db402ac9637d349215fc96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        
        $__internal_8764b66f1633d3860f1b7585aabe8b124f8c6c9091db402ac9637d349215fc96->leave($__internal_8764b66f1633d3860f1b7585aabe8b124f8c6c9091db402ac9637d349215fc96_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_e395ebf00092cf105ddf3644bb0c3a73bbce5ee1595bd863f4f253bdb70ba7e0 = $this->env->getExtension("native_profiler");
        $__internal_e395ebf00092cf105ddf3644bb0c3a73bbce5ee1595bd863f4f253bdb70ba7e0->enter($__internal_e395ebf00092cf105ddf3644bb0c3a73bbce5ee1595bd863f4f253bdb70ba7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_e395ebf00092cf105ddf3644bb0c3a73bbce5ee1595bd863f4f253bdb70ba7e0->leave($__internal_e395ebf00092cf105ddf3644bb0c3a73bbce5ee1595bd863f4f253bdb70ba7e0_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_801f4510a919b3f63387fe869f9e323c038e65db13db8186cb35824c6d92fe6a = $this->env->getExtension("native_profiler");
        $__internal_801f4510a919b3f63387fe869f9e323c038e65db13db8186cb35824c6d92fe6a->enter($__internal_801f4510a919b3f63387fe869f9e323c038e65db13db8186cb35824c6d92fe6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"product-description\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>

        <div class=\"product-image clearfix\">
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
        
        $__internal_801f4510a919b3f63387fe869f9e323c038e65db13db8186cb35824c6d92fe6a->leave($__internal_801f4510a919b3f63387fe869f9e323c038e65db13db8186cb35824c6d92fe6a_prof);

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
        return array (  143 => 41,  138 => 39,  132 => 38,  126 => 35,  121 => 33,  114 => 29,  105 => 25,  101 => 24,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.edit' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_product_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <div class="product-form">*/
/*         {{ form_start(form) }}*/
/*         <div class="product-description">*/
/*             {{ form_row(form.name) }}*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/* */
/*         <div class="product-image clearfix">*/
/*             <img src="{{ asset('uploads/' ~ form.vars.data.image) }}" />*/
/*             <button><span>{{ 'app.add.image' | trans}}</span>{{ form_widget(form.file) }}</button>*/
/*         </div>*/
/* */
/*         <div class="product-price">*/
/*             {{ form_row(form.price) }}*/
/*         </div>*/
/* */
/*         <div class="product-category">*/
/*             {{ form_row(form.category) }}*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
