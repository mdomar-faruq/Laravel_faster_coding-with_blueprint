<?php
namespace app\Events;
use Illuminate\Queue\SerializesModels;

class FancyEvent{

    use SerializesModels;
    public $employee;
    public function __construct($employee)
    {
        $this->employee=$employee;
    }
}

?>