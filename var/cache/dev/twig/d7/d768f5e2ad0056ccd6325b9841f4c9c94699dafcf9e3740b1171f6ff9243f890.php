<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_41abc2e1d5b95dba71e1fe1995252273488649701bf1866f192655e4a0eb4f87 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c632a8f742699811bb12a4e5dfe71ca27c4b4c5cc3b5fe8e354df163bdb13f3 = $this->env->getExtension("native_profiler");
        $__internal_3c632a8f742699811bb12a4e5dfe71ca27c4b4c5cc3b5fe8e354df163bdb13f3->enter($__internal_3c632a8f742699811bb12a4e5dfe71ca27c4b4c5cc3b5fe8e354df163bdb13f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c632a8f742699811bb12a4e5dfe71ca27c4b4c5cc3b5fe8e354df163bdb13f3->leave($__internal_3c632a8f742699811bb12a4e5dfe71ca27c4b4c5cc3b5fe8e354df163bdb13f3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_8309c2a64142dd87d7a1bd52ec804faaea89a18b86bf4b0986b31076f2068bd2 = $this->env->getExtension("native_profiler");
        $__internal_8309c2a64142dd87d7a1bd52ec804faaea89a18b86bf4b0986b31076f2068bd2->enter($__internal_8309c2a64142dd87d7a1bd52ec804faaea89a18b86bf4b0986b31076f2068bd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_8309c2a64142dd87d7a1bd52ec804faaea89a18b86bf4b0986b31076f2068bd2->leave($__internal_8309c2a64142dd87d7a1bd52ec804faaea89a18b86bf4b0986b31076f2068bd2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_001b8848b7be1290abc321c367507c516c68e69d4251a9f1851c5c0cfc5c236b = $this->env->getExtension("native_profiler");
        $__internal_001b8848b7be1290abc321c367507c516c68e69d4251a9f1851c5c0cfc5c236b->enter($__internal_001b8848b7be1290abc321c367507c516c68e69d4251a9f1851c5c0cfc5c236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_001b8848b7be1290abc321c367507c516c68e69d4251a9f1851c5c0cfc5c236b->leave($__internal_001b8848b7be1290abc321c367507c516c68e69d4251a9f1851c5c0cfc5c236b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_18cefdce8ffd0150284f9d101cb991803ec4f287fbe3097da8071d281acda857 = $this->env->getExtension("native_profiler");
        $__internal_18cefdce8ffd0150284f9d101cb991803ec4f287fbe3097da8071d281acda857->enter($__internal_18cefdce8ffd0150284f9d101cb991803ec4f287fbe3097da8071d281acda857_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_18cefdce8ffd0150284f9d101cb991803ec4f287fbe3097da8071d281acda857->leave($__internal_18cefdce8ffd0150284f9d101cb991803ec4f287fbe3097da8071d281acda857_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
