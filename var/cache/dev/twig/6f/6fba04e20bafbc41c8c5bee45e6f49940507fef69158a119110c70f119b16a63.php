<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9cf88099246bda92daa59bd397a4c1c15c05227418d789b6b986adfda3cb5aeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5d8e17cb6c4975e08865846fd8dadab4ea39b34881682c17d7ce4d790a3b44c = $this->env->getExtension("native_profiler");
        $__internal_b5d8e17cb6c4975e08865846fd8dadab4ea39b34881682c17d7ce4d790a3b44c->enter($__internal_b5d8e17cb6c4975e08865846fd8dadab4ea39b34881682c17d7ce4d790a3b44c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5d8e17cb6c4975e08865846fd8dadab4ea39b34881682c17d7ce4d790a3b44c->leave($__internal_b5d8e17cb6c4975e08865846fd8dadab4ea39b34881682c17d7ce4d790a3b44c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7476fb7a241bbfe41e75a551912f605410e270b8f08f2f53bb5979dc8126d858 = $this->env->getExtension("native_profiler");
        $__internal_7476fb7a241bbfe41e75a551912f605410e270b8f08f2f53bb5979dc8126d858->enter($__internal_7476fb7a241bbfe41e75a551912f605410e270b8f08f2f53bb5979dc8126d858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7476fb7a241bbfe41e75a551912f605410e270b8f08f2f53bb5979dc8126d858->leave($__internal_7476fb7a241bbfe41e75a551912f605410e270b8f08f2f53bb5979dc8126d858_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c68011e2d600ebe5c40fefc16fbfe0fd112f1b4165d6e792038192d72255911f = $this->env->getExtension("native_profiler");
        $__internal_c68011e2d600ebe5c40fefc16fbfe0fd112f1b4165d6e792038192d72255911f->enter($__internal_c68011e2d600ebe5c40fefc16fbfe0fd112f1b4165d6e792038192d72255911f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c68011e2d600ebe5c40fefc16fbfe0fd112f1b4165d6e792038192d72255911f->leave($__internal_c68011e2d600ebe5c40fefc16fbfe0fd112f1b4165d6e792038192d72255911f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_185b21e5b9c1ea36e275e5cf13d28e24a18331f9246f7e205713a91ba07eb6e3 = $this->env->getExtension("native_profiler");
        $__internal_185b21e5b9c1ea36e275e5cf13d28e24a18331f9246f7e205713a91ba07eb6e3->enter($__internal_185b21e5b9c1ea36e275e5cf13d28e24a18331f9246f7e205713a91ba07eb6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_185b21e5b9c1ea36e275e5cf13d28e24a18331f9246f7e205713a91ba07eb6e3->leave($__internal_185b21e5b9c1ea36e275e5cf13d28e24a18331f9246f7e205713a91ba07eb6e3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
