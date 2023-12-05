<!DOCTYPE html>
<html lang="en">

<head class="body">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Personnages</title>
	<link rel="stylesheet" href="https://use.typekit.net/bjb6aay.css">
	<link rel="stylesheet" type="text/css" href="base.98fd6c19.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  
	<script>document.documentElement.className = "js";
  

var supportsCssVars = function supportsCssVars() {
  var e,
      t = document.createElement("style");
  return t.innerHTML = "root: { --tmp-var: bold; }", document.head.appendChild(t), e = !!(window.CSS && window.CSS.supports && window.CSS.supports("font-weight", "var(--tmp-var)")), t.parentNode.removeChild(t), e;
};

if (supportsCssVars()) {
  document.documentElement.classList.add('css-vars-supported');
} else {
  alert("Please view this demo in a modern browser that supports CSS Variables.");
}

supportsCssVars() || alert("Please view this demo in a modern browser that supports CSS Variables.");
</script>

<script>
    // Désactiver le défilement
    function disableScroll() {
      document.body.style.overflow = 'hidden';
    }
</script>

</head>

<body class="product-container">
  <div class="container">
    <a href="index.html" class="font-menu menu-anim circle">Home</a>
  </div>
  <div class="product-container">
  <?php
  // Database configuration
  $host = 'localhost'; // Remplacez par votre hôte de base de données
  $dbName = 'personnage'; // Remplacez par le nom de votre base de données
  $user = 'root'; // Remplacez par votre nom d'utilisateur de base de données
  $password = 'root'; // Remplacez par votre mot de passe de base de données
  
  // Create a database connection
  $conn = new mysqli($host, $user, $password, $dbName);
  
  // Vérifiez si la connexion a réussi
  if ($conn->connect_error) {
      die("La connexion à la base de données a échoué: " . $conn->connect_error);
  }
  
  // Vérifiez si l'ID de catégorie est passé en paramètre d'URL
  if (isset($_GET['idPersonnage'])) {
      // Récupérez l'ID de catégorie à partir de l'URL
      $idPersonnage = $_GET['idPersonnage'];
      // Effectuez une requête SQL pour récupérer les produits de la catégorie spécifiée
      $query = "SELECT * FROM perso 
                INNER JOIN pays ON perso.idPays = pays.idPays 
                WHERE perso.idPersonnage = " . $idPersonnage;
                
      $result = $conn->query($query);
  
      // Vérifiez si des produits ont été trouvés 
      if ($result !== false && $result->num_rows > 0) { 
          while ($row = $result->fetch_assoc()) {
             // Affichez les informations du produit
             echo "<div class=\"palcement_home_perso\">";
             echo "<h2 class=\" font-nom\">" . $row['personnages'] . "</h2>";
             echo "</div>";
             echo "<div class=\"image-container \">";
             echo "<img src=\"" . $row['images'] . "\" class=\"product-item \">";
             echo "<img src=\"" . $row['image'] . "\" class=\"product-item pays \">";
             echo "<img src=\"" . $row['image2'] . "\" class=\"product-item \">";
             echo "</div>";
              // Affichez d'autres détails du produit si nécessaire
              echo "<p class=\"product-item-description product-description fade-in\">" . $row['description'] . "</p>";
              // Ajoutez d'autres détails du produit que vous souhaitez afficher
          }
      } else {
          echo "Aucun personnage trouvé";
      }
  } else {
      echo "ID de Personnage non spécifié.";
  }
  
  $conn->close();
  ?>
  
  <script src="script.js"></script>

</body>
  

</html>
