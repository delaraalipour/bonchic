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
        $__internal_1e8fb3f7cd71ef2ed093ceefef54b33f5f0ab1c45f522413ca209d9b2d3e5791 = $this->env->getExtension("native_profiler");
        $__internal_1e8fb3f7cd71ef2ed093ceefef54b33f5f0ab1c45f522413ca209d9b2d3e5791->enter($__internal_1e8fb3f7cd71ef2ed093ceefef54b33f5f0ab1c45f522413ca209d9b2d3e5791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:HomePage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e8fb3f7cd71ef2ed093ceefef54b33f5f0ab1c45f522413ca209d9b2d3e5791->leave($__internal_1e8fb3f7cd71ef2ed093ceefef54b33f5f0ab1c45f522413ca209d9b2d3e5791_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f406ab1737c38d830f9223ef035c3deefbd1f61f0cf18674fba4aa873adee0a2 = $this->env->getExtension("native_profiler");
        $__internal_f406ab1737c38d830f9223ef035c3deefbd1f61f0cf18674fba4aa873adee0a2->enter($__internal_f406ab1737c38d830f9223ef035c3deefbd1f61f0cf18674fba4aa873adee0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        
        $__internal_f406ab1737c38d830f9223ef035c3deefbd1f61f0cf18674fba4aa873adee0a2->leave($__internal_f406ab1737c38d830f9223ef035c3deefbd1f61f0cf18674fba4aa873adee0a2_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e92dbfdfa84f3b86ed00776eb01ae53a54d525ad6759ffa1ded6dbc5017cf9ab = $this->env->getExtension("native_profiler");
        $__internal_e92dbfdfa84f3b86ed00776eb01ae53a54d525ad6759ffa1ded6dbc5017cf9ab->enter($__internal_e92dbfdfa84f3b86ed00776eb01ae53a54d525ad6759ffa1ded6dbc5017cf9ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 37
            echo "            <div class=\"products\">
                <div class=\"image\"><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"details\">
                    <div class=\"title\"><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_product_show", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></div>
                    <div class=\"price\">";
            // line 41
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo " تومان</div>
                    <div class=\"action\">
                        <button><a href=\"";
            // line 43
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
        // line 48
        echo "    </div>
";
        
        $__internal_e92dbfdfa84f3b86ed00776eb01ae53a54d525ad6759ffa1ded6dbc5017cf9ab->leave($__internal_e92dbfdfa84f3b86ed00776eb01ae53a54d525ad6759ffa1ded6dbc5017cf9ab_prof);

    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        $__internal_084a0358f4a0dfda22b6c1db688745935b75c5b2104316fe593394e9838c4a53 = $this->env->getExtension("native_profiler");
        $__internal_084a0358f4a0dfda22b6c1db688745935b75c5b2104316fe593394e9838c4a53->enter($__internal_084a0358f4a0dfda22b6c1db688745935b75c5b2104316fe593394e9838c4a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 51
        echo "    <div class=\"footer-widgets-top\"></div>
    <div class=\"footer\"></div>
";
        
        $__internal_084a0358f4a0dfda22b6c1db688745935b75c5b2104316fe593394e9838c4a53->leave($__internal_084a0358f4a0dfda22b6c1db688745935b75c5b2104316fe593394e9838c4a53_prof);

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
        return array (  150 => 51,  144 => 50,  136 => 48,  123 => 43,  118 => 41,  112 => 40,  105 => 38,  102 => 37,  98 => 36,  70 => 10,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/* */
/*     </div>*/
/*     <script>*/
/*         var slideIndex = 1;*/
/*         showDivs(slideIndex);*/
/* */
/*         function plusDivs(n) {*/
/*             showDivs(slideIndex += n);*/
/*         }*/
/* */
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
