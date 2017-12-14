<?php

class TransactionsTypesModel extends Model {

    function getAll(){
        return $this->executeQuery("SELECT * FROM transactions_types");
    }
}

// instance utilisée dans le programme (appelée Singleton)
$transactionsTypesModel = new TransactionsTypesModel();