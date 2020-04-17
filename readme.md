1) Ecrire une interface qui obligera une classe à implémenter la fonction login prenant en
paramètre un user et un password (0.5 point)

            <?php
                interface InterfaceName{
                    public function login($user, $password);
                }
            ?> 

2) Citez 6 méthodes magiques. Expliquez à quelle moment elles sont déclenchées et les
paramètres qu’elles prennent. (1.5 points)

            <?php
            function __construct(); //appelé lors d'un new ObjectName, initialise l'objet
            function __destruct(); //appelé à la fin du script ou explicitement par le dev, détruit l'objet
            function __set($name, $value); //passe une valeur $value à une propriété $name à laquelle on n'a pas accès (droits insuffisants, ou inexistance de l'attribut)
            function __get($name); //lecture de donnée d'une propriété $name à laquelle on n'a pas accès (droits insuffisants, ou inexistance de l'attribut)
            function __isset($name); //renvoie un boolean, appelé après isset($name) qui vérifie l'existence d'une propriété $name à laquelle on n'a pas accès (droits insuffisants, ou inexistance de l'attribut)
            function __unset($name); //renvoie un boolean, appelé après unset($name) qui détruit une propriété $name à laquelle on n'a pas accès (droits insuffisants, ou inexistance de l'attribut)
            ?>

3) Je suis une méthode magique appelé implicitement à la fin d’un script. Qui suis-je ? (1
point)

    <?php
        function __destruct();    
    ?>

4) Je suis une classe qui pourra être hérité mais qui ne pourra pas être instancier (impossible
de faire new ...). Qui suis-je et comment faire pour me créer ? (1 point)

    une classe abstraire, par exemple un parent d'une classe.

    <?php
        class Child extends Parent{
            public function __construct(){
                parent::__construct();
            }
        }   
    ?>

5) Donnez 3 types de visibilité sur un attribut expliquez la différence. (1.5 points)

    public -> l'attribut est utilisable en dehors de sa classe.
    protected -> l'attribut est utilisable exclusivement par les enfant.
    private -> l'attribut est inutilisable en dehors de sa classe.

6) Expliquez ce qu’est une exception. Décrire les éléments qui la compose (1 point)

    une exception est un objet Exception qui sert à générer des messages d'arreurs.
    on peut s'en servir avec un 
        throw new Exception('message d'erreur personnalisé');
    ou à l'aide d'une methode try/catch
        try{
            //l'action à effectuer
        } catch (Exception $maVariableException){
            //action avec ma variable comme par exemple
            var_dump($maVariableException);
        }

7) Dans un modèle MVC quel est le rôle du router. Quelle est la variable super globale qu’il
utilise pour accomplir son rôle ? (1 point)

    le routeur, souvent le fichier index.php sert à redirigé l'utilisateur, 
    et lui présenter les composants qui font suite à son interraction avec le site
    (remplir un formulaire, soumettre un forumulaire...)
    il utilise la superglobale $_GET, qui permet de récupérer des infos via l'url
    par exemple : 
        index.php?controller=default&action=home

8) Expliquez les avantages de l’utilisation d’un pattern MVC. (1.5 points)

    un patern MVC structure un projet avec des fichiers séparés, conçis et bien rangé
    il permet une meilleure maintenance, un meilleur travail à plusieurs dev, et des modifications facilités,
    il est un standard du web et le comprendre et le partager est donc plus simple,

9) Détaillez les éléments qui composent un pattern MVC (1 point)

    il sépare les fichiers SQL base de données (MODEL) des front utilisateur html, css, js (VIEW) et du traitement fait en php (CONTROLLER)
