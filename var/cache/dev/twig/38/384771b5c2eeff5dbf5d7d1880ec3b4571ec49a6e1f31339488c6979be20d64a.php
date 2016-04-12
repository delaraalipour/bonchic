<?php

/* :product/list.html.twig */
class __TwigTemplate_abd9933924062d66aab0c5db680df30cc35485ee1b2bb16cbb80a99e55f0d377 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":product/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3df41b80c29682421dabff10ecfabd5af58f11549cbac8cece2e868d111e9976 = $this->env->getExtension("native_profiler");
        $__internal_3df41b80c29682421dabff10ecfabd5af58f11549cbac8cece2e868d111e9976->enter($__internal_3df41b80c29682421dabff10ecfabd5af58f11549cbac8cece2e868d111e9976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3df41b80c29682421dabff10ecfabd5af58f11549cbac8cece2e868d111e9976->leave($__internal_3df41b80c29682421dabff10ecfabd5af58f11549cbac8cece2e868d111e9976_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ce82b5a928f4b5bf384f548b0e0aef3459e71e98ae3bf1b50edbef8c87ab63ae = $this->env->getExtension("native_profiler");
        $__internal_ce82b5a928f4b5bf384f548b0e0aef3459e71e98ae3bf1b50edbef8c87ab63ae->enter($__internal_ce82b5a928f4b5bf384f548b0e0aef3459e71e98ae3bf1b50edbef8c87ab63ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "محصولات";
        
        $__internal_ce82b5a928f4b5bf384f548b0e0aef3459e71e98ae3bf1b50edbef8c87ab63ae->leave($__internal_ce82b5a928f4b5bf384f548b0e0aef3459e71e98ae3bf1b50edbef8c87ab63ae_prof);

    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        $__internal_2ab58334810eb280ed84c621d37fe85d0de971c88265a29e854c4d6848f1c3d7 = $this->env->getExtension("native_profiler");
        $__internal_2ab58334810eb280ed84c621d37fe85d0de971c88265a29e854c4d6848f1c3d7->enter($__internal_2ab58334810eb280ed84c621d37fe85d0de971c88265a29e854c4d6848f1c3d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "محصولات";
        
        $__internal_2ab58334810eb280ed84c621d37fe85d0de971c88265a29e854c4d6848f1c3d7->leave($__internal_2ab58334810eb280ed84c621d37fe85d0de971c88265a29e854c4d6848f1c3d7_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_51b97b50a9f659c2099c8321a250ec88b03acaad86a5cac9970fedbdb86f0dd1 = $this->env->getExtension("native_profiler");
        $__internal_51b97b50a9f659c2099c8321a250ec88b03acaad86a5cac9970fedbdb86f0dd1->enter($__internal_51b97b50a9f659c2099c8321a250ec88b03acaad86a5cac9970fedbdb86f0dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 8
            echo "                <div class=\"products\">
                    <div><img src=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "image", array()), "html", null, true);
            echo "\" /></div>
                    <div class=\"title\"><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
            echo " تومان</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_51b97b50a9f659c2099c8321a250ec88b03acaad86a5cac9970fedbdb86f0dd1->leave($__internal_51b97b50a9f659c2099c8321a250ec88b03acaad86a5cac9970fedbdb86f0dd1_prof);

    }

    public function getTemplateName()
    {
        return ":product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 11,  78 => 10,  74 => 9,  71 => 8,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block title %}محصولات{% endblock %}*/
/* {% block header %}محصولات{% endblock %}*/
/* */
/* {% block content %}*/
/*             {% for product in products %}*/
/*                 <div class="products">*/
/*                     <div><img src="{{ product.image}}" /></div>*/
/*                     <div class="title"><a href="{{ path('product_show', {id: product.id}) }}">{{ product.name }}</a></div>*/
/*                     <div class="price">{{ product.price }} تومان</div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* {% endblock %}*/
