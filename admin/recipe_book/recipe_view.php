<?php include '../view/header.php'; ?>
<main>
    <aside>
        <h3>Categories</h3>
        <?php include('../view/categories_nav.php'); ?>
    </aside>
    <section>
        <h1 id="recipeViewHeading"><?php echo $recipeName; ?></h1>
        <div id="left_column">
            <p>
                <img id="mainImg" src="<?php echo $image_filename; ?>"
                    alt="<?php echo $image_alt; ?>" />
            </p>
        </div>
        <!-- added 8/5/2016 -->
        <?php $ingredient_tags = add_tags($ingredients); ?>
        <?php $direction_tags = add_tags($directions); ?>

        <div id="right_column">
            <p><b>Ingredients:</b> <?php echo $ingredient_tags; ?></p>
            <p><b>Directions:</b> <?php echo $direction_tags; ?></p>
            
            </form>
        </div>
    </section>
</main>
<?php include '../view/footer.php'; ?>

