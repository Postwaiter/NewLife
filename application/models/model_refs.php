<?php

class Model_Refs extends Model
{
    public function get_data()
    {	
        return array(
            
            array(
                'Concept' => 'Протоколы',
                'Ref' => '<a href="https://ru.wikipedia.org/wiki/HTTP">HTTP</a>, <a href="https://ru.wikipedia.org/wiki/TCP/IP">TCP/IP</a>, <a href="https://ru.wikipedia.org/wiki/SSH">SSH</a>, <a href="https://ru.wikipedia.org/wiki/SSL">SSL<br/>'
                . '<a href="http://habrahabr.ru/post/215117/">HTTP(Habrhabr)</a>'
            ),
            array(
                
                'Concept' => 'Серверные технологии',
                'Ref' => '<a href="https://ru.wikipedia.org/wiki/LAMP">LAMP</a>, <a href="https://ru.wikipedia.org/wiki/Apache">Apache</a>,'
                . ' <a href="https://ru.wikipedia.org/wiki/Nginx">Nginx</a>, <a href="https://ru.wikipedia.org/wiki/memcached">Memcache</a>, '
                . '<a href="http://habrahabr.ru/post/108274/">Memcache+PHP</a>'
            ),
                        array(
                'Concept' => 'Контроль версии',
                'Ref' => '<a href="http://habrahabr.ru/post/60347/">Git-команды (Habrhabr)</a>, '.'<a href="http://git-scm.com/book/ru/v2/%D0%9A%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D1%8B-Git-%D0%9E%D1%81%D0%BD%D0%BE%D0%B2%D0%BD%D1%8B%D0%B5-%D0%BA%D0%BE%D0%BC%D0%B0%D0%BD%D0%B4%D1%8B">Git команды</a>'
            ),
                        array(
                'Concept' => 'Языки программирования',
                'Ref' => '<a href="https://ru.wikipedia.org/wiki/PHP">PHP</a>, '
            ),
                        array(
                'Concept' => 'Паттерны проектирования',
                'Ref' => '<a href="https://ru.wikipedia.org/wiki/Model-View-Controller">MVC</a>, <a href="http://habrahabr.ru/post/31270/">MVC(Habrhabr)</a>,'
                            . ' <a href="https://ru.wikipedia.org/wiki/%D8%E0%E1%EB%EE%ED_%EF%F0%EE%E5%EA%F2%E8%F0%EE%E2%E0%ED%E8%FF">Паттерны</a>'
            ),            
        );
    }
}