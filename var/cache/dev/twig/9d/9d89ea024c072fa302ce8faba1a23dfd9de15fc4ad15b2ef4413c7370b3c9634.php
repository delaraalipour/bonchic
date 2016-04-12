<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_6c4a6616eb10c9d6a24f7d2ceb6d0de081526853189d87a23c19b1ee02ee6963 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_759e1aa0622a7907d7446b684a4d486f52027cfd95e5fa86f0a58bcefc3e6fad = $this->env->getExtension("native_profiler");
        $__internal_759e1aa0622a7907d7446b684a4d486f52027cfd95e5fa86f0a58bcefc3e6fad->enter($__internal_759e1aa0622a7907d7446b684a4d486f52027cfd95e5fa86f0a58bcefc3e6fad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
    ";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "</body>";
        
        $__internal_759e1aa0622a7907d7446b684a4d486f52027cfd95e5fa86f0a58bcefc3e6fad->leave($__internal_759e1aa0622a7907d7446b684a4d486f52027cfd95e5fa86f0a58bcefc3e6fad_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4716a459973a9645cfb453a09ec59571ce58d53fe1a82ce267375c37e793ca22 = $this->env->getExtension("native_profiler");
        $__internal_4716a459973a9645cfb453a09ec59571ce58d53fe1a82ce267375c37e793ca22->enter($__internal_4716a459973a9645cfb453a09ec59571ce58d53fe1a82ce267375c37e793ca22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4716a459973a9645cfb453a09ec59571ce58d53fe1a82ce267375c37e793ca22->leave($__internal_4716a459973a9645cfb453a09ec59571ce58d53fe1a82ce267375c37e793ca22_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_ab646c1a59dfc29d639af8767d314e459fa4724b01b47dc8746d0175415d3803 = $this->env->getExtension("native_profiler");
        $__internal_ab646c1a59dfc29d639af8767d314e459fa4724b01b47dc8746d0175415d3803->enter($__internal_ab646c1a59dfc29d639af8767d314e459fa4724b01b47dc8746d0175415d3803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "    ";
        
        $__internal_ab646c1a59dfc29d639af8767d314e459fa4724b01b47dc8746d0175415d3803->leave($__internal_ab646c1a59dfc29d639af8767d314e459fa4724b01b47dc8746d0175415d3803_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_047db5cbec2444f64a81d1724fb966c814195ac2708c7d3e2c9446cc838f4ea6 = $this->env->getExtension("native_profiler");
        $__internal_047db5cbec2444f64a81d1724fb966c814195ac2708c7d3e2c9446cc838f4ea6->enter($__internal_047db5cbec2444f64a81d1724fb966c814195ac2708c7d3e2c9446cc838f4ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "        ";
        
        $__internal_047db5cbec2444f64a81d1724fb966c814195ac2708c7d3e2c9446cc838f4ea6->leave($__internal_047db5cbec2444f64a81d1724fb966c814195ac2708c7d3e2c9446cc838f4ea6_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 12,  81 => 11,  74 => 13,  71 => 11,  65 => 10,  54 => 5,  47 => 14,  45 => 10,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
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
/*     {% block content %}*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     {% endblock content %}*/
/* </body>*/
