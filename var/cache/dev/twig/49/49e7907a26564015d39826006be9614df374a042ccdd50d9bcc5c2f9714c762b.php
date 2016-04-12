<?php

/* :Storefront/product/new.html.twig */
class __TwigTemplate_4c912a0db4606ac8a5fc0c3e6235d14436343e87554a3730b996158edb0db9a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":Storefront/product/new.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e7b0dc53ee8ce904d5b7efd5a882e1353ed91293a63a7c1c4bed4423dad384 = $this->env->getExtension("native_profiler");
        $__internal_98e7b0dc53ee8ce904d5b7efd5a882e1353ed91293a63a7c1c4bed4423dad384->enter($__internal_98e7b0dc53ee8ce904d5b7efd5a882e1353ed91293a63a7c1c4bed4423dad384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98e7b0dc53ee8ce904d5b7efd5a882e1353ed91293a63a7c1c4bed4423dad384->leave($__internal_98e7b0dc53ee8ce904d5b7efd5a882e1353ed91293a63a7c1c4bed4423dad384_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_50b82a8532c81f59270e8b37614405bfdf3768ab1af7dc1f137a9dac244e3168 = $this->env->getExtension("native_profiler");
        $__internal_50b82a8532c81f59270e8b37614405bfdf3768ab1af7dc1f137a9dac244e3168->enter($__internal_50b82a8532c81f59270e8b37614405bfdf3768ab1af7dc1f137a9dac244e3168_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " محصول جدید";
        
        $__internal_50b82a8532c81f59270e8b37614405bfdf3768ab1af7dc1f137a9dac244e3168->leave($__internal_50b82a8532c81f59270e8b37614405bfdf3768ab1af7dc1f137a9dac244e3168_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_13fb80163c2151394401e4c045529f46484773138b64f05dec31f3a6037bd04b = $this->env->getExtension("native_profiler");
        $__internal_13fb80163c2151394401e4c045529f46484773138b64f05dec31f3a6037bd04b->enter($__internal_13fb80163c2151394401e4c045529f46484773138b64f05dec31f3a6037bd04b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "محصول جدید";
        
        $__internal_13fb80163c2151394401e4c045529f46484773138b64f05dec31f3a6037bd04b->leave($__internal_13fb80163c2151394401e4c045529f46484773138b64f05dec31f3a6037bd04b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_17d6f0a6a44737891330488d9b5985786c156f365b7b6e3febfa747a167f07d5 = $this->env->getExtension("native_profiler");
        $__internal_17d6f0a6a44737891330488d9b5985786c156f365b7b6e3febfa747a167f07d5->enter($__internal_17d6f0a6a44737891330488d9b5985786c156f365b7b6e3febfa747a167f07d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    ";
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 8
        echo "
        ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'row', array("label" => "نام محصول"));
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "price", array()), 'row', array("label" => "قیمت"));
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'row', array("label" => "توضیحات"));
        echo "
        ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'row', array("label" => "تصویر"));
        echo "
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "category", array()), 'row', array("label" => "دسته محصول"));
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <div class=\"submit\">
            <input type=\"submit\"  value=\"ذخیره\" />
        </div>
        ";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_17d6f0a6a44737891330488d9b5985786c156f365b7b6e3febfa747a167f07d5->leave($__internal_17d6f0a6a44737891330488d9b5985786c156f365b7b6e3febfa747a167f07d5_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront/product/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 20,  97 => 16,  93 => 15,  89 => 14,  85 => 13,  81 => 12,  77 => 11,  72 => 9,  69 => 8,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block header %} محصول جدید{% endblock %}*/
/* {% block title %}محصول جدید{% endblock %}*/
/* */
/* {%  block content %}*/
/*     {% form_theme form 'bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/*         {{ form_start(form) }}*/
/* */
/*         {{ form_row(form.name, {'label': "نام محصول"}) }}*/
/*         {{ form_row(form.price, {'label': "قیمت"}) }}*/
/*         {{ form_row(form.description, {'label': "توضیحات"}) }}*/
/*         {{ form_row(form.image, {'label': "تصویر"}) }}*/
/*         {{ form_row(form.category, {'label': "دسته محصول"}) }}*/
/*         {{ form_widget(form) }}*/
/*         <div class="submit">*/
/*             <input type="submit"  value="ذخیره" />*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/* {% endblock %}*/
