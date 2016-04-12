<?php

/* :Storefront:layout.html.twig */
class __TwigTemplate_977d21b97272f8f18d0cbac758d499eee0ab552ce2cae6cc857967747c7bce98 extends Twig_Template
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
        $__internal_ee9fe1cd7a51fcfada8a814a4f653349312dd9a21b2754422650abb6237bcaa6 = $this->env->getExtension("native_profiler");
        $__internal_ee9fe1cd7a51fcfada8a814a4f653349312dd9a21b2754422650abb6237bcaa6->enter($__internal_ee9fe1cd7a51fcfada8a814a4f653349312dd9a21b2754422650abb6237bcaa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:layout.html.twig"));

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
        
        $__internal_ee9fe1cd7a51fcfada8a814a4f653349312dd9a21b2754422650abb6237bcaa6->leave($__internal_ee9fe1cd7a51fcfada8a814a4f653349312dd9a21b2754422650abb6237bcaa6_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_1216144d5a03b99c591a1dd00eb0b7172d50a7c9de61bdf2ac00b49b63605cb4 = $this->env->getExtension("native_profiler");
        $__internal_1216144d5a03b99c591a1dd00eb0b7172d50a7c9de61bdf2ac00b49b63605cb4->enter($__internal_1216144d5a03b99c591a1dd00eb0b7172d50a7c9de61bdf2ac00b49b63605cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_1216144d5a03b99c591a1dd00eb0b7172d50a7c9de61bdf2ac00b49b63605cb4->leave($__internal_1216144d5a03b99c591a1dd00eb0b7172d50a7c9de61bdf2ac00b49b63605cb4_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_a55dad7351551be4bf2e6657b774a1a32edf7930947905dc0b640f8258be6b30 = $this->env->getExtension("native_profiler");
        $__internal_a55dad7351551be4bf2e6657b774a1a32edf7930947905dc0b640f8258be6b30->enter($__internal_a55dad7351551be4bf2e6657b774a1a32edf7930947905dc0b640f8258be6b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    ";
        
        $__internal_a55dad7351551be4bf2e6657b774a1a32edf7930947905dc0b640f8258be6b30->leave($__internal_a55dad7351551be4bf2e6657b774a1a32edf7930947905dc0b640f8258be6b30_prof);

    }

    public function getTemplateName()
    {
        return ":Storefront:layout.html.twig";
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
