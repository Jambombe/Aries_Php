<?php

/* Blogs/myBlogs.html */
class __TwigTemplate_e21c8c34096bf36e11310735322f4a8458ce96c82d5d7c5c76b637d0e8dfde39 extends Twig_Template
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
        echo "<h1>Mes blogs</h1>

<div id=\"blogs\">

    <table class=\"table table-hover\">
      <tbody>
            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["myblogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 8
            echo "        <tr>
            <td>";
            // line 9
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "title", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "creationDate", array()), "html", null, true);
            echo "</td>
            <td><a href='index.php?action=blog&id=";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", array()), "html", null, true);
            echo "' class='btn btn-secondary'>Consulter</a></td>
            <td><a href='index.php?action=delBlog&id=";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["blog"], "id", array()), "html", null, true);
            echo "' class='btn btn-danger'><i class=\"fas fa-trash-alt\"></i></a></td>
        </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </tbody>
    </table>

</div>
</br>
<div class=\"center\">
<button type=\"button\" class=\"btn btn-primary\">Créer un blog</button>
</div>";
    }

    public function getTemplateName()
    {
        return "Blogs/myBlogs.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  50 => 12,  46 => 11,  42 => 10,  38 => 9,  35 => 8,  31 => 7,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h1>Mes blogs</h1>

<div id=\"blogs\">

    <table class=\"table table-hover\">
      <tbody>
            {% for blog in myblogs %}
        <tr>
            <td>{{blog.title}}</td>
            <td>{{blog.creationDate}}</td>
            <td><a href='index.php?action=blog&id={{blog.id}}' class='btn btn-secondary'>Consulter</a></td>
            <td><a href='index.php?action=delBlog&id={{blog.id}}' class='btn btn-danger'><i class=\"fas fa-trash-alt\"></i></a></td>
        </tr>
            {% endfor %}
      </tbody>
    </table>

</div>
</br>
<div class=\"center\">
<button type=\"button\" class=\"btn btn-primary\">Créer un blog</button>
</div>", "Blogs/myBlogs.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Blogs\\myBlogs.html");
    }
}
