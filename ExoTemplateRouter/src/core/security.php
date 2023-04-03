<?php

/**
 * Traitement du formulaire de connexion
 * Crée une session avec session_start
 * vérifie si $_POST['user'] et $_POST['password'] correspondent bien à 
 * une valeur dans le fichier users.csv grâche à la fonction search_user
 * Sinon, détruit la session
 * @return void
 */
function connect()
{
}

/**
 * Vérifie que l'utilisateur est connecté
 * Crée une session avec session_start
 * Si $_SESSION['user'] est vrai renvoie true sinon renvoie faux et 
 * détruit la session
 * @return boolean
 */
function is_connected()
{
}

/**
 * Déconnecte l'utilisateur
 * Teste si $_SESSION['user'] existe et dans l'affirmative
 * utilise session_destroy()
 * @return void
 */
function disconnect()
{
}

/**
 * Lit le fichier des utilisateurs users.csv
 * grace à la fonction fgetcsv 
 * Retourne un tableau associatif (clé=login - valeur=mdp)
 * @return mixed 
 */
function read_users()
{
}

/**
 * Cherche un utilisateur dans le fichier users.csv avec nom d'utilisateur et mdp
 *
 * @param string $name le nom d'utilisateur
 * @param string $pwd le mot de passe de l'utilisateur
 * @return void
 */
function search_user($name, $pwd)
{
    $users = read_users();
    if (is_array($users) && array_key_exists($name, $users) &&  password_verify($pwd, $users[$name])) {
        return true;
    }
    return false;
}

/**
 * Traitement du formulaire de création d'un utilisateur
 *
 * @return void
 */
function createUser()
{
    $errors = [];
    if (isset($_POST['submit']) && $_POST['submit'] === "createUser") {
        if (isset($_POST['user']) && $_POST['user'] !== '') {
            if (isset($_POST['password']) && $_POST['password'] !== '') {
                if (isset($_POST['confirmPassword']) && $_POST['password'] === $_POST['confirmPassword']) {
                    $user = search_user_by_name($_POST['user']);
                    if ($user === true) {
                        $errors[] = "Le nom d'utilisateur est déjà utilisé";
                    } else {
                        if (save_user($_POST['user'], $_POST['password'])) {
                            echo "L'utilisateur est bien enregistré!";
                        } else {
                            $errors[] = "Un problème est survenu lors de l'enregistrement de l'utilisateur.<br>";
                        }
                    }
                } else {
                    $errors[] = "Les mots de passe doivent correspondre<br>";
                }
            } else {
                $errors[] = "Le mot de passe est obligatoire<br>";
            }
        } else {
            $errors[] = "Le champ utilisateur est obligatoire";
        }
    }

    if (count($errors) > 0) {
        foreach ($errors as $error) {
            echo $error;
        }
    }
}

/**
 * Recherche un utilisateur en fonction de son nom
 *
 * @param string $name le nom à rechercher
 * @return boolean
 */
function search_user_by_name($name)
{
    $users = read_users();
    if (array_key_exists($name, $users)) {
        return true;
    }
    return false;
}

/**
 * Sauvegarde un utilisateur
 *
 * @param string $name le nom d'utilisateur
 * @param string $pwd le mot de passe
 * @return boolean true si enregistrement ok, false sinon
 */
function save_user($name, $pwd)
{
    if ($fp = fopen(dirname(__FILE__) . '/../datas/users.csv', 'a')) {
        if (fputcsv($fp, [$name, password_hash($pwd, PASSWORD_DEFAULT)], ';')) {
            return true;
        } else {
            return false;
        }
    }
    return false;
}
