<?php

/* :Admin/slide:list.html.twig */
class __TwigTemplate_ef36cd6be88b00d1bbb91ca193d9b26e23f1ec89a288d98fccf62a87f54a64a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/slide:list.html.twig", 1);
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
        $__internal_7b3352d8cafa6e777d0e34da5adee0f4d54a996153b8d7aad56fa2d0f8273e32 = $this->env->getExtension("native_profiler");
        $__internal_7b3352d8cafa6e777d0e34da5adee0f4d54a996153b8d7aad56fa2d0f8273e32->enter($__internal_7b3352d8cafa6e777d0e34da5adee0f4d54a996153b8d7aad56fa2d0f8273e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/slide:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3352d8cafa6e777d0e34da5adee0f4d54a996153b8d7aad56fa2d0f8273e32->leave($__internal_7b3352d8cafa6e777d0e34da5adee0f4d54a996153b8d7aad56fa2d0f8273e32_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3ab0a70e7c4ca2c57199e878518f4bdfa4a8901990c6aef1460b2498ea2d7378 = $this->env->getExtension("native_profiler");
        $__internal_3ab0a70e7c4ca2c57199e878518f4bdfa4a8901990c6aef1460b2498ea2d7378->enter($__internal_3ab0a70e7c4ca2c57199e878518f4bdfa4a8901990c6aef1460b2498ea2d7378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        
        $__internal_3ab0a70e7c4ca2c57199e878518f4bdfa4a8901990c6aef1460b2498ea2d7378->leave($__internal_3ab0a70e7c4ca2c57199e878518f4bdfa4a8901990c6aef1460b2498ea2d7378_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_7bc880517af72904404212b7f151856754d4a76e27d4000abc18deadf4e0f88a = $this->env->getExtension("native_profiler");
        $__internal_7bc880517af72904404212b7f151856754d4a76e27d4000abc18deadf4e0f88a->enter($__internal_7bc880517af72904404212b7f151856754d4a76e27d4000abc18deadf4e0f88a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-tags\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        echo "</span></div>
        <div class=\"header-link\"><a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_slide_new");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslide"), "html", null, true);
        echo " </a></div>
    </div>
";
        
        $__internal_7bc880517af72904404212b7f151856754d4a76e27d4000abc18deadf4e0f88a->leave($__internal_7bc880517af72904404212b7f151856754d4a76e27d4000abc18deadf4e0f88a_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_dfbae904fd0c14da51837344bb14396d9730ec847f0c2a0adb2bc1ff09607681 = $this->env->getExtension("native_profiler");
        $__internal_dfbae904fd0c14da51837344bb14396d9730ec847f0c2a0adb2bc1ff09607681->enter($__internal_dfbae904fd0c14da51837344bb14396d9730ec847f0c2a0adb2bc1ff09607681_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slide.title"), "html", null, true);
        echo "</td>
            <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.operations"), "html", null, true);
        echo "</td>
        </tr>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 21
            echo "            <tr>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "id", array()), "html", null, true);
            echo "</td>
                <td class=\"slide-image\"><img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["slide"], "image", array()))), "html", null, true);
            echo "\" /></td>
                <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_slide_update", array("id" => $this->getAttribute($context["slide"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "title", array()), "html", null, true);
            echo "</a></td>
                <td>
                    <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_slide_delete", array("id" => $this->getAttribute($context["slide"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete"), "html", null, true);
            echo " </a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </table>
";
        
        $__internal_dfbae904fd0c14da51837344bb14396d9730ec847f0c2a0adb2bc1ff09607681->leave($__internal_dfbae904fd0c14da51837344bb14396d9730ec847f0c2a0adb2bc1ff09607681_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/slide:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 30,  119 => 26,  112 => 24,  108 => 23,  104 => 22,  101 => 21,  97 => 20,  92 => 18,  88 => 17,  84 => 16,  79 => 13,  73 => 12,  61 => 8,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.slidelist' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name"><span><i class="glyphicon glyphicon-tags"></i>{{ 'app.slidelist' | trans }}</span></div>*/
/*         <div class="header-link"><a href="{{ path('admin_slide_new') }}"> {{ 'app.newslide' | trans }} </a></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {%  block content %}*/
/*     <table>*/
/*         <tr class="table-header">*/
/*             <td>id</td>*/
/*             <td>{{ 'app.image' | trans }}</td>*/
/*             <td>{{ 'app.slide.title' | trans }}</td>*/
/*             <td>{{ 'app.operations' | trans }}</td>*/
/*         </tr>*/
/*         {% for slide in slides %}*/
/*             <tr>*/
/*                 <td>{{ slide.id }}</td>*/
/*                 <td class="slide-image"><img src="{{ asset('uploads/' ~ slide.image) }}" /></td>*/
/*                 <td><a href="{{ path('admin_slide_update', {id: slide.id}) }}" class="edit">{{ slide.title }}</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('admin_slide_delete', {id: slide.id}) }}" class="delete"> {{ 'app.delete' | trans }} </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
