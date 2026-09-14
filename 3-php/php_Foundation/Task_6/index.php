<?php
require "database.php";
require "person.php";



 $people = Person::loadAllPerson($pdo);

if($_SERVER['REQUEST_METHOD'] === 'POST') {

      $action = $_POST['action'] ?? '';

        try {
            if($action === 'create') {
               Person::createPerson($pdo, $_POST['firstname'], $_POST['surname'], $_POST['dateOfBirth'], $_POST['emailaddress'], $_POST['age']);

            echo json_encode(['status'=> 'success','message'=> 'Person created succefully!']);
            exit;

            };


        if ($action === 'load') {

            $PersonID = $_POST['PersonID'];

            Person::loadPerson( $pdo, $PersonID );

            echo json_encode(['status'=> 'success','message'=> 'Person loaded succefully!']);
            exit;
        };

        if ($action === 'save') {

            Person::savePerson($pdo, $_POST['PersonID'], $_POST['firstname'], $_POST['surname'], $_POST['dateOfBirth'], $_POST['emailaddress'], $_POST['age']);

            echo json_encode(['status'=> 'success','message'=> 'Person updated Succefully!']);
            exit;
        }
        ;

        if($action === 'delete'){

            $PersonID = $_POST['PersonID'];
            Person::deletePerson($pdo,$PersonID);
             echo json_encode(['status'=> 'success','message'=> 'Person deleted succefully!']);
             exit;
        };

        if($action === 'deleteall') {

            Person::deleteAllPerson($pdo);

            echo json_encode(['status'=> 'success','message'=>'deleted all succefully!']);

            exit;

        }

    } catch (Exception $e) {

            echo json_encode(['status'=> 'error','message'=> $e->getMessage()]);
        }

    exit;
};



require "index.view.php";