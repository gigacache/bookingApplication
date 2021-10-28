<?php
class Welcome_model extends CI_Model {
    public function getName()
    {
        // To students: You will need to create queries to access a database and return information here. For now, we return a simple app name.
        $appName = "E-Health";
        return $appName;
    }
}
