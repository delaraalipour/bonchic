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
        $__internal_8f8163161fb9608bcc7a25dc86995e171a0c1a0754f95a52816dbf2232746262 = $this->env->getExtension("native_profiler");
        $__internal_8f8163161fb9608bcc7a25dc86995e171a0c1a0754f95a52816dbf2232746262->enter($__internal_8f8163161fb9608bcc7a25dc86995e171a0c1a0754f95a52816dbf2232746262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f8163161fb9608bcc7a25dc86995e171a0c1a0754f95a52816dbf2232746262->leave($__internal_8f8163161fb9608bcc7a25dc86995e171a0c1a0754f95a52816dbf2232746262_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_f1f4df1e0dbeae4caafd87ac19ff18f4d9a931b28a978c2ef41cbbfb3a1511e2 = $this->env->getExtension("native_profiler");
        $__internal_f1f4df1e0dbeae4caafd87ac19ff18f4d9a931b28a978c2ef41cbbfb3a1511e2->enter($__internal_f1f4df1e0dbeae4caafd87ac19ff18f4d9a931b28a978c2ef41cbbfb3a1511e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product"), "html", null, true);
        
        $__internal_f1f4df1e0dbeae4caafd87ac19ff18f4d9a931b28a978c2ef41cbbfb3a1511e2->leave($__internal_f1f4df1e0dbeae4caafd87ac19ff18f4d9a931b28a978c2ef41cbbfb3a1511e2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_84fdc42c29896a6924e5c69193b018417ad73ef399b3a0aeae4bdc4326fdff78 = $this->env->getExtension("native_profiler");
        $__internal_84fdc42c29896a6924e5c69193b018417ad73ef399b3a0aeae4bdc4326fdff78->enter($__internal_84fdc42c29896a6924e5c69193b018417ad73ef399b3a0aeae4bdc4326fdff78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"products-header\">
        <div class=\"cell\">
            <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
            <div class=\"header-title\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a>
                <span>/</span>
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
    <div class=\"data-info clearfix\">
        <div class=\"product-image\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()))), "html", null, true);
        echo "\" />
        </div>
        <div class=\"product-details\">
            <div class=\"product-price\">
                <span>";
        // line 22
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), 0, ".", ","), "html", null, true);
        echo " تومان</span>
            </div>
            <div class=\"cart\">
                <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.add-to-cart"), "html", null, true);
        echo "</a>
            </div>
            <div class=\"product-description\">
                <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
        
        $__internal_84fdc42c29896a6924e5c69193b018417ad73ef399b3a0aeae4bdc4326fdff78->leave($__internal_84fdc42c29896a6924e5c69193b018417ad73ef399b3a0aeae4bdc4326fdff78_prof);

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
        return array (  101 => 28,  93 => 25,  87 => 22,  80 => 18,  69 => 12,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block header %}{{ 'app.product' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="products-header">*/
/*         <div class="cell">*/
/*             <div class="title">{{ product.name }}</div>*/
/*             <div class="header-title">*/
/*                 <a href="{{ path('storefront_product_list') }}">{{ 'app.productlist' | trans }}</a>*/
/*                 <span>/</span>*/
/*                 <a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="data-info clearfix">*/
/*         <div class="product-image">*/
/*             <img src="{{ asset('uploads/' ~ product.image) }}" />*/
/*         </div>*/
/*         <div class="product-details">*/
/*             <div class="product-price">*/
/*                 <span>{{ product.price | number_format(0, '.', ',') }} تومان</span>*/
/*             </div>*/
/*             <div class="cart">*/
/*                 <a href="{{ path('cart_add', {id: product.id}) }}">{{ 'app.add-to-cart' | trans }}</a>*/
/*             </div>*/
/*             <div class="product-description">*/
/*                 <p>{{ product.description }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
