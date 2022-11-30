<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* sections/footer.html */
class __TwigTemplate_5a284ad6140871a49254284ec561ccdd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sections/footer.html"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "sections/footer.html"));

        // line 1
        echo "<div class=\"container\">
  <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
    <p class=\"col-md-4 mb-0 text-muted\">&copy; 2021 Company, Inc</p>

    <a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none\">
      <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"/></svg>
    </a>

    <ul class=\"nav col-md-4 justify-content-end\">
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Features</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Pricing</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">FAQs</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
  </footer>
</div>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "sections/footer.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
  <footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">
    <p class=\"col-md-4 mb-0 text-muted\">&copy; 2021 Company, Inc</p>

    <a href=\"/\" class=\"col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none\">
      <svg class=\"bi me-2\" width=\"40\" height=\"32\"><use xlink:href=\"#bootstrap\"/></svg>
    </a>

    <ul class=\"nav col-md-4 justify-content-end\">
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Home</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Features</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">Pricing</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">FAQs</a></li>
      <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">About</a></li>
    </ul>
  </footer>
</div>", "sections/footer.html", "/home/local/BTSSIO/mbadet/tpfactureperso/templates/sections/footer.html");
    }
}
