<?php 

function biodataArfifaRahman()
{
    $name = "Arfifa Rahman";
    $age = 24;
    $address = "Jl. Pelabuhan Ratu No.60 RT.3/RW.12 minimarket samping Radio Suara Bekasi, Kos No.8 Rawa Lumbu, Kota Bekasi, 17115";
    $hobbies = array("Menyanyi", "Badminton", "Koding");
    $is_married = false;
    $list_school = array(
        "SD" => array("name" => "SDN CIBOGO 1", "year_in" => 2001, "year_out" => 2007, "major" => null),
        "SMP" => array("name" => "SMK Al-Mukhlisin", "year_in" => 2007, "year_out" => 2010, "major" => null),
        "SMK" => array("name" => "SMK Bhipuri", "year_in" => 2010, "year_out" => 2013, "major" => "Akuntansi")
    );

    $skills = array(
        array("skill_name" => "PHP", "level" => "beginner"),
        array("skill_name" => "Java Script", "level" => "beginner"),
        array("skill_name" => "CSS", "level" => "beginner"),
        array("skill_name" => "HTML", "level" => "beginner"),
        array("skill_name" => "Java", "level" => "beginner"),
        array("skill_name" => "Android", "level" => "beginner")
    );

    $interest_in_coding = true;

    $mybiodata = array(
        "name" => $name,
        "age" => $age,
        "address" => $address,
        "hobbies" => $hobbies,
        "is_married" => $is_married,
        "list_school" => $list_school,
        "skills" => $skills,
        "interest_in_coding" => $interest_in_coding
    );

    echo json_encode($mybiodata);
}

biodataArfifaRahman();
?>