<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8820bfef43d137bf5b907c8427ff31bffa193356f89d7eb51cc31f1e1e5ead53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eb8c254cb9ac38c569ae6dbcccd933a6045e303a58a18ea56f119dc47a163fe5 = $this->env->getExtension("native_profiler");
        $__internal_eb8c254cb9ac38c569ae6dbcccd933a6045e303a58a18ea56f119dc47a163fe5->enter($__internal_eb8c254cb9ac38c569ae6dbcccd933a6045e303a58a18ea56f119dc47a163fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_eb8c254cb9ac38c569ae6dbcccd933a6045e303a58a18ea56f119dc47a163fe5->leave($__internal_eb8c254cb9ac38c569ae6dbcccd933a6045e303a58a18ea56f119dc47a163fe5_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
