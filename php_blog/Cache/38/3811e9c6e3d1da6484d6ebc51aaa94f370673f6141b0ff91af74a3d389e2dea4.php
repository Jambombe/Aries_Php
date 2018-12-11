<?php

/* Blogs/allBlogs.html */
class __TwigTemplate_287cb48ddc566d0609778d235e662f10fcfb93c7316661ce4c28dd644a90e5f5 extends Twig_Template
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
<h1> Tout les blogs</h1>

<div id=\"nav\">

<!--    <table>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "        <p>";
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, ($context["item"] ?? null)), "html", null, true);
            echo "</p>
        <tr>
            <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "username", array()), "html", null, true);
            echo "</td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </table>-->
<table class=\"table table-hover\">
  <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 18
            echo "    <tr>
        <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "username", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "creationDate", array()), "html", null, true);
            echo "</td>
        <td><a href='index.php?action=blog&id=";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", array()), "html", null, true);
            echo "' class='btn btn-secondary'>Consulter</a></td>
    </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </tbody>
</table>

</div>";
    }

    public function getTemplateName()
    {
        return "Blogs/allBlogs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 25,  78 => 22,  74 => 21,  70 => 20,  66 => 19,  63 => 18,  59 => 17,  54 => 14,  45 => 11,  41 => 10,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h1> Tout les blogs</h1>

<div id=\"nav\">

<!--    <table>
        {% for blog in blogs %}
        <p>{{dump(item)}}</p>
        <tr>
            <td>{{blog.title}}</td>
            <td>{{blog.username}}</td>
        </tr>
        {% endfor %}
    </table>-->
<table class=\"table table-hover\">
  <tbody>
        {% for blog in blogs %}
    <tr>
        <td>{{blog.title}}</td>
        <td>{{blog.username}}</td>
        <td>{{blog.creationDate}}</td>
        <td><a href='index.php?action=blog&id={{blog.id}}' class='btn btn-secondary'>Consulter</a></td>
    </tr>
        {% endfor %}
  </tbody>
</table>

</div>", "Blogs/allBlogs.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Blogs\\allBlogs.html");
    }
}
