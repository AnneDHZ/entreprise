<?php



class Employe {

    // attributs
    private string $nom;
    private string $prenom;
    private string $email;
    // *creation de l'objet entreprise (avant de créer l'objet contrat)
    // private Entreprise $entreprise;
    // *il faut enlever les getter setter de l'entreprise aussi
    private array $contrats;
    


public function __construct(string $nom, string $prenom, string $email,
// *retirer tout ce qui fonctionne avec entreprise
//  Entreprise $entreprise,
  ) {
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->email = $email;
    // $this->entreprise = $entreprise;
    // * on ajout ici, dans l'entreprise spécifiée dans le constructeur on ajoute l'employe (avant objet contrat)
    // $this->entreprise ->addEmploye($this);
    $this->contrats = [];
}


    public function getNom()
    {
        return $this->nom;
    }
 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }
 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }
    
    // *il faut les retirer quand il y a l'objet contrat
    // public function getEntreprise()
    // {
    //     return $this->entreprise;
    // }
    
    // public function setEntreprise(Entreprise $entreprise)
    // {
    //     $this->entreprise = $entreprise;
    
    //     return $this;
    // }

    // public function getInfos(){
    //     return $this." travaille dans l'entreprise ".$this->entreprise->getRaisonSociale();
    // }
        
    public function afficherEntreprises(){
        $result = "<h2> Entreprise de $this <h2>";
        // * pas besoin de concaténer avec une variable

        foreach ($this->contrats as $contrat){
            $result .= $contrat->getEmploye(). " (".$contrat->getDateEmbauche(). ")";
        }
        return $result;
    }

    public function getContrats()
    {
        return $this->contrats;
    }

    public function setContrats($contrats)
    {
        $this->contrats = $contrats;

        return $this;
    }

    // * dès qu'il y a un tableau
    // *il faut créer une méthode pour ajouter un element dans le tableau
    public function addContrat(Contrat $contrat){
        return $this->contrats[] = $contrat;
    }

    public function __toString(){
        return $this->prenom." ".$this->nom;
    }

}