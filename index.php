<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del
calendario. Ogni array avrà una squadra di casa e una squadra ospite.
Avremo poi sempre per ogni array i punti fatti dalla squadra di casa e i
punti fatti dalla squadra in trasferta. Stampiamo a schermo tutte le
partite con questo schema, tenendo conto che il punteggio potrebbe non
essere disponibile
Olimpia Milano - Cantù | 55-60 -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP BASKET</title>
  </head>
  <body>
    <?php
      $partite = [
        [
        'squadra_casa' => 'Chicago Bulls',
        'squadra_ospite' => 'New York Knicks',
        'punti_squadra_casa' => '86',
        'punti_squadra_ospite' => '74',
        ],
        [
        'squadra_casa' => 'Los Angeles Lakers',
        'squadra_ospite' => 'Detroit Pistons',
        'punti_squadra_casa' => '78',
        'punti_squadra_ospite' => '56',
        ],
        [
        'squadra_casa' => 'Dallas Mavericks',
        'squadra_ospite' => 'New York Knicks',
        'punti_squadra_casa' => '67',
        'punti_squadra_ospite' => '69',
        ],
        [
        'squadra_casa' => 'San Antonio Spurs',
        'squadra_ospite' => 'Portland Blazers',
        'punti_squadra_casa' => '98',
        'punti_squadra_ospite' => '95',
        ],
        [
        'squadra_casa' => 'Utah Jazz',
        'squadra_ospite' => 'Phoenix Suns',
        'punti_squadra_casa' => '',
        'punti_squadra_ospite' => '',
        ],
      ];
    ?>
    <ul>
      <?php foreach ($partite as $partita) { ?>
        <li>
          <?php echo $partita['squadra_casa']; ?>
          -
          <?php echo $partita['squadra_ospite']; ?>
          |
          <?php if (!empty($partita['punti_squadra_casa'])
              && !empty($partita['punti_squadra_ospite'])
            ) { ?>
            <?php echo $partita['punti_squadra_casa']; ?>
            -
            <?php echo $partita['punti_squadra_ospite']; ?>
          <?php } else { ?>
            Partita non ancora disputata
          <?php } ?>
        </li>
      <?php } ?>
    </ul>
  </body>
</html>
