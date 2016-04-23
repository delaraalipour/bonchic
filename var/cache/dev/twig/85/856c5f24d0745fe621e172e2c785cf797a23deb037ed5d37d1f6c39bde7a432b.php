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
        $__internal_8226975086bc575d20c4f1c49f9e2d5519afa20fb27663d6418b4a9e52d20bb8 = $this->env->getExtension("native_profiler");
        $__internal_8226975086bc575d20c4f1c49f9e2d5519afa20fb27663d6418b4a9e52d20bb8->enter($__internal_8226975086bc575d20c4f1c49f9e2d5519afa20fb27663d6418b4a9e52d20bb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Storefront:layout.html.twig"));

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
        <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("cart_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.cart"), "html", null, true);
        echo "</a>
    </div>
</div>

<div class=\"wrapper\">
    ";
        // line 19
        $this->displayBlock('content', $context, $blocks);
        // line 21
        echo "</div>
</body>
</html>";
        
        $__internal_8226975086bc575d20c4f1c49f9e2d5519afa20fb27663d6418b4a9e52d20bb8->leave($__internal_8226975086bc575d20c4f1c49f9e2d5519afa20fb27663d6418b4a9e52d20bb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0ec7faf43c0c8bce5b0b2ca995c2059ae46c5f6b89a3237c39a9303a82c556f = $this->env->getExtension("native_profiler");
        $__internal_b0ec7faf43c0c8bce5b0b2ca995c2059ae46c5f6b89a3237c39a9303a82c556f->enter($__internal_b0ec7faf43c0c8bce5b0b2ca995c2059ae46c5f6b89a3237c39a9303a82c556f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b0ec7faf43c0c8bce5b0b2ca995c2059ae46c5f6b89a3237c39a9303a82c556f->leave($__internal_b0ec7faf43c0c8bce5b0b2ca995c2059ae46c5f6b89a3237c39a9303a82c556f_prof);

    }

    // line 19
    public function block_content($context, array $blocks = array())
    {
        $__internal_c09293dc9ef2b4a84cbff1f85bd52a82afeb23fa68e8e6555702ab9d1d3c6a17 = $this->env->getExtension("native_profiler");
        $__internal_c09293dc9ef2b4a84cbff1f85bd52a82afeb23fa68e8e6555702ab9d1d3c6a17->enter($__internal_c09293dc9ef2b4a84cbff1f85bd52a82afeb23fa68e8e6555702ab9d1d3c6a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 20
        echo "    ";
        
        $__internal_c09293dc9ef2b4a84cbff1f85bd52a82afeb23fa68e8e6555702ab9d1d3c6a17->leave($__internal_c09293dc9ef2b4a84cbff1f85bd52a82afeb23fa68e8e6555702ab9d1d3c6a17_prof);

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
        return array (  94 => 20,  88 => 19,  77 => 5,  68 => 21,  66 => 19,  56 => 14,  50 => 13,  46 => 12,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
/*         <a href="{{ path('cart_list') }}">{{ 'app.cart' | trans }}</a>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="wrapper">*/
/*     {% block content %}*/
/*     {% endblock %}*/
/* </div>*/
/* </body>*/
/* </html>*/
