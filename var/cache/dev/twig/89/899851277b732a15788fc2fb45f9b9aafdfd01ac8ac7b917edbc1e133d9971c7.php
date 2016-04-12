<?php

/* :Storefront/product/show.html.twig */
class __TwigTemplate_83e7700416243f5d76ebbe788b1a7637e7ecdf93a39ef2b129c25a95ce9b0e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Storefront/product/show.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0a564b47b7fb779cbb2a809b1a147e332aabe0244add2abb13619a11af20f7d6 = $this->env->getExtension("native_profiler");
        $__internal_0a564b47b7fb779cbb2a809b1a147e332aabe0244add2abb13619a11af20f7d6->enter($__internal_0a564b47b7fb779cbb2a809b1a147e332aabe0244add2abb13619a11af20f7d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0a564b47b7fb779cbb2a809b1a147e332aabe0244add2abb13619a11af20f7d6->leave($__internal_0a564b47b7fb779cbb2a809b1a147e332aabe0244add2abb13619a11af20f7d6_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_beae29ed11adb2aeb2576bda270347658095ab8e5c452f62ef0a4ec29627431a = $this->env->getExtension("native_profiler");
        $__internal_beae29ed11adb2aeb2576bda270347658095ab8e5c452f62ef0a4ec29627431a->enter($__internal_beae29ed11adb2aeb2576bda270347658095ab8e5c452f62ef0a4ec29627431a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product"), "html", null, true);
        
        $__internal_beae29ed11adb2aeb2576bda270347658095ab8e5c452f62ef0a4ec29627431a->leave($__internal_beae29ed11adb2aeb2576bda270347658095ab8e5c452f62ef0a4ec29627431a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_1c9aec7d6b9f60a9b20dfe660cc21780973c06250939f4596d2b6f15096f432a = $this->env->getExtension("native_profiler");
        $__internal_1c9aec7d6b9f60a9b20dfe660cc21780973c06250939f4596d2b6f15096f432a->enter($__internal_1c9aec7d6b9f60a9b20dfe660cc21780973c06250939f4596d2b6f15096f432a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"data-info\">
        <div class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
        <div><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()), "html", null, true);
        echo "\" /></div>
        <div class=\"description\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</div>
        <div class=\"price\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo "  تومان </div>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\"><i class=\"glyphicon glyphicon-backward\"></i></a>
    </div>
";
        
        $__internal_1c9aec7d6b9f60a9b20dfe660cc21780973c06250939f4596d2b6f15096f432a->leave($__internal_1c9aec7d6b9f60a9b20dfe660cc21780973c06250939f4596d2b6f15096f432a_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront/product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 11,  68 => 10,  64 => 9,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block header %}{{ 'app.product' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="data-info">*/
/*         <div class="title">{{ product.name }}</div>*/
/*         <div><img src="{{ product.image }}" /></div>*/
/*         <div class="description">{{ product.description }}</div>*/
/*         <div class="price">{{ product.price }}  تومان </div>*/
/*         <a href="{{ path('storefront_product_list') }}"><i class="glyphicon glyphicon-backward"></i></a>*/
/*     </div>*/
/* {% endblock %}*/
