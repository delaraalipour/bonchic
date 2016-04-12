<?php

/* :product/show.html.twig */
class __TwigTemplate_8823b7f5d10e19d71590c369bc862dd87284074e1f1764c846c653aacf4e632d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", ":product/show.html.twig", 1);
        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_00eaa242bebf1cbc45da06d0da7984cc30a7fa96ceac7d154b87464ff0be8ac5 = $this->env->getExtension("native_profiler");
        $__internal_00eaa242bebf1cbc45da06d0da7984cc30a7fa96ceac7d154b87464ff0be8ac5->enter($__internal_00eaa242bebf1cbc45da06d0da7984cc30a7fa96ceac7d154b87464ff0be8ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":product/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00eaa242bebf1cbc45da06d0da7984cc30a7fa96ceac7d154b87464ff0be8ac5->leave($__internal_00eaa242bebf1cbc45da06d0da7984cc30a7fa96ceac7d154b87464ff0be8ac5_prof);

    }

    // line 3
    public function block_header($context, array $blocks = array())
    {
        $__internal_d540c03e44e420ef0c5bf8bde3610984665264308e8125b90d280fbd3480efb3 = $this->env->getExtension("native_profiler");
        $__internal_d540c03e44e420ef0c5bf8bde3610984665264308e8125b90d280fbd3480efb3->enter($__internal_d540c03e44e420ef0c5bf8bde3610984665264308e8125b90d280fbd3480efb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo " محصول";
        
        $__internal_d540c03e44e420ef0c5bf8bde3610984665264308e8125b90d280fbd3480efb3->leave($__internal_d540c03e44e420ef0c5bf8bde3610984665264308e8125b90d280fbd3480efb3_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9763728341cb4360fc21bbc3273262cfe10871e0b0b8b6c342cf0ca2153dcaaf = $this->env->getExtension("native_profiler");
        $__internal_9763728341cb4360fc21bbc3273262cfe10871e0b0b8b6c342cf0ca2153dcaaf->enter($__internal_9763728341cb4360fc21bbc3273262cfe10871e0b0b8b6c342cf0ca2153dcaaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " محصول";
        
        $__internal_9763728341cb4360fc21bbc3273262cfe10871e0b0b8b6c342cf0ca2153dcaaf->leave($__internal_9763728341cb4360fc21bbc3273262cfe10871e0b0b8b6c342cf0ca2153dcaaf_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_8eda82a17544e7a0733e31fc620e3068f1d458d9a2c4145de84da8fd7fe8686f = $this->env->getExtension("native_profiler");
        $__internal_8eda82a17544e7a0733e31fc620e3068f1d458d9a2c4145de84da8fd7fe8686f->enter($__internal_8eda82a17544e7a0733e31fc620e3068f1d458d9a2c4145de84da8fd7fe8686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"data-info\">
        <div class=\"title\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</div>
        <div><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "image", array()), "html", null, true);
        echo "\" /></div>
        <div class=\"description\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array()), "html", null, true);
        echo "</div>
        <div class=\"price\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
        echo " تومان</div>
    </div>
";
        
        $__internal_8eda82a17544e7a0733e31fc620e3068f1d458d9a2c4145de84da8fd7fe8686f->leave($__internal_8eda82a17544e7a0733e31fc620e3068f1d458d9a2c4145de84da8fd7fe8686f_prof);

    }

    public function getTemplateName()
    {
        return ":product/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 11,  77 => 10,  73 => 9,  69 => 8,  66 => 7,  60 => 6,  48 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends "layout.html.twig" %}*/
/* */
/* {% block header %} محصول{% endblock %}*/
/* {% block title %} محصول{% endblock %}*/
/* */
/* {% block content %}*/
/*     <div class="data-info">*/
/*         <div class="title">{{ product.name }}</div>*/
/*         <div><img src="{{ product.image }}" /></div>*/
/*         <div class="description">{{ product.description }}</div>*/
/*         <div class="price">{{ product.price }} تومان</div>*/
/*     </div>*/
/* {% endblock %}*/
