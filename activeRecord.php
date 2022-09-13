    public static function getServCodeByServDepend($SERV_DEPEND_GEN_DECODING)
    {
        $arrayOfServiceCode = self::find()
            ->select('serv_code')
            ->innerJoin('serv','serv.serv_id = serv_depend.serv_id')
            ->where(['depend_type_id' => $SERV_DEPEND_GEN_DECODING])
            ->asArray()
            ->all();
        $arrayOfServiceCode = ArrayHelper::getColumn($arrayOfServiceCode, 'serv_code');
        return $arrayOfServiceCode;
    }
