-- Table structure for table 'recipes'
CREATE TABLE IF NOT EXISTS `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `ingredients` text NOT NULL,
  `process` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Insert sample data into the 'recipes' table
INSERT INTO `recipes` (`title`, `description`, `image`, `ingredients`, `process`) VALUES
('Pasta Carbonara', 'Classic Italian pasta dish with eggs, cheese, and bacon', 'pasta_carbonara.jpg', 'Spaghetti\nEggs\nParmesan cheese\nBacon\nBlack pepper\nSalt', 'Cook the pasta until al dente\nIn a separate bowl, mix eggs, cheese, black pepper, and salt\nFry bacon until crispy\nDrain pasta and mix with the egg mixture\nAdd bacon and serve hot'),
('Chicken Stir-Fry', 'Quick and flavorful stir-fry with chicken and vegetables', 'chicken_stir_fry.jpg', 'Chicken breast\nBell peppers\nBroccoli\nCarrots\nSoy sauce\nGarlic\nGinger\nSesame oil', 'Slice chicken into thin strips\nChop vegetables into bite-sized pieces\nHeat oil in a pan and sauté garlic and ginger\nAdd chicken and cook until browned\nAdd vegetables and stir-fry until crisp-tender\nPour soy sauce and cook for a few more minutes');

COMMIT;
