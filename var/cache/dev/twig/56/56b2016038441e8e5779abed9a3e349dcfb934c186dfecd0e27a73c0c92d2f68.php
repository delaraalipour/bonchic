<?php

/* :Cart:list.html.twig */
class __TwigTemplate_5e7b36e70a0a60d6f4a8fdc9019151070e0352785461cb9840540f14a4b47424 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Cart:layout.html.twig", ":Cart:list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Cart:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_947155a7b9cbd2263ff1bef34f7ed79800a0c63787b83f8854cd3f4a0d8c8bdb = $this->env->getExtension("native_profiler");
        $__internal_947155a7b9cbd2263ff1bef34f7ed79800a0c63787b83f8854cd3f4a0d8c8bdb->enter($__internal_947155a7b9cbd2263ff1bef34f7ed79800a0c63787b83f8854cd3f4a0d8c8bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_947155a7b9cbd2263ff1bef34f7ed79800a0c63787b83f8854cd3f4a0d8c8bdb->leave($__internal_947155a7b9cbd2263ff1bef34f7ed79800a0c63787b83f8854cd3f4a0d8c8bdb_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_694895d3c4f05db77f5013e47c3586bc5ab0d5f0cf978340225f478afa92f845 = $this->env->getExtension("native_profiler");
        $__internal_694895d3c4f05db77f5013e47c3586bc5ab0d5f0cf978340225f478afa92f845->enter($__internal_694895d3c4f05db77f5013e47c3586bc5ab0d5f0cf978340225f478afa92f845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <a href=\"";
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">home</a>
    ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) == 0)) {
            // line 6
            echo "        cart is empty.
    ";
        } else {
            // line 8
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 9
                echo "            <div class=\"title\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</div>
            <div class=\"price\">";
                // line 10
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
                echo "  تومان </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo "    ";
        }
        
        $__internal_694895d3c4f05db77f5013e47c3586bc5ab0d5f0cf978340225f478afa92f845->leave($__internal_694895d3c4f05db77f5013e47c3586bc5ab0d5f0cf978340225f478afa92f845_prof);

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
        return array (  69 => 12,  61 => 10,  56 => 9,  51 => 8,  47 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends ":Cart:layout.html.twig" %}*/
/* */
/* {% block content %}*/
/*     <a href="{{ path('storefront_product_list') }}">home</a>*/
/*     {% if products|length == 0 %}*/
/*         cart is empty.*/
/*     {% else %}*/
/*         {% for product in products %}*/
/*             <div class="title">{{ product.name }}</div>*/
/*             <div class="price">{{ product.price | number_format(0, '.', ',') }}  تومان </div>*/
/*         {% endfor %}*/
/*     {% endif %}*/
/* {% endblock %}*/
