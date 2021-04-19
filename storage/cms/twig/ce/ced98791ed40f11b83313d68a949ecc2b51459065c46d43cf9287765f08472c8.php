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

/* D:\GitHub\darsan.dev/themes/demo/partials/explain/ajax.htm */
class __TwigTemplate_3eb368cdd9ce6efe7d061f6d14093603d7af9f5cb2dd8249419d24eab34c1661 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = array("set" => 1, "for" => 6);
        $filters = array("escape" => 7);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'for'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $context["typeServices"] = twig_get_attribute($this->env, $this->source, ($context["typeServiceList"] ?? null), "records", [], "any", false, false, true, 1);
        // line 2
        echo "

<!-- Вывод изображений портфолио -->
<p><h2>Портфолио</h2></p>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeServices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, true, 7), 7, $this->source), "html", null, true);
            echo "<br>
    ";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["type"], "portfolio", [], "any", false, false, true, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                // line 9
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["img"], "images", [], "any", false, false, true, 9));
                foreach ($context['_seq'] as $context["_key"] => $context["img"]) {
                    // line 10
                    echo "            ";
                    echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["img"], "path", [], "any", false, false, true, 10), 10, $this->source), "html", null, true);
                    echo " <br>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 12
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['img'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "<br>
<!-- Вывод медиафайлов отзывов -->

<p><h2>Изображения</h2></p>
";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 19
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "media", [], "any", false, false, true, 19), "path", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "\" alt=\"\" srcset=\"\">
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
<p><h2>Видео</h2></p>
";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["movies"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["movie"]) {
            // line 24
            echo "    <video src=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["movie"], "media", [], "any", false, false, true, 24), "path", [], "any", false, false, true, 24), 24, $this->source), "html", null, true);
            echo "\" controls preload=\"metadata\"></video>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['movie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\darsan.dev/themes/demo/partials/explain/ajax.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 24,  130 => 23,  126 => 21,  117 => 19,  113 => 18,  107 => 14,  97 => 12,  88 => 10,  83 => 9,  79 => 8,  74 => 7,  70 => 6,  64 => 2,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set typeServices = typeServiceList.records %}


<!-- Вывод изображений портфолио -->
<p><h2>Портфолио</h2></p>
{% for type in typeServices %}
    {{ type.name }}<br>
    {% for img in type.portfolio %}
        {% for img in img.images %}
            {{ img.path }} <br>
        {% endfor %}
    {% endfor %}
{% endfor %}
<br>
<!-- Вывод медиафайлов отзывов -->

<p><h2>Изображения</h2></p>
{% for image in images %}
    <img src=\"{{ image.media.path }}\" alt=\"\" srcset=\"\">
{% endfor %}

<p><h2>Видео</h2></p>
{% for movie in movies %}
    <video src=\"{{ movie.media.path }}\" controls preload=\"metadata\"></video>
{% endfor %}", "D:\\GitHub\\darsan.dev/themes/demo/partials/explain/ajax.htm", "");
    }
}
