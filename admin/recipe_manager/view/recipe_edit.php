<?php include '../view/header.php'; ?>
<main>
    <h1>Edit Recipe</h1>
    <form action="index.php" method="post" id="edit_recipe">
        <input type="hidden" name="action" value="edit_recipe">

        <label>Category:</label>
        <select name="category_id">
        <?php foreach ( $categories as $category ) : ?>
            <option value="<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </option>
        <?php endforeach; ?>
        </select>
        <br>

        <label>Name:</label>
        <input type="text" name="recipeName" value='<?php echo htmlspecialchars($recipe['recipeName'])?>'/>
        <br>
        
        <input type="checkbox" id="allergy" name="glutenFree" <?php if ($recipe['glutenFree'] == 'y') echo 'checked'; ?>>Gluten Free<br>
        
        <input type="checkbox" id="allergy" name="dairyFree" <?php if ($recipe['dairyFree'] == 'y') echo 'checked'; ?>>Dairy Free<br>
        
        <input type="checkbox" id="allergy" name="nutFree" <?php if ($recipe['nutFree'] == 'y') echo 'checked'?>>Nut Free<br>
        <br>

        <label>Ingredients:</label>
        <textarea name="ingredients" cols="30" rows="20" ><?php echo $recipe['ingredients'] ?></textarea>
        <br>
        
        <label>Directions: </label>
        <textarea name="directions" cols="30" rows="20"><?php echo $recipe['directions']?></textarea>
        <br><br><br>

        <input type="hidden" name="recipeID" value='<?php echo $recipe['recipeID']?>'/>
        <br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Edit Recipe" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_recipes">View Recipe List</a>
    </p>

</main>
<?php include '../view/footer.php'; ?>

