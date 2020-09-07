<?php
class Context{
    private IComparator $comparator;

    // public function __construct(IComparator $comp)
    // {
    //     $this->comparator = $comp;
    // }

    public function setComparator($cmp)
    {
        $comparator=$cmp;
    }
    public function compare($c1,$c2)
    {
        return $this->comparator->compare($c1,$c2);
    }

}

interface IComparator{
    public function compare($a, $b): int;
}

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