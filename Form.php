<?php

class Form
{

    /*
     * créez une classe nommée Form représentant un formulaire HTML. . Une méthode setText() doit
     * permettre d’ajouter une zone de texte. Les paramètres de ces méthodes doivent correspondre aux attributs des éléments HTML
     * correspondants. La méthode getForm() doit retourner tout le code HTML de création du formulaire. Créez
     * des objets Form, et ajoutez-y deux zones de texte et un bouton d’envoi. Testez l’affichage obtenu
     */
    protected $codeHtml;

    protected $codeEntete;

    protected $codetext;

    protected $codesubmit;

    public function __construct($action, $titre, $methode = "POST")
    {
        /*
         * Le constructeur doit créer le code d’en-
         * tête du formulaire en utilisant les éléments <form> et <fieldset>
         */
        $this->codeEntete = "<form action=\"$action\" method=\"$methode\">";
        $this->codeEntete .= "<fieldset><legend><b>$titre</b></legend>";
    }

    /**
     * Une méthode setText() doit
     * permettre d’ajouter une zone de texte.
     */
    public function setText($name, $libelle, $methode = "POST")
    {
        $this->codetext .= "<b>$libelle</b><input type=\"text\" name=\"$name\" /><br /><br />";
    }

    /**
     * Une méthode setSubmit() doit permettre d’ajouter un bouton
     * *d’envoi.
     */
    public function setSubmit($name = "envoi", $value = "Envoyer")
    {
        $this->codesubmit = "<input type=\"submit\" name=\"$name\" value=\"Envoyer\"/><br />";
    }

    /**
     * La méthode getForm() doit retourner tout le code HTML de création du formulaire.
     */
    public function getForm(){
        $this->codeHtml = "";
        $this->codeHtml .= $this->codeEntete;
        $this->codeHtml .= $this->codetext;
        $this->codeHtml .= $this->codesubmit;
        $this->codeHtml .= "</fieldset></form>";
        echo $this->codeHtml;
    }
}
echo " Test classe Form";
$myform = new form("Form.php", "Accès au site", "post");
$myform->settext("nom", "Votre nom :  ");
$myform->settext("code", "Votre code : ");
$myform->setsubmit();
$myform->getform();




