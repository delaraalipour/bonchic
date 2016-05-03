<?php

/* :Storefront/news:show.html.twig */
class __TwigTemplate_08a229004be45748475f7bc0fd2f5dc8115ce943ea11ba914bc51683bbc26d47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Storefront/news:show.html.twig", 1);
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
        $__internal_0bc8c850ae461c0e8ee563eb0fc656551925414f851e6c123e5db58cda58b68a = $this->env->getExtension("native_profiler");
        $__internal_0bc8c850ae461c0e8ee563eb0fc656551925414f851e6c123e5db58cda58b68a->enter($__internal_0bc8c850ae461c0e8ee563eb0fc656551925414f851e6c123e5db58cda58b68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/news:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bc8c850ae461c0e8ee563eb0fc656551925414f851e6c123e5db58cda58b68a->leave($__internal_0bc8c850ae461c0e8ee563eb0fc656551925414f851e6c123e5db58cda58b68a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e73ff72e8067b3964d2a2848691e241853ab2593ec563a4a37b7425c0e601b4a = $this->env->getExtension("native_profiler");
        $__internal_e73ff72e8067b3964d2a2848691e241853ab2593ec563a4a37b7425c0e601b4a->enter($__internal_e73ff72e8067b3964d2a2848691e241853ab2593ec563a4a37b7425c0e601b4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.news"), "html", null, true);
        
        $__internal_e73ff72e8067b3964d2a2848691e241853ab2593ec563a4a37b7425c0e601b4a->leave($__internal_e73ff72e8067b3964d2a2848691e241853ab2593ec563a4a37b7425c0e601b4a_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0c274bc283b93c00b03634385da12ebbe079c404d7b80a764466884c838013e = $this->env->getExtension("native_profiler");
        $__internal_f0c274bc283b93c00b03634385da12ebbe079c404d7b80a764466884c838013e->enter($__internal_f0c274bc283b93c00b03634385da12ebbe079c404d7b80a764466884c838013e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"news-header clearfix\">
        <div class=\"cell\">
            <span>";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "title", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"news-links\">
            <span>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</span>
            <span>/</span>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a>
        </div>
    </div>
    <div class=\"news-info\">
        <div class=\"image\"><img src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "image", array()))), "html", null, true);
        echo "\" /></div>
        <div class=\"description\">
            <span>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "description", array()), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_f0c274bc283b93c00b03634385da12ebbe079c404d7b80a764466884c838013e->leave($__internal_f0c274bc283b93c00b03634385da12ebbe079c404d7b80a764466884c838013e_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront/news:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 19,  77 => 17,  68 => 13,  63 => 11,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.news' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="news-header clearfix">*/
/*         <div class="cell">*/
/*             <span>{{ news.title }}</span>*/
/*         </div>*/
/*         <div class="news-links">*/
/*             <span>{{ 'app.newslist' | trans }}</span>*/
/*             <span>/</span>*/
/*             <a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a>*/
/*         </div>*/
/*     </div>*/
/*     <div class="news-info">*/
/*         <div class="image"><img src="{{ asset('uploads/' ~ news.image) }}" /></div>*/
/*         <div class="description">*/
/*             <span>{{ news.description }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
