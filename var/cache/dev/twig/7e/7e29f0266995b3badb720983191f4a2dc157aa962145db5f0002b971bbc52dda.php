<?php

/* :Admin/product/list.html.twig */
class __TwigTemplate_50de6e145907f1a1d0b432d31c5ba6abef76aa75a5e141a00fb5126e0bfd26d2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/product/list.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0fbe22e79247797c9d4c84fae680d55ff8032e35de6ca801057b265ad75141c2 = $this->env->getExtension("native_profiler");
        $__internal_0fbe22e79247797c9d4c84fae680d55ff8032e35de6ca801057b265ad75141c2->enter($__internal_0fbe22e79247797c9d4c84fae680d55ff8032e35de6ca801057b265ad75141c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fbe22e79247797c9d4c84fae680d55ff8032e35de6ca801057b265ad75141c2->leave($__internal_0fbe22e79247797c9d4c84fae680d55ff8032e35de6ca801057b265ad75141c2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_72be3074a37e80401736f2bc099975fb1ea3f590d5548fc7be4d64e9dec5e9bb = $this->env->getExtension("native_profiler");
        $__internal_72be3074a37e80401736f2bc099975fb1ea3f590d5548fc7be4d64e9dec5e9bb->enter($__internal_72be3074a37e80401736f2bc099975fb1ea3f590d5548fc7be4d64e9dec5e9bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        
        $__internal_72be3074a37e80401736f2bc099975fb1ea3f590d5548fc7be4d64e9dec5e9bb->leave($__internal_72be3074a37e80401736f2bc099975fb1ea3f590d5548fc7be4d64e9dec5e9bb_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_8f83aab8549e699ca4d65e69f1ab02bfeef72fbf8a08d46b8425a693f9bd63ef = $this->env->getExtension("native_profiler");
        $__internal_8f83aab8549e699ca4d65e69f1ab02bfeef72fbf8a08d46b8425a693f9bd63ef->enter($__internal_8f83aab8549e699ca4d65e69f1ab02bfeef72fbf8a08d46b8425a693f9bd63ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-tags\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</span></div>
        <div class=\"header-link\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        echo " </a></div>
    </div>
";
        
        $__internal_8f83aab8549e699ca4d65e69f1ab02bfeef72fbf8a08d46b8425a693f9bd63ef->leave($__internal_8f83aab8549e699ca4d65e69f1ab02bfeef72fbf8a08d46b8425a693f9bd63ef_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_73900038896f736aa1933fc911bbf1dd74d313b7f2570b103c9c2a59141f5969 = $this->env->getExtension("native_profiler");
        $__internal_73900038896f736aa1933fc911bbf1dd74d313b7f2570b103c9c2a59141f5969->enter($__internal_73900038896f736aa1933fc911bbf1dd74d313b7f2570b103c9c2a59141f5969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    <table>
        <tr class=\"table-header\">
            <td>id</td>
            <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.image"), "html", null, true);
        echo "</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.name"), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.price"), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.operations"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_delete", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete"), "html", null, true);
            echo " </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    </table>
";
        
        $__internal_73900038896f736aa1933fc911bbf1dd74d313b7f2570b103c9c2a59141f5969->leave($__internal_73900038896f736aa1933fc911bbf1dd74d313b7f2570b103c9c2a59141f5969_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/product/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 32,  127 => 28,  122 => 26,  116 => 25,  112 => 24,  108 => 23,  105 => 22,  101 => 21,  96 => 19,  92 => 18,  88 => 17,  84 => 16,  79 => 13,  73 => 12,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.productlist' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name"><span><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }}</span></div>*/
/*         <div class="header-link"><a href="{{ path('admin_product_new') }}"> {{ 'app.newproduct' | trans }} </a></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <table>*/
/*         <tr class="table-header">*/
/*             <td>id</td>*/
/*             <td>{{ 'app.image' | trans }}</td>*/
/*             <td>{{ 'app.product.name' | trans }}</td>*/
/*             <td>{{ 'app.product.price' | trans }}</td>*/
/*             <td>{{ 'app.operations' | trans }}</td>*/
/*         </tr>*/
/*         {% for product in products %}*/
/*             <tr>*/
/*                 <td>{{ product.id }}</td>*/
/*                 <td><img src="{{ asset('uploads/' ~ product.image) }}" /></td>*/
/*                 <td><a href="{{ path('admin_product_update', {id: product.id}) }}" class="edit">{{ product.name }}</a></td>*/
/*                 <td>{{ product.price | number_format(0, '.', ',') }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('admin_product_delete', {id: product.id}) }}" class="delete"> {{ 'app.delete' | trans }} </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
