<?php
function get_recipes_by_category($category_id) {
    global $db;
    $query = 'SELECT * FROM recipes
              WHERE recipes.categoryID = :category_id
              ORDER BY recipeID';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":category_id", $category_id);
    $statement->execute();
    $recipe = $statement->fetchAll();
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function get_recipe($recipe_id) {
    global $db;
    $query = 'SELECT * FROM recipes
              WHERE recipeID = :recipe_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(":recipe_id", $recipe_id);
    $statement->execute();
    $recipe = $statement->fetch();
    $statement->closeCursor();
    return $recipe;
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function delete_recipe($recipe_id) {
    global $db;
    $query = 'DELETE FROM recipes
              WHERE recipeID = :recipe_id';
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':recipe_id', $recipe_id);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function add_recipe($category_id, $recipeName, $glutenFree, $dairyFree, $nutFree, $ingredients, $directions) {
    global $db;
    $query = 'INSERT INTO recipes
                 (categoryID, recipeName, glutenFree, dairyFree, nutFree, ingredients, directions)
              VALUES
                 (:category_id, :recipeName, :glutenFree, :dairyFree, :nutFree, :ingredients, :directions)';
    
        $glutenFree = ($glutenFree) ? 'y' : 'n';
        $dairyFree = ($dairyFree) ? 'y' : 'n';
        $nutFree = ($nutFree) ? 'y' : 'n';
    
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':recipeName', $recipeName);
    $statement->bindValue(':glutenFree', $glutenFree);
    $statement->bindValue(':dairyFree', $dairyFree);
    $statement->bindValue(':nutFree', $nutFree);
    $statement->bindValue(':ingredients', $ingredients);
    $statement->bindValue(':directions', $directions);
    $statement->execute();
    $statement->closeCursor();
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}

function edit_recipe($recipe, $category_id, $recipeName, $glutenFree, $dairyFree, $nutFree, $ingredients, $directions) {
    global $db;
    
     $query = 'UPDATE recipes
        SET 
        categoryID = :category_id, 
        recipeName = :recipeName,
        glutenFree = :glutenFree,
        dairyFree = :dairyFree,
        nutFree = :nutFree,
        ingredients = :ingredients,
        directions = :directions
        WHERE recipeID = :recipe';
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
        $glutenFree = ($glutenFree) ? 'y' : 'n';
        $dairyFree = ($dairyFree) ? 'y' : 'n';
        $nutFree = ($nutFree) ? 'y' : 'n';
    
    try {
    $statement = $db->prepare($query);
    $statement->bindValue(':category_id', $category_id);
    $statement->bindValue(':recipeName', $recipeName);
    $statement->bindValue(':glutenFree', $glutenFree);
    $statement->bindValue(':dairyFree', $dairyFree);
    $statement->bindValue(':nutFree', $nutFree);
    $statement->bindValue(':ingredients', $ingredients);
    $statement->bindValue(':directions', $directions);
    $statement->bindValue(':recipe', $recipe);
    $statement->execute();
    $statement->closeCursor();
    echo "Successfully updated the recipe";
    }catch(PDOException $e) {
            display_db_error($e->getMessage());
    }
}
?>

