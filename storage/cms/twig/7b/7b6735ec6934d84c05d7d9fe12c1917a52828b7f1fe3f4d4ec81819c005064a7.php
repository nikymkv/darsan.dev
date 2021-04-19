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

/* D:\GitHub\darsan.dev/plugins/itd/admin/components/feedbackform/default.htm */
class __TwigTemplate_f328bb06db13ffef2c12a81ecb47f23a7be94707effb851791c308587137a59e extends \Twig\Template
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
        $tags = array("for" => 18);
        $filters = array("escape" => 19);
        $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
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
        echo "<form  data-request=\"onSend\">
    <div>
        <label for=\"name\">Full Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">

        <p data-validate-for=\"last_name\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"phone\">Phone</label>
        <input type=\"text\" name=\"phone\" class=\"form-control\">
        <p data-validate-for=\"phone\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"service\">Service</label>
        <select name=\"service\">
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["typeServices"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 19
            echo "                <option value=\"\">";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["type"], "name", [], "any", false, false, true, 19), 19, $this->source), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        </select>
        <p data-validate-for=\"service\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"date\">Date</label>
        <input type=\"text\" name=\"date\" class=\"form-control\">
        <p data-validate-for=\"date\"  class=\"text-danger\"></p> 
    </div>

    <div>
        <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    </div>
</form>";
    }

    public function getTemplateName()
    {
        return "D:\\GitHub\\darsan.dev/plugins/itd/admin/components/feedbackform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 21,  85 => 19,  81 => 18,  62 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form  data-request=\"onSend\">
    <div>
        <label for=\"name\">Full Name</label>
        <input type=\"text\" name=\"name\" class=\"form-control\">

        <p data-validate-for=\"last_name\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"phone\">Phone</label>
        <input type=\"text\" name=\"phone\" class=\"form-control\">
        <p data-validate-for=\"phone\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"service\">Service</label>
        <select name=\"service\">
            {% for type in typeServices %}
                <option value=\"\">{{ type.name }}</option>
            {% endfor %}
        </select>
        <p data-validate-for=\"service\" class=\"text-danger\"></p> 
    </div>

    <div>
        <label for=\"date\">Date</label>
        <input type=\"text\" name=\"date\" class=\"form-control\">
        <p data-validate-for=\"date\"  class=\"text-danger\"></p> 
    </div>

    <div>
        <button type=\"submit\" class=\"btn btn-primary\" data-attach-loading>Send</button>
    </div>
</form>", "D:\\GitHub\\darsan.dev/plugins/itd/admin/components/feedbackform/default.htm", "");
    }
}
