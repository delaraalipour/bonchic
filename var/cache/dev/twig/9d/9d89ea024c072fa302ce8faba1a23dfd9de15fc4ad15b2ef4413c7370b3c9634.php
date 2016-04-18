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
        $__internal_095120d45ddc5419176afbd9aec43a83b4cae63e249536eef09e4c0e91595992 = $this->env->getExtension("native_profiler");
        $__internal_095120d45ddc5419176afbd9aec43a83b4cae63e249536eef09e4c0e91595992->enter($__internal_095120d45ddc5419176afbd9aec43a83b4cae63e249536eef09e4c0e91595992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_095120d45ddc5419176afbd9aec43a83b4cae63e249536eef09e4c0e91595992->leave($__internal_095120d45ddc5419176afbd9aec43a83b4cae63e249536eef09e4c0e91595992_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_efc4ac3feb3fcc63039920c94452d529198f475218eeca426b7fd460e5d2f76b = $this->env->getExtension("native_profiler");
        $__internal_efc4ac3feb3fcc63039920c94452d529198f475218eeca426b7fd460e5d2f76b->enter($__internal_efc4ac3feb3fcc63039920c94452d529198f475218eeca426b7fd460e5d2f76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_efc4ac3feb3fcc63039920c94452d529198f475218eeca426b7fd460e5d2f76b->leave($__internal_efc4ac3feb3fcc63039920c94452d529198f475218eeca426b7fd460e5d2f76b_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_bd252d3b82fea208cfe81ec8d9fe144b8622fb077f9f298c9fcb07af27a0293c = $this->env->getExtension("native_profiler");
        $__internal_bd252d3b82fea208cfe81ec8d9fe144b8622fb077f9f298c9fcb07af27a0293c->enter($__internal_bd252d3b82fea208cfe81ec8d9fe144b8622fb077f9f298c9fcb07af27a0293c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "    ";
        
        $__internal_bd252d3b82fea208cfe81ec8d9fe144b8622fb077f9f298c9fcb07af27a0293c->leave($__internal_bd252d3b82fea208cfe81ec8d9fe144b8622fb077f9f298c9fcb07af27a0293c_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_20bc410d339c0d4d033d67999c5b68485614d5c81c31fe3cb13bc69d0f94b5db = $this->env->getExtension("native_profiler");
        $__internal_20bc410d339c0d4d033d67999c5b68485614d5c81c31fe3cb13bc69d0f94b5db->enter($__internal_20bc410d339c0d4d033d67999c5b68485614d5c81c31fe3cb13bc69d0f94b5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "        ";
        
        $__internal_20bc410d339c0d4d033d67999c5b68485614d5c81c31fe3cb13bc69d0f94b5db->leave($__internal_20bc410d339c0d4d033d67999c5b68485614d5c81c31fe3cb13bc69d0f94b5db_prof);

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
