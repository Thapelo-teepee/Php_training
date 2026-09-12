<?php
require "database.php";
require "person.php";



 $people = Person::loadAllPerson($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

        try {
            Person::createPerson($pdo, $_POST['firstname'], $_POST['surname'], $_POST['dateOfBirth'], $_POST['emailaddress'], $_POST['age']);

         echo "Person Created successfully!";
         header("Location: index.php?success=1");
        exit;
        } catch (Exception $e) {

            echo "Failed to create Person: " . $e->getMessage() . "";
        }
};


$LoadPerson = function ($PersonID) {
    try {
      Person::loadPerson($pdo, $PersonID);

        echo "Person Loaded successfully!";
    } catch (Exception $e) {
       echo "Person Not Found :" . $e->getMessage() . "";
    }
};

$SavePerson = function ( $PersonID ,$FirstName, $Surname, $DateOfBirth, $Emailaddress, $Age) {

    try {
        Person::savePerson($pdo, $PersonID, $FirstName, $Surname, $DateOfBirth, $Emailaddress, $Age);

        echo "Person $FirstName saved successfully!";
    } catch (Exception $e) {
        echo "Failed to save $FirstName :" . $e->getMessage() . "";
    };
};


$DeletePerson = function ($PersonId) {
    try {
        Person::deletePerson($pdo, $PersonId);

        echo "Person deleted successfully!";
    } catch (Exception $e) {
        echo "Failed to delete Person: " . $e->getMessage() . "";
    }
};

$DeleteAllPerson = function () {
    try {
        Person::deleteAllPerson($pdo);

        echo "Deleted successfully!";
    } catch (Exception $e) {
       
        echo "Failed to delete all: " . $e->getMessage() . "";
    }
};

require "index.view.php";