<?php  require_once 'header.php'; ?>

<main role="main" class="flex-shrink-0">

  <div class="container">

<?php
$lesContinent = "";
        if(isset($_POST['Continent']))
        {
                $lesContinent = $_POST['Continent'];
        }


?>
    <h1>Les pays dans le monde </h1>
    <div>
        <?php
            require_once 'inc/manager-db.php';
            $continent = $lesContinent;
            $desPays = getCountriesByContinent($continent);
         ?>
       <code>
         <?php ?>
      </code>
    </div>
    <div>
    <style>
    table th, td {
        border: 2px solid black;
        border-collapse: collapse;
      }
      th, td {
        padding: 5px
        text-align : left

      }
    }
    </style>
    <center>
    <form action="" method="post">
    <h3><select name="Continent"></h3>
        <option value="" disabled selected>Choose option</option>
        <option value="Africa">Africa</option>
        <option value="Antarctica">Antarctica</option>
        <option value="Asia">Asia</option>
        <option value="Europe">Europe</option>
        <option value="North America">North America</option>
        <option value="Oceania">Oceania</option>
        <option value="South America">South America</option>

    </select>
    <br>
    <input type="submit" name="submit" vlaue="Choose options">
    </center>



    </div>
    <p>
      <table>
      <tr>
        <td>Name</td>
        <td>Region</td>
        <td>SurfaceArea</td>
        <td>IndepYear</td>
        <td>Population</td>
        <td>LifeExpectancy</td>
        <td>GNP</td>
        <td>GNPOld</td>
        <td>LocalName</td>
        <td>GovernmentForm</td>
        <td>HeadOfState</td>
      </tr>
      <tr>
      <?php
        for ($i= 0; $i < count($desPays); $i++){
          echo "<tr>";
          echo "<td>" . $desPays[$i] ->Name ."</td>";
          echo "<td>" . $desPays[$i] ->Region ."</td>";
          echo "<td>" . $desPays[$i] ->SurfaceArea ."</td>";
          echo "<td>" . $desPays[$i] ->IndepYear ."</td>";
          echo "<td>" . $desPays[$i] ->Population ."</td>";
          echo "<td>" . $desPays[$i] ->LifeExpectancy ."</td>";
          echo "<td>" . $desPays[$i] ->GNP ."</td>";
          echo "<td>" . $desPays[$i] ->GNPOld ."</td>";
          echo "<td>" . $desPays[$i] ->LocalName ."</td>";
          echo "<td>" . $desPays[$i] ->GovernmentForm ."</td>";
          echo "<td>" . $desPays[$i] ->HeadOfState ."</td>";
        }
      ?>
      </tr>
      </table>
    </p>
    <section class="jumbotron text-center">
      <div class="container">
        <h1 class="jumbotron-heading">Tableau d'objets</h1>
        <p>Le code ci-dessus repr??sente une vue "debug" du premier ??l??ment d'un tableau. Ce tableau est
          constitu?? d'objets PHP "standard" (stdClass).</p>
        <p>Pour acc??der ?? l'<b>attribut</b> d'un <b>objet</b> on utilisera le symbole <code>-></code></p>
        <p>Ainsi, pour acc??der au nom du premier pays de la liste
          <code>$desPays</code> on fera <b><code>$desPays[0]->Name</code></b>
        </p>
        <p>La variable <b><code>$desPays</code></b> r??f??rence un tableau (<i>array</i>).
          Ainsi, pour g??n??rer le code HTML (table), devriez vous coder une boucle,
          par exemple de type <b><code>foreach</code></b> sur l'ensembles des objets de ce tableau. </p>
        <p>R??f??rez-vous ?? la structure des tables pour conna??tre le nom des <b><code>attributs</code></b>.
          En effet, les objets du tableau ont pour attributs (nom et valeur)
          le nom des colonnes de la table interrog??e par un requ??te SQL, via l'appel ?? la
          fonction <b><code>getCountriesByContinent</code></b> (du script <b><code>manager-db.php</code></b>.</p>
        <p>Par exemple <b><code>Name</code></b> est une des colonnes de la relation (table) <b><code>Country</code></b>)</p>

      </div>
    </section>
  </div>
</main>

<?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
