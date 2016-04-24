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
        $__internal_0e3eddc5196048fe5b558030b00776a20f239fdff6d6abee6931203c88cb0143 = $this->env->getExtension("native_profiler");
        $__internal_0e3eddc5196048fe5b558030b00776a20f239fdff6d6abee6931203c88cb0143->enter($__internal_0e3eddc5196048fe5b558030b00776a20f239fdff6d6abee6931203c88cb0143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e3eddc5196048fe5b558030b00776a20f239fdff6d6abee6931203c88cb0143->leave($__internal_0e3eddc5196048fe5b558030b00776a20f239fdff6d6abee6931203c88cb0143_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_6177dc36e3352b998ca264459b11dadbda441805fece848fedcff5a9e1e6f4a3 = $this->env->getExtension("native_profiler");
        $__internal_6177dc36e3352b998ca264459b11dadbda441805fece848fedcff5a9e1e6f4a3->enter($__internal_6177dc36e3352b998ca264459b11dadbda441805fece848fedcff5a9e1e6f4a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <span>/</span>
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
                    <div class=\"price\">";
                // line 24
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
                echo "  تومان </div>
                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        <div class=continue-shopping><a href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.continue.shopping"), "html", null, true);
            echo "</a></div>
    ";
        }
        
        $__internal_6177dc36e3352b998ca264459b11dadbda441805fece848fedcff5a9e1e6f4a3->leave($__internal_6177dc36e3352b998ca264459b11dadbda441805fece848fedcff5a9e1e6f4a3_prof);

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
        return array (  102 => 28,  92 => 24,  86 => 23,  80 => 20,  76 => 18,  71 => 17,  65 => 15,  63 => 14,  54 => 10,  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
/*                 <span>/</span>*/
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
/*                     <div class="price">{{ product.price | number_format(0, '.', ',') }}  تومان </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*         <div class=continue-shopping><a href="{{ path('homepage') }}">{{ 'app.continue.shopping' | trans }}</a></div>*/
/*     {% endif %}*/
/* {% endblock %}*/
