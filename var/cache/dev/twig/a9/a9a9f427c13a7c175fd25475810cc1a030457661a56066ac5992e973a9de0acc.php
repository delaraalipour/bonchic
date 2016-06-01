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
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Storefront:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_24a90f4145377550a66f7620ba5cc08334b89090ff93e152e12f635eebb82508 = $this->env->getExtension("native_profiler");
        $__internal_24a90f4145377550a66f7620ba5cc08334b89090ff93e152e12f635eebb82508->enter($__internal_24a90f4145377550a66f7620ba5cc08334b89090ff93e152e12f635eebb82508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:HomePage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24a90f4145377550a66f7620ba5cc08334b89090ff93e152e12f635eebb82508->leave($__internal_24a90f4145377550a66f7620ba5cc08334b89090ff93e152e12f635eebb82508_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e01d55c67b8617f122728ce829193d06144d5cec4ffc5a4d53d8e2b1b44f5ad3 = $this->env->getExtension("native_profiler");
        $__internal_e01d55c67b8617f122728ce829193d06144d5cec4ffc5a4d53d8e2b1b44f5ad3->enter($__internal_e01d55c67b8617f122728ce829193d06144d5cec4ffc5a4d53d8e2b1b44f5ad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        
        $__internal_e01d55c67b8617f122728ce829193d06144d5cec4ffc5a4d53d8e2b1b44f5ad3->leave($__internal_e01d55c67b8617f122728ce829193d06144d5cec4ffc5a4d53d8e2b1b44f5ad3_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_36888f1f36bbe3dbf458e18b0994d2aaa70b1da746392709e425eb5901ed297d = $this->env->getExtension("native_profiler");
        $__internal_36888f1f36bbe3dbf458e18b0994d2aaa70b1da746392709e425eb5901ed297d->enter($__internal_36888f1f36bbe3dbf458e18b0994d2aaa70b1da746392709e425eb5901ed297d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"banner\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 8
            echo "            <div><img class=\"mySlides\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["slide"], "image", array()))), "html", null, true);
            echo "\" /></div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
        <a class=\"btn-floating btn-floating-left\" onclick=\"plusDivs(1)\"><i class=\"glyphicon glyphicon-chevron-left\"></i></a>
        <a class=\"btn-floating btn-floating-right\" onclick=\"plusDivs(-1)\"><i class=\"glyphicon glyphicon-chevron-right\"></i></a>
    </div>

    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        function plusDivs(n) {
            showDivs(slideIndex += n);
        }
        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName(\"mySlides\");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = \"none\";
            }
            x[slideIndex-1].style.display = \"block\";
        }
    </script>

    <div class=\"products-item clearfix\">
        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 35
            echo "            <div class=\"products\">
                <div class=\"image\"><a href=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 39
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo " تومان</div>
                    <div class=\"action\">
                        <a href=\"";
            // line 41
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
        // line 46
        echo "    </div>
    <div class=\"news-item clearfix\">
        <div class=\"news-header\"><span>";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</span></div>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 50
            echo "            <div class=\"news\">
                <div class=\"image\"><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_news_show", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["news"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"title\"><a href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_news_show", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></div>
                <div class=\"brief\"><span>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "brief", array()), "html", null, true);
            echo "</span></div>
                <div class=\"action\"><a href=\"";
            // line 54
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_news_show", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.readmore"), "html", null, true);
            echo "</a></div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "    </div>
";
        
        $__internal_36888f1f36bbe3dbf458e18b0994d2aaa70b1da746392709e425eb5901ed297d->leave($__internal_36888f1f36bbe3dbf458e18b0994d2aaa70b1da746392709e425eb5901ed297d_prof);

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
        return array (  175 => 57,  164 => 54,  160 => 53,  154 => 52,  148 => 51,  145 => 50,  141 => 49,  137 => 48,  133 => 46,  120 => 41,  115 => 39,  109 => 38,  102 => 36,  99 => 35,  95 => 34,  69 => 10,  60 => 8,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.homepage' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="banner">*/
/*         {% for slide in slides %}*/
/*             <div><img class="mySlides" src="{{ asset('uploads/' ~ slide.image) }}" /></div>*/
/*         {% endfor %}*/
/* */
/*         <a class="btn-floating btn-floating-left" onclick="plusDivs(1)"><i class="glyphicon glyphicon-chevron-left"></i></a>*/
/*         <a class="btn-floating btn-floating-right" onclick="plusDivs(-1)"><i class="glyphicon glyphicon-chevron-right"></i></a>*/
/*     </div>*/
/* */
/*     <script>*/
/*         var slideIndex = 1;*/
/*         showDivs(slideIndex);*/
/*         function plusDivs(n) {*/
/*             showDivs(slideIndex += n);*/
/*         }*/
/*         function showDivs(n) {*/
/*             var i;*/
/*             var x = document.getElementsByClassName("mySlides");*/
/*             if (n > x.length) {slideIndex = 1}*/
/*             if (n < 1) {slideIndex = x.length}*/
/*             for (i = 0; i < x.length; i++) {*/
/*                 x[i].style.display = "none";*/
/*             }*/
/*             x[slideIndex-1].style.display = "block";*/
/*         }*/
/*     </script>*/
/* */
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
/*     <div class="news-item clearfix">*/
/*         <div class="news-header"><span>{{ 'app.newslist' | trans }}</span></div>*/
/*         {% for news in news %}*/
/*             <div class="news">*/
/*                 <div class="image"><a href="{{ path('storefront_news_show', {id: news.id}) }}"><img src="{{ asset('uploads/' ~ news.image) }}" /></a></div>*/
/*                 <div class="title"><a href="{{ path('storefront_news_show', {id: news.id}) }}">{{ news.title }}</a></div>*/
/*                 <div class="brief"><span>{{ news.brief }}</span></div>*/
/*                 <div class="action"><a href="{{ path('storefront_news_show', {id: news.id}) }}">{{ 'app.readmore' | trans }}</a></div>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* {% endblock %}*/
