<?php

/* :Admin/admin.html.twig */
class __TwigTemplate_39276beefc9463226549fce9f02aeef6e486b3b3be2911ab66ba6d2d1d493386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/admin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":Admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8ffdf3159ac49c85756419749c27d640b87deba334061fe27a6f7d8828dc9ab2 = $this->env->getExtension("native_profiler");
        $__internal_8ffdf3159ac49c85756419749c27d640b87deba334061fe27a6f7d8828dc9ab2->enter($__internal_8ffdf3159ac49c85756419749c27d640b87deba334061fe27a6f7d8828dc9ab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ffdf3159ac49c85756419749c27d640b87deba334061fe27a6f7d8828dc9ab2->leave($__internal_8ffdf3159ac49c85756419749c27d640b87deba334061fe27a6f7d8828dc9ab2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ccba2bc7846504e0395a4263b03a6f6d7d196ad0edaa6b68f1ae3461e7fe071 = $this->env->getExtension("native_profiler");
        $__internal_7ccba2bc7846504e0395a4263b03a6f6d7d196ad0edaa6b68f1ae3461e7fe071->enter($__internal_7ccba2bc7846504e0395a4263b03a6f6d7d196ad0edaa6b68f1ae3461e7fe071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_7ccba2bc7846504e0395a4263b03a6f6d7d196ad0edaa6b68f1ae3461e7fe071->leave($__internal_7ccba2bc7846504e0395a4263b03a6f6d7d196ad0edaa6b68f1ae3461e7fe071_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_27a60c50d62b8035303ee760eda62412af9353fb2563874f966c025aa0279104 = $this->env->getExtension("native_profiler");
        $__internal_27a60c50d62b8035303ee760eda62412af9353fb2563874f966c025aa0279104->enter($__internal_27a60c50d62b8035303ee760eda62412af9353fb2563874f966c025aa0279104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_27a60c50d62b8035303ee760eda62412af9353fb2563874f966c025aa0279104->leave($__internal_27a60c50d62b8035303ee760eda62412af9353fb2563874f966c025aa0279104_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_454bddca75b688ae0b44414e62baa3f62901db2c575ab4bc41eb76b2afc6bfe6 = $this->env->getExtension("native_profiler");
        $__internal_454bddca75b688ae0b44414e62baa3f62901db2c575ab4bc41eb76b2afc6bfe6->enter($__internal_454bddca75b688ae0b44414e62baa3f62901db2c575ab4bc41eb76b2afc6bfe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 12
        echo "    <div class=\"welcome-logo\">
        <div class=\"welcome-message\">
            <span>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.welcome.message"), "html", null, true);
        echo "</span>
        </div>
    </div>
";
        
        $__internal_454bddca75b688ae0b44414e62baa3f62901db2c575ab4bc41eb76b2afc6bfe6->leave($__internal_454bddca75b688ae0b44414e62baa3f62901db2c575ab4bc41eb76b2afc6bfe6_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 14,  73 => 12,  67 => 11,  57 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends ":Admin:layout.html.twig" %}*/
/* */
/* {% block title %}{{ 'app.controlpanel' | trans }}{% endblock %}*/
/* */
/* {% block header %}*/
/*     <div class="top-header">*/
/*         <div class="header-name"><span><i class="glyphicon glyphicon-home"></i>{{ 'app.homepage' | trans }}</span></div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="welcome-logo">*/
/*         <div class="welcome-message">*/
/*             <span>{{ 'app.welcome.message' | trans }}</span>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
