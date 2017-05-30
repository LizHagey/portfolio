<?php include '../view/header.php'; ?>
<main>
    <h1>Recipe List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <section>
        <!-- display a table of recipes -->
        <h2><?php echo $category_name; ?></h2>
        <table>
            <tr>
                <th id="one">Name</th>
                <th id="allergy">Gluten Free</th>
                <th id="allergy">Dairy Free</th>
                <th id="allergy">Nut Free</th>
                <th id="wide">Ingredients</th>
                <th id="wide">Directions</th>
                <th id="two">&nbsp;</th>
                <th id="two">&nbsp;</th>
            </tr>
            <?php foreach ($recipes as $recipe) : ?>
            <tr>
                <td><?php echo $recipe['recipeName']; ?></td>
                <td id="allergy2"><?php echo $recipe['glutenFree']; ?></td>
                <td id="allergy2"><?php echo $recipe['dairyFree']; ?></td>
                <td id="allergy2"><?php echo $recipe['nutFree']; ?></td>
                <td class="wide"><?php echo $recipe['ingredients']; ?></td>
                <td><div id="wide2"><?php echo $recipe['directions']; ?></div></td>
                
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_recipe">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    <input type="hidden" name="category_id"
                           value="<?php echo $recipe['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
                <td><form action="index.php" method="post" id="edit_recipe">
                    <input type="hidden" name="action"
                           value="show_edit_form">
                    <input type="hidden" name="recipe_id"
                           value="<?php echo $recipe['recipeID']; ?>">
                    
                    
                    <input type="submit" value="Edit">
                </form></td>
            </tr>
            <?php endforeach; ?>
        </table>
        <p><a href="?action=show_add_form">Add Recipe</a></p>
        <p class="last_paragraph"><a href="?action=list_categories">List Categories</a></p>        
    </section>
</main>
<?php include '../view/footer.php'; ?>
