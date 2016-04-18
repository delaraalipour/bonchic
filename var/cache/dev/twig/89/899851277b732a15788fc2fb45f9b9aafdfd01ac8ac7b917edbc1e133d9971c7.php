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
        $__internal_ebb613a7790798288ef547e490b4fd6fffb693074411cb076fe3f27086139f7e = $this->env->getExtension("native_profiler");
        $__internal_ebb613a7790798288ef547e490b4fd6fffb693074411cb076fe3f27086139f7e->enter($__internal_ebb613a7790798288ef547e490b4fd6fffb693074411cb076fe3f27086139f7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebb613a7790798288ef547e490b4fd6fffb693074411cb076fe3f27086139f7e->leave($__internal_ebb613a7790798288ef547e490b4fd6fffb693074411cb076fe3f27086139f7e_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_15dd219892555e5df16cbead397f39ca437d159ddbc0948f61a51ed100a89010 = $this->env->getExtension("native_profiler");
        $__internal_15dd219892555e5df16cbead397f39ca437d159ddbc0948f61a51ed100a89010->enter($__internal_15dd219892555e5df16cbead397f39ca437d159ddbc0948f61a51ed100a89010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product"), "html", null, true);
        
        $__internal_15dd219892555e5df16cbead397f39ca437d159ddbc0948f61a51ed100a89010->leave($__internal_15dd219892555e5df16cbead397f39ca437d159ddbc0948f61a51ed100a89010_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_baadb446a4acd4ead247b6a83fb4372a949d494c824f42e79013846fe80c3424 = $this->env->getExtension("native_profiler");
        $__internal_baadb446a4acd4ead247b6a83fb4372a949d494c824f42e79013846fe80c3424->enter($__internal_baadb446a4acd4ead247b6a83fb4372a949d494c824f42e79013846fe80c3424_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"data-info\">
        <div class=\"title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
        <div><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()))), "html", null, true);
        echo "\" /></div>
        <div class=\"description\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</div>
        <div class=\"price\">";
        // line 10
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), 0, ".", ","), "html", null, true);
        echo "  تومان </div>
        <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\"><i class=\"glyphicon glyphicon-backward\"></i></a>
    </div>
";
        
        $__internal_baadb446a4acd4ead247b6a83fb4372a949d494c824f42e79013846fe80c3424->leave($__internal_baadb446a4acd4ead247b6a83fb4372a949d494c824f42e79013846fe80c3424_prof);

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
/*         <div><img src="{{ asset('uploads/' ~ product.image) }}" /></div>*/
/*         <div class="description">{{ product.description }}</div>*/
/*         <div class="price">{{ product.price | number_format(0, '.', ',') }}  تومان </div>*/
/*         <a href="{{ path('storefront_product_list') }}"><i class="glyphicon glyphicon-backward"></i></a>*/
/*     </div>*/
/* {% endblock %}*/
