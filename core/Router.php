<?php
class Router
{
    public static function run()
    {
        
        if (isset($_REQUEST['controller'])) {
            if ($_REQUEST['controller'] == "article") {
                require_once("../controllers/article.controller.php");
                $controller = new ArticleController();
            } else if ($_REQUEST['controller'] == "type") {
                require_once("../controllers/type.controller.php");
                $controller = new TypeController();
            }
            else if ($_REQUEST['controller'] == "categorie") {
                require_once("../controllers/categorie.controller.php");
                $controller = new CategorieController();
            }
        }else{
            require_once("../controllers/article.controller.php");
                $controller = new ArticleController();
        }
    }
}