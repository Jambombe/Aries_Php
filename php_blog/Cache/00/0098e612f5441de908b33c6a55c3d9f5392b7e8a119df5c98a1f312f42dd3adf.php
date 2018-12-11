<?php

/* Users/newUser.html */
class __TwigTemplate_a3e866e0588a5f6608c05d4e837f8559b1687d6598ed7267050405b0886baac6 extends Twig_Template
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
<form action=\"Lib/createUser.php\" method=\"POST\">
    <label>Username <input type=\"text\" maxlength=\"64\" name=\"username\" required></label> </br>
    <label>Password <input type=\"password\" maxlength=\"64\" name=\"psw\" required></label> </br>
    <input type=\"submit\" name=\"Valider\">
</form>";
    }

    public function getTemplateName()
    {
        return "Users/newUser.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<form action=\"Lib/createUser.php\" method=\"POST\">
    <label>Username <input type=\"text\" maxlength=\"64\" name=\"username\" required></label> </br>
    <label>Password <input type=\"password\" maxlength=\"64\" name=\"psw\" required></label> </br>
    <input type=\"submit\" name=\"Valider\">
</form>", "Users/newUser.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\Users\\newUser.html");
    }
}
