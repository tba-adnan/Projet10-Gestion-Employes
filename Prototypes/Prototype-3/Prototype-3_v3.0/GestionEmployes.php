<?php
 include 'Employe.php';
class GestionEmployes{

    private $Connection = Null;

    private function getConnection(){
        if(is_null($this->Connection)){
            $this->Connection = mysqli_connect('localhost', 'root', 'admin', 'GestionEmploye');
            // check connection
            if(!$this->Connection){
                $message =  'Erreur de connexion: ' . mysqli_connect_error(); 
                throw new Exception($message); 
            }
        }
        
        return $this->Connection;
        
    }
    
    public function Ajouter($employe){

        $nom = $employe->getNom();
        $prenom = $employe->getPrenom();
        $dateNaissance = $employe->getDateNaissance();
        $sql = "INSERT INTO Employes(Nom, Prenom, DateNaissance) 
                                VALUES('$nom', '$prenom', '$dateNaissance')"; 

        mysqli_query($this->getConnection(), $sql);
    }

    

    public function RechercherTous(){
        $sql = 'SELECT Id, Nom, Prenom, DateNaissance FROM Employes';
        $query = mysqli_query($this->getConnection() ,$sql);
        $employes_data = mysqli_fetch_all($query, MYSQLI_ASSOC);

        $employes = array();
        foreach ($employes_data as $employe_data) {
            $employe = new Employe();
            $employe->setId($employe_data['Id']);
            $employe->setNom($employe_data['Nom']);
            $employe->setPrenom ($employe_data['Prenom']);
            $employe->setDateNaissance ($employe_data['DateNaissance']);
            array_push($employes, $employe);
        }
        return $employes;
    }


    public function RechercherParId($id){
        $sql = "SELECT * FROM Employes WHERE Id= $id";
        $result = mysqli_query($this->getConnection(), $sql);
        $employe_data = mysqli_fetch_assoc($result);
        $employe = new Employe();
        $employe->setId($employe_data['Id']);
        $employe->setNom($employe_data['Nom']);
        $employe->setPrenom ($employe_data['Prenom']);
        $employe->setDateNaissance ($employe_data['DateNaissance']);
        
        return $employe;
    }

    public function Supprimer($id){
        $sql = "DELETE FROM Employes WHERE Id= '$id'";
        mysqli_query($this->getConnection(), $sql);
    }

    public function Modifier($id,$nom,$prenom,$dateNaissance)
    {
        $sql = "UPDATE employes SET 
        Nom='$nom', Prenom='$prenom', DateNaissance='$dateNaissance'
        WHERE Id= $id";

        
        mysqli_query($this->getConnection(), $sql);

        
        if(mysqli_error($this->getConnection())){
            $msg =  'Erreur' . mysqli_errno($this->getConnection());
            throw new Exception($msg); 
        } 
    }

}
?>