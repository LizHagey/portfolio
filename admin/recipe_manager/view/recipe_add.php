<?php include '../view/header.php'; ?>
<main>
    <h1>Add Recipe</h1>
    <form action="index.php" method="post" id="add_recipe_form">
        <input type="hidden" name="action" value="add_recipe">

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
        <input type="text" name="recipeName"/>
        <br>
        
        <label>Check if applies to recipe:</label><br>
        <input type="checkbox" name="glutenFree">Gluten Free<br>
        
        <input type="checkbox" name="dairyFree">Dairy Free<br>
        
        <input type="checkbox" name="nutFree">Nut Free<br><br>
        
        <label>Ingredients:</label>
        <textarea name="ingredients" cols="30" rows="20"></textarea>
        <br>
        
        <label>Directions:</label>
        <textarea name="directions" cols='30' rows='20'></textarea>
        <br><br>

        <label>&nbsp;</label>
        <input type="submit" value="Add Recipe" />
        <br>
    </form>
    <p class="last_paragraph">
        <a href="index.php?action=list_recipes">View Recipe List</a>
    </p>
    
    <div id="formatting_directions">
        <h2>How to format the Description and Ingredient entry</h2>
        <ul>
            <li>Use two returns to start a new paragraph.</li>
            <li>Use an asterisk to mark items in a bulleted list.</li>
            <li>Use one return between items in a bulleted list.</li>
            <li>Use standard HMTL tags for bold and italics.</li>
        </ul>
    </div>
</main>
<?php include '../view/footer.php'; ?>

