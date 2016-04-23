<?php

/* :Cart:layout.html.twig */
class __TwigTemplate_958eb0c3e781ca48535efeed890ed54db9f9a12f9d1019e67f34dae017422e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_93017caca8219393c0ed74fe02afd4e3c60e864b507bfcdc400a10d927ac8a70 = $this->env->getExtension("native_profiler");
        $__internal_93017caca8219393c0ed74fe02afd4e3c60e864b507bfcdc400a10d927ac8a70->enter($__internal_93017caca8219393c0ed74fe02afd4e3c60e864b507bfcdc400a10d927ac8a70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Cart:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/main.css"), "html", null, true);
        echo "\" type=\"text/css\" />
</head>
<body>
<div class=\"storefront-header\">
    <div class=\"wrapper\">
        <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p>
        <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        echo "</a>
    </div>
</div>

<div class=\"wrapper\">
    ";
        // line 18
        $this->displayBlock('content', $context, $blocks);
        // line 20
        echo "</div>
</body>
</html>";
        
        $__internal_93017caca8219393c0ed74fe02afd4e3c60e864b507bfcdc400a10d927ac8a70->leave($__internal_93017caca8219393c0ed74fe02afd4e3c60e864b507bfcdc400a10d927ac8a70_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0de5a4140b199ad6e3ad6c7905d3494c69a16912f04c3ff4022c3c3df8022650 = $this->env->getExtension("native_profiler");
        $__internal_0de5a4140b199ad6e3ad6c7905d3494c69a16912f04c3ff4022c3c3df8022650->enter($__internal_0de5a4140b199ad6e3ad6c7905d3494c69a16912f04c3ff4022c3c3df8022650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0de5a4140b199ad6e3ad6c7905d3494c69a16912f04c3ff4022c3c3df8022650->leave($__internal_0de5a4140b199ad6e3ad6c7905d3494c69a16912f04c3ff4022c3c3df8022650_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_e82a3f37354716a666a1d9bcced415cad25f4a0d4a6bf96387695b0651b5ab89 = $this->env->getExtension("native_profiler");
        $__internal_e82a3f37354716a666a1d9bcced415cad25f4a0d4a6bf96387695b0651b5ab89->enter($__internal_e82a3f37354716a666a1d9bcced415cad25f4a0d4a6bf96387695b0651b5ab89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    ";
        
        $__internal_e82a3f37354716a666a1d9bcced415cad25f4a0d4a6bf96387695b0651b5ab89->leave($__internal_e82a3f37354716a666a1d9bcced415cad25f4a0d4a6bf96387695b0651b5ab89_prof);

    }

    public function getTemplateName()
    {
        return ":Cart:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 19,  82 => 18,  71 => 5,  62 => 20,  60 => 18,  50 => 13,  46 => 12,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta charset="UTF-8">*/
/*     <title>{% block title %}{% endblock %}</title>*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" type="text/css" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/main.css') }}" type="text/css" />*/
/* </head>*/
/* <body>*/
/* <div class="storefront-header">*/
/*     <div class="wrapper">*/
/*         <p>{{ 'app.site_title'|trans ({}, 'messages') }}</p>*/
/*         <a href="{{ path('fos_user_security_login') }}">{{ 'app.controlpanel' | trans }}</a>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="wrapper">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* </body>*/
/* </html>*/
