<?php

/* :Admin/slide:update.html.twig */
class __TwigTemplate_7da01c2de816047d3a85f81fbd93da8a80298a7dc3166f42ded58d555313a303 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/slide:update.html.twig", 1);
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
        $__internal_ad473a08acc82d242a819391efd6d443d272815570bd102a97b008bface808d7 = $this->env->getExtension("native_profiler");
        $__internal_ad473a08acc82d242a819391efd6d443d272815570bd102a97b008bface808d7->enter($__internal_ad473a08acc82d242a819391efd6d443d272815570bd102a97b008bface808d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/slide:update.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad473a08acc82d242a819391efd6d443d272815570bd102a97b008bface808d7->leave($__internal_ad473a08acc82d242a819391efd6d443d272815570bd102a97b008bface808d7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1d2545b0b012d0edf2dc052f92435d236f8dc21ca969aa86f3bf132c0a88cee2 = $this->env->getExtension("native_profiler");
        $__internal_1d2545b0b012d0edf2dc052f92435d236f8dc21ca969aa86f3bf132c0a88cee2->enter($__internal_1d2545b0b012d0edf2dc052f92435d236f8dc21ca969aa86f3bf132c0a88cee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        
        $__internal_1d2545b0b012d0edf2dc052f92435d236f8dc21ca969aa86f3bf132c0a88cee2->leave($__internal_1d2545b0b012d0edf2dc052f92435d236f8dc21ca969aa86f3bf132c0a88cee2_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_f90aa2835d7b0bb6e47ae0992f07ca3bce6d1742309ce2cdf56577ece82f19c5 = $this->env->getExtension("native_profiler");
        $__internal_f90aa2835d7b0bb6e47ae0992f07ca3bce6d1742309ce2cdf56577ece82f19c5->enter($__internal_f90aa2835d7b0bb6e47ae0992f07ca3bce6d1742309ce2cdf56577ece82f19c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.edit"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_f90aa2835d7b0bb6e47ae0992f07ca3bce6d1742309ce2cdf56577ece82f19c5->leave($__internal_f90aa2835d7b0bb6e47ae0992f07ca3bce6d1742309ce2cdf56577ece82f19c5_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_e45dcef2286e90424369c71c0db9a74e52b552e25d2d616695f052e64f53e531 = $this->env->getExtension("native_profiler");
        $__internal_e45dcef2286e90424369c71c0db9a74e52b552e25d2d616695f052e64f53e531->enter($__internal_e45dcef2286e90424369c71c0db9a74e52b552e25d2d616695f052e64f53e531_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"slide-form\">
        ";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"slide-title\">
            ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        </div>

        <div class=\"slide-image clearfix\">
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "

        <div class=\"buttons\">
            <a href=\" ";
        // line 30
        echo $this->env->getExtension('routing')->getPath("admin_slide_list");
        echo " \">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cancel"), "html", null, true);
        echo "</a>
            <input type=\"submit\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.saveslide"), "html", null, true);
        echo "\" class=\"product-submit\" />
        </div>
        ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_e45dcef2286e90424369c71c0db9a74e52b552e25d2d616695f052e64f53e531->leave($__internal_e45dcef2286e90424369c71c0db9a74e52b552e25d2d616695f052e64f53e531_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/slide:update.html.twig";
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
/*             <a href="{{ path('admin_slide_list') }}"><i class="glyphicon glyphicon-tags"></i>{{ 'app.slidelist' | trans }} </a>*/
/*             <span id="slash">/</span>*/
/*             <span> {{ 'app.edit' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <div class="slide-form">*/
/*         {{ form_start(form) }}*/
/* */
/*         <div class="slide-title">*/
/*             {{ form_row(form.title) }}*/
/*         </div>*/
/* */
/*         <div class="slide-image clearfix">*/
/*             <img src="{{ asset('uploads/' ~ form.vars.data.image) }}" />*/
/*             <button><span>{{ 'app.add.image' | trans}}</span>{{ form_widget(form.file) }}</button>*/
/*         </div>*/
/*         {{ form_widget(form) }}*/
/* */
/*         <div class="buttons">*/
/*             <a href=" {{ path('admin_slide_list') }} ">{{ 'app.cancel' | trans}}</a>*/
/*             <input type="submit" value="{{ 'app.saveslide' | trans}}" class="product-submit" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
