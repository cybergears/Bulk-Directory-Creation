<?php
//

$structure = [
    'Section 1: Programming Foundations' => [
        '1. What is Programming?',
        '2. Scripting Languages Overview',
    ],
    'Section 2: HTML & CSS' => [
        '3. Introduction to Web Development',
        '4. CSS Best Practices',
    ],
    'Section 3: JavaScript & jQuery' => [
        '5. Introduction to JavaScript',
        '6. jQuery Plugins Overview',
    ],
    'Section 4: PHP' => [
        '7. Introduction to PHP',
        '8. Sessions Security',
    ],
    'Section 5: MySQL' => [
        '9. Introduction to Databases',
        '10. MySQL with PHP',
    ],
    'Section 6: Project Work & Integration' => [
        '11. Mini Project: HTML Form + PHP',
        '12. Mini Project: Social Media Clone (Basics)',
    ],
    'Section 7: Final Wrap-up & Advanced Insights' => [
        '13. Introduction to APIs',
        '14. Soft Skills for Developers',
    ],
];

$base_dir = __DIR__."\Courses";

 if(!file_exists($base_dir)){
    mkdir($base_dir);
 }

//echo $base_dir;

function senetize($string){
    return preg_replace('/[^A-Za-z0-9&-. ]/','',$string);
}

function createTopicDir($path,$topicName){
    $topicName = senetize($topicName);
    $topicPath = $path."/".$topicName;
    if(!file_exists($topicPath)){
        mkdir($topicPath);
    }

    $readmePath = $topicPath.'/readme.txt';
    if(!file_exists($readmePath)){
        file_put_contents($readmePath,'Notes for '.$topicName);
    }

    $subFolders = ['raw','source code','assets'];
    foreach($subFolders as $folder){
        $subPath = $topicPath.'/'.$folder;
        if(!file_exists($subPath)){
            mkdir($subPath);
        }
    }
}

foreach($structure as $section=>$topics){

    $sectionPath = $base_dir.'/'.senetize($section);
    if(!file_exists($sectionPath)){
        mkdir($sectionPath);
    }
    

    foreach($topics as $topic){
        createTopicDir($sectionPath,$topic);

    }
}

?>
