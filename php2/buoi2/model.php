<?php
include 'data.php';
function get_courses(){
    global $course;
    return array_values($course);
}

function find_by_semester($semester){
    global $course;
    return (array_key_exists($semester,$course) ? $course[$semester]:'Invalid course');
}
//controller
$list_of_courses = get_courses();
$semester = (!empty($_GET['semester']) ? $_GET['semester']:'');
$course_name = find_by_semester($semester);
$page_content = $course_name;

?>