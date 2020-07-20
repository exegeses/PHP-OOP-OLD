<?php

    class Foo
    {
        private function __construct()
        {
            echo 'método contructor <br>';
        }

        public function publico()
        {
            echo 'método público <br>';
        }
        private function privado()
        {
            echo 'método privado <br>';
        }
        static function estatico()
        {
            echo 'método estático <br>';
        }
    }

    ###################
    ### en otro archivo
    $Foo = new Foo(); // instanciamos
    //$Foo->publico();
    //$Foo->privado(); // no puede accederse fuera de la clase
    //$Foo->estatico();
    Foo::estatico();