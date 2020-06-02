<?php
require_once('connexion.php');

//// création de la base de donnée  :: 


// $sql = "CREATE DATABASE Congée";
// $connexion->exec($sql);
// echo "executer";


////// add table    ::
// $codesql = "CREATE TABLE roles(
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//     Nom VARCHAR(50), 
//     slug VARCHAR(50), 
//     niveau INT(50)
//   )";
// $connexion->exec($codesql);
// echo "tableCrée";


////// add table    ::
// $codesql = "CREATE TABLE users(
//     id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
//     login VARCHAR(150), 
//     password VARCHAR(150), 
//     adress VARCHAR(250) ,
//     role_id INT(50)
//   )";
// $connexion->exec($codesql);
// echo "tableCrée";


// si ll'utilisateur doit entrer des info cette maniére et plus securiser 

// $requete = $connexion->prepare(
//   "INSERT INTO roles(Nom,slug,niveau)
//     VALUES (:Nom,:slug,:niveau)
//     "
// );
// $requete->bindParam(':Nom', $Nom);
// $requete->bindParam(':slug', $slug);
// $requete->bindParam(':niveau', $niveau);


// $Nom = "marouan";
// $slug = "directeur";
// $niveau = "3";
// $requete->execute();
// echo "executer avec succée";



// $requete = $connexion->prepare(
//   "INSERT INTO users(login,password,adress,role_id)
//     VALUES (:login,:password,:adress,:role_id)
//     "
// );
// $requete->bindParam(':login', $login);
// $requete->bindParam(':password', $password);
// $requete->bindParam(':adress', $adress);
// $requete->bindParam(':role_id', $role_id);


// $login = "employé";
// $password = "employé";
// $adress = "blabalabal";
// $role_id = "1";
// $requete->execute();