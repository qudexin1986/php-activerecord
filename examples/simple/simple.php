<?php
require_once __DIR__ . '/../../ActiveRecord.php';

// assumes a table named "books" with a pk named "id"
// see simple.sql
class db extends ActiveRecord\Model { }

class Status extends db{}
// initialize ActiveRecord
// change the connection settings to whatever is appropriate for your mysql server 
ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_table_pre('z_');
    $cfg->set_model_directory('.');
    $cfg->set_connections(array('development' => 'mysql://root:1987123@127.0.0.1/boke'));
});
//var_dump( Z_status::table()->table);
print_r(Status::first()->attributes());
?>
