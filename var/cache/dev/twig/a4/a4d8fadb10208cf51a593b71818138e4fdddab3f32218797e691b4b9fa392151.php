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
        $__internal_0f3e5197925351369e044040604ada9d0894b4727f25fdf7a97fee4c71f6c52c = $this->env->getExtension("native_profiler");
        $__internal_0f3e5197925351369e044040604ada9d0894b4727f25fdf7a97fee4c71f6c52c->enter($__internal_0f3e5197925351369e044040604ada9d0894b4727f25fdf7a97fee4c71f6c52c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/category/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0f3e5197925351369e044040604ada9d0894b4727f25fdf7a97fee4c71f6c52c->leave($__internal_0f3e5197925351369e044040604ada9d0894b4727f25fdf7a97fee4c71f6c52c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_23cf8fb5819b8885c7073ede24ffcd91aacec85689038d0b70c9ffb8a5324603 = $this->env->getExtension("native_profiler");
        $__internal_23cf8fb5819b8885c7073ede24ffcd91aacec85689038d0b70c9ffb8a5324603->enter($__internal_23cf8fb5819b8885c7073ede24ffcd91aacec85689038d0b70c9ffb8a5324603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "دسته محصول جدید";
        
        $__internal_23cf8fb5819b8885c7073ede24ffcd91aacec85689038d0b70c9ffb8a5324603->leave($__internal_23cf8fb5819b8885c7073ede24ffcd91aacec85689038d0b70c9ffb8a5324603_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_89648372bc6cec83ccd92f4b36df2dcd36f50897e48e413f0ac5abd24faa939f = $this->env->getExtension("native_profiler");
        $__internal_89648372bc6cec83ccd92f4b36df2dcd36f50897e48e413f0ac5abd24faa939f->enter($__internal_89648372bc6cec83ccd92f4b36df2dcd36f50897e48e413f0ac5abd24faa939f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_89648372bc6cec83ccd92f4b36df2dcd36f50897e48e413f0ac5abd24faa939f->leave($__internal_89648372bc6cec83ccd92f4b36df2dcd36f50897e48e413f0ac5abd24faa939f_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_8125f54b7176370d9de9d85375dc543c2f01fd636fb06e059f6bcf84cd86b314 = $this->env->getExtension("native_profiler");
        $__internal_8125f54b7176370d9de9d85375dc543c2f01fd636fb06e059f6bcf84cd86b314->enter($__internal_8125f54b7176370d9de9d85375dc543c2f01fd636fb06e059f6bcf84cd86b314_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">

        ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    <div class=\"product-category\">
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
    </div>
        ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 24
        echo $this->env->getExtension('routing')->getPath("admin_category_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savecategory"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_8125f54b7176370d9de9d85375dc543c2f01fd636fb06e059f6bcf84cd86b314->leave($__internal_8125f54b7176370d9de9d85375dc543c2f01fd636fb06e059f6bcf84cd86b314_prof);

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
        return array (  112 => 27,  107 => 25,  101 => 24,  96 => 22,  91 => 20,  86 => 18,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}دسته محصول جدید{% endblock %}*/
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
/* */
/*         {{ form_start(form) }}*/
/*     <div class="product-category">*/
/*         {{ form_row(form.title) }}*/
/*     </div>*/
/*         {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_category_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savecategory' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
