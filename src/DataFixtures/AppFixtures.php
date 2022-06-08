<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\User;
use App\Entity\Element;
use App\Entity\Assurance;
use App\Entity\Prestation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $element = new Element();
        $element->setNom("canapé 2 places");
        $element->setIcone('icones/canape_2_places.png');
        $element->setCategorie('Salon');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("canapé 3 places");
        $element->setIcone('icones/canape_3_places.png');
        $element->setCategorie('Salon');
        $element->setVolume(3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("canapé d'angle");
        $element->setIcone('icones/canape_angle.png');
        $element->setCategorie('Salon');
        $element->setVolume(4.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("fauteuil");
        $element->setIcone('icones/fauteuil.png');
        $element->setCategorie('Salon');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("meuble tv");
        $element->setIcone('icones/meuble_tv.png');
        $element->setCategorie('Salon');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("télévision");
        $element->setIcone('icones/television.png');
        $element->setCategorie('Salon');
        $element->setVolume(0.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("table basse");
        $element->setIcone('icones/table_basse.png');
        $element->setCategorie('Salon');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("table à manger");
        $element->setIcone('icones/table_a_manger.png');
        $element->setCategorie('Salle à manger');
        $element->setVolume(1.25);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("chaise");
        $element->setIcone('icones/chaise.png');
        $element->setCategorie('Salle à manger');
        $element->setVolume(0.25);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("buffet");
        $element->setIcone('icones/buffet.png');
        $element->setCategorie('Salle à manger');
        $element->setVolume(2.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("vaisselier");
        $element->setIcone('icones/vaisselier.png');
        $element->setCategorie('Salle à manger');
        $element->setVolume(3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lit 2 places");
        $element->setIcone('icones/lit_2_places.png');
        $element->setCategorie('Chambre');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lit 1 place");
        $element->setIcone('icones/lit_1_place.png');
        $element->setCategorie('Chambre');
        $element->setVolume(1.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lit de bébé");
        $element->setIcone('icones/lit_bebe.png');
        $element->setCategorie('Chambre');
        $element->setVolume(0.75);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("chevet");
        $element->setIcone('icones/chevet.png');
        $element->setCategorie('Chambre');
        $element->setVolume(0.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("commode");
        $element->setIcone('icones/commode.png');
        $element->setCategorie('Chambre');
        $element->setVolume(0.6);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("armoire 2 portes");
        $element->setIcone('icones/armoire_2_portes.png');
        $element->setCategorie('Chambre');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("armoire 3 portes");
        $element->setIcone('icones/armoire_3_portes.png');
        $element->setCategorie('Chambre');
        $element->setVolume(3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("bureau");
        $element->setIcone('icones/bureau.png');
        $element->setCategorie('Bureau');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("fauteuil de bureau");
        $element->setIcone('icones/fauteuil_bureau.png');
        $element->setCategorie('Bureau');
        $element->setVolume(0.4);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("petite bibliothèque");
        $element->setIcone('icones/petite_bibliotheque.png');
        $element->setCategorie('Bureau');
        $element->setVolume(1.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("grande bibliothèque");
        $element->setIcone('icones/grande_bibliotheque.png');
        $element->setCategorie('Bureau');
        $element->setVolume(3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("ordinateur");
        $element->setIcone('icones/ordinateur.png');
        $element->setCategorie('Bureau');
        $element->setVolume(0.2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("meuble ordinateur");
        $element->setIcone('icones/meuble_ordinateur.png');
        $element->setCategorie('Bureau');
        $element->setVolume(0.9);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lampe de bureau");
        $element->setIcone('icones/lampe_bureau.png');
        $element->setCategorie('Bureau');
        $element->setVolume(0.1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("four");
        $element->setIcone('icones/four.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("micro ondes");
        $element->setIcone('icones/micro_onde.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("cuisinière");
        $element->setIcone('icones/cuisiniere.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("refrigirateur");
        $element->setIcone('icones/refrigirateur.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("refrigirateur américain");
        $element->setIcone('icones/refrigirateur_americain.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lave vaisselle");
        $element->setIcone('icones/lave_vaisselle.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("élément cuisine haut");
        $element->setIcone('icones/element_cuisine_haut.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.45);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("élément cuisine bas");
        $element->setIcone('icones/element_cuisine_bas.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("table de cuisine");
        $element->setIcone('icones/table_cuisine.png');
        $element->setCategorie('Cuisine');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("meuble colonne");
        $element->setIcone('icones/meuble_colonne.png');
        $element->setCategorie('Salle de bain');
        $element->setVolume(0.6);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("miroir salle de bain");
        $element->setIcone('icones/miroir_salle_de_bain.png');
        $element->setCategorie('Salle de bain');
        $element->setVolume(0.2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("meuble sous lavabo");
        $element->setIcone('icones/meuble_sous_lavabo.png');
        $element->setCategorie('Salle de bain');
        $element->setVolume(0.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lave linge");
        $element->setIcone('icones/lave_linge.png');
        $element->setCategorie('Salle de bain');
        $element->setVolume(0.4);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("sèche linge");
        $element->setIcone('icones/seche_linge.png');
        $element->setCategorie('Salle de bain');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("vélo adulte");
        $element->setIcone('icones/velo_adulte.png');
        $element->setCategorie('Garage');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("vélo enfant");
        $element->setIcone('icones/velo_enfant.png');
        $element->setCategorie('Garage');
        $element->setVolume(0.8);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("établi");
        $element->setIcone('icones/etabli.png');
        $element->setCategorie('Garage');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("congélateur");
        $element->setIcone('icones/congelateur.png');
        $element->setCategorie('Garage');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("placard 1 porte");
        $element->setIcone('icones/placard_1_porte.png');
        $element->setCategorie('Garage');
        $element->setVolume(1.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("placard 2 portes");
        $element->setIcone('icones/placard_2_portes.png');
        $element->setCategorie('Garage');
        $element->setVolume(2.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("table de jardin");
        $element->setIcone('icones/table_jardin.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("chaise de jardin");
        $element->setIcone('icones/chaise_jardin.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(0.4);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("plante en pot");
        $element->setIcone('icones/plantes.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(1.2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("barbecue");
        $element->setIcone('icones/barbecue.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("tondeuse à gazon");
        $element->setIcone('icones/tondeuse.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(0.75);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("banc");
        $element->setIcone('icones/banc.png');
        $element->setCategorie('Exterieur');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("tableau");
        $element->setIcone('icones/tableau.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lustre");
        $element->setIcone('icones/lustre.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.3);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("lampadaire");
        $element->setIcone('icones/lampadaire.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.5);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("tapis");
        $element->setIcone('icones/tapis.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.2);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("vélo d'appartement");
        $element->setIcone('icones/velo_appartement.png');
        $element->setCategorie('Divers');
        $element->setVolume(1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("aspirateur");
        $element->setIcone('icones/aspirateur.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.1);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("carton de livres");
        $element->setIcone('icones/carton_livres.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.8);
        $manager->persist($element);

        $element = new Element();
        $element->setNom("carton");
        $element->setIcone('icones/cartons.png');
        $element->setCategorie('Divers');
        $element->setVolume(0.1);
        $manager->persist($element);


        $prestation = new Prestation;
        $prestation->setNom("Catégorie 1 (Economique)");
        $prestation->setContenu("Prestations effectuées par nos déménageurs : 
            Protection du mobilier sous couvertures et housses spéciales.
            Protection des sommiers et matelas sous housses.
            Protection des canapés, fauteuils et chaises sous housses Mise en penderies des vêtements sur cintres (3 cartons penderies).
            Protection des appareils Informatiques, Audio et Vidéo.
            Débranchement et branchement de l'électroménager (frigo, lave linge,...).
            Remise en place du mobilier au sol et des cartons dans les pièces indiquées.
            Chargement, déchargement, manutention et transport effectués dans un camion capitonné.");
        $manager->persist($prestation);

        $prestation = new Prestation;
        $prestation->setNom("Catégorie 2 (Standard)");
        $prestation->setContenu("Protection du mobilier sous couvertures et housses.
        Protection des canapés, fauteuils et chaises sous housses.
        Protection des sommiers et matelas sous housses.
        Emballage en penderie des vêtements sur cintres.
        Démontage et remontage du mobilier.
        Conditionnement des cadres, tableaux et miroirs.
        Emballage, déballage de la vaisselle, verrerie et des objets très fragiles.
        Protection des appareils électroménagers, TV et informatiques - Débrancher et rebrancher l'électroménager.
        Remise en place du mobilier selon vos dispositions.
        Chargement, transport et déchargement du mobilier.
        Mise à disposition de cartons et adhésifs.");
        $manager->persist($prestation);

        $prestation = new Prestation;
        $prestation->setNom("Catégorie 3 (Complète)");
        $prestation->setContenu("Démontage et remontage du mobilier.
        Emballage du linge, des livres, jouets, vêtements et objets divers non fragiles.
        Emballage en penderie des vêtements sur cintres.
        Emballage et déballage de la vaisselle, verrerie et des autres objets fragiles.
        Conditionnement des cadres, tableaux et miroirs.
        Protection des canapés et fauteuils.
        Protection du mobilier sous couvertures, housses.
        Débranchement et branchement de l’électroménager.
        Chargement, transport et déchargement du mobilier.
        Remise en place du mobilier selon votre disposition.
        Mise à disposition de cartons et adhésifs.");
        $manager->persist($prestation);

        $prestation = new Prestation;
        $prestation->setNom("Groupage économique");
        $prestation->setContenu("Prestations effectuées par nos déménageurs :
        Protection du mobilier sous couverture et housses spéciales.
        Protection des sommiers et matelas sous housses.
        Remise en place du mobilier au sol et des cartons dans les pièces indiquées.
        Chargement, déchargement, manutention et transport.
        dates flexibles.
        liste exhaustive obligatoire.");
        $manager->persist($prestation);

        $prestation = new Prestation;
        $prestation->setNom("Aucune");
        $prestation->setContenu("");
        $manager->persist($prestation);



        $assurance = new Assurance;
        $assurance->setGarantie("Inclus ( AVIVA ) 1500€ par mobilier à hauteur de 50 000 euros maximum pour votre déménagement.");
        $manager->persist($assurance);

        $assurance = new Assurance;
        $assurance->setGarantie("Inclus ( AVIVA ) 30 000€ pour l'appareil d'echographie à hauteur de 50 000 euros maximum pour votre déménagement.");
        $manager->persist($assurance);

        $assurance = new Assurance;
        $assurance->setGarantie("Inclus ( AVIVA ) 1500€ par mobilier à hauteur de 50 000 euros maximum pour votre déménagement. Assurance complémentaire des objets listés à valeur réel inclus. une table en marbre valeur d'usure 5 000 € et une tableau valeur 2 000");
        $manager->persist($assurance);

        $assurance = new Assurance;
        $assurance->setGarantie("");
        $manager->persist($assurance);


        $manager->flush();
    }
}
