<?php

    namespace Quasar\Utility;

    /**
     *-----------------------------------------------------------------
     * This file is created by Quasar on the 2019/7/8 18:42
     *-----------------------------------------------------------------
     */
    class Http
    {
        /**
         * 对客户端指定HTTP状态码进行返回处理请求
         *
         * @param int $statusCode
         *
         * @author Quasar
         */
        public static function setCode(int $statusCode)
        {
            $codeList = self::_readTheCodeList();
            if(array_key_exists($statusCode, $codeList)){
                header("HTTP/1.1 $statusCode ".$codeList[ $statusCode ]);
                ob_flush();
                flush();
            }
        }

        /**
         * 读取Http Code列表内容
         *
         * @return array
         * @author Quasar
         */
        private static function _readTheCodeList()
        {
            $fileContent = file_get_contents(__DIR__.'/HttpCode.json');

            return json_decode($fileContent, true);
        }
    }
