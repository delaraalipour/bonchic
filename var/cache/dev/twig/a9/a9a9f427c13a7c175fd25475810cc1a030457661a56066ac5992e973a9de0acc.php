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
        $__internal_158725cfd4ec6262c3cf3020c218b7624ec881135a05a566a1131bd5961b6b7a = $this->env->getExtension("native_profiler");
        $__internal_158725cfd4ec6262c3cf3020c218b7624ec881135a05a566a1131bd5961b6b7a->enter($__internal_158725cfd4ec6262c3cf3020c218b7624ec881135a05a566a1131bd5961b6b7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:HomePage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_158725cfd4ec6262c3cf3020c218b7624ec881135a05a566a1131bd5961b6b7a->leave($__internal_158725cfd4ec6262c3cf3020c218b7624ec881135a05a566a1131bd5961b6b7a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c6b891f770deba250fc9316b5e5aa91f52420dc0d3964244f3fb74610c9610 = $this->env->getExtension("native_profiler");
        $__internal_18c6b891f770deba250fc9316b5e5aa91f52420dc0d3964244f3fb74610c9610->enter($__internal_18c6b891f770deba250fc9316b5e5aa91f52420dc0d3964244f3fb74610c9610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        
        $__internal_18c6b891f770deba250fc9316b5e5aa91f52420dc0d3964244f3fb74610c9610->leave($__internal_18c6b891f770deba250fc9316b5e5aa91f52420dc0d3964244f3fb74610c9610_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_6475564e9588f269f7c0aa9fc08630de57f14d5ecc810085b44c579e16625d5d = $this->env->getExtension("native_profiler");
        $__internal_6475564e9588f269f7c0aa9fc08630de57f14d5ecc810085b44c579e16625d5d->enter($__internal_6475564e9588f269f7c0aa9fc08630de57f14d5ecc810085b44c579e16625d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
";
        
        $__internal_6475564e9588f269f7c0aa9fc08630de57f14d5ecc810085b44c579e16625d5d->leave($__internal_6475564e9588f269f7c0aa9fc08630de57f14d5ecc810085b44c579e16625d5d_prof);

    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        $__internal_166929df2243c727e26ee4b26ab7dbfec0cabe27600f1648783f05bbc1613895 = $this->env->getExtension("native_profiler");
        $__internal_166929df2243c727e26ee4b26ab7dbfec0cabe27600f1648783f05bbc1613895->enter($__internal_166929df2243c727e26ee4b26ab7dbfec0cabe27600f1648783f05bbc1613895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 49
        echo "    <div class=\"footer-widgets-top\"></div>
    <div class=\"footer\"></div>
";
        
        $__internal_166929df2243c727e26ee4b26ab7dbfec0cabe27600f1648783f05bbc1613895->leave($__internal_166929df2243c727e26ee4b26ab7dbfec0cabe27600f1648783f05bbc1613895_prof);

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
        return array (  148 => 49,  142 => 48,  134 => 46,  121 => 41,  116 => 39,  110 => 38,  103 => 36,  100 => 35,  96 => 34,  70 => 10,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/* {% endblock %}*/
/* {% block footer %}*/
/*     <div class="footer-widgets-top"></div>*/
/*     <div class="footer"></div>*/
/* {% endblock %}*/
