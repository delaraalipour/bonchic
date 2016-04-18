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
        $__internal_2a642db4e1b3e23e25e831bac20599669a479a961cbde8636194a32b25664348 = $this->env->getExtension("native_profiler");
        $__internal_2a642db4e1b3e23e25e831bac20599669a479a961cbde8636194a32b25664348->enter($__internal_2a642db4e1b3e23e25e831bac20599669a479a961cbde8636194a32b25664348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a642db4e1b3e23e25e831bac20599669a479a961cbde8636194a32b25664348->leave($__internal_2a642db4e1b3e23e25e831bac20599669a479a961cbde8636194a32b25664348_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afc5489b83b4b3f56ecde4d13516c70e52d22d8ad756ac2b1d4bf9a095b47674 = $this->env->getExtension("native_profiler");
        $__internal_afc5489b83b4b3f56ecde4d13516c70e52d22d8ad756ac2b1d4bf9a095b47674->enter($__internal_afc5489b83b4b3f56ecde4d13516c70e52d22d8ad756ac2b1d4bf9a095b47674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afc5489b83b4b3f56ecde4d13516c70e52d22d8ad756ac2b1d4bf9a095b47674->leave($__internal_afc5489b83b4b3f56ecde4d13516c70e52d22d8ad756ac2b1d4bf9a095b47674_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e27873366c174f9a0ce005da6eaed4d703e44ca32af2681e9169dae6e5b5cd76 = $this->env->getExtension("native_profiler");
        $__internal_e27873366c174f9a0ce005da6eaed4d703e44ca32af2681e9169dae6e5b5cd76->enter($__internal_e27873366c174f9a0ce005da6eaed4d703e44ca32af2681e9169dae6e5b5cd76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e27873366c174f9a0ce005da6eaed4d703e44ca32af2681e9169dae6e5b5cd76->leave($__internal_e27873366c174f9a0ce005da6eaed4d703e44ca32af2681e9169dae6e5b5cd76_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3bf010883e9849bd4a1f34b231e7717b2fab097bb3141713f7cbaaccee6cb079 = $this->env->getExtension("native_profiler");
        $__internal_3bf010883e9849bd4a1f34b231e7717b2fab097bb3141713f7cbaaccee6cb079->enter($__internal_3bf010883e9849bd4a1f34b231e7717b2fab097bb3141713f7cbaaccee6cb079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_3bf010883e9849bd4a1f34b231e7717b2fab097bb3141713f7cbaaccee6cb079->leave($__internal_3bf010883e9849bd4a1f34b231e7717b2fab097bb3141713f7cbaaccee6cb079_prof);

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
