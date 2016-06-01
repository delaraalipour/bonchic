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
        $__internal_c1db54fc286866d9be0ce785a926167a0064873eedede29f5b7dd4aaf2c18aac = $this->env->getExtension("native_profiler");
        $__internal_c1db54fc286866d9be0ce785a926167a0064873eedede29f5b7dd4aaf2c18aac->enter($__internal_c1db54fc286866d9be0ce785a926167a0064873eedede29f5b7dd4aaf2c18aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1db54fc286866d9be0ce785a926167a0064873eedede29f5b7dd4aaf2c18aac->leave($__internal_c1db54fc286866d9be0ce785a926167a0064873eedede29f5b7dd4aaf2c18aac_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e137fa0aaff14e39a6b6b91faeb7eceb61aa85f4c7e8779ac8d18b1b08d0decd = $this->env->getExtension("native_profiler");
        $__internal_e137fa0aaff14e39a6b6b91faeb7eceb61aa85f4c7e8779ac8d18b1b08d0decd->enter($__internal_e137fa0aaff14e39a6b6b91faeb7eceb61aa85f4c7e8779ac8d18b1b08d0decd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_e137fa0aaff14e39a6b6b91faeb7eceb61aa85f4c7e8779ac8d18b1b08d0decd->leave($__internal_e137fa0aaff14e39a6b6b91faeb7eceb61aa85f4c7e8779ac8d18b1b08d0decd_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_0df7e3f66d162db12eb1987c7a829c4d71e9b6b2023f9bc7064ca667abd65536 = $this->env->getExtension("native_profiler");
        $__internal_0df7e3f66d162db12eb1987c7a829c4d71e9b6b2023f9bc7064ca667abd65536->enter($__internal_0df7e3f66d162db12eb1987c7a829c4d71e9b6b2023f9bc7064ca667abd65536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_0df7e3f66d162db12eb1987c7a829c4d71e9b6b2023f9bc7064ca667abd65536->leave($__internal_0df7e3f66d162db12eb1987c7a829c4d71e9b6b2023f9bc7064ca667abd65536_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_f3d39f77d716b3c00cb1325b2871e91394894cc54ca1626ce90e54dd7edaccd4 = $this->env->getExtension("native_profiler");
        $__internal_f3d39f77d716b3c00cb1325b2871e91394894cc54ca1626ce90e54dd7edaccd4->enter($__internal_f3d39f77d716b3c00cb1325b2871e91394894cc54ca1626ce90e54dd7edaccd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f3d39f77d716b3c00cb1325b2871e91394894cc54ca1626ce90e54dd7edaccd4->leave($__internal_f3d39f77d716b3c00cb1325b2871e91394894cc54ca1626ce90e54dd7edaccd4_prof);

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
