<?php

namespace ETIROU\Cnx;


require_once(__DIR__ . '/../config/app.php');

use Exception;
use PDO, PDOException;


class Connexion
{


    //      Connexion with database and requests methods with PDO.
    private PDO $conx;

    public function __construct($userAndDatabaseInformations)
    {

        try {
            $this->conx = new PDO('mysql:host=' . $userAndDatabaseInformations['db']['host'] . ';dbname=' . $userAndDatabaseInformations['db']['database'], $userAndDatabaseInformations['db']['user'], $userAndDatabaseInformations['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
    }


    public function registerUser($pseudo, $password)
    {
        $data = [
            'pseudo' => $pseudo,
            'password' => $password,
        ];

        $request = "INSERT INTO users(pseudo, password)VALUES ( :pseudo, :password)";
        $statement = $this->conx->prepare($request);
        $statement->execute($data);
    }

    /**
     * Retrieve informations, compare with password given, start session
     */
    public function login($pseudo, $password)
    {

        $request = "SELECT * FROM users WHERE (pseudo = :pseudo)";

        $statement = $this->conx->prepare($request);
        $statement->execute([
            'pseudo' => $pseudo,
        ]);

        $datas = $statement->fetch(PDO::FETCH_ASSOC);

        if (password_verify($password, $datas['password'])) {
            return true;
        } else {
            return false;
        }
    }


    public function questionRequest($fetchMethod = 'fetchAll')
    {
        try {
            $sql = 'SELECT * FROM `question` ORDER BY RAND() LIMIT 6';
            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
        return $result;
    }



    public function answerRequest($fetchMethod = 'fetchAll')
    {
        try {
            $sql = 'SELECT `id`, `question_id`, `answer`  FROM `answer`';
            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
        return $result;
    }



    public function answerCheckRequest($fetchMethod = 'fetchAll')
    {
        try {
            $sql = 'SELECT `id`,`answer_check`  FROM `answer`';
            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
        return $result;
    }
}
