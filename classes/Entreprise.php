<?php



class Entreprise {

    // attributs
    private string $raisonSociale;
    private DateTime $dateCreation;
    private string $adresse;
    private string $cp;
    private string $ville;
    // *avant contrat, avec contrat -> tout ce qui a attrait à employe il faut le retirer
    // private array $employes;
    private array $contrats;


public function __construct(string $raisonSociale, string $dateCreation, string $adresse, string $cp, string $ville) {
    $this->raisonSociale = $raisonSociale;
    $this->dateCreation = new DateTime($dateCreation);
    // *new DateTime permet de ne pas avoir d'erreur, ça transforme en chaine de caractère
    $this->adresse = $adresse;
    $this->cp = $cp;
    $this->ville = $ville;
    // $this->employes = [];
    $this->contrats = [];
}


    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;

        return $this;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;

        return $this;
    }
 
    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }
 
    public function getCp()
    {
        return $this->cp;
    }

    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    public function getVille()
    {
        return $this->ville;
    }

    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }
    
    public function getAdresseComplete(){
        return $this->adresse." ".$this->cp." ".$this->ville;
    }
    
    // * a retirer quand il y a l'objet contrat
    // public function getEmployes()
    // {
        //     return $this->employes;
        // }
        
        // public function setEmployes($employes)
        // {
            //     $this->employes = $employes;
            
            //     return $this;
            // }
            
            // // *permet à la classe entreprise d'ajouter un employe dans le tableau employes
            // public function addEmploye(Employe $employe){
                //     $this->employes[] =$employe;
                // }    
                
                // public function afficherEmployes(){
                    //     $result = "<h2>Employés de $this</h2>";
                    
                    //     foreach($this->employes as $employe){
                        //         $result .= $employe."<br>";
                        //     }
                        //     return $result;
                        // }
                        
    public function getContrats(){
        return $this->contrats;
    }
                    
    public function setContrats($contrats){
        $this->contrats = $contrats;
                    
        return $this;
    }

    // * dès qu'il y a un tableau
    // *il faut créer une méthode pour ajouter un element dans le tableau
    public function addContrat(Contrat $contrat){
        return $this->contrats[] = $contrat;
    }

    public function afficherEmployes(){
        $result = "<h2> Employés de $this <h2>";
        // * pas besoin de concaténer avec une variable

        foreach ($this->contrats as $contrat){
            $result .= $contrat->getEmploye(). " (".$contrat->getDateEmbauche()->format("d-m-Y"). ")";
        }
        return $result;
    }

    public function getInfos(){
        return $this
        //* ->getRaisonSociale()  est optionnel si le __toString existe 
        ." a été crée le ".$this->getDateCreation()->format("d- m- y"). " se situe au " . $this->getAdresseComplete()." <br>";
    }
    // * quand on demande un public function getMachin(){ return $this "seul" sans le ->getX  renvoi directement au $this du __toString


    // * mettre le __toString tout en bas pour pouvoir toujours le trouver facilement
    // *ne pas mettre tout dans le __toString, on met l'élément principal (pour entreprise c'est raison sociale voire date creation, pour auteur c'est nom prénom pas plus)
    public function __toString(){
        return $this->getRaisonSociale();
    }
    // public function __toString(){
    //     return $this->getRaisonSociale()." (".$this->getDateCreation()->format("Y").")";
    // }
    // *avec date creation

}