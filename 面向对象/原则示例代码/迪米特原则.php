<?php
// 一个对象应该对其他对象保持最少的了解
// 类与类关系越密切，耦合度越大
// 又叫最少知道原则,对于被依赖的类不管多么复杂,都尽量将逻辑封装在内部.
// 除了 public 方法,不对外泄露任何信息

// 学校总部员工类
class Employee
{
    private $id;

    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}

// 分部员工类
class CollegeEmployee
{
    private $id;
    public function setId(string $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
//  管理学院员工的管理类
class CollegeManager{
    public  function getAllEmployee()
    {
        $list = [];
        for ($i=0;$i<10;$i++){
            $collegeEmployee = new CollegeEmployee();
            $collegeEmployee->setId('分部员工 ID:'.$i);
            $list[] = $collegeEmployee;
        }
        return $list;
    }
}
//  管理总部员工的管理类
class SchoolManager {
    public function getAllEmployee()
    {
        $list = [];
        for ($i=0;$i<5;$i++){
            $collegeEmployee = new Employee();
            $collegeEmployee->setId('总部员工 ID:'.$i);
            $list[] = $collegeEmployee;
        }
        return $list;
    }

    public function printAllEmployee(CollegeManager $sub)
    {
        $employeeList = $sub->getAllEmployee();
        print_r('------------分部员工------------');
        foreach ($employeeList as $item) {
            print_r($item->getId().PHP_EOL);
        }
        print_r('------------总部员工------------');
        $employeeList2 = $this->getAllEmployee();
        foreach ($employeeList2 as $item) {
            print_r($item->getId().PHP_EOL);
        }
    }
}

$school = new SchoolManager();
$school->printAllEmployee(new CollegeManager());