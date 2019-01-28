<?php
/**
 * Created by PhpStorm.
 * User: chungtran
 * Date: 28/01/2019
 * Time: 11:35
 */
include "CircleComparator.php";
include "Circle.php";
$circleOne = new Circle("circleOne", 6);
$circleTwo = new Circle("circleTwo", 4);
$circleComparator = new CircleComparator();
var_dump($circleComparator->compare($circleOne, $circleTwo));