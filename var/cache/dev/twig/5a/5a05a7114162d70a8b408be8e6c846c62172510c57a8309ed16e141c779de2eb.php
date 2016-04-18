<?php

/* :Storefront/product/list.html.twig */
class __TwigTemplate_85bd173d4cb26bf6f2ffafe202316ffcb6c923a9f0ec6aa0cf6531eeb2f1fbb1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Storefront/product/list.html.twig", 1);
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
        $__internal_f2b44d723432c66af3f1dbad5bcec368a31bed9b7e115c669b23a0789fe9c762 = $this->env->getExtension("native_profiler");
        $__internal_f2b44d723432c66af3f1dbad5bcec368a31bed9b7e115c669b23a0789fe9c762->enter($__internal_f2b44d723432c66af3f1dbad5bcec368a31bed9b7e115c669b23a0789fe9c762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2b44d723432c66af3f1dbad5bcec368a31bed9b7e115c669b23a0789fe9c762->leave($__internal_f2b44d723432c66af3f1dbad5bcec368a31bed9b7e115c669b23a0789fe9c762_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a4a3463c54fa44f43e791d0e63e4fbe0dddeca15475b09dcd0d97b34a63cb43 = $this->env->getExtension("native_profiler");
        $__internal_3a4a3463c54fa44f43e791d0e63e4fbe0dddeca15475b09dcd0d97b34a63cb43->enter($__internal_3a4a3463c54fa44f43e791d0e63e4fbe0dddeca15475b09dcd0d97b34a63cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        
        $__internal_3a4a3463c54fa44f43e791d0e63e4fbe0dddeca15475b09dcd0d97b34a63cb43->leave($__internal_3a4a3463c54fa44f43e791d0e63e4fbe0dddeca15475b09dcd0d97b34a63cb43_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5ab75e7faa0b2892d32952563ae2a8fa95fde313864927f1e543561f0e74cc0 = $this->env->getExtension("native_profiler");
        $__internal_e5ab75e7faa0b2892d32952563ae2a8fa95fde313864927f1e543561f0e74cc0->enter($__internal_e5ab75e7faa0b2892d32952563ae2a8fa95fde313864927f1e543561f0e74cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 7
            echo "                <div class=\"products\">
                    <div><img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></div>
                    <div class=\"title\"><a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 10
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo " تومان</div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e5ab75e7faa0b2892d32952563ae2a8fa95fde313864927f1e543561f0e74cc0->leave($__internal_e5ab75e7faa0b2892d32952563ae2a8fa95fde313864927f1e543561f0e74cc0_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront/product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 10,  65 => 9,  61 => 8,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.homepage' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*             {% for product in products %}*/
/*                 <div class="products">*/
/*                     <div><img src="{{ asset('uploads/' ~ product.image) }}" /></div>*/
/*                     <div class="title"><a href="{{ path('storefront_product_show', {id: product.id}) }}">{{ product.name }}</a></div>*/
/*                     <div class="price">{{ product.price | number_format(0, '.', ',') }} تومان</div>*/
/*                 </div>*/
/*             {% endfor %}*/
/* {% endblock %}*/
