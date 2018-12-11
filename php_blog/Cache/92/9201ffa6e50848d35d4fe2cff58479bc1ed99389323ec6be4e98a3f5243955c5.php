<?php

/* menuLogout.html */
class __TwigTemplate_d5d6d67dfcdd53268a1e8c40baa5e0b4f36ebe085cdb0746f0d10f392d3b895e extends Twig_Template
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
        echo "<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"index.php\">Blog du Ciel</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"index.php?action=allblogs\">Tout les Blogs</a>
      </li>
    </ul>
    <!--<form class=\"form-inline my-2 my-lg-0\">-->
      <!--<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">-->
      <a class=\"btn btn-outline-primary my-2 my-sm-0\" href=\"index.php?action=connect\">Connexion</a>
    <!--</form>-->
  </div>
</nav>";
    }

    public function getTemplateName()
    {
        return "menuLogout.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
  <a class=\"navbar-brand\" href=\"index.php\">Blog du Ciel</a>
  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
    <ul class=\"navbar-nav mr-auto\">
      <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"index.php?action=allblogs\">Tout les Blogs</a>
      </li>
    </ul>
    <!--<form class=\"form-inline my-2 my-lg-0\">-->
      <!--<input class=\"form-control mr-sm-2\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">-->
      <a class=\"btn btn-outline-primary my-2 my-sm-0\" href=\"index.php?action=connect\">Connexion</a>
    <!--</form>-->
  </div>
</nav>", "menuLogout.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\menuLogout.html");
    }
}
