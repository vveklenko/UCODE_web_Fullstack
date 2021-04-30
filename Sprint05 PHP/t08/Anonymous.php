<?php
    function get_anonymous($name, $alias, $affiliation) {
        return new class ($name, $alias, $affiliation) {
            private $name, $alias, $affiliation;
    
            function __construct($name, $alias, $affiliation) {
                $this->name = $name;
                $this->alias = $alias;
                $this->affiliation = $affiliation;
            }
    
            function getName() {
                return $this->name;
            }
    
            function getAlias() {
                return $this->alias;
            }
    
            function getAffiliation() {
                return $this->affiliation;
            }
        };
    }
    $mandarin = get_anonymous("Unknown", "Mandarin", "Ten Rings");
    print(implode("\n", array("name"=> $mandarin->getName(),"alias"=> $mandarin->getAlias(),
                        "affiliation"=> $mandarin->getAffiliation())));
?>