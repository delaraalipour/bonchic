<?php

/* :Admin/index.html.twig */
class __TwigTemplate_2a975972943aedbdffc999d0d4784b6f58bbaec407b54a25374278f3483bd08c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":Admin:layout.html.twig", ":Admin/index.html.twig", 1);
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
        $__internal_dc16b3cc663b74200b9ff4e8f610a04e62323206c50928afea8c710b778b223e = $this->env->getExtension("native_profiler");
        $__internal_dc16b3cc663b74200b9ff4e8f610a04e62323206c50928afea8c710b778b223e->enter($__internal_dc16b3cc663b74200b9ff4e8f610a04e62323206c50928afea8c710b778b223e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc16b3cc663b74200b9ff4e8f610a04e62323206c50928afea8c710b778b223e->leave($__internal_dc16b3cc663b74200b9ff4e8f610a04e62323206c50928afea8c710b778b223e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c17e1ed12193b218a767c1739ba282251f6af70f86d379f3c7e45f809df877f8 = $this->env->getExtension("native_profiler");
        $__internal_c17e1ed12193b218a767c1739ba282251f6af70f86d379f3c7e45f809df877f8->enter($__internal_c17e1ed12193b218a767c1739ba282251f6af70f86d379f3c7e45f809df877f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_c17e1ed12193b218a767c1739ba282251f6af70f86d379f3c7e45f809df877f8->leave($__internal_c17e1ed12193b218a767c1739ba282251f6af70f86d379f3c7e45f809df877f8_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_b62ff92dddb67e9c790acd7f50f312593e87ad320ab406913e3f9ed04237bfd0 = $this->env->getExtension("native_profiler");
        $__internal_b62ff92dddb67e9c790acd7f50f312593e87ad320ab406913e3f9ed04237bfd0->enter($__internal_b62ff92dddb67e9c790acd7f50f312593e87ad320ab406913e3f9ed04237bfd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_b62ff92dddb67e9c790acd7f50f312593e87ad320ab406913e3f9ed04237bfd0->leave($__internal_b62ff92dddb67e9c790acd7f50f312593e87ad320ab406913e3f9ed04237bfd0_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_b573ddd6ea655e1c4e4adef30fa4d895df628ad938064f2e32f0c8a798ddec63 = $this->env->getExtension("native_profiler");
        $__internal_b573ddd6ea655e1c4e4adef30fa4d895df628ad938064f2e32f0c8a798ddec63->enter($__internal_b573ddd6ea655e1c4e4adef30fa4d895df628ad938064f2e32f0c8a798ddec63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_b573ddd6ea655e1c4e4adef30fa4d895df628ad938064f2e32f0c8a798ddec63->leave($__internal_b573ddd6ea655e1c4e4adef30fa4d895df628ad938064f2e32f0c8a798ddec63_prof);

    }

    public function getTemplateName()
    {
        return ":Admin/index.html.twig";
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
