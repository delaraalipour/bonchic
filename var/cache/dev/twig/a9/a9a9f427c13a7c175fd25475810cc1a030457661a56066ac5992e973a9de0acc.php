<?php

/* :Storefront:HomePage.html.twig */
class __TwigTemplate_8631ff8236a8cbbe5f17a97e72b2efe9c92d19ddf92f13988ae54fd68f27a008 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Storefront:HomePage.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_397c00651cfced15115b6f51550ddf5d802363ccfaaeb4eb33c261c00c5202ae = $this->env->getExtension("native_profiler");
        $__internal_397c00651cfced15115b6f51550ddf5d802363ccfaaeb4eb33c261c00c5202ae->enter($__internal_397c00651cfced15115b6f51550ddf5d802363ccfaaeb4eb33c261c00c5202ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:HomePage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_397c00651cfced15115b6f51550ddf5d802363ccfaaeb4eb33c261c00c5202ae->leave($__internal_397c00651cfced15115b6f51550ddf5d802363ccfaaeb4eb33c261c00c5202ae_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_5cb6885f2a61441954138a98cbdbc2d7e9982730108a6ad3db157a23d8830a62 = $this->env->getExtension("native_profiler");
        $__internal_5cb6885f2a61441954138a98cbdbc2d7e9982730108a6ad3db157a23d8830a62->enter($__internal_5cb6885f2a61441954138a98cbdbc2d7e9982730108a6ad3db157a23d8830a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        
        $__internal_5cb6885f2a61441954138a98cbdbc2d7e9982730108a6ad3db157a23d8830a62->leave($__internal_5cb6885f2a61441954138a98cbdbc2d7e9982730108a6ad3db157a23d8830a62_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_5c540f821d6cf84e8e8b7e6bf05372b716bc0fa21d273f38ffb2e17d3c1869a6 = $this->env->getExtension("native_profiler");
        $__internal_5c540f821d6cf84e8e8b7e6bf05372b716bc0fa21d273f38ffb2e17d3c1869a6->enter($__internal_5c540f821d6cf84e8e8b7e6bf05372b716bc0fa21d273f38ffb2e17d3c1869a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"banner\">
        <img src=\"//cdn.shopify.com/s/files/1/0170/3006/t/12/assets/index-slide-01.jpg?14841551000607424170\" />
    </div>
    <div class=\"products-item clearfix\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 11
            echo "            <div class=\"products\">
                <div class=\"image\"><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 15
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo " تومان</div>
                    <div class=\"action\">
                        <button><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cart_add", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.add-to-cart"), "html", null, true);
            echo "</a></button>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div>
";
        
        $__internal_5c540f821d6cf84e8e8b7e6bf05372b716bc0fa21d273f38ffb2e17d3c1869a6->leave($__internal_5c540f821d6cf84e8e8b7e6bf05372b716bc0fa21d273f38ffb2e17d3c1869a6_prof);

    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        $__internal_fb6787bdb3609e4a34ed5a8e4cfd33ba6edcb7de3131846021c7c5129f0c067f = $this->env->getExtension("native_profiler");
        $__internal_fb6787bdb3609e4a34ed5a8e4cfd33ba6edcb7de3131846021c7c5129f0c067f->enter($__internal_fb6787bdb3609e4a34ed5a8e4cfd33ba6edcb7de3131846021c7c5129f0c067f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 25
        echo "    <div class=\"footer-widgets-top\"></div>
    <div class=\"footer\"></div>
";
        
        $__internal_fb6787bdb3609e4a34ed5a8e4cfd33ba6edcb7de3131846021c7c5129f0c067f->leave($__internal_fb6787bdb3609e4a34ed5a8e4cfd33ba6edcb7de3131846021c7c5129f0c067f_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront:HomePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 25,  106 => 24,  98 => 22,  85 => 17,  80 => 15,  74 => 14,  67 => 12,  64 => 11,  60 => 10,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.homepage' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="banner">*/
/*         <img src="//cdn.shopify.com/s/files/1/0170/3006/t/12/assets/index-slide-01.jpg?14841551000607424170" />*/
/*     </div>*/
/*     <div class="products-item clearfix">*/
/*         {% for product in products %}*/
/*             <div class="products">*/
/*                 <div class="image"><a href="{{ path('storefront_product_show', {id: product.id}) }}"><img src="{{ asset('uploads/' ~ product.image) }}" /></a></div>*/
/*                 <div class="details">*/
/*                     <div class="title"><a href="{{ path('storefront_product_show', {id: product.id}) }}">{{ product.name }}</a></div>*/
/*                     <div class="price">{{ product.price | number_format(0, '.', ',') }} تومان</div>*/
/*                     <div class="action">*/
/*                         <button><a href="{{ path('cart_add', {id: product.id}) }}">{{ 'app.add-to-cart' | trans }}</a></button>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     <div class="footer-widgets-top"></div>*/
/*     <div class="footer"></div>*/
/* {% endblock %}*/
