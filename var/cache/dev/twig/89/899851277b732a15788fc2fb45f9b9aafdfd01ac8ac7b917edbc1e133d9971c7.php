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
        $__internal_a0254b31447d2e76f20f913678086f7289c81eb25ff068ed9332412dbd788f39 = $this->env->getExtension("native_profiler");
        $__internal_a0254b31447d2e76f20f913678086f7289c81eb25ff068ed9332412dbd788f39->enter($__internal_a0254b31447d2e76f20f913678086f7289c81eb25ff068ed9332412dbd788f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0254b31447d2e76f20f913678086f7289c81eb25ff068ed9332412dbd788f39->leave($__internal_a0254b31447d2e76f20f913678086f7289c81eb25ff068ed9332412dbd788f39_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_b55c102d8db702321e546db7fc366c64cb0e2f2f42feb200c7115ab880fb718c = $this->env->getExtension("native_profiler");
        $__internal_b55c102d8db702321e546db7fc366c64cb0e2f2f42feb200c7115ab880fb718c->enter($__internal_b55c102d8db702321e546db7fc366c64cb0e2f2f42feb200c7115ab880fb718c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product"), "html", null, true);
        
        $__internal_b55c102d8db702321e546db7fc366c64cb0e2f2f42feb200c7115ab880fb718c->leave($__internal_b55c102d8db702321e546db7fc366c64cb0e2f2f42feb200c7115ab880fb718c_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_2a38442405b893d141e724346d2ca42df6a647c86995fad2cceb409d6036ceaf = $this->env->getExtension("native_profiler");
        $__internal_2a38442405b893d141e724346d2ca42df6a647c86995fad2cceb409d6036ceaf->enter($__internal_2a38442405b893d141e724346d2ca42df6a647c86995fad2cceb409d6036ceaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"data-info\">
        <div class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "
            <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">اضافه به سبد خرید</a>
        </div>
        <div><img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()))), "html", null, true);
        echo "\" /></div>
        <div class=\"description\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</div>
        <div class=\"price\">";
        // line 12
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), 0, ".", ","), "html", null, true);
        echo "  تومان </div>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\"><i class=\"glyphicon glyphicon-backward\"></i></a>
    </div>
";
        
        $__internal_2a38442405b893d141e724346d2ca42df6a647c86995fad2cceb409d6036ceaf->leave($__internal_2a38442405b893d141e724346d2ca42df6a647c86995fad2cceb409d6036ceaf_prof);

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
        return array (  77 => 13,  73 => 12,  69 => 11,  65 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block header %}{{ 'app.product' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="data-info">*/
/*         <div class="title">{{ product.name }}*/
/*             <a href="{{ path('cart_add', {id: product.id}) }}">اضافه به سبد خرید</a>*/
/*         </div>*/
/*         <div><img src="{{ asset('uploads/' ~ product.image) }}" /></div>*/
/*         <div class="description">{{ product.description }}</div>*/
/*         <div class="price">{{ product.price | number_format(0, '.', ',') }}  تومان </div>*/
/*         <a href="{{ path('storefront_product_list') }}"><i class="glyphicon glyphicon-backward"></i></a>*/
/*     </div>*/
/* {% endblock %}*/
