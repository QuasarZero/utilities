<?php
    /**
     * This file is created by Quasar on 2019-12-11 10:24
     */
    if(!function_exists('is_empty')){
        /**
         * 为空判定
         *
         * @param mixed $var
         *
         * @return bool
         * @author Quasar
         */
        function is_empty($var)
        {
            if($var === '') return true;
            elseif($var === "") return true;
            elseif($var === null) return true;
            elseif($var === false) return true;
            elseif($var === []) return true;
            else return false;
        }
    }

    if(!function_exists('is_uuid')){
        /**
         * 是否是UUID
         *
         * @param $var
         *
         * @return bool
         * @author Quasar
         */
        function is_uuid($var){
            if(preg_match('/\w{8}(-\w{4}){3}-\w{12}/', $var)) return true;
            else return false;
        }
    }

