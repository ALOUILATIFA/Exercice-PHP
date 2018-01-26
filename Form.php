<?php

class Form
{

    /*
     * cr�ez une classe nomm�e Form repr�sentant un formulaire HTML. . Une m�thode setText() doit
     * permettre d�ajouter une zone de texte. Les param�tres de ces m�thodes doivent correspondre aux attributs des �l�ments HTML
     * correspondants. La m�thode getForm() doit retourner tout le code HTML de cr�ation du formulaire. Cr�ez
     * des objets Form, et ajoutez-y deux zones de texte et un bouton d�envoi. Testez l�affichage obtenu
     */
    protected $codeHtml;

    protected $codeEntete;

    protected $codetext;

    protected $codesubmit;

    public function __construct($action, $titre, $methode = "POST")
    {
        /*
         * Le constructeur doit cr�er le code d�en-
         * t�te du formulaire en utilisant les �l�ments <form> et <fieldset>
         */
        $this->codeEntete = "<form action=\"$action\" method=\"$methode\">";
        $this->codeEntete .= "<fieldset><legend><b>$titre</b></legend>";
    }

    /**
     * Une m�thode setText() doit
     * permettre d�ajouter une zone de texte.
     */
    public function setText($name, $libelle, $methode = "POST")
    {
        $this->codetext .= "<b>$libelle</b><input type=\"text\" name=\"$name\" /><br /><br />";
    }

    /**
     * Une m�thode setSubmit() doit permettre d�ajouter un bouton
     * *d�envoi.
     */
    public function setSubmit($name = "envoi", $value = "Envoyer")
    {
        $this->codesubmit = "<input type=\"submit\" name=\"$name\" value=\"Envoyer\"/><br />";
    }

    /**
     * La m�thode getForm() doit retourner tout le code HTML de cr�ation du formulaire.
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
$myform = new form("Form.php", "Acc�s au site", "post");
$myform->settext("nom", "Votre nom :  ");
$myform->settext("code", "Votre code : ");
$myform->setsubmit();
$myform->getform();




