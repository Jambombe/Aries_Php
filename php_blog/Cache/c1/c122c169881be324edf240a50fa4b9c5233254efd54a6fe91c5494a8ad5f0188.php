<?php

/* connexion.html */
class __TwigTemplate_c5bdaa769665cb0a99a4502ab56b1e7f1bcfcc1f2edead72820a7c0c29c4c224 extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Connexion</h5>

        <form action='Lib/loginUser.php' method='POST'>
            <label>Pseudo <input type='text' name='username' required></label></br>
            <label>Mot de passe <input type='password' name='psw' required></label></br>
            </br>
            <input type=\"submit\" name=\"Valider\" value=\"Se connecter\" class=\"btn btn-primary\">
        </form>

        <!--<a href=\"Lib/connectUser.php\" class=\"btn btn-primary\">Se connecter</a>-->
      </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Inscription</h5>

        <form action='Lib/createUser.php' method='POST'>
            <label>Pseudo <input type='text' name='username' required></label></br>
            <label>Mot de passe <input type='password' name='psw' required></label></br>
            <!--<label>Répéter le mot de passe <input type='password' name='psw' required></label>-->
            </br>
            <!--<input type='submit' class=\"btn btn-primary\" value='Valider'>-->
            <input type=\"submit\" name=\"Valider\" value=\"S'inscrire\" class=\"btn btn-primary\">
            <!--<button type='submit' class=\"btn btn-primary\" name=\"Valider\">ou</button>-->
            
        </form>

      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "connexion.html";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"row\">
  <div class=\"col-sm-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Connexion</h5>

        <form action='Lib/loginUser.php' method='POST'>
            <label>Pseudo <input type='text' name='username' required></label></br>
            <label>Mot de passe <input type='password' name='psw' required></label></br>
            </br>
            <input type=\"submit\" name=\"Valider\" value=\"Se connecter\" class=\"btn btn-primary\">
        </form>

        <!--<a href=\"Lib/connectUser.php\" class=\"btn btn-primary\">Se connecter</a>-->
      </div>
    </div>
  </div>
  <div class=\"col-sm-6\">
    <div class=\"card\">
      <div class=\"card-body\">
        <h5 class=\"card-title\">Inscription</h5>

        <form action='Lib/createUser.php' method='POST'>
            <label>Pseudo <input type='text' name='username' required></label></br>
            <label>Mot de passe <input type='password' name='psw' required></label></br>
            <!--<label>Répéter le mot de passe <input type='password' name='psw' required></label>-->
            </br>
            <!--<input type='submit' class=\"btn btn-primary\" value='Valider'>-->
            <input type=\"submit\" name=\"Valider\" value=\"S'inscrire\" class=\"btn btn-primary\">
            <!--<button type='submit' class=\"btn btn-primary\" name=\"Valider\">ou</button>-->
            
        </form>

      </div>
    </div>
  </div>
</div>", "connexion.html", "C:\\Users\\Aries\\Documents\\NetBeansProjects\\php_blog\\Views\\connexion.html");
    }
}
