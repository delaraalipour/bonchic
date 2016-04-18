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
        $__internal_ef7f775feb4648435265e3a2a93e1c8cce46b80427063f5ca7d612065d3cc257 = $this->env->getExtension("native_profiler");
        $__internal_ef7f775feb4648435265e3a2a93e1c8cce46b80427063f5ca7d612065d3cc257->enter($__internal_ef7f775feb4648435265e3a2a93e1c8cce46b80427063f5ca7d612065d3cc257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":Admin/admin.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef7f775feb4648435265e3a2a93e1c8cce46b80427063f5ca7d612065d3cc257->leave($__internal_ef7f775feb4648435265e3a2a93e1c8cce46b80427063f5ca7d612065d3cc257_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_15d72dae9fcb95a0679b543bfab1efa9e27fbba7fbb2b9340752b187f3564795 = $this->env->getExtension("native_profiler");
        $__internal_15d72dae9fcb95a0679b543bfab1efa9e27fbba7fbb2b9340752b187f3564795->enter($__internal_15d72dae9fcb95a0679b543bfab1efa9e27fbba7fbb2b9340752b187f3564795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.controlpanel"), "html", null, true);
        
        $__internal_15d72dae9fcb95a0679b543bfab1efa9e27fbba7fbb2b9340752b187f3564795->leave($__internal_15d72dae9fcb95a0679b543bfab1efa9e27fbba7fbb2b9340752b187f3564795_prof);

    }

    // line 5
    public function block_header($context, array $blocks = array())
    {
        $__internal_dc9b72e141a2e702ab5005c3a178b294a8c4233a7f312b1680aca7f05aaf355c = $this->env->getExtension("native_profiler");
        $__internal_dc9b72e141a2e702ab5005c3a178b294a8c4233a7f312b1680aca7f05aaf355c->enter($__internal_dc9b72e141a2e702ab5005c3a178b294a8c4233a7f312b1680aca7f05aaf355c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    <div class=\"top-header\">
        <div class=\"header-name\"><span><i class=\"glyphicon glyphicon-home\"></i>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.homepage"), "html", null, true);
        echo "</span></div>
    </div>
";
        
        $__internal_dc9b72e141a2e702ab5005c3a178b294a8c4233a7f312b1680aca7f05aaf355c->leave($__internal_dc9b72e141a2e702ab5005c3a178b294a8c4233a7f312b1680aca7f05aaf355c_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_e6d9441a9f2cd67036999416fb79135d8c4272779af03aa0aafbe575a155f17d = $this->env->getExtension("native_profiler");
        $__internal_e6d9441a9f2cd67036999416fb79135d8c4272779af03aa0aafbe575a155f17d->enter($__internal_e6d9441a9f2cd67036999416fb79135d8c4272779af03aa0aafbe575a155f17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_e6d9441a9f2cd67036999416fb79135d8c4272779af03aa0aafbe575a155f17d->leave($__internal_e6d9441a9f2cd67036999416fb79135d8c4272779af03aa0aafbe575a155f17d_prof);

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
