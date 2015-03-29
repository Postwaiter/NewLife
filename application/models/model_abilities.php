<?php

class Model_Portfolio extends Model
{
    public function get_data()
    {	
        return array(
            
            array(
                'Soft' => '<a href="http://git-scm.com"><img src="images\git_logo.png" alt="логотип"></a>',
                'Description' => 'Git is a free and open source distributed version control system designed to handle everything from small to very large projects with speed and efficiency.'
            ),
            array(
                'Soft' => '<a href="https://netbeans.org/"><img src="images\netBeans_logo.png" alt="логотип"></a>',
                'Description' => 'NetBeans IDE lets you quickly and easily develop Java desktop, mobile, and web applications, as well as HTML5 applications with HTML, JavaScript, and CSS. The IDE also provides a great set of tools for PHP and C/C++ developers. It is free and open source and has a large community of users and developers around the world. '
            ),
            // todo
        );
    }
}