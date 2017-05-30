<?php
ini_set('display_errors', 1);
//$lifetime = 60 * 60 * 24 * 2;    // 2 days in seconds
//session_set_cookie_params($lifetime, '/');
//session_start();
require('../util/main.php');
require('../util/tags.php');
require('../model/database.php');
require('../model/recipe_db.php');
require('../model/category_db.php');

$action = filter_input(INPUT_POST, 'action');
    if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_recipes';
    }
}

switch( $action ) {
    case 'list_recipes' :
        $category_id = filter_input(INPUT_GET, 'category_id', 
            FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $category_id = 1;
        }
        $category_name = get_category_name($category_id);
        $categories = get_categories();
        $recipes = get_recipes_by_category($category_id);
        include('../recipe_manager/view/recipe_list.php');
        break;

    case 'delete_recipe' :
       $recipe_id = filter_input(INPUT_POST, 'recipe_id', 
            FILTER_VALIDATE_INT);
        $category_id = filter_input(INPUT_POST, 'category_id', 
                FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE ||
                $recipe_id == NULL || $recipe_id == FALSE) {
            $error = "Missing or incorrect recipe id or category id.";
            include('../errors/error.php');
        } else { 
            delete_recipe($recipe_id);
            header("Location: .?category_id=$category_id");
        } 
        break;
        
    case 'show_add_form' :
        $categories = get_categories();
        include('../recipe_manager/view/recipe_add.php'); 
        break;
    
    case 'list_categories' :
        $categories = get_categories();
        include('../recipe_manager/view/category_list.php');
        break;
    
    case 'add_category' :
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
        if ( $name == NULL || $name == FALSE) {
          $error = "Please provide name";
          include('../errors/error.php');
        }else {
            add_category($name);
            header('Location: .?action=list_categories');
        }
        break;
        
    case 'delete_category' :
        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
        if ($category_id == NULL || $category_id == FALSE) {
            $error = "Missing category ID";
            include('../errors/error.php');
        }else {
            delete_category($category_id);
            header('Location: .?action=list_categories');
        }
        break;
        
    case 'add_recipe' :
        $category_id = filter_input(INPUT_POST, 'category_id', 
            FILTER_VALIDATE_INT);
        $recipeName = filter_input(INPUT_POST, 'recipeName');
        $glutenFree = filter_input(INPUT_POST, 'glutenFree');
        $dairyFree = filter_input(INPUT_POST, 'dairyFree');
        $nutFree = filter_input(INPUT_POST, 'nutFree');
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $directions = filter_input(INPUT_POST, 'directions');
        if ($category_id == NULL || $category_id == FALSE || $recipeName == NULL || 
                $ingredients == NULL || $directions == NULL) {
            $error = "Invalid recipe data. Check all fields and try again.";
            include('../errors/error.php');
        } else { 
            add_recipe($category_id, $recipeName, $glutenFree, $dairyFree, $nutFree, $ingredients, $directions);
            header("Location: .?category_id=$category_id");
        }
        break;
        
    case 'show_edit_form' :
        $recipe_id = filter_input(INPUT_POST, 'recipe_id', 
                FILTER_VALIDATE_INT);
        $categories = get_categories();
        $recipe = get_recipe($recipe_id);
        include('../recipe_manager/view/recipe_edit.php'); 
        break;
    
    case 'edit_recipe' :
        $category_id = filter_input(INPUT_POST, 'category_id', 
                FILTER_VALIDATE_INT);
        $recipeName = filter_input(INPUT_POST, 'recipeName');
        $glutenFree = filter_input(INPUT_POST, 'glutenFree');
        $dairyFree = filter_input(INPUT_POST, 'dairyFree');
        $nutFree = filter_input(INPUT_POST, 'nutFree');
        $ingredients = filter_input(INPUT_POST, 'ingredients');
        $directions = filter_input(INPUT_POST, 'directions');
        $recipe = filter_input(INPUT_POST, 'recipeID');
        if ($category_id == NULL || $category_id == FALSE) {
            $error = "Choose a category.";
            include('../errors/error.php');
        }else { 
            edit_recipe($recipe, $category_id, $recipeName, $glutenFree, $dairyFree, $nutFree, $ingredients, $directions);
            header("Location: .?category_id=$category_id");
        } 
        break;
    
}



