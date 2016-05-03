<?php

/* :Admin/news:new.html.twig */
class __TwigTemplate_8de73c95d49e3e3b5dad7b9f5ecdb58150cfef1200e3ce51e927d90449ee4f6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/news:new.html.twig", 1);
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
        $__internal_d61d0afe6de5b759b3ed85e696798a5dd04c533f279bdf09494babc95e39a552 = $this->env->getExtension("native_profiler");
        $__internal_d61d0afe6de5b759b3ed85e696798a5dd04c533f279bdf09494babc95e39a552->enter($__internal_d61d0afe6de5b759b3ed85e696798a5dd04c533f279bdf09494babc95e39a552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/news:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d61d0afe6de5b759b3ed85e696798a5dd04c533f279bdf09494babc95e39a552->leave($__internal_d61d0afe6de5b759b3ed85e696798a5dd04c533f279bdf09494babc95e39a552_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6dc7651f4e14669eec6b879fd78909d32f651416ee3058208b4970ccd06e959c = $this->env->getExtension("native_profiler");
        $__internal_6dc7651f4e14669eec6b879fd78909d32f651416ee3058208b4970ccd06e959c->enter($__internal_6dc7651f4e14669eec6b879fd78909d32f651416ee3058208b4970ccd06e959c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newnews"), "html", null, true);
        
        $__internal_6dc7651f4e14669eec6b879fd78909d32f651416ee3058208b4970ccd06e959c->leave($__internal_6dc7651f4e14669eec6b879fd78909d32f651416ee3058208b4970ccd06e959c_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_7f58484086b9182af44b55fb9cafb6112d681ae0e72d925283d64ddbc69e9b6e = $this->env->getExtension("native_profiler");
        $__internal_7f58484086b9182af44b55fb9cafb6112d681ae0e72d925283d64ddbc69e9b6e->enter($__internal_7f58484086b9182af44b55fb9cafb6112d681ae0e72d925283d64ddbc69e9b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo "\"><i class=\"glyphicon glyphicon-edit\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newnews"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_7f58484086b9182af44b55fb9cafb6112d681ae0e72d925283d64ddbc69e9b6e->leave($__internal_7f58484086b9182af44b55fb9cafb6112d681ae0e72d925283d64ddbc69e9b6e_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6688d9e037c7e98bea070d762661c5b29b0fa4c7e7b2fa11eb0529083269805 = $this->env->getExtension("native_profiler");
        $__internal_c6688d9e037c7e98bea070d762661c5b29b0fa4c7e7b2fa11eb0529083269805->enter($__internal_c6688d9e037c7e98bea070d762661c5b29b0fa4c7e7b2fa11eb0529083269805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"product-description\">
            ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "brief", array()), 'row');
        echo "
        </div>
        <div class=\"product-image\">
            ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        </div>
        <div class=\"product-description\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row');
        echo "
        </div>
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_news_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.savenews"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_c6688d9e037c7e98bea070d762661c5b29b0fa4c7e7b2fa11eb0529083269805->leave($__internal_c6688d9e037c7e98bea070d762661c5b29b0fa4c7e7b2fa11eb0529083269805_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/news:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 33,  122 => 31,  116 => 30,  111 => 28,  106 => 26,  100 => 23,  94 => 20,  90 => 19,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newnews' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_news_list') }}"><i class="glyphicon glyphicon-edit"></i>{{ 'app.newslist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.newnews' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="product-form">*/
/*         {{ form_start(form) }}*/
/*         <div class="product-description">*/
/*             {{ form_row(form.title) }}*/
/*             {{ form_row(form.brief) }}*/
/*         </div>*/
/*         <div class="product-image">*/
/*             {{ form_row(form.file) }}*/
/*         </div>*/
/*         <div class="product-description">*/
/*             {{ form_row(form.description) }}*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_news_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.savenews' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
