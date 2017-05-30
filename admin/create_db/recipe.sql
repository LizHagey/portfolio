-- create and select the database
DROP DATABASE IF EXISTS topaller_recipe;
CREATE DATABASE topaller_recipe;
USE topaller_recipe;  -- MySQL command

-- create the tables
CREATE TABLE categories (
  categoryID       INT(11)        NOT NULL   AUTO_INCREMENT,
  categoryName     VARCHAR(255)   NOT NULL,
  PRIMARY KEY (categoryID)
);

CREATE TABLE recipes (
  recipeID          INT(11)         NOT NULL   AUTO_INCREMENT,
  categoryID        INT(11)         NOT NULL,
  recipeName        VARCHAR(255)    NOT NULL,
  glutenFree        VARCHAR(1)      NOT NULL,
  dairyFree         VARCHAR(1)      NOT NULL,
  nutFree           VARCHAR(1)      NOT NULL,
  ingredients       TEXT            NOT NULL,
  directions        TEXT            NOT NULL,
  imageCode         VARCHAR(55)     NOT NULL,
  PRIMARY KEY (recipeID)
);

CREATE TABLE bridge (
  recipeID        INT(11)        NOT NULL,
  categoryID      INT(11)        NOT NULL,
  PRIMARY KEY (recipeID, categoryID)
);

-- insert data into the database
INSERT INTO categories VALUES
(1, 'Main'),
(2, 'Bread'),
(3, 'Dessert');

INSERT INTO recipes VALUES
(1, 1, 'Grindstaff Tacos', 'y', 'y', 'y', '1 lb ground beef\r\n\r2 grated potatoes\r\n\r1/4 tsp. garlic powder\r\n\r1 tsp. groundt thyme\r\n\r1/4 cup apple cider vinegar\r\n\r1/4 cup water\r\n\r1 tsp. salt\r\n\r 1/4 tsp. pepper\r\n\rcorn tortillas', 'Put all ingredients in a cake pan and mix well (you may need to use your hands).\r\n\r\nThen spread out the isture in the pan and cover with tin foil.\r\n\r\nBake at 350 for 1 1/2 to 2 hours\r\n\r\nPut the cooked meat into taco shells along with your favorite toppings.'),
(2, 3, 'Carmel Popcorn', 'y', 'n', 'y', '1/2 cup melted butter\r\n1 lb brown sugar\r\n1 cup Karo Syrup\r\n1 can sweetened condensed milk\r\n1 tsp. vanila\r\npopcorn(1 cup popcorn kernels popped in air popper. about 8 cups popped popcorn', 'Bring butter, brown sugar and Karo syrup to a boil\r\nAdd sweetened condensed milk, turn the heat down to medium and let boil stiring often, til it reaches a softball stage.\r\nremove from heat and stir in the vanilla.\r\nPour over popcorn and stir until coated with carmel.'),
(3, 2, 'Waffles', 'y', 'n', 'y', 'Gluten free flour (2 cups brown rice flour - 1/2 cup potato starch - 1/3 cup tapioca starch)\r\n3 tsp. Xanthum gum\r\n2 Tbsp. plus 2 tsp. Baking powder\r\n1 1/3 tsp. salt\r\n2/3 cup sugar\r\n1/2 cup melted butter\r\n1/4 cup olive oil\r\n1 cup milk\r\n4 eggs', 'Mix with hand mixer or whisk until lumps are gone\r\nLadle about 1/2 cup mixture into pre-heated waffle iron and cook until golden brown.'),
(4, 3, 'No Bake Cookies', 'y', 'n', 'n', '2 cups sugar\r\n\r1/2 cup milk\r\n\r3 teaspoons cocoa\r\n\r1 stick butter\r\n\rA pinch of salt\r\n\r3 cups quick oats\r\n\r1/3 cup peanut butter\r\n\r1 teaspoon vanilla', 'Combine sugar, milk, cocoa, butter and salt and bring to boil for 1 minute.\r\n\rQuickly add Oats, peanut butter, and vanilla and mix well\r\n\rDrop on wax paper and chill'),
(5, 1, 'Chicken Enchiladas', 'y', 'n', 'n', '2 cups cooked chicken chopped into 1/2 inch pieces\r\n\rGluten free enchilada sauce\r\n\rCheese\r\n\rOlives(optional)\r\n\rOnions (optional)\r\n\rCorn tortillas', 'Mix some of the enchilada sauce with the chicken\r\n\rCoat tortillas in the enchilada sauce\r\n\rPlace in the pan and put the chicken mixture in the shell\r\n\rWrap chicken with the tortilla and rotate so that the fold is on the bottom\r\n\rContinue until chicken mixture is gone\r\n\rPour the remaining sauce over the enchiladas\r\n\rSprinkle grated cheese on top\r\n\rBake at 350 for 8-12 minutes\r\n\rSprinkle olives and onions on and serve'),
(6, 1, 'Spam Musubi', 'y', 'y', 'y', '1 Can Spam\r\n\rSeaweed wrap (Nori)\r\n\rFurikake (sprinkle)\r\n\r2 Tbsp. brown sugar\r\n\r1/4 cup Aloha shoyu (soy Sauce)\r\n\r3 cups Calrose Rice', 'Cut spam in half, then half again, then half again... until you have 8 pieces\r\n\rPour 1/4 cup shoyu and 2 Tbsp. brown sugar in frying pan andd stir\r\n\rFry spam in the mixture about 3 minutes, turning until coated and brown\r\n\rLay seaweed out on surface; center mold on seaweed; and put rice in mold.\r\n\rPut spam slice on the rice\r\n\rSprinkle Furikake on the spam, then add another layer of rice\r\n\rPush it down with a wet mold lid and remove mold bace while holding the lid down\r\n\rRimove lid and wrap the seaweed, sealing it with water'),
(7, 2, 'Gluten Free Bread', 'y', 'y', 'n', '1 cup warm almond milk\r\n\r1 Tbsp. yeast\r\n\r1/2 cup apple juice (any type of juice or water will work)\r\n\r3 eggs\r\n\r1/3 cup olive oil\r\n\r1/3 cup honey\r\n\r2 cups brown rice flour\r\n\r1 cup almond flour\r\n\r1 Tbsp. Xanthun gum\r\n\r1 tsp. apple cider vinegar\r\n\r1/4 tsp. salt', 'Mix the almond milk, yeast, apple juice, eggs, olive oil and honey. Add the remaining ingredients and mix well.\r\n\rPut dough in a bread pan and cover with a damp towel and let rise until dough reaches the top of the bread pan\r\n\rBake at 350 degrees for 20 minutes\r\n\rCover bread with tinfoil and continue to bake for another 20 minutes until done.\r\n\rBread is done when thermometer inserted reaches 150 degrees');

CREATE TABLE users (
ID              INT(11)       NOT NULL    AUTO_INCREMENT     PRIMARY KEY, 
username        VARCHAR(60), 
password        VARCHAR(60)
);


