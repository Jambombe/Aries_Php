<?php

	$lucas = array(
		'Anniversaire' => 202,
		'truc' => 331,
                'Noël'=>360);

	$chloe = array(
		'Anniversaire' => 207,
		'truc' => 332);
        
        /**
         * Correspondance entre les mois de l'année et
         * leurs nombres de jours respectifs
         */
        $monthToNumber = array(
                01 => 31,
                02 => 29,
                03 => 31,
                04 => 30,
                05 => 31,
                06 => 30,
                07 => 31,
                8 => 31,
                9 => 30,
                10 => 31,
                11 => 30,
                12 => 31
        );
        
        /**
         * Correspondance entre les mois de l'année et leurs noms
         */
        $monthNumber = array(
                01 => 'Janvier',
                02 => 'Février',
                03 => 'Mars',
                04 => 'Avril',
                05 => 'Mai',
                06 => 'Juin',
                07 => 'Juillet',
                8 => 'Août',
                9 => 'Septembre',
                10 => 'Octobre',
                11 => 'Novembre',
                12 => 'Décembre'
        );
        
        /**
         * Retourne la date d'aujourd'hui sous forme de nombre de jour depuis le début de l'année
         */
	function nowToNumber(): int
	{
            $jour = date('d');
            $mois = date('m');
            
            return (monthsToNumberOfDays($mois) + $jour);
	}
        
        /**
         * Retourne la nombre  total de jours pour un mois donné
         * (ex : mai = janvier + février + mars + avril)
         * @global array $monthToNumber
         * @param type $monthNumber
         * @return int
         */
        function monthsToNumberOfDays($monthNumber)
        {
            global $monthToNumber;
            $totalDays = 0;
            for ($i = 1; $i < $monthNumber; $i++)
            {
                $totalDays += $monthToNumber[$i];
            }
            
            return $totalDays;
        }
        
        // Retourne le prochain evenement de $personne
        // Array [Event] : Nom de l'évenement
        // Array [Date] : Date au format "jour mois"
        function nextEvent($personne)
        {
            $event = new stdClass();
            
            foreach ($personne as $eventName => $day)
            {
//                echo $value . " : " . nowToNumber() . "</br>";
                if ($day >= nowToNumber())
                {                
                    $event->Event = $eventName;
                    $event->Date = numberToDate($day);
                    break;
                }                
            }
            
            // Si aucun event n'a été trouvé,
            // le prochain est donc le 1er de la liste
            if (! isset($event->Event))
            {
                reset($personne);
                $event->Event = key($personne);
                $event->Date = numberToDate(current($personne));
            }
            
            
            return (array) $event;
        }
        
        /**
         * Transofmre un nombre de jour en date
         * @global array $monthToNumber
         * @global array $monthNumber
         * @param type $nb : Nombre de jour
         * @return Retourne un string date sous forme "jour mois"
         */
        function numberToDate($nb)
        {
            global $monthToNumber;
            global $monthNumber;
            $i = 1;
            
            while ($nb > $monthToNumber[$i])
            {
                $nb -= $monthToNumber[$i];
                $i++;
            }
            
            return $nb . " " . $monthNumber[$i];
        }



        echo "Aujourd'hui : " . nowToNumber() . "</br>";
        
//        print_r(nextEvent($lucas));
        echo "Prochain événement de Lucas : " . nextEvent($lucas)['Event'] . " &rarr; " . nextEvent($lucas)['Date'] . "</br>";
        echo "Prochain événement de Chloé : " . nextEvent($chloe)['Event'] . " &rarr; " . nextEvent($chloe)['Date'] . "</br>";
        
        
?>