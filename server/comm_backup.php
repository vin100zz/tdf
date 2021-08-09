<?php

include_once 'dbaccess.php';

// `babouchbab`.`comm`
$comm = array(
  array('datetime_comm' => '2010-07-07 20:35:46','user_comm' => 'Vincent','commentaire' => 'Quel beau site quand même :)'),
  array('datetime_comm' => '2010-07-08 09:37:36','user_comm' => 'Soeurette','commentaire' => 'Y a pas à dire petit frère, tu es très fort !!! ce qui me rend pleine d\'\'espoir pour le petit programme que tu dois me faire (pendant tes vacances en juillet ou en août ?) pour la rentrée ;-))))
tu m\'\'as demandé un cahier des charges, je vais m\'\'en occuper. 
Pour ce qui est des résultats proprement dit, félicitations à Tatie !!! 
Bises cyclistes.
Hélène.'),
  array('datetime_comm' => '2010-07-08 15:57:50','user_comm' => 'R2','commentaire' => 'Ce site est décidément de mieux en mieux !
D\'\'après le commentaire de soeurette, j\'\'ai cru comprendre qu\'\'on pouvait passer commande de programmes ? '),
  array('datetime_comm' => '2010-07-08 15:58:48','user_comm' => 'R2','commentaire' => 'Ce qui est dommage, c\'\'est qu\'\'il n\'\'y ait pas de compteur pour indiquer le nombre de connections. ça manque...'),
  array('datetime_comm' => '2010-07-09 08:35:07','user_comm' => 'R1','commentaire' => 'Rappel : pour les demandes de programme à V. veuillez prendre la file d\'\'attente ; pour ma part j\'\'ai le n° 001.'),
  array('datetime_comm' => '2010-07-09 11:51:54','user_comm' => 'Soeurette','commentaire' => 'Oh la la, ça se bouscule : je prends le n°002. Il faut tenir un compteur pour le nombre de connexions et un autre pour le nombre de demandes de programme ... c\'\'est la rançon du succès.'),
  array('datetime_comm' => '2010-07-10 11:54:14','user_comm' => 'Vincent','commentaire' => 'Et un compteur d\'\'ajouté, un ! J\'\'envoie la facture à quelle adresse au fait ?'),
  array('datetime_comm' => '2010-07-15 17:32:46','user_comm' => 'Votre nom ici','commentaire' => 'Il est de mieux en mieux ce site !
Non seulement le compteur a été ajouté, mais il est personalisé. Et en plus, ce concours de pronostics est très bien fait. Il donne des résultats excellents.
Pour les demandes de programmes je prends le numéro 003 ; pour la facture, je suis tombé sur le numéro 4517...'),
  array('datetime_comm' => '2010-07-15 17:33:43','user_comm' => 'Votre nom ici','commentaire' => 'Quand même, c\'\'est dommage qu\'\'on ne soit pas prévenu sur notre messagerie lorsqu\'\'un nouveau commentaire est déposé...'),
  array('datetime_comm' => '2010-07-15 22:26:53','user_comm' => 'Vincent','commentaire' => 'C\'\'est pour fideliser les visiteurs et les obliger à venir consulter régulièrement le site, très cher "Votre nom ici".'),
  array('datetime_comm' => '2010-07-16 17:15:47','user_comm' => 'anonyme','commentaire' => 'Il est vraiment bien ce site !!!'),
  array('datetime_comm' => '2010-07-16 17:17:03','user_comm' => 'anonyme (bis)','commentaire' => '...mais quand même, s\'\'il pouvait détecter le nom de la personne qui laisse son commentaire, ce serait parfait !'),
  array('datetime_comm' => '2010-07-17 17:08:51','user_comm' => 'Sanchez Rodriguez','commentaire' => 'Supersitio !!! Bravo a los concepteurs et a los réalisators. Dommage qe il y a  pas deaucoup de commentairio. Que viva Mexico !
un internaute de Guadalajara.'),
  array('datetime_comm' => '2010-07-18 08:05:00','user_comm' => 'Un Gaulois à tête ','commentaire' => 'Joyeux lorrains, chantons sans frein, le refrain plein d\'\'entrain de ce site immortel qui garde l\'\'accès du sol français !(Des admirateurs de Bar-le-Duc)'),
  array('datetime_comm' => '2010-07-19 11:54:59','user_comm' => 'R2','commentaire' => 'Profitons, avant qu\'\'il ne soit trop tard, pour dire et redire tout le bien que nous pensons de ce site et de ce concours de pronostics qui révèle les immenses talents des lauréats.'),
  array('datetime_comm' => '2010-07-19 11:55:57','user_comm' => 'R2','commentaire' => 'Quant aux Lorrains, il faudra qu\'\'ils racontent leur périple !'),
  array('datetime_comm' => '2010-07-19 17:39:09','user_comm' => 'R2','commentaire' => 'Scandale sur le Tour : les dérailleurs chinois étaient sabotés !
Militons pour l\'\'annulation de l\'\'épreuve 2010.'),
  array('datetime_comm' => '2011-07-04 22:04:50','user_comm' => 'ici la rue Graffan','commentaire' => 'Ce site est géniââââl, mais on ne comprend pas à quoi correspond le sous-total 2 qui donne de 
bien curieux résultats ... '),
  array('datetime_comm' => '2011-07-04 21:34:56','user_comm' => 'Jipé de Marseille','commentaire' => 'Bravo pour cet site, c\'\'est tout simplement bluffant!

'),
  array('datetime_comm' => '2011-07-04 21:30:59','user_comm' => 'JIpé de Marseille','commentaire' => 'Votre commentaire ici'),
  array('datetime_comm' => '2010-07-19 21:36:32','user_comm' => 'Vincent','commentaire' => 'Ouaaaaaaaah, il y a même une notification par mail quand un message est posté maintenant !'),
  array('datetime_comm' => '2010-07-23 15:14:14','user_comm' => 'Anonyme de Livry-Gar','commentaire' => 'Ce site est de mieux en mieux, le tableau s\'\'affiche en pleine page !!! C\'\'est formidable et je suis pleine d\'\'espoir pour la qualité de mon petit programme en commande ;-)'),
  array('datetime_comm' => '2011-07-04 22:08:25','user_comm' => 'ici la rue Graffan','commentaire' => 'j\'\'en profite pour confirmer que les commandes passées auprès du concepteur de ce site (qu\'\'est-ce-qu\'\'il est géniâââl!)sont correctement honorées et pour des prix tout à fait modiques ;-))))'),
  array('datetime_comm' => '2011-07-05 18:20:30','user_comm' => 'R1','commentaire' => 'Votre commentaire ici
Très beau site qui établit d\'\'une manière tout à fait objective une véritable hiérarchie.'),
  array('datetime_comm' => '2011-07-05 19:30:37','user_comm' => 'R2','commentaire' => 'Vous connaissez l\'\'adage : les premiers seront les derniers. C\'\'est au soir de la dernière étape qu\'\'on connaÃ®tra la véritable hiérarchie. je vous donne rendez-vous au soir du 24 juillet sur les Champs-Elysées !'),
  array('datetime_comm' => '2011-07-10 18:33:08','user_comm' => 'LIVRYIENS','commentaire' => 'BRAVO MAMIE EVELYNE, ENFIN 1 CHALLENGER SERIEUX !!
'),
  array('datetime_comm' => '2011-07-10 18:33:16','user_comm' => 'LIVRYIENS','commentaire' => 'BRAVO MAMIE EVELYNE, ENFIN 1 CHALLENGER SERIEUX !!
'),
  array('datetime_comm' => '2011-07-11 09:46:39','user_comm' => 'une fan du Tour','commentaire' => 'Chic ! aujourd\'\'hui, je suis sûre que ce magnifique classement ne changera pas.'),
  array('datetime_comm' => '2011-07-11 17:10:01','user_comm' => 'une fan inquiète','commentaire' => 'j\'\'espère que l\'\'adage promis par R 2 se vérifiera !!!!'),
  array('datetime_comm' => '2011-09-14 16:48:18','user_comm' => 'R2','commentaire' => 'Un bien joli site qui rappelle de bons souvenirs ! Dommage que les commentaires ne soient pas rangés par ordre chronologique...'),
  array('datetime_comm' => '2012-06-30 19:23:37','user_comm' => 'Vé','commentaire' => 'Tatie Léo s\'\'empare de la tête du classement 2012 :)'),
  array('datetime_comm' => '2012-07-01 17:17:56','user_comm' => 'Une fan du Tour à M','commentaire' => 'Enfin un nouveau Tour, après un an de fébrile attente !!!'),
  array('datetime_comm' => '2012-07-01 23:31:05','user_comm' => 'Sylvie','commentaire' => 'Merci Jipé, je t\'\'ai délégué la réalisation de mes pronos et voilà le résultat...'),
  array('datetime_comm' => '2012-07-04 17:46:48','user_comm' => 'Hélène','commentaire' => 'Euh, pas terribles les performances de la famille à Livry-Gargan... mais rien ne sert de courir, ...'),
  array('datetime_comm' => '2012-07-04 18:31:35','user_comm' => 'René 2','commentaire' => 'Cette page est fabuleuse. Certes.

Mais elle serait encore mieux si on y trouvait un tableau des participants classés par ordre de mérite. Car le grand nombre de participants ne facilite pas la lecture du classement.

C\'\'est juste une suggestion...'),
  array('datetime_comm' => '2012-07-04 21:08:04','user_comm' => 'Vé','commentaire' => 'Y\'\'a qu\'\'à demander !'),
  array('datetime_comm' => '2012-07-17 16:47:32','user_comm' => 'Hélène','commentaire' => 'non, ce n\'\'est pas moi qui ai jeté une brassée de clous de tapissier sur la chaussée pour faire évoluer le classement ... et de toute façon, ça n\'\'a rien changé !'),
  array('datetime_comm' => '2012-07-05 09:24:17','user_comm' => 'Votre nom ici','commentaire' => 'Ce site est encore plus fabuleux ! Et le service est incroyablement rapide. Merci au webmestre !'),
  array('datetime_comm' => '2012-07-08 10:50:36','user_comm' => 'Lyvrien','commentaire' => 'Trés impressionnante remontée du Livryen, qui en une étape passe de la 12é a la 4é place !!!  '),
  array('datetime_comm' => '2012-07-13 11:36:19','user_comm' => 'Votre nom ici','commentaire' => 'Curieux, quand même ce jeux dans lequel l\'\'organisateur se retrouve en première place...'),
  array('datetime_comm' => '2012-07-19 17:27:39','user_comm' => 'René 2','commentaire' => 'Bon. Comme d\'\'habitude, nous attendrons 2 ou 3 ans avant de proclamer les résultats ? Le temps que Frank Schlek soit blanchi, que Wiggins soit déclassé, etc.'),
  array('datetime_comm' => '2012-08-15 17:21:48','user_comm' => 'René 2','commentaire' => 'Problème : les résultats des pronostics du Tour 2012 sont perturbés... Serait-il possible de les rétablir ?'),
  array('datetime_comm' => '2012-08-15 19:14:50','user_comm' => 'Vé','commentaire' => 'Tout est rentré dans l\'\'ordre, me voilà à nouveau premier :)'),
  array('datetime_comm' => '2013-07-13 18:57:05','user_comm' => 'anonyme, Guyancourt','commentaire' => 'J\'\'ai l\'\'impression qu\'\'il s\'\'est passé de drÃ´les de choses en matière d\'\'abandons. Heureusement, tout semble rentré dans l\'\'ordre...'),
  array('datetime_comm' => '2013-07-13 19:12:32','user_comm' => 'Votre nom ici','commentaire' => 'Cher anonyme de Guyancourt, en effet à la fin de chaque étape, le classement est mis à jour progressivement sur le site de lequipe.fr, et les coureurs qui ne sont pas encore saisis apparaissent comme ayant abandonnés. Heureusement, tout rentre dans l\'\'ordre très vite !'),
  array('datetime_comm' => '2013-07-14 17:04:01','user_comm' => 'Anonyme, Yvelines','commentaire' => 'Je m\'\'en doutais...'),
  array('datetime_comm' => '2013-07-14 18:18:47','user_comm' => 'Anonyme de Montauban','commentaire' => 'Votre commentaire ici
Quelle belle course !
'),
  array('datetime_comm' => '2013-07-14 21:56:46','user_comm' => 'D\'\'anonyme à anonyme','commentaire' => 'Il faut enlever \'\'Votre commentaire ici\'\' lorsqu\'\'on écrit un message.'),
  array('datetime_comm' => '2013-07-16 17:55:39','user_comm' => 'Anonyme de La Clauzu','commentaire' => 'Magnifique épreuve !'),
  array('datetime_comm' => '2013-07-16 17:58:43','user_comm' => 'Annyme, Guyancourt','commentaire' => 'Il se passe des choses bizzares dans un tour de France qui a perdu beaucoup de son intérêt...'),
  array('datetime_comm' => '2013-07-17 17:31:37','user_comm' => 'Anonyme antibois','commentaire' => 'Une bien belle étape aujourd\'\'hui !'),
  array('datetime_comm' => '2013-07-17 17:33:46','user_comm' => 'Anonyme yvelinois','commentaire' => 'Pourquoi ? T\'\'es toujours deuxième, non ? '),
  array('datetime_comm' => '2013-07-17 17:42:29','user_comm' => 'Moi','commentaire' => 'Contador s\'\'empare de la deuxième place et moi de la première ! (Que d\'\'anonymes !)'),
  array('datetime_comm' => '2013-07-17 17:48:36','user_comm' => 'Anonyme, anonyme','commentaire' => 'A l\'\'heure oÃ¹ le Tour de France est marqué par des chutes dramatiques, on est gêné par des manifestations de joie aussi indécentes que déplacées...'),
  array('datetime_comm' => '2013-07-22 08:31:13','user_comm' => 'Néo-Antibois','commentaire' => 'Pfff... C\'\'est nul ce jeu !'),
  array('datetime_comm' => '2013-07-22 09:27:02','user_comm' => 'Anonyme de La Clauzu','commentaire' => 'Alors que l\'\'échéance finale approche je tiens à saluer le niveau exceptionnellement élevé des merveilleux concurrents. Que le meilleur gagne !'),
  array('datetime_comm' => '2013-07-22 09:39:00','user_comm' => 'Anonyme de La Clauz','commentaire' => 'Compétition à couper le souffle. Seul un titan pourra l\'\'emporter.'),
  array('datetime_comm' => '2013-07-22 10:28:11','user_comm' => 'Anonyme de La Clau','commentaire' => 'Pour célébrer ce 100ème Tour, un concurrent (anonyme) propose de doubler le nombre de points attribué au vainqueur. Pour ma part je ne m\'\'y oppose pas.'),
  array('datetime_comm' => '2013-07-22 10:39:16','user_comm' => 'Anonyme yvelinois','commentaire' => 'Compte tenu des suspicions pesant sur certaines performances enregistrées lors du dernier Tour, je propose d\'\'attendre les résultats de l\'\'autopsie du vainqueur actuel et son subséquent déclassement avant de proclamer les résultats définitifs de notre concours.
(cf. les précédents des années 1997, 1998, 1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006...)'),
  array('datetime_comm' => '2013-07-22 10:39:18','user_comm' => 'Anonyme yvelinois','commentaire' => 'Compte tenu des suspicions pesant sur certaines performances enregistrées lors du dernier Tour, je propose d\'\'attendre les résultats de l\'\'autopsie du vainqueur actuel et son subséquent déclassement avant de proclamer les résultats définitifs de notre concours.
(cf. les précédents des années 1997, 1998, 1999, 2000, 2001, 2002, 2003, 2004, 2005, 2006...)'),
  array('datetime_comm' => '2013-07-22 11:17:53','user_comm' => 'Anonyme de La Cla','commentaire' => 'Proclamation des résultats à Tirana. Venez nombreux.')
);

DBAccess::exec("delete from commentaires;");
foreach ($comm as $key => $row) {
  $datetime = $row['datetime_comm'];
  $user = utf8_decode($row['user_comm']);
  $commentaire = utf8_decode($row['commentaire']);
  $sql = "insert into commentaires(datetime, nom, commentaire) values ('$datetime', '$user', '$commentaire');";
  //print($sql);
  DBAccess::exec($sql);
} 

?>
