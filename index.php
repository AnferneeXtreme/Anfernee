<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accueil</title>
    <link rel="stylesheet" href=".\css\index.css">
    <script type="text/javascript" src=".\js\jquery.js"></script>
    <script type="text/javascript" src=".\js\index.js"></script>
</head>
<body>
  <header><h1>Registreroo</h1></header>
  <div class="flex-container">
    <section id="nouveau">
      <div>
        <h2>Nouveau</h2>
      </div>
      <form class="formulaire">
        <div class="flex-container">
          <div id="labelbox">
            <div class="label">
              <label for="prenom">Prénom</label>
            </div>
            <div class="label">
              <label for="nom">Nom</label>
            </div>
            <div class="label">
              <label for="telephone">Numéro de téléphone</label>
            </div>
            <div class="label">
              <label for="email">Email</label>
            </div>
            <div class="label">
              <label for="naissance">Date de naissance</label>
            </div>
            <div class="label">
              <label for="ville">Ville</label>
            </div>
            <div class="label">
              <label for="adresse">Adresse</label>
            </div>
            <div class="label">
              <label for="profession">Profession</label>
            </div>
          </div>
          <div id="fieldbox">
            <div class="field">
              <input name="prenom" id="prenom" required>
            </div>
            <div class="field">
              <input name="nom" id="nom" required>
            </div>
            <div class="field">
              <input name="telephone" id="telephone" required>
            </div>
            <div class="field">
              <input type="email" name="email" id="email" required>
            </div>
            <div class="field">
              <input type="date" name="naissance" id="naissance" required>
            </div>
            <div class="field">
              <input name="ville" id="ville" required>
            </div>
            <div class="field">
              <input name="adresse" id="adresse" required>
            </div>
            <div class="field">
              <input name="profession" id="profession">
            </div>
          </div>
        </div>
        <div>
          <button onclick="creer()">Enregistrer</button> <button type="reset">Annuler</button>
        </div>
      </form>
    </section>
    <section id="liste">
      <div>
        <h2>Liste des contacts</h2>
      </div>
      <table>
        <thead>
          <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Numéro de téléphone</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody id="tableau">

        </tbody>
      </table>
    </section>
  </div>
  <footer>
    Copyrights.
  </footer>
</body>
</html>
