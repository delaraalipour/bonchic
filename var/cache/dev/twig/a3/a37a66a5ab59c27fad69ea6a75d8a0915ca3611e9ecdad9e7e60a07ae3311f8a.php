<?php

/* :Admin/category/update.html.twig */
class __TwigTemplate_8356d777a17972da532ef6d9ded980ebd640961fc1177c5d2d769124833b3504 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/category/update.html.twig", 1);
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
        $__internal_478967e2a80e7079607aa4590b2e270290537d1c3f06dfe0e768e3842fb0d977 = $this->env->getExtension("native_profiler");
        $__internal_478967e2a80e7079607aa4590b2e270290537d1c3f06dfe0e768e3842fb0d977->enter($__internal_478967e2a80e7079607aa4590b2e270290537d1c3f06dfe0e768e3842fb0d977_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478967e2a80e7079607aa4590b2e270290537d1c3f06dfe0e768e3842fb0d977->leave($__internal_478967e2a80e7079607aa4590b2e270290537d1c3f06dfe0e768e3842fb0d977_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b32575b6dd7613b8149c52cdaf2b93d5cd2842752a584f372ac567b5115c5d5d = $this->env->getExtension("native_profiler");
        $__internal_b32575b6dd7613b8149c52cdaf2b93d5cd2842752a584f372ac567b5115c5d5d->enter($__internal_b32575b6dd7613b8149c52cdaf2b93d5cd2842752a584f372ac567b5115c5d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        
        $__internal_b32575b6dd7613b8149c52cdaf2b93d5cd2842752a584f372ac567b5115c5d5d->leave($__internal_b32575b6dd7613b8149c52cdaf2b93d5cd2842752a584f372ac567b5115c5d5d_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_80138fab8033f522711095a3f59c42ce9ebeea2085ff7ebdb41e3a50ea64ee66 = $this->env->getExtension("native_profiler");
        $__internal_80138fab8033f522711095a3f59c42ce9ebeea2085ff7ebdb41e3a50ea64ee66->enter($__internal_80138fab8033f522711095a3f59c42ce9ebeea2085ff7ebdb41e3a50ea64ee66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_80138fab8033f522711095a3f59c42ce9ebeea2085ff7ebdb41e3a50ea64ee66->leave($__internal_80138fab8033f522711095a3f59c42ce9ebeea2085ff7ebdb41e3a50ea64ee66_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c29cfa7bffb43be01c045ff182274e9d534093aac94b31a914db5ecdd64d181 = $this->env->getExtension("native_profiler");
        $__internal_5c29cfa7bffb43be01c045ff182274e9d534093aac94b31a914db5ecdd64d181->enter($__internal_5c29cfa7bffb43be01c045ff182274e9d534093aac94b31a914db5ecdd64d181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"category-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"category-title\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        </div>

        <div class=\"category-image clearfix\">
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
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        <div class=\"buttons\">
            <a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savecategory"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_5c29cfa7bffb43be01c045ff182274e9d534093aac94b31a914db5ecdd64d181->leave($__internal_5c29cfa7bffb43be01c045ff182274e9d534093aac94b31a914db5ecdd64d181_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/category/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 33,  121 => 31,  115 => 30,  109 => 27,  102 => 25,  98 => 24,  91 => 20,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.edit' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_category_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.categorylist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <div class="category-form">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="category-title">*/
/*             {{ form_row(form.title) }}*/
/*         </div>*/
/* */
/*         <div class="category-image clearfix">*/
/*             <img src="{{ asset('uploads/' ~ form.vars.data.image) }}" />*/
/*             <button><span>{{ 'app.add.image' | trans}}</span>{{ form_widget(form.file) }}</button>*/
/*         </div>*/
/*         {{ form_rest(form) }}*/
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savecategory' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
