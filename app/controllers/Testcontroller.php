<?php

class TestController extends ControllerBase
{

    public function indexAction()
    {
        
    }

    public function saveAction()  //insert data
    {
        $name = $this->request->getPost("name"); //getport name มาจากหน้า view แต่มันต้องมี ตัวเเปรมารับค่า
        $year = $this->request->getPost("year");

        $machine_1 = new Machine; //new Model

        $machine_1->student = $name;
        $machine_1->year = $year;
        $machine_1 -> save(); //ต้องมีอันนี้ด้วยน๊ ไม่งั้นทำไม่ได้
    }

    public function showAction(){
        $machine_1 = Machine::find();
        $this->view->Machine = $machine_1;
    }
}