
<?php

// include 'index.php';
class typesim{

    private $type = '';

    public function setType($type){
        $this->type = $type;
    }

    public function getType(){
        return $this->type;
    }


    
    public function __construct(){

    }

    public function getPostValues(){

        $post_check_array = array(
            'verzenden' => array('filter', FILTER_SANITIZE_STRING),

            'type' => array('filter', FILTER_SANITIZE_STRING)
        );

        $inputs = filter_input_array(INPUT_POST, $post_check_array);

        return $inputs;
    }

    public function typesimulator(){

        switch () {
            
            case "fire":
                return "Grass";
            break;
            
            default: 
            return 'No type given...';
        }
    }

}

?>