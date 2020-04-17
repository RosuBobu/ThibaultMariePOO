
<?php
    class RavioleManager extends DBManager{
        
        public function __construct(){
            parent::__construct();
        }

        public function selectAll(){
            $ravioles = [];
            $sql = 'SELECT * FROM ravioles';
            foreach($this->db->query($sql) as $row){
                $ravioles[] = new Raviole($row['id'], $row['title'], $row['main_ingredient'], $row['recipe'], $row['url']);
            }
            return $ravioles;
        }

        public function insert(Raviole $raviole){
            $title = $raviole->getTitle();
            $main_ingredient = $raviole->getMainIngredient();
            $recipe = $raviole->getRecipe();
            $url = $raviole->getUrl();
            $req = $this->db->prepare('INSERT INTO ravioles(main_ingredient, title, recipe, url) VALUES (?,?,?,?)');
            $req->bindParam(1, $main_ingredient);
            $req->bindParam(2, $title);
            $req->bindParam(3, $recipe);
            $req->bindParam(4, $url);
            $req->execute();
            $raviole->setID($this->db->lastInsertId());
        }

        public function delete($id){
            $req = $this->db->prepare('DELETE FROM ravioles WHERE id = ?');
            $req->bindParam(1, $id);
            $req->execute();
        }

        public function select($id){
            // echo('<br>the id gets there : select() in  raviole-manager.php');
            // var_dump($id);
            $req = $this->db->prepare('SELECT * FROM ravioles WHERE id=?');
            $req->bindParam(1, $id);
            $req->execute();
            $res = $req->fetch();
            $raviole = new Raviole($res['id'], $res['main_ingredient'], $res['title'], $res['recipe'], $res['url']);
            // echo('<br> raviole_manager.php >> select($id) >> return $raviole :var_dump($raviole) : <br>');
            // var_dump($raviole);
            return $raviole;
        }

        public function update(Raviole $raviole){
            $id = $raviole->getId();
            $title = $raviole->getTitle();
            $main_ingredient = $raviole->getMainIngredient();
            $recipe = $raviole->getRecipe();
            $url = $raviole->getUrl();
            $req = $this->db->prepare('UPDATE ravioles SET main_ingredient=?, title=?, recipe=?, url=? WHERE id=?');
            $req->bindParam(1, $main_ingredient);
            $req->bindParam(2, $title);
            $req->bindParam(3, $recipe);
            $req->bindParam(4, $url);
            $req->bindParam(5, $id);
            // if (isset($url)){
            //     $req->bindParam(4, $url);
            // } else {
            //     $req->bindParam(4, null);
            // }
            $req->execute();
        }
    }
?>
