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
        $__internal_85bcf9aca1e77958950e8df1e934cb23cd0a906799d57924beaf721da699caea = $this->env->getExtension("native_profiler");
        $__internal_85bcf9aca1e77958950e8df1e934cb23cd0a906799d57924beaf721da699caea->enter($__internal_85bcf9aca1e77958950e8df1e934cb23cd0a906799d57924beaf721da699caea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/slide:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85bcf9aca1e77958950e8df1e934cb23cd0a906799d57924beaf721da699caea->leave($__internal_85bcf9aca1e77958950e8df1e934cb23cd0a906799d57924beaf721da699caea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ba04bbdd01854c260e855a0aa73f2fdc7a881e1ac84aa2e09b36527253f90a7 = $this->env->getExtension("native_profiler");
        $__internal_1ba04bbdd01854c260e855a0aa73f2fdc7a881e1ac84aa2e09b36527253f90a7->enter($__internal_1ba04bbdd01854c260e855a0aa73f2fdc7a881e1ac84aa2e09b36527253f90a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.slidelist"), "html", null, true);
        
        $__internal_1ba04bbdd01854c260e855a0aa73f2fdc7a881e1ac84aa2e09b36527253f90a7->leave($__internal_1ba04bbdd01854c260e855a0aa73f2fdc7a881e1ac84aa2e09b36527253f90a7_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_842f814ce7db370ad57f066363e19d54f52d9d197fb4e8448704888768ed1f21 = $this->env->getExtension("native_profiler");
        $__internal_842f814ce7db370ad57f066363e19d54f52d9d197fb4e8448704888768ed1f21->enter($__internal_842f814ce7db370ad57f066363e19d54f52d9d197fb4e8448704888768ed1f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

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
        
        $__internal_842f814ce7db370ad57f066363e19d54f52d9d197fb4e8448704888768ed1f21->leave($__internal_842f814ce7db370ad57f066363e19d54f52d9d197fb4e8448704888768ed1f21_prof);

    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        $__internal_20b7062e9e38f0ad601739df77f3ca303bf8b324ad547bd144f5dd997895f670 = $this->env->getExtension("native_profiler");
        $__internal_20b7062e9e38f0ad601739df77f3ca303bf8b324ad547bd144f5dd997895f670->enter($__internal_20b7062e9e38f0ad601739df77f3ca303bf8b324ad547bd144f5dd997895f670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                <td><img src=\"";
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
        
        $__internal_20b7062e9e38f0ad601739df77f3ca303bf8b324ad547bd144f5dd997895f670->leave($__internal_20b7062e9e38f0ad601739df77f3ca303bf8b324ad547bd144f5dd997895f670_prof);

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
/*                 <td><img src="{{ asset('uploads/' ~ slide.image) }}" /></td>*/
/*                 <td><a href="{{ path('admin_slide_update', {id: slide.id}) }}" class="edit">{{ slide.title }}</a></td>*/
/*                 <td>*/
/*                     <a href="{{ path('admin_slide_delete', {id: slide.id}) }}" class="delete"> {{ 'app.delete' | trans }} </a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
