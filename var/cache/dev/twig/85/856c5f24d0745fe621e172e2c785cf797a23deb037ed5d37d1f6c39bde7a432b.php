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
        $__internal_b119eb3444ec5e5e084b3d9c70937ccfade03bcc76b6d52b8a18104be042db5c = $this->env->getExtension("native_profiler");
        $__internal_b119eb3444ec5e5e084b3d9c70937ccfade03bcc76b6d52b8a18104be042db5c->enter($__internal_b119eb3444ec5e5e084b3d9c70937ccfade03bcc76b6d52b8a18104be042db5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:layout.html.twig"));

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
        
        $__internal_b119eb3444ec5e5e084b3d9c70937ccfade03bcc76b6d52b8a18104be042db5c->leave($__internal_b119eb3444ec5e5e084b3d9c70937ccfade03bcc76b6d52b8a18104be042db5c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f37644d0469f3a1da65a8f392418811c8a7ea00bb8096facaad24741e0f87865 = $this->env->getExtension("native_profiler");
        $__internal_f37644d0469f3a1da65a8f392418811c8a7ea00bb8096facaad24741e0f87865->enter($__internal_f37644d0469f3a1da65a8f392418811c8a7ea00bb8096facaad24741e0f87865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_f37644d0469f3a1da65a8f392418811c8a7ea00bb8096facaad24741e0f87865->leave($__internal_f37644d0469f3a1da65a8f392418811c8a7ea00bb8096facaad24741e0f87865_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_78a26131c133634b20b9d53222dac64ce37af6367b12765eb991792f0906febc = $this->env->getExtension("native_profiler");
        $__internal_78a26131c133634b20b9d53222dac64ce37af6367b12765eb991792f0906febc->enter($__internal_78a26131c133634b20b9d53222dac64ce37af6367b12765eb991792f0906febc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "    ";
        
        $__internal_78a26131c133634b20b9d53222dac64ce37af6367b12765eb991792f0906febc->leave($__internal_78a26131c133634b20b9d53222dac64ce37af6367b12765eb991792f0906febc_prof);

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
