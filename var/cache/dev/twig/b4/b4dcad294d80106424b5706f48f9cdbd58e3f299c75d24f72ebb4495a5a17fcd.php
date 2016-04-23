<?php

/* Admin/category/list.html.twig */
class __TwigTemplate_c5bed1f56d82f064d751166fd1b8ef93d866af87bc9f81a5ca57848b2b50d559 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", "Admin/category/list.html.twig", 1);
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
        $__internal_06f9f354000ff34dae98bfd3b119f89b5b180a5ed9d2fce6cb4cae11c89e0744 = $this->env->getExtension("native_profiler");
        $__internal_06f9f354000ff34dae98bfd3b119f89b5b180a5ed9d2fce6cb4cae11c89e0744->enter($__internal_06f9f354000ff34dae98bfd3b119f89b5b180a5ed9d2fce6cb4cae11c89e0744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/category/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06f9f354000ff34dae98bfd3b119f89b5b180a5ed9d2fce6cb4cae11c89e0744->leave($__internal_06f9f354000ff34dae98bfd3b119f89b5b180a5ed9d2fce6cb4cae11c89e0744_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4e383e82bf6f9d802d9281de731bb37a8bf4b3942adc4f20bbb240ad33bbc49e = $this->env->getExtension("native_profiler");
        $__internal_4e383e82bf6f9d802d9281de731bb37a8bf4b3942adc4f20bbb240ad33bbc49e->enter($__internal_4e383e82bf6f9d802d9281de731bb37a8bf4b3942adc4f20bbb240ad33bbc49e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        
        $__internal_4e383e82bf6f9d802d9281de731bb37a8bf4b3942adc4f20bbb240ad33bbc49e->leave($__internal_4e383e82bf6f9d802d9281de731bb37a8bf4b3942adc4f20bbb240ad33bbc49e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_08f96fef8c636b8ea7e818c1ac179ec220d0bdd5ec9260535777bfa7bff2f330 = $this->env->getExtension("native_profiler");
        $__internal_08f96fef8c636b8ea7e818c1ac179ec220d0bdd5ec9260535777bfa7bff2f330->enter($__internal_08f96fef8c636b8ea7e818c1ac179ec220d0bdd5ec9260535777bfa7bff2f330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-pencil\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        echo "</span></div>
        <div class=\"header-link\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_category_new");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newcategory"), "html", null, true);
        echo " </a></div>
    </div>
";
        
        $__internal_08f96fef8c636b8ea7e818c1ac179ec220d0bdd5ec9260535777bfa7bff2f330->leave($__internal_08f96fef8c636b8ea7e818c1ac179ec220d0bdd5ec9260535777bfa7bff2f330_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_589b358de071d36940624a4b24abae23c501c09f365fd5de02088f59876d13ba = $this->env->getExtension("native_profiler");
        $__internal_589b358de071d36940624a4b24abae23c501c09f365fd5de02088f59876d13ba->enter($__internal_589b358de071d36940624a4b24abae23c501c09f365fd5de02088f59876d13ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <table>
        <tr class=\"table-header\">
            <td>id</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.image"), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.category.title"), "html", null, true);
        echo "</td>
            <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.operations"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 22
            echo "            <tr>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["category"], "image", array()))), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_update", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete"), "html", null, true);
            echo " </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "    </table>
";
        
        $__internal_589b358de071d36940624a4b24abae23c501c09f365fd5de02088f59876d13ba->leave($__internal_589b358de071d36940624a4b24abae23c501c09f365fd5de02088f59876d13ba_prof);

    }

    public function getTemplateName()
    {
        return "Admin/category/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 31,  119 => 27,  112 => 25,  108 => 24,  104 => 23,  101 => 22,  97 => 21,  92 => 19,  88 => 18,  84 => 17,  79 => 14,  73 => 13,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.categorylist' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name"><span><i class="glyphicon glyphicon-pencil"></i>{{ 'app.categorylist' | trans }}</span></div>*/
/*         <div class="header-link"><a href="{{ path('admin_category_new') }}"> {{ 'app.newcategory' | trans }} </a></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* */
/* {%  block content %}*/
/*     <table>*/
/*         <tr class="table-header">*/
/*             <td>id</td>*/
/*             <td>{{ 'app.image' | trans }}</td>*/
/*             <td>{{ 'app.category.title' | trans }}</td>*/
/*             <td>{{ 'app.operations' | trans }}</td>*/
/*         </tr>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td>{{ category.id }}</td>*/
/*                 <td><img src="{{ asset('uploads/' ~ category.image) }}" /></td>*/
/*                 <td><a href="{{ path('admin_category_update', {id: category.id}) }}" class="edit">{{ category.title }}</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('admin_category_delete', {id: category.id}) }}" class="delete"> {{ 'app.delete' | trans }} </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
