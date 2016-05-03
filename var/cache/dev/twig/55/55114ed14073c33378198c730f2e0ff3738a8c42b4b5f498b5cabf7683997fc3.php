<?php

/* :Admin/news:update.html.twig */
class __TwigTemplate_198dae4a61b2595872e308bda5c49ff2c34f591dae387583402cf78752676b99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/news:update.html.twig", 1);
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
        $__internal_4f3d7a307bc36ae38e7a51e14cc793c8beefcdcdeedb4e6a00c7db65c4cc1853 = $this->env->getExtension("native_profiler");
        $__internal_4f3d7a307bc36ae38e7a51e14cc793c8beefcdcdeedb4e6a00c7db65c4cc1853->enter($__internal_4f3d7a307bc36ae38e7a51e14cc793c8beefcdcdeedb4e6a00c7db65c4cc1853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/news:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f3d7a307bc36ae38e7a51e14cc793c8beefcdcdeedb4e6a00c7db65c4cc1853->leave($__internal_4f3d7a307bc36ae38e7a51e14cc793c8beefcdcdeedb4e6a00c7db65c4cc1853_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e9867d9019b9b1caf8b0f7e79ae99b1d9e18f9662793b5fce785d155bf272550 = $this->env->getExtension("native_profiler");
        $__internal_e9867d9019b9b1caf8b0f7e79ae99b1d9e18f9662793b5fce785d155bf272550->enter($__internal_e9867d9019b9b1caf8b0f7e79ae99b1d9e18f9662793b5fce785d155bf272550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        
        $__internal_e9867d9019b9b1caf8b0f7e79ae99b1d9e18f9662793b5fce785d155bf272550->leave($__internal_e9867d9019b9b1caf8b0f7e79ae99b1d9e18f9662793b5fce785d155bf272550_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_1dec13f9de9155fb6b1bb0a38d6fed6510569abc55c33d6128c5cd8fcc9b15d6 = $this->env->getExtension("native_profiler");
        $__internal_1dec13f9de9155fb6b1bb0a38d6fed6510569abc55c33d6128c5cd8fcc9b15d6->enter($__internal_1dec13f9de9155fb6b1bb0a38d6fed6510569abc55c33d6128c5cd8fcc9b15d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_1dec13f9de9155fb6b1bb0a38d6fed6510569abc55c33d6128c5cd8fcc9b15d6->leave($__internal_1dec13f9de9155fb6b1bb0a38d6fed6510569abc55c33d6128c5cd8fcc9b15d6_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_78ec708145e2bacabc1d354a9dab34f3a7fd60efa4a95feecbed3525de04c1d5 = $this->env->getExtension("native_profiler");
        $__internal_78ec708145e2bacabc1d354a9dab34f3a7fd60efa4a95feecbed3525de04c1d5->enter($__internal_78ec708145e2bacabc1d354a9dab34f3a7fd60efa4a95feecbed3525de04c1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"news-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"news-title\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brief", array()), 'row');
        echo "
        </div>

        <div class=\"news-image clearfix\">
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

        <div class=\"news-description\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"buttons\">
            <a href=\" ";
        // line 34
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savenews"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_78ec708145e2bacabc1d354a9dab34f3a7fd60efa4a95feecbed3525de04c1d5->leave($__internal_78ec708145e2bacabc1d354a9dab34f3a7fd60efa4a95feecbed3525de04c1d5_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/news:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 37,  131 => 35,  125 => 34,  119 => 31,  114 => 29,  105 => 25,  101 => 24,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.edit' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_news_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.newslist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="news-form">*/
/*         {{ form_start(form) }}*/
/*         <div class="news-title">*/
/*             {{ form_row(form.title) }}*/
/*             {{ form_row(form.brief) }}*/
/*         </div>*/
/* */
/*         <div class="news-image clearfix">*/
/*             <img src="{{ asset('uploads/' ~ form.vars.data.image) }}" />*/
/*             <button><span>{{ 'app.add.image' | trans}}</span>{{ form_widget(form.file) }}</button>*/
/*         </div>*/
/* */
/*         <div class="news-description">*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/*         {{ form_widget(form) }}*/
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_news_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savenews' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
