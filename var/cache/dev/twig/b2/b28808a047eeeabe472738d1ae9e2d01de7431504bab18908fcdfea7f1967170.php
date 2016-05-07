<?php

/* :Storefront/news:list.html.twig */
class __TwigTemplate_6eb7a017ee29e1f64f415eca7ee492b17c97ff9dce6b395c7921db022b35145c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Storefront:layout.html.twig", ":Storefront/news:list.html.twig", 1);
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
        $__internal_ffdf8b7fac54d2d8f5809e8362ab8d8ecb182f970127b592ee959535ab964890 = $this->env->getExtension("native_profiler");
        $__internal_ffdf8b7fac54d2d8f5809e8362ab8d8ecb182f970127b592ee959535ab964890->enter($__internal_ffdf8b7fac54d2d8f5809e8362ab8d8ecb182f970127b592ee959535ab964890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront/news:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffdf8b7fac54d2d8f5809e8362ab8d8ecb182f970127b592ee959535ab964890->leave($__internal_ffdf8b7fac54d2d8f5809e8362ab8d8ecb182f970127b592ee959535ab964890_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2678bd7ba63ce2001b6e641d7ccadd98f14fe4fcc39b39ae71abd92bbb0d5384 = $this->env->getExtension("native_profiler");
        $__internal_2678bd7ba63ce2001b6e641d7ccadd98f14fe4fcc39b39ae71abd92bbb0d5384->enter($__internal_2678bd7ba63ce2001b6e641d7ccadd98f14fe4fcc39b39ae71abd92bbb0d5384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        
        $__internal_2678bd7ba63ce2001b6e641d7ccadd98f14fe4fcc39b39ae71abd92bbb0d5384->leave($__internal_2678bd7ba63ce2001b6e641d7ccadd98f14fe4fcc39b39ae71abd92bbb0d5384_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_ad6f19fe8adcca3b6447d08a401fe33b46cc62b18dedc990b2977c1dcf3f6311 = $this->env->getExtension("native_profiler");
        $__internal_ad6f19fe8adcca3b6447d08a401fe33b46cc62b18dedc990b2977c1dcf3f6311->enter($__internal_ad6f19fe8adcca3b6447d08a401fe33b46cc62b18dedc990b2977c1dcf3f6311_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <div class=\"products-header\">
        <div class=\"cell\">
            <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</div>
            <div class=\"header-title\">
                <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("storefront_news_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</a>
                /
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</a>
            </div>
        </div>
    </div>
    <div class=\"news-item clearfix\">
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 18
            echo "            <div class=\"news\">
                <div class=\"image\"><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_news_show", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["news"], "image", array()))), "html", null, true);
            echo "\" /></a></div>
                <div class=\"title\"><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("storefront_news_show", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></div>
                <div class=\"brief\"><span>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "brief", array()), "html", null, true);
            echo "</span></div>
                <div class=\"action\"><a href=\"";
            // line 22
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
        // line 25
        echo "    </div>
";
        
        $__internal_ad6f19fe8adcca3b6447d08a401fe33b46cc62b18dedc990b2977c1dcf3f6311->leave($__internal_ad6f19fe8adcca3b6447d08a401fe33b46cc62b18dedc990b2977c1dcf3f6311_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront/news:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 25,  102 => 22,  98 => 21,  92 => 20,  86 => 19,  83 => 18,  79 => 17,  69 => 12,  62 => 10,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends ":Storefront:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newslist' | trans }}{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="products-header">*/
/*         <div class="cell">*/
/*             <div class="title">{{ 'app.newslist' | trans }}</div>*/
/*             <div class="header-title">*/
/*                 <a href="{{ path('storefront_news_list') }}">{{ 'app.newslist' | trans }}</a>*/
/*                 /*/
/*                 <a href="{{ path('homepage') }}">{{ 'app.homepage' | trans }}</a>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="news-item clearfix">*/
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
