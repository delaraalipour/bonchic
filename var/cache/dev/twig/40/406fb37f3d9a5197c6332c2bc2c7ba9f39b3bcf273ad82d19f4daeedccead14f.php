<?php

/* layout.html.twig */
class __TwigTemplate_ad1941272919d6b835ebb99b61cea1f75620586eb14ecd8d864a4504a307f9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82c580efe9dafa3e457f088c6562625b3b0cb80845c216c790c816f538dd4f43 = $this->env->getExtension("native_profiler");
        $__internal_82c580efe9dafa3e457f088c6562625b3b0cb80845c216c790c816f538dd4f43->enter($__internal_82c580efe9dafa3e457f088c6562625b3b0cb80845c216c790c816f538dd4f43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
    <div class=\"\">
       <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("app.site_title", array(), "messages"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"wrapper\">
        ";
        // line 14
        $this->displayBlock('content', $context, $blocks);
        // line 16
        echo "    </div>
</body>
</html>";
        
        $__internal_82c580efe9dafa3e457f088c6562625b3b0cb80845c216c790c816f538dd4f43->leave($__internal_82c580efe9dafa3e457f088c6562625b3b0cb80845c216c790c816f538dd4f43_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0ac152793a7665cc48a90e0956e3d6e21124728afdf56497bc83ba2231e79b72 = $this->env->getExtension("native_profiler");
        $__internal_0ac152793a7665cc48a90e0956e3d6e21124728afdf56497bc83ba2231e79b72->enter($__internal_0ac152793a7665cc48a90e0956e3d6e21124728afdf56497bc83ba2231e79b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_0ac152793a7665cc48a90e0956e3d6e21124728afdf56497bc83ba2231e79b72->leave($__internal_0ac152793a7665cc48a90e0956e3d6e21124728afdf56497bc83ba2231e79b72_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_5e59661b071dc23fd45422c5da424ea7fe16156e2b50ab45b3d1881219ba5ad5 = $this->env->getExtension("native_profiler");
        $__internal_5e59661b071dc23fd45422c5da424ea7fe16156e2b50ab45b3d1881219ba5ad5->enter($__internal_5e59661b071dc23fd45422c5da424ea7fe16156e2b50ab45b3d1881219ba5ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 15
        echo "        ";
        
        $__internal_5e59661b071dc23fd45422c5da424ea7fe16156e2b50ab45b3d1881219ba5ad5->leave($__internal_5e59661b071dc23fd45422c5da424ea7fe16156e2b50ab45b3d1881219ba5ad5_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  73 => 14,  62 => 5,  53 => 16,  51 => 14,  45 => 11,  38 => 7,  34 => 6,  30 => 5,  24 => 1,);
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
/*     <div class="">*/
/*        <p>{{ 'app.site_title'|trans ({}, 'messages') }}</p>*/
/*     </div>*/
/*     <div class="wrapper">*/
/*         {% block content %}*/
/*         {% endblock %}*/
/*     </div>*/
/* </body>*/
/* </html>*/
