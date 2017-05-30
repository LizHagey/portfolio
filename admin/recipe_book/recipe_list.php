<?php include '../view/header.php'; ?>
<main>
    <h1>Recipe Book</h1>

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
        <ul class="nav">
            <!-- display links for products in selected category -->
            <?php foreach ($recipes as $recipe) : ?>
            <li>
                <a href="?action=view_recipe&amp;recipe_id=<?php 
                          echo $recipe['recipeID']; ?>">
                    <?php echo $recipe['recipeName']; ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>
<?php include '../view/footer.php'; ?>
