<?php

/* Users/afficher.html */
class __TwigTemplate_695a04dcb5a93bf0819603a8be7107ffc196185c82579daea80a587260f3a981 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<h1> All Users </h1>

<div id=\"nav\">

    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["users"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 13
            echo "        <!--<p>";
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ($context["item"] ?? null)), "html", null, true);
            echo "</p>-->
        <tr>
            <td>";
            // line 15
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "username", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "psw", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </table>

</div>";
    }

    public function getTemplateName()
    {
        return "Users/afficher.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 20,  54 => 17,  50 => 16,  46 => 15,  40 => 13,  36 => 12,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h1> All Users </h1>

<div id=\"nav\">

    <table>
        <tr>
            <th>Id</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        {% for user in users %}
        <!--<p>{{dump(item)}}</p>-->
        <tr>
            <td>{{user.id}}</td>
            <td>{{user.username}}</td>
            <td>{{user.psw}}</td>
        </tr>
        {% endfor %}
    </table>

</div>", "Users/afficher.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Users\\afficher.html");
    }
}
