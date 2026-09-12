<?php

class Person {

    static function createPerson($pdo, string $Firstname, string $Surname,  $DateOfBirth, string $Emailaddress, int $Age ) {


         $sql = "INSERT INTO Person
                (FirstName, Surname, DateOfBirth, EmailAddress, Age)
                VALUES
                (:firstName, :surname, :dateOfBirth, :emailAddress, :age)";

        $statement = $pdo->prepare($sql);

        $statement->execute([
            ':firstName' => $Firstname,
            ':surname'=> $Surname,
            ':dateOfBirth'=> $DateOfBirth,
            ':emailAddress'=> $Emailaddress,
            ':age'=> $Age,
        ]);


    }

    static function loadPerson($pdo, $PersonID) {
        $sql = "SELECT * FROM Person
         where PersonID = :PersonID ";

        $statement = $pdo->prepare($sql);

        $statement->execute([
            ':PersonID' => $PersonID,
        ]);

        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    static function savePerson($pdo, $PersonID, $FirstName, $Surname, $DateOfBirth, $Emailaddress, $Age) {

        $sql = "UPDATE Person 
        SET FirstName = :FirstName, Surname = :Surname, DateOfBirth = :DateOfBirth, emailAddress = :Emailaddress, Age = :Age,
         WHERE PersonID = :PersonID";
        
        $statement = $pdo->prepare($sql);

        $statement->execute([
            ":PersonID"=> $PersonID,
            ":FirstName"=> $FirstName,
            ":Surname"=> $Surname,
            ":DateOfBirth"=> $DateOfBirth,
            ":Emailaddress"=> $Emailaddress,
            ":Age"=> $Age,
        ]);

        
    }

    static function loadAllPerson($pdo)
    {
        $sql = 'SELECT * FROM Person';

        $statement = $pdo->prepare($sql);

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

      static function deletePerson($pdo, $PersonID) {
        $sql = "DELETE * FROM Person
        where PersonID = :PersonID";

        $statement = $pdo->prepare($sql);
        $statement->execute([
            ":PersonID" => $PersonID
        ]);

    }
        static function deleteAllPerson($pdo,) {
        $sql = "DELETE * FROM Person";

        $statement = $pdo->prepare($sql);

        $statement->execute();
    }
 }