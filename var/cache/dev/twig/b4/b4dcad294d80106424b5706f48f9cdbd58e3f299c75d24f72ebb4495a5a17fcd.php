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
        $__internal_30be2c940d91b3bb2da34cda56f38826dfacbc79d6fa3432a6d11a6dd40778cd = $this->env->getExtension("native_profiler");
        $__internal_30be2c940d91b3bb2da34cda56f38826dfacbc79d6fa3432a6d11a6dd40778cd->enter($__internal_30be2c940d91b3bb2da34cda56f38826dfacbc79d6fa3432a6d11a6dd40778cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "Admin/category/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30be2c940d91b3bb2da34cda56f38826dfacbc79d6fa3432a6d11a6dd40778cd->leave($__internal_30be2c940d91b3bb2da34cda56f38826dfacbc79d6fa3432a6d11a6dd40778cd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_24a7cad94c53d6b10452b89448a3f1dc6a5f6efa868b2754837e2f339802fb9b = $this->env->getExtension("native_profiler");
        $__internal_24a7cad94c53d6b10452b89448a3f1dc6a5f6efa868b2754837e2f339802fb9b->enter($__internal_24a7cad94c53d6b10452b89448a3f1dc6a5f6efa868b2754837e2f339802fb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.categorylist"), "html", null, true);
        
        $__internal_24a7cad94c53d6b10452b89448a3f1dc6a5f6efa868b2754837e2f339802fb9b->leave($__internal_24a7cad94c53d6b10452b89448a3f1dc6a5f6efa868b2754837e2f339802fb9b_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_b2170ea63d473d5de31f572667c52b420bf4e98ab85a6d6fec730ec41a8ea90b = $this->env->getExtension("native_profiler");
        $__internal_b2170ea63d473d5de31f572667c52b420bf4e98ab85a6d6fec730ec41a8ea90b->enter($__internal_b2170ea63d473d5de31f572667c52b420bf4e98ab85a6d6fec730ec41a8ea90b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_b2170ea63d473d5de31f572667c52b420bf4e98ab85a6d6fec730ec41a8ea90b->leave($__internal_b2170ea63d473d5de31f572667c52b420bf4e98ab85a6d6fec730ec41a8ea90b_prof);

    }

    // line 13
    public function block_content($context, array $blocks = array())
    {
        $__internal_becb6776bc4c55dbb55ed43cb6ac27e10a1e803a247d097679da21f567cdba7f = $this->env->getExtension("native_profiler");
        $__internal_becb6776bc4c55dbb55ed43cb6ac27e10a1e803a247d097679da21f567cdba7f->enter($__internal_becb6776bc4c55dbb55ed43cb6ac27e10a1e803a247d097679da21f567cdba7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 14
        echo "    <table>
        <tr class=\"table-header\">
            <td>id</td>
            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.category.title"), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.operations"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "title", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_category_delete", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.product.delete"), "html", null, true);
            echo " </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </table>
";
        
        $__internal_becb6776bc4c55dbb55ed43cb6ac27e10a1e803a247d097679da21f567cdba7f->leave($__internal_becb6776bc4c55dbb55ed43cb6ac27e10a1e803a247d097679da21f567cdba7f_prof);

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
        return array (  121 => 29,  109 => 25,  104 => 23,  100 => 22,  97 => 21,  93 => 20,  88 => 18,  84 => 17,  79 => 14,  73 => 13,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
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
/*             <td>{{ 'app.category.title' | trans }}</td>*/
/*             <td>{{ 'app.product.operations' | trans }}</td>*/
/*         </tr>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td>{{ category.id }}</td>*/
/*                 <td>{{ category.title }}</td>*/
/*                 <td>*/
/*                     <a href="{{ path('admin_category_delete', {id: category.id}) }}" class="delete"> {{ 'app.product.delete' | trans }} </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
