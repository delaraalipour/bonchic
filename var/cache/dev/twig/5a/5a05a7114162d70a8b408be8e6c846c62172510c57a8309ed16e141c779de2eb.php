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
        $__internal_7cb34de629c2fe403404f655903401e9f1d84d3a59b1b26455b9c35e3d0b3e7c = $this->env->getExtension("native_profiler");
        $__internal_7cb34de629c2fe403404f655903401e9f1d84d3a59b1b26455b9c35e3d0b3e7c->enter($__internal_7cb34de629c2fe403404f655903401e9f1d84d3a59b1b26455b9c35e3d0b3e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7cb34de629c2fe403404f655903401e9f1d84d3a59b1b26455b9c35e3d0b3e7c->leave($__internal_7cb34de629c2fe403404f655903401e9f1d84d3a59b1b26455b9c35e3d0b3e7c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e1259cdb446e8834f079776fe0c7a6f6282249cba6f2e79152feb2990cd3b922 = $this->env->getExtension("native_profiler");
        $__internal_e1259cdb446e8834f079776fe0c7a6f6282249cba6f2e79152feb2990cd3b922->enter($__internal_e1259cdb446e8834f079776fe0c7a6f6282249cba6f2e79152feb2990cd3b922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        
        $__internal_e1259cdb446e8834f079776fe0c7a6f6282249cba6f2e79152feb2990cd3b922->leave($__internal_e1259cdb446e8834f079776fe0c7a6f6282249cba6f2e79152feb2990cd3b922_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_b37890164c3e25a4f340bc45d4e21f8319e29b9a7b9bd8853fdae40695705d9f = $this->env->getExtension("native_profiler");
        $__internal_b37890164c3e25a4f340bc45d4e21f8319e29b9a7b9bd8853fdae40695705d9f->enter($__internal_b37890164c3e25a4f340bc45d4e21f8319e29b9a7b9bd8853fdae40695705d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"products-header\">
        <div class=\"cell\">
            <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</div>
            <div class=\"header-title\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("storefront_product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</a>
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
    <div class=\"products-item clearfix\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 18
            echo "            <div class=\"products\">
                <div class=\"image\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 22
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo " تومان</div>
                    <div class=\"action\">
                        <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.add-to-cart"), "html", null, true);
            echo "</a>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </div>
";
        
        $__internal_b37890164c3e25a4f340bc45d4e21f8319e29b9a7b9bd8853fdae40695705d9f->leave($__internal_b37890164c3e25a4f340bc45d4e21f8319e29b9a7b9bd8853fdae40695705d9f_prof);

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
        return array (  117 => 29,  104 => 24,  99 => 22,  93 => 21,  86 => 19,  83 => 18,  79 => 17,  69 => 12,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.productlist' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="products-header">*/
/*         <div class="cell">*/
/*             <div class="title">{{ 'app.productlist' | trans }}</div>*/
/*             <div class="header-title">*/
/*                 <a href="{{ path('storefront_product_list') }}">{{ 'app.productlist' | trans }}</a>*/
/*                 /*/
/*                 <a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="products-item clearfix">*/
/*         {% for product in products %}*/
/*             <div class="products">*/
/*                 <div class="image"><a href="{{ path('storefront_product_show', {id: product.id}) }}"><img src="{{ asset('uploads/' ~ product.image) }}" /></a></div>*/
/*                 <div class="details">*/
/*                     <div class="title"><a href="{{ path('storefront_product_show', {id: product.id}) }}">{{ product.name }}</a></div>*/
/*                     <div class="price">{{ product.price | number_format(0, '.', ',') }} تومان</div>*/
/*                     <div class="action">*/
/*                         <a href="{{ path('cart_add', {id: product.id}) }}">{{ 'app.add-to-cart' | trans }}</a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
