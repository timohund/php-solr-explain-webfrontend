<?php

/* TsExplainBundle:Default:explain.html.twig */
class __TwigTemplate_aac605dd864cdd91dda8a197c8fb5b37 extends Twig_Template
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
        // line 1
        echo "<!doctype html>
<html>
    <head>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/highcharts.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/obhighcharts/js/highcharts/modules/exporting.js"), "html", null, true);
        echo "\"></script>
        <script type=\"text/javascript\">
            ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 9
            echo "                ";
            echo $this->env->getExtension('highcharts_extension')->chart($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "chart"));
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 11
        echo "
            \$(function() {
                \$( \".tabs\" ).tabs().addClass( \"ui-tabs-vertical ui-helper-clearfix\" );
                \$( \".tabs li\" ).removeClass( \"ui-corner-top\" ).addClass( \"ui-corner-left\" );
            });

        </script>
        <link rel=\"stylesheet\" href=\"http://code.jquery.com/ui/1.10.0/themes/base/jquery-ui.css\" />
        <script src=\"http://code.jquery.com/ui/1.10.0/jquery-ui.js\"></script>

        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/tsexplain/css/main"), "html", null, true);
        echo "\" />

    </head>
    <body>
        <div class=\"main\">
            <div class=\"inner\">
                <div class=\"content\">
                    <h1>Explain report</h1>

                    <h2>General information</h2>
                    <ul>
                       <li>Total number of results: ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "completeResultCount"), "html", null, true);
        echo "</li>
                       <li>Returned results: ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "resultCount"), "html", null, true);
        echo "</li>
                    </ul>

                    <h2>Result relevance explanation</h2>
                    ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["documents"]) ? $context["documents"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 38
            echo "                        <div class=\"tabs\">
                            <ul>
                                <li><a href=\"#tabs-1-";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\">Chart</a></li>
                                <li><a href=\"#tabs-2-";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\">Data</a></li>
                                <li><a href=\"#tabs-3-";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\">Raw explain</a></li>
                            </ul>
                            <div id=\"tabs-1-";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\">
                                <h3>Impact chart</h3>
                                <div class=\"fieldimpacts\" id=\"linechart-";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\" style=\"width: 400px; height: 300px; margin: 0 auto\">

                                </div>
                            </div>


                            <div id=\"tabs-2-";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\" class=\"fieldlist\">
                                <h3>Document data</h3>
                                <table>
                                    <thead>
                                        <tr>
                                            <td>Name</td>
                                            <td>Type</td>
                                            <td>Value</td>
                                        </tr>
                                    </thead>
                                ";
            // line 62
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "solrdocument"), "fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 63
                echo "                                    <tr>
                                        <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "name"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "type"), "html", null, true);
                echo "</td>
                                        <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "value"), "html", null, true);
                echo "</td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 69
            echo "                                </table>

                            </div>

                            <div id=\"tabs-3-";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["document"]) ? $context["document"] : null), "id"), "html", null, true);
            echo "\" class=\"explain\">
                                <h3>Raw Explain</h3>
                                <pre>
                                    ";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["document"]) ? $context["document"] : null), "solrDocument"), "rawExplainData"), "html", null, true);
            echo "
                                </pre>
                            </div>
                        </div>

                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 82
        echo "                    <h2>Timing</h2>

                    <ul>
                        <li>Overall query time: ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["result"]) ? $context["result"] : null), "queryTime"), "html", null, true);
        echo " ms</li>
                        <li>Prepare time: ";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "timing"), "preparationItems"), "timeSpend"), "html", null, true);
        echo " ms</li>
                        <ul>
                            ";
        // line 88
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "timing"), "preparationItems"));
        foreach ($context['_seq'] as $context["_key"] => $context["preparartionItem"]) {
            // line 89
            echo "
                                <li>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preparartionItem"]) ? $context["preparartionItem"] : null), "componentName"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["preparartionItem"]) ? $context["preparartionItem"] : null), "timeSpend"), "html", null, true);
            echo " ms</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['preparartionItem'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 92
        echo "                        </ul>
                        <li>Processing time: ";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "timing"), "processingItems"), "timeSpend"), "html", null, true);
        echo "</li>
                        <ul>
                            ";
        // line 95
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["result"]) ? $context["result"] : null), "timing"), "processingItems"));
        foreach ($context['_seq'] as $context["_key"] => $context["processingItem"]) {
            // line 96
            echo "
                                <li>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["processingItem"]) ? $context["processingItem"] : null), "componentName"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["processingItem"]) ? $context["processingItem"] : null), "timeSpend"), "html", null, true);
            echo " ms</li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['processingItem'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 99
        echo "                        </ul>
                    </ul>
               </div>
            </div>
        </div>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TsExplainBundle:Default:explain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 99,  226 => 97,  223 => 96,  219 => 95,  214 => 93,  211 => 92,  201 => 90,  198 => 89,  194 => 88,  189 => 86,  185 => 85,  180 => 82,  168 => 76,  162 => 73,  156 => 69,  147 => 66,  143 => 65,  139 => 64,  136 => 63,  132 => 62,  119 => 52,  110 => 46,  105 => 44,  100 => 42,  96 => 41,  92 => 40,  88 => 38,  84 => 37,  77 => 33,  73 => 32,  59 => 21,  47 => 11,  38 => 9,  34 => 8,  29 => 6,  25 => 5,  19 => 1,);
    }
}
