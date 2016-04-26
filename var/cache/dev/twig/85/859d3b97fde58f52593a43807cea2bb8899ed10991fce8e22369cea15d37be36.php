<?php

/* :Admin/slide:new.html.twig */
class __TwigTemplate_98d5e9148a98042fceee7f6636563db74a6273fd6e754f7bc38d0888fd462d7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/slide:new.html.twig", 1);
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
        $__internal_df6424a31989ca3b20728cc410c81549d8d32013350320908eed1df5472df5b8 = $this->env->getExtension("native_profiler");
        $__internal_df6424a31989ca3b20728cc410c81549d8d32013350320908eed1df5472df5b8->enter($__internal_df6424a31989ca3b20728cc410c81549d8d32013350320908eed1df5472df5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/slide:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6424a31989ca3b20728cc410c81549d8d32013350320908eed1df5472df5b8->leave($__internal_df6424a31989ca3b20728cc410c81549d8d32013350320908eed1df5472df5b8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_445fbc0f0791d73885e3f9c9ee0b83e4c087e8d3cc9f9fb24e38960b3be7b5c2 = $this->env->getExtension("native_profiler");
        $__internal_445fbc0f0791d73885e3f9c9ee0b83e4c087e8d3cc9f9fb24e38960b3be7b5c2->enter($__internal_445fbc0f0791d73885e3f9c9ee0b83e4c087e8d3cc9f9fb24e38960b3be7b5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslide"), "html", null, true);
        
        $__internal_445fbc0f0791d73885e3f9c9ee0b83e4c087e8d3cc9f9fb24e38960b3be7b5c2->leave($__internal_445fbc0f0791d73885e3f9c9ee0b83e4c087e8d3cc9f9fb24e38960b3be7b5c2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_5927aa47796ca9b7594f6bc3558d38eaa826f43a219eb73b8492aa1df7e0bcd0 = $this->env->getExtension("native_profiler");
        $__internal_5927aa47796ca9b7594f6bc3558d38eaa826f43a219eb73b8492aa1df7e0bcd0->enter($__internal_5927aa47796ca9b7594f6bc3558d38eaa826f43a219eb73b8492aa1df7e0bcd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo "\"><i class=\"glyphicon glyphicon-tags\"></i>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        echo " </a>
            <span id=\"slash\">/</span>
            <span> ";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslide"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_5927aa47796ca9b7594f6bc3558d38eaa826f43a219eb73b8492aa1df7e0bcd0->leave($__internal_5927aa47796ca9b7594f6bc3558d38eaa826f43a219eb73b8492aa1df7e0bcd0_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_d9a79bcd3aa1da9325e182c05230935204b85273f35b6427c123259c74ebaaa9 = $this->env->getExtension("native_profiler");
        $__internal_d9a79bcd3aa1da9325e182c05230935204b85273f35b6427c123259c74ebaaa9->enter($__internal_d9a79bcd3aa1da9325e182c05230935204b85273f35b6427c123259c74ebaaa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"product-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"product-description\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        </div>

        <div class=\"product-image\">
            ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'row');
        echo "
        </div>

        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"buttons\">
            <a href=\" ";
        // line 29
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveslide"), "html", null, true);
        echo "\" class=\"product-submit\"/>
        </div>
        ";
        // line 32
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_d9a79bcd3aa1da9325e182c05230935204b85273f35b6427c123259c74ebaaa9->leave($__internal_d9a79bcd3aa1da9325e182c05230935204b85273f35b6427c123259c74ebaaa9_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/slide:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 32,  115 => 30,  109 => 29,  104 => 27,  98 => 24,  91 => 20,  85 => 17,  82 => 16,  76 => 15,  65 => 10,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newslide' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <a href="{{ path('admin_slide_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.slidelist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.newslide' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <div class="product-form">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="product-description">*/
/*             {{ form_row(form.title) }}*/
/*         </div>*/
/* */
/*         <div class="product-image">*/
/*             {{ form_row(form.file) }}*/
/*         </div>*/
/* */
/*         {{ form_widget(form) }}*/
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_slide_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveslide' | trans}}" class="product-submit"/>*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
