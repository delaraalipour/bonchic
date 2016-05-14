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
        $__internal_bb4e1cff7b966c997c4c74d05860abba4c99afce1f077b682e14ef9168fbfd30 = $this->env->getExtension("native_profiler");
        $__internal_bb4e1cff7b966c997c4c74d05860abba4c99afce1f077b682e14ef9168fbfd30->enter($__internal_bb4e1cff7b966c997c4c74d05860abba4c99afce1f077b682e14ef9168fbfd30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/product/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb4e1cff7b966c997c4c74d05860abba4c99afce1f077b682e14ef9168fbfd30->leave($__internal_bb4e1cff7b966c997c4c74d05860abba4c99afce1f077b682e14ef9168fbfd30_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_570245a645f2a321720785204df64615b494b00be934ea6a0deba9e10b9a47b5 = $this->env->getExtension("native_profiler");
        $__internal_570245a645f2a321720785204df64615b494b00be934ea6a0deba9e10b9a47b5->enter($__internal_570245a645f2a321720785204df64615b494b00be934ea6a0deba9e10b9a47b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        
        $__internal_570245a645f2a321720785204df64615b494b00be934ea6a0deba9e10b9a47b5->leave($__internal_570245a645f2a321720785204df64615b494b00be934ea6a0deba9e10b9a47b5_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_5c7d112747c2b1129c0da18c102a14acee0207935097209fbf99e7c23d074881 = $this->env->getExtension("native_profiler");
        $__internal_5c7d112747c2b1129c0da18c102a14acee0207935097209fbf99e7c23d074881->enter($__internal_5c7d112747c2b1129c0da18c102a14acee0207935097209fbf99e7c23d074881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <span><i class=\"glyphicon glyphicon-tags\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.productlist"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"header-link\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_product_new");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newproduct"), "html", null, true);
        echo " </a>
        </div>
    </div>
";
        
        $__internal_5c7d112747c2b1129c0da18c102a14acee0207935097209fbf99e7c23d074881->leave($__internal_5c7d112747c2b1129c0da18c102a14acee0207935097209fbf99e7c23d074881_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e3f544cff9696b87d864cffafbbb8fd137b6dbfc05e0a9d266ef2ea916c9c60 = $this->env->getExtension("native_profiler");
        $__internal_1e3f544cff9696b87d864cffafbbb8fd137b6dbfc05e0a9d266ef2ea916c9c60->enter($__internal_1e3f544cff9696b87d864cffafbbb8fd137b6dbfc05e0a9d266ef2ea916c9c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <table>
        <tr class=\"table-header\">
            <td>id</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.image"), "html", null, true);
        echo "</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.name"), "html", null, true);
        echo "</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.price"), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.operations"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 26
            echo "            <tr>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["product"], "image", array()))), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_product_update", array("id" => $this->getAttribute($context["product"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["product"], "price", array()), 0, ".", ","), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 32
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
        // line 36
        echo "    </table>
";
        
        $__internal_1e3f544cff9696b87d864cffafbbb8fd137b6dbfc05e0a9d266ef2ea916c9c60->leave($__internal_1e3f544cff9696b87d864cffafbbb8fd137b6dbfc05e0a9d266ef2ea916c9c60_prof);

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
        return array (  143 => 36,  131 => 32,  126 => 30,  120 => 29,  116 => 28,  112 => 27,  109 => 26,  105 => 25,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  83 => 17,  77 => 16,  64 => 11,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.productlist' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <span><i class="glyphicon glyphicon-tags"></i>{{ 'app.productlist' | trans }}</span>*/
/*         </div>*/
/*         <div class="header-link">*/
/*             <a href="{{ path('admin_product_new') }}"> {{ 'app.newproduct' | trans }} </a>*/
/*         </div>*/
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
