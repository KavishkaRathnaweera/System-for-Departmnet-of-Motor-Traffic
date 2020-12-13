<?php

//THis is strategy desing pattern. Comparator compare by ID or Date.
class Context{
    private $comparator;

    public function setComparator($cmp)
    {
        $comparator=$cmp;
    }
    public function compare($c1,$c2)
    {
        return $this->comparator->compare($c1,$c2);
    }

}
//Interface for comparator
interface IComparator{
    public function compare($a, $b): int;
}

//date camparator
class DateComparator implements IComparator{
    public function compare($a,$b): int{
        if(date("Y-m-d")==$a){
            return 1;
        }
        else{
            return 0;
        }
    }
}

//Id comparator
class IdComparator implements IComparator{
    public function compare($a,$b): int{
        if($a==$b){
            return 1;
        }
        else{
            return 0;
        }
    }
}




?>