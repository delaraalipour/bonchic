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
        $__internal_71dcd0d4d69d13b29bbb7768c66a88f10a0cbf2ea8f789d981118577be93f71a = $this->env->getExtension("native_profiler");
        $__internal_71dcd0d4d69d13b29bbb7768c66a88f10a0cbf2ea8f789d981118577be93f71a->enter($__internal_71dcd0d4d69d13b29bbb7768c66a88f10a0cbf2ea8f789d981118577be93f71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_71dcd0d4d69d13b29bbb7768c66a88f10a0cbf2ea8f789d981118577be93f71a->leave($__internal_71dcd0d4d69d13b29bbb7768c66a88f10a0cbf2ea8f789d981118577be93f71a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0ffe1a4ef183c7b3aa2f97c68c97a34441a6fce99da906225d596530ec4818b = $this->env->getExtension("native_profiler");
        $__internal_d0ffe1a4ef183c7b3aa2f97c68c97a34441a6fce99da906225d596530ec4818b->enter($__internal_d0ffe1a4ef183c7b3aa2f97c68c97a34441a6fce99da906225d596530ec4818b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d0ffe1a4ef183c7b3aa2f97c68c97a34441a6fce99da906225d596530ec4818b->leave($__internal_d0ffe1a4ef183c7b3aa2f97c68c97a34441a6fce99da906225d596530ec4818b_prof);

    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        $__internal_e95c8a8e8865beb0b657300370c87e6d0830619be18bf94614b6e37b82fe1473 = $this->env->getExtension("native_profiler");
        $__internal_e95c8a8e8865beb0b657300370c87e6d0830619be18bf94614b6e37b82fe1473->enter($__internal_e95c8a8e8865beb0b657300370c87e6d0830619be18bf94614b6e37b82fe1473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 11
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "    ";
        
        $__internal_e95c8a8e8865beb0b657300370c87e6d0830619be18bf94614b6e37b82fe1473->leave($__internal_e95c8a8e8865beb0b657300370c87e6d0830619be18bf94614b6e37b82fe1473_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51cbd2a9b3decadbf020bb102a3dccfc3df98d4f62c2738cb15f784f245065bb = $this->env->getExtension("native_profiler");
        $__internal_51cbd2a9b3decadbf020bb102a3dccfc3df98d4f62c2738cb15f784f245065bb->enter($__internal_51cbd2a9b3decadbf020bb102a3dccfc3df98d4f62c2738cb15f784f245065bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "        ";
        
        $__internal_51cbd2a9b3decadbf020bb102a3dccfc3df98d4f62c2738cb15f784f245065bb->leave($__internal_51cbd2a9b3decadbf020bb102a3dccfc3df98d4f62c2738cb15f784f245065bb_prof);

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
