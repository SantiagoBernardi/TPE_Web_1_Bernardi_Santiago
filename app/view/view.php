<?php   

require_once('libs/smarty/libs/Smarty.class.php');
    class View {

        function showAnuros($bd, $bd2, $edit = null, $id = null) {
            
            $smarty= new Smarty;
            $smarty->assign('titulo', 'anuros' );
            $smarty->assign('anuros', $bd );
            $smarty->assign('ecosistemas', $bd2 );
            $smarty->assign('edit', $edit );
            $smarty->assign('id', $id );
            $smarty->display('templates\anuros.tpl');
            
        }

        function showEcosistemas($bd, $edit = null, $id = null) {
            $smarty= new Smarty;
            $smarty->assign('ecosistemas', $bd );
            $smarty->assign('edit', $edit );
            $smarty->assign('id', $id );
            $smarty->display('templates\ecosistemas.tpl');
        }

        function showAnurosBy($bd) {
            $smarty= new Smarty;
            $smarty->assign('anuros', $bd);
            $smarty->display('templates\anurosby.tpl');
        }

        function showLogin($error = null) {
            $smarty= new Smarty;
            $smarty->assign('error', $error );
            $smarty->display('templates\login.tpl');
        }

    }