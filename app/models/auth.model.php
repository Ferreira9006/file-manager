<?php

class Auth extends Database
{
  public static function checkUsername($username)
  {
    try {
      $stmt = self::connect()->prepare("SELECT username FROM account WHERE username = :username");
      $stmt->bindParam(':username', $username);
      $stmt->execute();

      return (bool) $stmt->fetch();

    } catch (PDOException $e) {
      self::error("db_error", $e->getCode(), $e->getMessage());
    }
  }

  public static function Register($username, $email, $salt, $verifier)
  {
    try {
      $stmt = self::connect()->prepare("INSERT INTO account (username, email, salt, verifier) VALUES (:username, :email, :salt, :verifier)");
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':salt', $salt);
      $stmt->bindParam(':verifier', $verifier);
      $stmt->execute();

      return true;
    } catch (PDOException $e) {
      self::error("db_error", $e->getCode(), $e->getMessage());
    }
  }
}

?>