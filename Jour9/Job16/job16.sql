SELECT salles.nom AS "Biggest Room", salles.capacite, etages.nom FROM salles JOIN etages ON salles.id_etage = etages.id WHERE salles.capacite = (SELECT MAX(capacite) FROM salles);
