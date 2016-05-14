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
        $__internal_09995b6704f0868bb9e21a9f9dcaf8c849f151e7d7f8f8fd78b6a1a9ad35ef8f = $this->env->getExtension("native_profiler");
        $__internal_09995b6704f0868bb9e21a9f9dcaf8c849f151e7d7f8f8fd78b6a1a9ad35ef8f->enter($__internal_09995b6704f0868bb9e21a9f9dcaf8c849f151e7d7f8f8fd78b6a1a9ad35ef8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09995b6704f0868bb9e21a9f9dcaf8c849f151e7d7f8f8fd78b6a1a9ad35ef8f->leave($__internal_09995b6704f0868bb9e21a9f9dcaf8c849f151e7d7f8f8fd78b6a1a9ad35ef8f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e55df723637675c6badf627cf8538eee4ab2f933c477ab18721c4d813aa4f03 = $this->env->getExtension("native_profiler");
        $__internal_4e55df723637675c6badf627cf8538eee4ab2f933c477ab18721c4d813aa4f03->enter($__internal_4e55df723637675c6badf627cf8538eee4ab2f933c477ab18721c4d813aa4f03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        
        $__internal_4e55df723637675c6badf627cf8538eee4ab2f933c477ab18721c4d813aa4f03->leave($__internal_4e55df723637675c6badf627cf8538eee4ab2f933c477ab18721c4d813aa4f03_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_1440cb03756d8622e822b6402351c97f810193f5706d608fc46300ee79563ce2 = $this->env->getExtension("native_profiler");
        $__internal_1440cb03756d8622e822b6402351c97f810193f5706d608fc46300ee79563ce2->enter($__internal_1440cb03756d8622e822b6402351c97f810193f5706d608fc46300ee79563ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_1440cb03756d8622e822b6402351c97f810193f5706d608fc46300ee79563ce2->leave($__internal_1440cb03756d8622e822b6402351c97f810193f5706d608fc46300ee79563ce2_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_a9e0198e16455ab4b6f9942a741086f93f3ee34aaf54bf17d69a718bf2c7f7d6 = $this->env->getExtension("native_profiler");
        $__internal_a9e0198e16455ab4b6f9942a741086f93f3ee34aaf54bf17d69a718bf2c7f7d6->enter($__internal_a9e0198e16455ab4b6f9942a741086f93f3ee34aaf54bf17d69a718bf2c7f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "
    <div class=\"product-form\">
        ";
        // line 19
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
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        </div>
        <div class=\"product-price\">
            ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row');
        echo "
        </div>
        <div class=\"product-category\">
            ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row');
        echo "
            <form>
                tag: <input type=\"text\" name=\"message\" placeholder=\"Type your text here!\">
            </form>
            <button>Add!</button>
        </div>
            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 39
        echo $this->env->getExtension('routing')->getPath("admin_product_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveproduct"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_a9e0198e16455ab4b6f9942a741086f93f3ee34aaf54bf17d69a718bf2c7f7d6->leave($__internal_a9e0198e16455ab4b6f9942a741086f93f3ee34aaf54bf17d69a718bf2c7f7d6_prof);

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
        return array (  138 => 42,  133 => 40,  127 => 39,  122 => 37,  113 => 31,  107 => 28,  101 => 25,  95 => 22,  91 => 21,  86 => 19,  82 => 17,  76 => 16,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/* */
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
/*             {{ form_row(form.category) }}*/
/*             <form>*/
/*                 tag: <input type="text" name="message" placeholder="Type your text here!">*/
/*             </form>*/
/*             <button>Add!</button>*/
/*         </div>*/
/*             {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_product_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveproduct' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
