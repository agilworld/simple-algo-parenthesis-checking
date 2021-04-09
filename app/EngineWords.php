<?php 
namespace Engine;

// File Engine.php
class EngineWords {
    // Call function get index position end of parathesis ") 
    public static function getEndIndex($test, $fromIndex=2) {
        $arrTest = preg_split('//', $test, -1, PREG_SPLIT_NO_EMPTY  );
        //print_r($arrTest);
        $count = count($arrTest);
        $test2 = array_reverse($arrTest, true);
        $positions = [];
        foreach($test2 as $index => $string) {
            if( $string == ')' ) {
                $positions[] = $index;
            }
            
            if(! empty($positions) && $index == $fromIndex && $string == '(' ) {
                $d = array_values(array_filter($positions,'strlen', 0 ));
                return empty($d) ? [] : $d[count($positions)-1];
            }

            if( ! empty($positions) && $string == '(' ) { 
                $positions[count($positions)-1] = null;
                unset($positions[count($positions)-1]);
                $positions = array_values($positions);
            }
            var_dump($positions);
        }

        return $positions;
    }

}