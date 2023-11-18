<?php
// Define a class to represent a Filipino-style spaghetti recipe
class FilipinoSpaghettiRecipe {
    private $name;
    private $ingredients;
    private $steps;

    // Constructor to initialize recipe name, ingredients, and steps
    public function __construct($name, $ingredients, $steps) {
        $this->name = $name;
        $this->ingredients = $ingredients;
        $this->steps = $steps;
    }

    // Method to retrieve the recipe name
    public function getName() {
        return $this->name;
    }

    // Method to retrieve the ingredients
    public function getIngredients() {
        return $this->ingredients;
    }

    // Method to retrieve the cooking steps
    public function getSteps() {
        return $this->steps;
    }

    // Method to display the complete recipe with ingredients and steps
    public function displayRecipe() {
        echo "Recipe for {$this->name}:<br>";
        echo "Ingredients:<br>";
        foreach ($this->ingredients as $ingredient) {
            echo "- $ingredient<br>";
        }
        echo "<br>Steps:<br>";
        foreach ($this->steps as $step => $instruction) {
            $stepNumber = $step + 1; // Incrementing step index for better readability
            echo "{$stepNumber}. {$instruction}<br>";
        }
    }
}

// Define ingredients for Filipino-style spaghetti
$filipinoSpaghettiIngredients = [
    "Spaghetti pasta",
    "Sweet Filipino-style spaghetti sauce",
    "Ground pork or beef",
    "Hotdogs",
    "Cheddar cheese",
    "Evaporated milk",
    "Garlic",
    "Onion",
    "Salt",
    "Cooking oil",
    "Water"
];

// Define cooking steps for Filipino-style spaghetti
$filipinoSpaghettiSteps = [
    // Step 1: Cooking the spaghetti
    "Boil water in a pot and cook spaghetti pasta until al dente. Drain and set aside.",

    // Step 2: Sautéing garlic and onion
    "In a separate pan, heat cooking oil and sauté minced garlic and chopped onion until golden brown.",

    // Step 3: Cooking ground pork or beef
    "Add ground pork or beef. Cook until browned.",

    // Step 4: Adding hotdogs
    "Add hotdogs (sliced diagonally) and continue cooking for a few minutes.",

    // Step 5: Simmering the sauce
    "Pour the Filipino-style spaghetti sauce into the pan. Let it simmer for about 10-15 minutes.",

    // Step 6: Adding cheese
    "Add grated cheddar cheese and stir until melted.",

    // Step 7: Mixing in evaporated milk
    "Pour in evaporated milk and mix well. Simmer for a few more minutes.",

    // Step 8: Combining spaghetti with the sauce
    "Combine the cooked spaghetti with the sauce mixture. Mix thoroughly.",

    // Step 9: Serving
    "Serve hot and garnish with additional grated cheese on top."
];

// Create an instance of FilipinoSpaghettiRecipe
$filipinoSpaghettiRecipe = new FilipinoSpaghettiRecipe(
    "Filipino-style Spaghetti",
    $filipinoSpaghettiIngredients,
    $filipinoSpaghettiSteps
);

// Display the Filipino-style spaghetti recipe
$filipinoSpaghettiRecipe->displayRecipe();
?>