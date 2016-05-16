<?php

/* :Admin/category/new.html.twig */
class __TwigTemplate_c7f174f7257e89cf43502f4e87c1718a10faabfdd01aa941ed8a5e24881f57be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/category/new.html.twig", 1);
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
        $__internal_57a99d97ec51c5b2e552816f8cddd2bcfa428b73b7682596ca4f0cbeb644e2ac = $this->env->getExtension("native_profiler");
        $__internal_57a99d97ec51c5b2e552816f8cddd2bcfa428b73b7682596ca4f0cbeb644e2ac->enter($__internal_57a99d97ec51c5b2e552816f8cddd2bcfa428b73b7682596ca4f0cbeb644e2ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57a99d97ec51c5b2e552816f8cddd2bcfa428b73b7682596ca4f0cbeb644e2ac->leave($__internal_57a99d97ec51c5b2e552816f8cddd2bcfa428b73b7682596ca4f0cbeb644e2ac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7935ad4151fc87215123057c763ede07dbf0f804b2285c91e382f7809674b70f = $this->env->getExtension("native_profiler");
        $__internal_7935ad4151fc87215123057c763ede07dbf0f804b2285c91e382f7809674b70f->enter($__internal_7935ad4151fc87215123057c763ede07dbf0f804b2285c91e382f7809674b70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newcategory"), "html", null, true);
        
        $__internal_7935ad4151fc87215123057c763ede07dbf0f804b2285c91e382f7809674b70f->leave($__internal_7935ad4151fc87215123057c763ede07dbf0f804b2285c91e382f7809674b70f_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_58e51395f7c973c1aeee31e897f79928b97231cb52e42af82c88bd19d05c1cfe = $this->env->getExtension("native_profiler");
        $__internal_58e51395f7c973c1aeee31e897f79928b97231cb52e42af82c88bd19d05c1cfe->enter($__internal_58e51395f7c973c1aeee31e897f79928b97231cb52e42af82c88bd19d05c1cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newcategory"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_58e51395f7c973c1aeee31e897f79928b97231cb52e42af82c88bd19d05c1cfe->leave($__internal_58e51395f7c973c1aeee31e897f79928b97231cb52e42af82c88bd19d05c1cfe_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_28c6408c33e27c5d88190867d5d6190e8c20d897de36c9ef979ecdd3081b2470 = $this->env->getExtension("native_profiler");
        $__internal_28c6408c33e27c5d88190867d5d6190e8c20d897de36c9ef979ecdd3081b2470->enter($__internal_28c6408c33e27c5d88190867d5d6190e8c20d897de36c9ef979ecdd3081b2470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"product-category\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        </div>
        <div class=\"product-category-image\">
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        </div>
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 26
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savecategory"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_28c6408c33e27c5d88190867d5d6190e8c20d897de36c9ef979ecdd3081b2470->leave($__internal_28c6408c33e27c5d88190867d5d6190e8c20d897de36c9ef979ecdd3081b2470_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/category/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  112 => 27,  106 => 26,  101 => 24,  96 => 22,  90 => 19,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newcategory' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_category_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.categorylist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.newcategory' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="product-form">*/
/*         {{ form_start(form) }}*/
/*         <div class="product-category">*/
/*             {{ form_row(form.title) }}*/
/*         </div>*/
/*         <div class="product-category-image">*/
/*             {{ form_row(form.file) }}*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savecategory' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
