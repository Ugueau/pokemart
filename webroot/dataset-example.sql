INSERT INTO card (type, name, hp, pokemon_type, level, description, weakness, resistance, retreat_cost, rarity_index, rarity_symbol, image_url, origin_country, copies, price) VALUES
                                                                                                                                                                                   ('pokemon', 'Pikachu', 60, 'Electrique', 1, 'Un petit Pokémon jaune et mignon qui possède des pouvoirs électriques.', 'Combat', 'Métal', 1, 1, '*', 'https://example.com/pikachu.png', 'Japon', 10, 20.50),
                                                                                                                                                                                   ('pokemon', 'Carapuce', 50, 'Eau', 1, 'Un petit Pokémon de type Eau avec une coquille qui le protège.', 'Electrique', 'Aucune', 1, 2, '*', 'https://assets.pokemon.com/assets/cms2-fr-fr/img/cards/web/SWSHP/SWSHP_FR_SWSH233.png', 'Japon', 8, 15.00),
                                                                                                                                                                                   ('pokemon', 'Salameche', 50, 'Feu', 1, 'Un petit Pokémon de type Feu avec une flamme au bout de la queue.', 'Eau', 'Aucune', 1, 3, '*', 'https://example.com/salameche.png', 'Japon', 5, 25.00),
                                                                                                                                                                                   ('pokemon', 'Bulbizarre', 70, 'Plante', 1, 'Un petit Pokémon de type Plante avec une graine sur le dos.', 'Feu', 'Combat', 1, 4, '*', 'https://example.com/bulbizarre.png', 'Japon', 3, 30.00),
                                                                                                                                                                                   ('pokemon', 'Mewtwo', 100, 'Psy', 3, 'Un Pokémon légendaire de type Psy doté d\'une intelligence et de pouvoirs hors du commun.', 'Sombre', 'Combat', 3, 5, '**', 'https://example.com/mewtwo.png', 'Japon', 1, 100.00),
('pokemon', 'Dracaufeu', 120, 'Feu', 3, 'Un grand Pokémon de type Feu avec de grandes ailes et un souffle de feu puissant.', 'Eau', 'Aucune', 3, 6, '***', 'https://example.com/dracaufeu.png', 'Japon', 1, 150.00),
('pokemon', 'Pikachu EX', 170, 'Electrique', 3, 'Une version plus forte de Pikachu avec des attaques plus puissantes.', 'Combat', 'Métal', 2, 7, '****', 'https://example.com/pikachu-ex.png', 'Japon', 1, 200.00),
('pokemon', 'Dracolosse', 160, 'Dragon', 3, 'Un grand Pokémon de type Dragon avec des ailes et une queue puissantes.', 'Fée', 'Combat', 4, 8, '****', 'https://example.com/dracolosse.png', 'Japon', 1, 250.00),
('pokemon', 'Gardevoir', 130, 'Psy', 3, 'Un Pokémon élégant et puissant de type Psy.', 'Ténèbres', 'Aucune', 2, 9, '****', 'https://example.com/gardevoir.png', 'Japon', 1, 180.00);


INSERT INTO card (type, name, description, rarity_index, rarity_symbol, image_url, origin_country, copies, price) VALUES
('trainer', 'Professeur Chen', 'Le professeur Chen est un éminent spécialiste de la recherche sur les Pokémon. Il est connu pour son travail sur la région de Kanto.', 3, '***', 'https://pokeapi.co/api/v2/item/25/', 'Japon', 3, 2.99),
('trainer', 'Pierre', 'Pierre est le champion d’arène de type Roche de Jadielle. Il est également connu pour son amour des fossiles de Pokémon.', 2, '**', 'https://pokeapi.co/api/v2/item/52/', 'Japon', 5, 1.99);


INSERT INTO card (type, name, description, rarity_index, rarity_symbol, image_url, origin_country, copies, price) VALUES
('energy', 'Energie Plante', 'Cette carte d’énergie est utilisée pour fournir de l’énergie aux Pokémon de type Plante.', 1, '*', 'https://pokeapi.co/api/v2/item/1/', 'Japon', 10, 0.99),
('energy', 'Energie Feu', 'Cette carte d’énergie est utilisée pour fournir de l’énergie aux Pokémon de type Feu.', 1, '*', 'https://pokeapi.co/api/v2/item/2/', 'Japon', 10, 0.99);