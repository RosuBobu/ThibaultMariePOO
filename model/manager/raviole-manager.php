
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
            $req = $this->db->prepare('INSERT INTO ravioles(title,main_ingredient, recipe, url) VALUES (?,?,?,?)');
            $req->bindParam(1, $title);
            $req->bindParam(2, $main_ingredient);
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
            $req = $this->db->prepare('SELECT * FROM ravioles WHERE id=?');
            $req->bindParam(1, $id);
            $req->execute();
            $res = $req->fetch();
            $raviole = new Raviole($res['id'],$res['title'],$res['main_ingredient'],$res['recipe'],$res['url']);
            return $raviole;
        }

        public function update(Raviole $raviole){
            $id = $raviole->getId();
            $title = $raviole->getTitle();
            $main_ingredient = $raviole->getMainIngredient();
            $recipe = $raviole->getRecipe();
            $url = $raviole->getUrl();
            $req = $this->db->prepare('UPDATE ravioles SET title=?,main_ingredient=?,recipe=?,url=? WHERE id=?');
            $req->bindParam(1, $title);
            $req->bindParam(2, $main_ingredient);            
            $req->bindParam(3, $recipe);
            $req->bindParam(4, $url);
            $req->bindParam(5, $id);
            $req->execute();
        }
    }
?>
