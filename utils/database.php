<?php

namespace ETIROU\Cnx;


require('./config/app.php');


use PDO, PDOException;


class Connexion
{

    private PDO $conx;

    public function __construct($conf)
    {

        try {
            $this->conx = new PDO('mysql:host=' . $conf['db']['host'] . ';dbname=' . $conf['db']['database'], $conf['db']['user'], $conf['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
    }

    public function requeteQuestion($fetchMethod = 'fetchAll')
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

    public function requeteAnswer($fetchMethod = 'fetchAll')
    {
        try {
            $sql = 'SELECT * FROM `answer`';
            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        }
        json_encode($result);
        return $result;
    }
}
