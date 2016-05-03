<?php

/* :Admin/news:list.html.twig */
class __TwigTemplate_efa9c31658601147af25dec240b020c93d0444b6e2647491ef4b8af8b0817a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/news:list.html.twig", 1);
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
        $__internal_836040d0a3162a921f02b968f344ddc3e1a768d4ac7a23be9c185a5f94b724c3 = $this->env->getExtension("native_profiler");
        $__internal_836040d0a3162a921f02b968f344ddc3e1a768d4ac7a23be9c185a5f94b724c3->enter($__internal_836040d0a3162a921f02b968f344ddc3e1a768d4ac7a23be9c185a5f94b724c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/news:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_836040d0a3162a921f02b968f344ddc3e1a768d4ac7a23be9c185a5f94b724c3->leave($__internal_836040d0a3162a921f02b968f344ddc3e1a768d4ac7a23be9c185a5f94b724c3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_460121d17084810be9a359a6480aca041fda700eae5a162c3b4445c97f4312a0 = $this->env->getExtension("native_profiler");
        $__internal_460121d17084810be9a359a6480aca041fda700eae5a162c3b4445c97f4312a0->enter($__internal_460121d17084810be9a359a6480aca041fda700eae5a162c3b4445c97f4312a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        
        $__internal_460121d17084810be9a359a6480aca041fda700eae5a162c3b4445c97f4312a0->leave($__internal_460121d17084810be9a359a6480aca041fda700eae5a162c3b4445c97f4312a0_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_eb9fd21e50fa5303494bd5c2ac70c9c7c18b94993fb1032b9ccd060657d476cf = $this->env->getExtension("native_profiler");
        $__internal_eb9fd21e50fa5303494bd5c2ac70c9c7c18b94993fb1032b9ccd060657d476cf->enter($__internal_eb9fd21e50fa5303494bd5c2ac70c9c7c18b94993fb1032b9ccd060657d476cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\">
            <span><i class=\"glyphicon glyphicon-edit\"></i>";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newslist"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"header-link\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("admin_news_new");
        echo "\"> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.newnews"), "html", null, true);
        echo " </a>
        </div>
    </div>
";
        
        $__internal_eb9fd21e50fa5303494bd5c2ac70c9c7c18b94993fb1032b9ccd060657d476cf->leave($__internal_eb9fd21e50fa5303494bd5c2ac70c9c7c18b94993fb1032b9ccd060657d476cf_prof);

    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        $__internal_92e90a57e22dffe76cca14bad54363dfdd667e7f771da14a231beae8ffb45b2d = $this->env->getExtension("native_profiler");
        $__internal_92e90a57e22dffe76cca14bad54363dfdd667e7f771da14a231beae8ffb45b2d->enter($__internal_92e90a57e22dffe76cca14bad54363dfdd667e7f771da14a231beae8ffb45b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 17
        echo "    <table>
        <tr class=\"table-header news-header\">
            <td>id</td>
            <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.image"), "html", null, true);
        echo "</td>
            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.news.title"), "html", null, true);
        echo "</td>
            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.news.brief"), "html", null, true);
        echo "</td>
            <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.operations"), "html", null, true);
        echo "</td>
        </tr>

        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["news"]);
        foreach ($context['_seq'] as $context["_key"] => $context["news"]) {
            // line 27
            echo "        <tr class=\"news-table\">
            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "id", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["news"], "image", array()))), "html", null, true);
            echo "\" /></td>
            <td class=\"news-title\"><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_update", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"edit\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "title", array()), "html", null, true);
            echo "</a></td>
            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["news"], "brief", array()), "html", null, true);
            echo "</td>
            <td>
                <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_news_delete", array("id" => $this->getAttribute($context["news"], "id", array()))), "html", null, true);
            echo "\" class=\"delete\"> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.delete"), "html", null, true);
            echo " </a>
            </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['news'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    </table>
";
        
        $__internal_92e90a57e22dffe76cca14bad54363dfdd667e7f771da14a231beae8ffb45b2d->leave($__internal_92e90a57e22dffe76cca14bad54363dfdd667e7f771da14a231beae8ffb45b2d_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/news:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 37,  132 => 33,  127 => 31,  121 => 30,  117 => 29,  113 => 28,  110 => 27,  106 => 26,  100 => 23,  96 => 22,  92 => 21,  88 => 20,  83 => 17,  77 => 16,  64 => 11,  58 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.newslist' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name">*/
/*             <span><i class="glyphicon glyphicon-edit"></i>{{ 'app.newslist' | trans }}</span>*/
/*         </div>*/
/*         <div class="header-link">*/
/*             <a href="{{ path('admin_news_new') }}"> {{ 'app.newnews' | trans }} </a>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <table>*/
/*         <tr class="table-header news-header">*/
/*             <td>id</td>*/
/*             <td>{{ 'app.image' | trans }}</td>*/
/*             <td>{{ 'app.news.title' | trans }}</td>*/
/*             <td>{{ 'app.news.brief' | trans }}</td>*/
/*             <td>{{ 'app.operations' | trans }}</td>*/
/*         </tr>*/
/* */
/*         {% for news in news %}*/
/*         <tr class="news-table">*/
/*             <td>{{ news.id }}</td>*/
/*             <td><img src="{{ asset('uploads/' ~ news.image) }}" /></td>*/
/*             <td class="news-title"><a href="{{ path('admin_news_update', {id: news.id}) }}" class="edit">{{ news.title }}</a></td>*/
/*             <td>{{ news.brief }}</td>*/
/*             <td>*/
/*                 <a href="{{ path('admin_news_delete', {id: news.id}) }}" class="delete"> {{ 'app.delete' | trans }} </a>*/
/*             </td>*/
/*         </tr>*/
/*         {% endfor %}*/
/*     </table>*/
/* {% endblock %}*/
