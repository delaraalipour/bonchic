<?php

/* Storefront/cart/list.html.twig */
class __TwigTemplate_feaa523db44c0198a4d381687304b834f7bac806921c5a5713e313fb54e65439 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", "Storefront/cart/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c24cf1f743333c14025806b48382a9591d32e8e683c16302e4b07b18f8f2582b = $this->env->getExtension("native_profiler");
        $__internal_c24cf1f743333c14025806b48382a9591d32e8e683c16302e4b07b18f8f2582b->enter($__internal_c24cf1f743333c14025806b48382a9591d32e8e683c16302e4b07b18f8f2582b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Storefront/cart/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c24cf1f743333c14025806b48382a9591d32e8e683c16302e4b07b18f8f2582b->leave($__internal_c24cf1f743333c14025806b48382a9591d32e8e683c16302e4b07b18f8f2582b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_16a6e4fec1a28122beb8aed663efecab2f53e01eb1251a1f8986c2d67ef8b392 = $this->env->getExtension("native_profiler");
        $__internal_16a6e4fec1a28122beb8aed663efecab2f53e01eb1251a1f8986c2d67ef8b392->enter($__internal_16a6e4fec1a28122beb8aed663efecab2f53e01eb1251a1f8986c2d67ef8b392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        
        $__internal_16a6e4fec1a28122beb8aed663efecab2f53e01eb1251a1f8986c2d67ef8b392->leave($__internal_16a6e4fec1a28122beb8aed663efecab2f53e01eb1251a1f8986c2d67ef8b392_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_d3ee088f8fbc8600ff3a02ab618442b3db044d0682512465702d84f232ee1d1e = $this->env->getExtension("native_profiler");
        $__internal_d3ee088f8fbc8600ff3a02ab618442b3db044d0682512465702d84f232ee1d1e->enter($__internal_d3ee088f8fbc8600ff3a02ab618442b3db044d0682512465702d84f232ee1d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"products-header\">
        <div class=\"cell\">
            <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</div>
            <div class=\"header-title\">
                <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</span>
                /
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
    ";
        // line 16
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
            // line 17
            echo "        <div class=\"empty-cart-message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.emptycart.message"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 19
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 20
                echo "            <div class=\"cart-info clearfix\">
                <div class=\"image\">
                    <img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
                echo "\" />
                </div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a></div>
                    <div class=\"amounts\"><span>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
                echo "</span></div>
                    <div class=\"price\"><span>";
                // line 27
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
                echo "  تومان</span></div>
                </div>
                <div class=\"delete-product-cart\"><a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a></div>
                <form action=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"update-cart\">
                    <input type=\"number\" name=\"q\" value=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
                echo "\">
                    <button type=\"submit\" value=\"Submit\">";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.update.cart"), "html", null, true);
                echo "</button>
                </form>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            <div class=\"total-price\">
                <span>";
            // line 37
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, ".", ","), "html", null, true);
            echo "  تومان </span>
                <p>";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.total.price"), "html", null, true);
            echo "</p>
            </div>
            <div class=continue-shopping>
                <a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.continue.shopping"), "html", null, true);
            echo "</a>
            </div>
    ";
        }
        
        $__internal_d3ee088f8fbc8600ff3a02ab618442b3db044d0682512465702d84f232ee1d1e->leave($__internal_d3ee088f8fbc8600ff3a02ab618442b3db044d0682512465702d84f232ee1d1e_prof);

    }

    public function getTemplateName()
    {
        return "Storefront/cart/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 41,  145 => 38,  141 => 37,  138 => 36,  128 => 32,  124 => 31,  120 => 30,  116 => 29,  111 => 27,  105 => 26,  99 => 25,  93 => 22,  89 => 20,  84 => 19,  78 => 17,  76 => 16,  67 => 12,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.cart' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="products-header">*/
/*         <div class="cell">*/
/*             <div class="title">{{ 'app.cart' | trans }}</div>*/
/*             <div class="header-title">*/
/*                 <span>{{ 'app.cart' | trans }}</span>*/
/*                 /*/
/*                 <a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     {% if products|length == 0 %}*/
/*         <div class="empty-cart-message">{{ 'app.emptycart.message' | trans }}</div>*/
/*     {% else %}*/
/*         {% for product in products %}*/
/*             <div class="cart-info clearfix">*/
/*                 <div class="image">*/
/*                     <img src="{{ asset('uploads/' ~ product.image) }}" />*/
/*                 </div>*/
/*                 <div class="details">*/
/*                     <div class="title"><a href="{{ path('storefront_product_show', {id: product.id}) }}">{{ product.name }}</a></div>*/
/*                     <div class="amounts"><span>{{ product.price }}x{{ cart[product.id] }}</span></div>*/
/*                     <div class="price"><span>{{ product.price | number_format(0, '.', ',') }}  تومان</span></div>*/
/*                 </div>*/
/*                 <div class="delete-product-cart"><a href="{{ path('cart_delete', {id: product.id}) }}"><i class="glyphicon glyphicon-trash"></i></a></div>*/
/*                 <form action="{{ path('cart_add', {id: product.id}) }}" method="post" class="update-cart">*/
/*                     <input type="number" name="q" value="{{ cart[product.id] }}">*/
/*                     <button type="submit" value="Submit">{{ 'app.update.cart' | trans }}</button>*/
/*                 </form>*/
/*             </div>*/
/*         {% endfor %}*/
/*             <div class="total-price">*/
/*                 <span>{{ total | number_format(0, '.', ',') }}  تومان </span>*/
/*                 <p>{{ 'app.total.price' | trans }}</p>*/
/*             </div>*/
/*             <div class=continue-shopping>*/
/*                 <a href="{{ path('homepage') }}">{{ 'app.continue.shopping' | trans }}</a>*/
/*             </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
