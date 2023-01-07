<?php

namespace ETIROU\Cnx;


require_once(__DIR__ . '/../config/app.php');

use PDO, PDOException;


class Connexion
{


    //      Connexion with database and requests methods with PDO.
    private PDO $conx;

    public function __construct($userAndDatabaseInformations)
    {

        try {
            $this->conx = new PDO('mysql:host=' . $userAndDatabaseInformations['db']['host'] . ';charset=utf8mb4;dbname=' . $userAndDatabaseInformations['db']['database'], $userAndDatabaseInformations['db']['user'], $userAndDatabaseInformations['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
            $this->conx->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
    }

    /**
     * Secure insertion with bindParam
     * 
     */
    public function registerUser($pseudo, $password)
    {

        $request = "INSERT INTO users(pseudo, password)VALUES ( :pseudo, :password)";
        $statement = $this->conx->prepare($request);
        $statement->bindParam(':pseudo', $pseudo, PDO::PARAM_STR, 30);
        $statement->bindParam(':password', $password, PDO::PARAM_STR, 100);
        $statement->execute();
    }

    /**
     * Retrieve informations, compare with password given
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


    /**
     * Save user's score
     */
    public function saveScore($score, $pseudo)
    {
        $request = "SELECT id FROM users WHERE (pseudo = :pseudo)";

        $statement = $this->conx->prepare($request);
        $statement->execute([
            'pseudo' => $pseudo,
        ]);

        $user_id = $statement->fetch(PDO::FETCH_ASSOC);

        $request = "INSERT INTO scores(user_id, score)VALUES ( :user_id, :score)";
        $statement = $this->conx->prepare($request);
        $statement->bindParam(':user_id', $user_id['id'], PDO::PARAM_INT);
        $statement->bindParam(':score', $score, PDO::PARAM_INT);
        $statement->execute();
    }


    public function retrieveScores($fetchMethod = 'fetchAll')
    {

        try {
            $sql = 'SELECT pseudo, score 
            FROM scores 
            JOIN users ON scores.user_id = users.id
            ORDER BY score DESC';

            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
        return $result;
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
