<?php

/* :Cart:list.html.twig */
class __TwigTemplate_5e7b36e70a0a60d6f4a8fdc9019151070e0352785461cb9840540f14a4b47424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Cart:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_715597a218111bf8bd5801ad51694b345e2a79b78f8c5f85c9f3d7bb7a5cf8b3 = $this->env->getExtension("native_profiler");
        $__internal_715597a218111bf8bd5801ad51694b345e2a79b78f8c5f85c9f3d7bb7a5cf8b3->enter($__internal_715597a218111bf8bd5801ad51694b345e2a79b78f8c5f85c9f3d7bb7a5cf8b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_715597a218111bf8bd5801ad51694b345e2a79b78f8c5f85c9f3d7bb7a5cf8b3->leave($__internal_715597a218111bf8bd5801ad51694b345e2a79b78f8c5f85c9f3d7bb7a5cf8b3_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1f54a578ed0bb2d7ef8e4d1f1d6134d0bc3c6c774297e56253d59c5b45a3a970 = $this->env->getExtension("native_profiler");
        $__internal_1f54a578ed0bb2d7ef8e4d1f1d6134d0bc3c6c774297e56253d59c5b45a3a970->enter($__internal_1f54a578ed0bb2d7ef8e4d1f1d6134d0bc3c6c774297e56253d59c5b45a3a970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <div class=\"products-header\">
        <div class=\"cell\">
            <div class=\"title\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</div>
            <div class=\"header-title\">
                <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</span>
                /
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
    ";
        // line 14
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
            // line 15
            echo "        <div class=\"empty-cart-message\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.emptycart.message"), "html", null, true);
            echo "</div>
    ";
        } else {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 18
                echo "            <div class=\"cart-info clearfix\">
                <div class=\"image\">
                    <img src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
                echo "\" />
                </div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a></div>
                    <div class=\"amounts\"><span>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo "x";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
                echo "</span></div>
                    <div class=\"price\"><span>";
                // line 25
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
                echo "  تومان</span></div>
                </div>
                <div class=\"delete-product-cart\"><a href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\"><i class=\"glyphicon glyphicon-trash\"></i></a></div>
                <form action=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
                echo "\" method=\"post\" class=\"update-cart\">
                    <input type=\"number\" name=\"q\" value=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), $this->getAttribute($context["product"], "id", array()), array(), "array"), "html", null, true);
                echo "\">
                    <button type=\"submit\" value=\"Submit\">";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.update.cart"), "html", null, true);
                echo "</button>
                </form>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            <div class=\"total-price\">
                <span>";
            // line 35
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), 0, ".", ","), "html", null, true);
            echo "  تومان </span>
                <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.total.price"), "html", null, true);
            echo "</p>
            </div>
            <div class=continue-shopping>
                <a href=\"";
            // line 39
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.continue.shopping"), "html", null, true);
            echo "</a>
            </div>
    ";
        }
        
        $__internal_1f54a578ed0bb2d7ef8e4d1f1d6134d0bc3c6c774297e56253d59c5b45a3a970->leave($__internal_1f54a578ed0bb2d7ef8e4d1f1d6134d0bc3c6c774297e56253d59c5b45a3a970_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 39,  132 => 36,  128 => 35,  125 => 34,  115 => 30,  111 => 29,  107 => 28,  103 => 27,  98 => 25,  92 => 24,  86 => 23,  80 => 20,  76 => 18,  71 => 17,  65 => 15,  63 => 14,  54 => 10,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
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
