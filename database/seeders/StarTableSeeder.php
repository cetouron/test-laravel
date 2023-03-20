<?php


namespace Database\Seeders;


use App\Models\Stars;
use Illuminate\Database\Seeder;

class StarTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {

        Stars::create([
            'nom' => "Jolie",
            'prenom' => "Angelina",
            'description' => "Angelina Jolie [ænd͡ʒeˈliːnɪ d͡ʒoʊˈliː]2, née le 4 juin 1975 à Los Angeles, est une actrice, réalisatrice, scénariste, productrice, mannequin, écrivaine et ambassadrice de bonne volonté américano-cambodgienne.
                            Elle a reçu trois Golden Globes, deux Screen Actors Guild Awards et un Oscar du cinéma.
                            Elle commence sa carrière d'actrice avec le film à petit budget Cyborg 2 (1993), tandis qu'elle n'est âgée que de 18 ans. Son premier rôle principal dans un film important est dans Hackers, en 1995. Elle joue ensuite dans George Wallace et Femme de rêve, téléfilms biographiques acclamés par la critique. Angelina Jolie remporte un Oscar de la meilleure actrice dans un second rôle pour sa prestation dans Une vie volée (1999). L'actrice continue son ascension avec 60 Secondes Chrono (2000), qui obtient un franc succès au box-office. Elle atteint par la suite une grande notoriété avec l'interprétation de l'héroïne de jeu vidéo Lara Croft dans Lara Croft: Tomb Raider (2001) et s'impose depuis comme l'une des actrices les plus célèbres et les mieux payées d'Hollywood. Ses films les plus lucratifs ont été Mr. et Mrs. Smith (2005), Wanted (2008), Kung Fu Panda (2008), Salt (2010) et The Tourist (2010). Elle joue également dans des drames plus intimistes comme Un cœur invaincu (2007) et L'Échange (2008).
                            Ambassadrice de bonne volonté, elle a défendu diverses causes humanitaires à travers le monde et est réputée pour son travail en faveur des réfugiés avec le Haut Commissariat des Nations unies pour les réfugiés. Angelina Jolie est également une femme engagée pour la protection de la nature et des animaux. Elle est une amie fidèle du Dr Jane Goodall et membre de l'Institut Jane Goodall France. Elle a déjà été désignée comme l'une des plus belles femmes du monde et sa vie hors-caméras est suivie de très près.
                            Divorcée des acteurs Jonny Lee Miller et Billy Bob Thornton, Angelina Jolie vit ensuite avec l'acteur Brad Pitt, avec qui elle se marie en France en 2014. Le couple a adopté trois enfants et a eu trois enfants biologiques. Le 20 septembre 2016, leur divorce est annoncé publiquement3.",
            'photo_url' => "images/angelina-jolie.jpeg",
        ]);

        Stars::create([
            'nom' => "Pattinson",
            'prenom' => "Robert",
            'description' => "Robert Pattinson est un acteur, mannequin et musicien britannique, né le 13 mai 1986 à Barnes (Londres)1.
                            Révélé durant les années 2000 par des productions destinées aux adolescents, comme la franchise Twilight (2008-2012), dans laquelle il incarne Edward Cullen aux côtés de Kristen Stewart, il se fait également connaître du grand public par son rôle de Cedric Diggory dans Harry Potter et la Coupe de feu (2005), quatrième opus de la saga Harry Potter.
                            Par la suite, il s'investit dans des films indépendants réalisés par des cinéastes reconnus : Cosmopolis (2012) et Maps to the Stars (2014) de David Cronenberg, The Rover (2014) et The King (2019) de David Michôd, Queen of the Desert (2014) de Werner Herzog, Life (2015) d'Anton Corbijn, L'Enfance d'un chef (2016) de Brady Corbet, The Lost City of Z (2016) de James Gray, Good Time (2017) de Ben et Josh Safdie, ou encore High Life (2018), de Claire Denis.
                            En 2019, il est choisi pour incarner Batman, super-héros de DC Comics, dans le film de Matt Reeves, The Batman, sorti en mars 2022.",
            'photo_url' => "images/Robert_Pattinson_Premiere_of_The_Lost_City_of_Z_at_Zoo_Palast_Berlinale_2017_02.jpeg",
        ]);


        Stars::create([
            'nom' => "Gomez",
            'prenom' => "Selena",
            'description' => "Selena Gomez, née le 22 juillet 1992 à Grand Prairie, au Texas, est une chanteuse, actrice et productrice américaine.
                            Elle fait ses débuts de comédienne dans la série pour enfants Barney & Friends (2002-2004), puis se fait connaître du jeune public en interprétant le rôle d'Alex Russo dans la série humoristique de Disney Channel, Les Sorciers de Waverly Place (2007-2012). Elle joue ensuite dans de nombreux films ou téléfilms tels que Comme Cendrillon 2 (2008), Princess Protection Program (2009), Sœurs malgré elles (Ramona et Beezus, 2010), Bienvenue à Monte-Carlo (2011), Spring Breakers (2012), Getaway (2013) et The Fundamentals of Caring (2016). Elle interprète par ailleurs la voix du personnage Mavis dans les films d'animation de la franchise Hôtel Transylvanie.
                            En 2008, Selena Gomez forme son groupe musical Selena Gomez and the Scene. Il sort trois albums : Kiss and Tell (2009), A Year Without Rain (2010) et When the Sun Goes Down (2011). Il se dissout en 2012. Les deux plus gros succès du groupe sont Naturally et Love You Like a Love Song. En 2013, Selena Gomez sort son premier album solo, Stars Dance, qui atteint la première place du classement américain Billboard 200. En est extrait le single Come & Get It. Après six années de collaboration avec le label Hollywood Records, Selena Gomez signe, en 2014, un contrat avec Interscope Records. En 2015, elle sort son deuxième album solo Revival. Il débute à la première place du Billboard 200. Trois de ses singles, Good For You, Same Old Love et Hands to Myself atteignent le top 10 du Billboard Hot 100. Entre 2016 et 2019, Selena Gomez sort plusieurs collaborations dont We Don't Talk Anymore avec Charlie Puth, It Ain't Me avec Kygo, Wolves avec Marshmello, Taki Taki avec Ozuna, Cardi B et DJ Snake.Elle sort des titres solo comme Fetish, Bad liar et Back To You. En 2020, Selena Gomez sort son troisième album solo Rare, après 4 ans d'attente. Il débute à la première place du Billboard 200. Ses albums solo ont tous débuté à cette place et le single Lose You to Love Me se hisse à la première place du Billboard Hot 100. C'est son premier single à atteindre cette place. En 2021, Selena sort son premier projet entièrement enregistré en espagnol : Revelación, ce qui lui rapporte sa toute première nomination au Grammy Awards dans la catégorie meilleur album pop Latino de l’année.",
            'photo_url' => "images/Selena_Gomez_2016.png",
        ]);

        Stars::create([
            'nom' => "Law",
            'prenom' => "Jude",
            'description' => "Jude Law [ˈd͡ʒuːd lɔː]2 est un acteur, réalisateur et producteur de cinéma britannique, né le 29 décembre 1972 à Lewisham (Londres).
                            Révélé durant les années 1990 par Bienvenue à Gattaca (1997), eXistenZ (1998) et Le Talentueux Mr. Ripley (1999), Stalingrad (2001). Il joue ensuite dans des grandes productions hollywoodiennes : A.I. Intelligence artificielle (2001), Les Sentiers de la perdition (2002), Retour à Cold Mountain (2003) et le thriller sentimental Entre adultes consentants (2004).
                            Par la suite, il tourne à deux reprises avec Martin Scorsese dans Aviator (2004) et Hugo Cabret (2011), et avec Steven Soderbergh dans Contagion (2011) et Effets secondaires (2013). Il connait son plus gros succès commercial3 en incarnant le Dr John Watson dans les films Sherlock Holmes (2009) et Sherlock Holmes : Jeu d'ombres (2011), réalisés par Guy Ritchie.
                            En 2016, il joue dans l'acclamée série The Young Pope le rôle du pape Pie XIII, puis à nouveau en 2020 dans The New Pope, deux séries écrites et réalisées par Paolo Sorrentino.
                            Dès 2018, il devient l'une des têtes d'affiche de la série de films Les Animaux fantastiques en endossant le rôle du jeune Albus Dumbledore à partir du deuxième volet.
                            En 2019, il joue le rôle de Yon-Rogg, un commandant Kree dans le film Captain Marvel, un film de l’univers cinématographique Marvel.",
            'photo_url' => "images/Jude_Law_2018.jpeg",
        ]);


    }
}
