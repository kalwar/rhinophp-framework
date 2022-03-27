<?php

/**
 */

class m0002_add_password_column
{
    public function up()
    {
        $db = \rhinophp\rhinophp\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }

    public function down()
    {
        $db = \rhinophp\rhinophp\Application::$app->db;
        $db->pdo->exec("ALTER TABLE users ADD COLUMN password VARCHAR(512) NOT NULL");
    }
}