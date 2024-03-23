<?php

include './contact.php';

$contact = new Contact();

if(isset($_POST['creer'])){
    $contact->creer($_POST);
    $liste = $contact->lister();
    foreach($liste as $un){
        echo '<tr onmouseover="color('.$un['id'].')" onmouseleave="decolor('.$un['id'].')" onclick="store('.$un['id'].')" id="row'.$un['id'].'">';
        echo '<td>'.$un['prenom'].'</td>';
        echo '<td>'.$un['nom'].'</td>';
        echo '<td>'.$un['telephone'].'</td>';
        echo '<td>'.$un['email'].'</td>';
        echo '</tr>';
    }
}

if(isset($_POST['lister'])){
    $liste = $contact->lister();
    foreach($liste as $un){
        echo '<tr onmouseover="color('.$un['id'].')" onmouseleave="decolor('.$un['id'].')" onclick="store('.$un['id'].')" id="row'.$un['id'].'">';
        echo '<td>'.$un['prenom'].'</td>';
        echo '<td>'.$un['nom'].'</td>';
        echo '<td>'.$un['telephone'].'</td>';
        echo '<td>'.$un['email'].'</td>';
        echo '</tr>';
    }
}

if(isset($_POST['afficher'])){
    $result = $contact->afficher($_POST['id']);
    foreach($result as $un){
        echo '<div class="flex-container">';
        echo '<div class="flex-container" id="part1">';
        echo '<div class="labelbox" id="labelbox1">';
        echo '<div class="label">';
        echo '<label for="prenom">Prénom</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="telephone">Numéro de téléphone</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="naissance">Date de naissance</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="adresse">Adresse</label>';
        echo '</div>';
        echo '</div>';
        echo '<div>';
        echo '<div class="input">';
        echo '<input name="prenom" id="prenom" value="'.$un['prenom'].'" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input name="telephone" id="telephone" value="'.$un['telephone'].'" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input type="date" name="naissance" id="naissance" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input name="adresse" id="adresse" value="'.$un['adresse'].'" required>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="flex-container" id="part2">';
        echo '<div class="labelbox">';
        echo '<div class="label">';
        echo '<label for="nom">Nom</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="email">Email</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="ville">Ville</label>';
        echo '</div>';
        echo '<div class="label">';
        echo '<label for="profession">Profession</label>';
        echo '</div>';
        echo '</div>';
        echo '<div>';
        echo '<div class="input">';
        echo '<input name="nom" id="nom" value="'.$un['nom'].'" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input type="email" name="email" id="email" value="'.$un['email'].'" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input name="ville" id="ville" value="'.$un['ville'].'" required>';
        echo '</div>';
        echo '<div class="input">';
        echo '<input name="profession" id="profession" value="'.$un['profession'].'" required>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '<div class="button">';
        echo '<button onclick="modifier('.$un['id'].')">Modifier</button> <button onclick="supprimer('.$un['id'].')">Supprimer</button>';
        echo '</div>';
    }
}

if(isset($_POST['modifier'])){
    $contact->modifier($_POST);
}

if(isset($_POST['supprimer'])){
    $contact->supprimer($_POST['id']);
}
