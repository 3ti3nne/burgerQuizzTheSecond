<?php

namespace ETIROU\Cnx;


require('./config/app.php');


use PDO, PDOException;


class Connexion
{


    //      Connexion with database and requests methods with PDO.
    private PDO $conx;
    private $result;

    public function __construct($conf)
    {

        try {
            $this->conx = new PDO('mysql:host=' . $conf['db']['host'] . ';dbname=' . $conf['db']['database'], $conf['db']['user'], $conf['db']['password'], [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8']);
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
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
        } ?>


        <!--             Sending PHP variables converted in JSON to JavaScript.
 -->

        <script>
            let jsonQuestions = <?= json_encode($result) ?>;
        </script>


    <?php
        return $result;
    }




    public function answerRequest($fetchMethod = 'fetchAll')
    {
        try {
            $sql = 'SELECT * FROM `answer`';
            $result = $this->conx->query($sql, PDO::FETCH_ASSOC)->{$fetchMethod}();
        } catch (PDOException $e) {
            $message = 'Erreur ! ' . $e->getMessage() . '<hr />';
            die($message);
        } ?>

        <script>
            let jsonAnswers = <?= json_encode($result) ?>;
        </script>
<?php
        return $result;
    }
}
