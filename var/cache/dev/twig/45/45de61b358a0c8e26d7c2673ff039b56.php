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

/* facture/index.html.twig */
class __TwigTemplate_cdf1b223645967711b7136fc3959c995 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "facture/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "facture/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Facture";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        // line 7
        echo "    <div class=\"container mt-4\">
    ";
        // line 10
        echo "    <h3>Date : ";
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, "now", "long"), "html", null, true);
        echo "</h3>
        <table class=\"table table-borderless\">
            <tr>
                <td class=\"col-3 border border-dark\">
                        Clicom<br/>
                        26, rue du labrador, 1047 Bruxelles <br/>
                        numéro de SIREN : 0123456789<br/>
                        Tél : 01 02 03 04 05
                </td>
                <td class=\"col-6\"></td>
                <td class=\"col-9\"></td>
            </tr>
            <tr>
                <td class=\"col-3\"></td>
                <td class=\"col-6\"></td>
                <td class=\"col-3 border border-dark\">
                    Référence client : ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 26, $this->source); })()), "ncli", [], "any", false, false, false, 26), "ncli", [], "any", false, false, false, 26), "html", null, true);
        echo "<br/>
                    Nom : ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 27, $this->source); })()), "ncli", [], "any", false, false, false, 27), "nom", [], "any", false, false, false, 27), "html", null, true);
        echo "<br/>
                    Adresse : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "ncli", [], "any", false, false, false, 28), "adresse", [], "any", false, false, false, 28), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "ncli", [], "any", false, false, false, 28), "localite", [], "any", false, false, false, 28), "html", null, true);
        echo "<br/>
                    Catégorie : ";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 29, $this->source); })()), "ncli", [], "any", false, false, false, 29), "cat", [], "any", false, false, false, 29), "html", null, true);
        echo " -- Compte : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 29, $this->source); })()), "ncli", [], "any", false, false, false, 29), "compte", [], "any", false, false, false, 29), "html", null, true);
        echo "
                </td>
            </tr>
        </table>


        ";
        // line 36
        echo "        <hr/>        
        <h3>Facture n° ";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 37, $this->source); })()), "ncom", [], "any", false, false, false, 37), "html", null, true);
        echo "</h3>
        <h5>Date de la commande : ";
        // line 38
        echo twig_escape_filter($this->env, $this->extensions['Twig\Extra\Intl\IntlExtension']->formatDate($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 38, $this->source); })()), "datecom", [], "any", false, false, false, 38), "long"), "html", null, true);
        echo "</h5>
        ";
        // line 39
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 39, $this->source); })()), "details", [], "any", false, false, false, 39)) > 1)) {
            // line 40
            echo "            ";
            $context["titre"] = "Articles";
            // line 41
            echo "        ";
        } else {
            // line 42
            echo "            ";
            $context["titre"] = "Article";
            // line 43
            echo "        ";
        }
        // line 44
        echo "        <hr/>
        <h4>";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["titre"]) || array_key_exists("titre", $context) ? $context["titre"] : (function () { throw new RuntimeError('Variable "titre" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "</h4>
        ";
        // line 46
        $context["somme"] = 0;
        // line 47
        echo "        ";
        // line 48
        echo "        <table class=\"table\">
            <thead class=\"bg-secondary text-white\">
                <th>Code produit</th>
                <th class=\"col-6\">Désignation du produit</th>
                <th style=\"text-align: right\">Quantité</th>
                <th style=\"text-align: right\">Prix unitaire HT</th>
                <th style=\"text-align: right\">Montant HT</th>
            </thead>
            <tbody>
            ";
        // line 57
        $context["somme"] = 0;
        // line 58
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 58, $this->source); })()), "details", [], "any", false, false, false, 58));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 59
            echo "                <tr>
                    <td>";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "npro", [], "any", false, false, false, 60), "npro", [], "any", false, false, false, 60), "html", null, true);
            echo " </td>
                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "npro", [], "any", false, false, false, 61), "libelle", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                    <td style=\"text-align: right\">";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["detail"], "qcom", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                    <td style=\"text-align: right\">";
            // line 63
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "npro", [], "any", false, false, false, 63), "prix", [], "any", false, false, false, 63), 2, ",", " "), "html", null, true);
            echo " €</td>
                    ";
            // line 64
            $context["montant"] = (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["detail"], "npro", [], "any", false, false, false, 64), "prix", [], "any", false, false, false, 64) * twig_get_attribute($this->env, $this->source, $context["detail"], "qcom", [], "any", false, false, false, 64));
            // line 65
            echo "                    <td style=\"text-align: right\">";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 65, $this->source); })()), 2, ",", " "), "html", null, true);
            echo " €</td>
                </tr>
                ";
            // line 67
            $context["somme"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 67, $this->source); })()) + (isset($context["montant"]) || array_key_exists("montant", $context) ? $context["montant"] : (function () { throw new RuntimeError('Variable "montant" does not exist.', 67, $this->source); })()));
            // line 68
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                <tr class=\"bg-light\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><strong>Total HT</strong></td>
                    <td style=\"text-align: right\">";
        // line 74
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 74, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><small>TVA : 20 %</small></td>
                </tr>  
                <tr class=\"bg-info\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><strong>Total TTC</strong></td>
                    ";
        // line 88
        $context["ttc"] = ((isset($context["somme"]) || array_key_exists("somme", $context) ? $context["somme"] : (function () { throw new RuntimeError('Variable "somme" does not exist.', 88, $this->source); })()) * 1.2);
        // line 89
        echo "                    <td style=\"text-align: right\"><strong>";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["ttc"]) || array_key_exists("ttc", $context) ? $context["ttc"] : (function () { throw new RuntimeError('Variable "ttc" does not exist.', 89, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</strong></td>
                </tr>       
            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "facture/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 89,  251 => 88,  234 => 74,  227 => 69,  221 => 68,  219 => 67,  213 => 65,  211 => 64,  207 => 63,  203 => 62,  199 => 61,  195 => 60,  192 => 59,  187 => 58,  185 => 57,  174 => 48,  172 => 47,  170 => 46,  166 => 45,  163 => 44,  160 => 43,  157 => 42,  154 => 41,  151 => 40,  149 => 39,  145 => 38,  141 => 37,  138 => 36,  127 => 29,  121 => 28,  117 => 27,  113 => 26,  93 => 10,  90 => 7,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Facture{% endblock %}

{% block body %}
    {# Coordonnées de l'entreprise à gauche, coordonnées du client à droite#}
    <div class=\"container mt-4\">
    {# Le filtre format_date nécessite une extension supplémentaire :
    \$ symfony composer req \"twig/intl-extra:^3\" #}
    <h3>Date : {{ \"now\" | format_date(\"long\") }}</h3>
        <table class=\"table table-borderless\">
            <tr>
                <td class=\"col-3 border border-dark\">
                        Clicom<br/>
                        26, rue du labrador, 1047 Bruxelles <br/>
                        numéro de SIREN : 0123456789<br/>
                        Tél : 01 02 03 04 05
                </td>
                <td class=\"col-6\"></td>
                <td class=\"col-9\"></td>
            </tr>
            <tr>
                <td class=\"col-3\"></td>
                <td class=\"col-6\"></td>
                <td class=\"col-3 border border-dark\">
                    Référence client : {{ commande.ncli.ncli }}<br/>
                    Nom : {{ commande.ncli.nom }}<br/>
                    Adresse : {{ commande.ncli.adresse }}, {{ commande.ncli.localite }}<br/>
                    Catégorie : {{ commande.ncli.cat }} -- Compte : {{ commande.ncli.compte }}
                </td>
            </tr>
        </table>


        {# Identification de la facture #}
        <hr/>        
        <h3>Facture n° {{ commande.ncom }}</h3>
        <h5>Date de la commande : {{ commande.datecom | format_date(\"long\") }}</h5>
        {% if commande.details | length > 1 %}
            {% set titre = 'Articles' %}
        {% else %}
            {% set titre = 'Article' %}
        {% endif %}
        <hr/>
        <h4>{{titre}}</h4>
        {% set somme = 0 %}
        {# Table des commandes, puis total HT, TTC de la facture #}
        <table class=\"table\">
            <thead class=\"bg-secondary text-white\">
                <th>Code produit</th>
                <th class=\"col-6\">Désignation du produit</th>
                <th style=\"text-align: right\">Quantité</th>
                <th style=\"text-align: right\">Prix unitaire HT</th>
                <th style=\"text-align: right\">Montant HT</th>
            </thead>
            <tbody>
            {% set somme = 0 %}
            {% for detail in commande.details %}
                <tr>
                    <td>{{ detail.npro.npro }} </td>
                    <td>{{ detail.npro.libelle }}</td>
                    <td style=\"text-align: right\">{{ detail.qcom }}</td>
                    <td style=\"text-align: right\">{{ detail.npro.prix |number_format(2, ',', ' ') }} €</td>
                    {% set montant = detail.npro.prix * detail.qcom %}
                    <td style=\"text-align: right\">{{ montant | number_format(2,',',' ') }} €</td>
                </tr>
                {% set somme = somme + montant %}
            {% endfor %}
                <tr class=\"bg-light\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><strong>Total HT</strong></td>
                    <td style=\"text-align: right\">{{ somme | number_format(2, ',', ' ') }} €</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><small>TVA : 20 %</small></td>
                </tr>  
                <tr class=\"bg-info\">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style=\"text-align: right\"><strong>Total TTC</strong></td>
                    {% set ttc = somme * 1.2 %}
                    <td style=\"text-align: right\"><strong>{{ ttc | number_format(2, ',', ' ') }} €</strong></td>
                </tr>       
            </tbody>
        </table>
    </div>
{% endblock %}
", "facture/index.html.twig", "/home/local/BTSSIO/mbadet/tpfactureperso/templates/facture/index.html.twig");
    }
}
