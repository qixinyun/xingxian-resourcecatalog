<?php

namespace ResourceCatalog\Model;

interface IResourceCatalog extends IResourceCatalogTypeName, IResourceCatalogTypeIdentify, IResourceCatalogTypeEnName, IResourceCatalogTypeDoublePublicity, IResourceCatalogTypeRedBlackList, IResourceCatalogIsConfirm
{
    const TYPE = array(
        'NULL' => 0,
        'XBXZCF' => 1,
        'XBXZXK' => 2,
        'JGJCDXZJL' => 3,
        'QXTCHJBHJDXX' => 4,
        'SJJXMXX' => 5,
        'GGXYZHPJ' => 6,
        'HRBXX' => 7,
        'ZYZXX' => 8,
        'SYDWFRDJXX' => 9,
        'XSPJXX' => 10,
        'SXBZXJGXX' => 11,
        'SXBZXRMD' => 12,
        'JSZGXX' => 13,
        'SJYXXS' => 14,
        'JYJGXINXI' => 15,
        'GRRYXXJYJ' => 16,
        'JGRYXXSJYJ' => 17,
        'SXSZLJDW' => 18,
        'QYRYXX' => 19,
        'YSCRJZJJJZGRDXX' => 20,
        'JDCWFXX' => 21,
        'SHZZNJXX' => 22,
        'GRRYXXMZJ' => 23,
        'MBFQYML' => 24,
        'SHTTDJXX' => 25,
        'SFJDJGCYRYZGXX' => 26,
        'SFJDJGDJXX' => 27,
        'GZJGJBXX' => 28,
        'GZYXX' => 29,
        'JCFLFWSXX' => 30,
        'JCFLFWGZZJBXX' => 31,
        'LSSWSXX' => 32,
        'LSZYZGZXX' => 33,
        'JGRYXXSSFJ' => 34,
        'ZFCGDLJGXX' => 35,
        'ZYJNZSXX' => 36,
        'YLBXXX' => 37,
        'YZTQSBXXHMD' => 38,
        'SYBXXX' => 39,
        'SBQYXX' => 40,
        'GZRYXX' => 41,
        'YZTQNMGGZHMD' => 42,
        'PGJGXX' => 43,
        'CPTGLSZXCPRZMD' => 44,
        'ZLJCQYXX' => 45,
        'XZXKQYXX' => 46,
        'SLYSXKZXX' => 47,
        'GRRYXXJTJ' => 48,
        'SLGCZBXX' => 49,
        'JKQYPJAJYSMD' => 50,
        'GJJLTQYRZXX' => 51,
        'ESCJDPGJGHZZS' => 52,
        'HSZYZGZXX' => 53,
        'YSZYZCHBGZC' => 54,
        'YSZYZGZXX' => 55,
        'WSHJHSYWYHJCXX' => 56,
        'YLHJSFWJGXX' => 57,
        'JBYFKZJGXX' => 58,
        'FYCRYJLXX' => 59,
        'WSZYJSZGKSWJXX' => 60,
        'QSWCXXXJDWBZ' => 61,
        'QIYEJBXX' => 62,
        'GTGSHXX' => 63,
        'CMQYSBXX' => 64,
        'YPLSQYXX' => 65,
        'JGRYXX' => 66,
        'SXQYHMD' => 67,
        'SPYPTSJBJLGR' => 68,
        'SPYPTSJBJLDW' => 69,
        'SXMPCPXX' => 70,
        'QYYCMLXX' => 71,
        'QYZXXX' => 72,
        'QYDXXX' => 73,
        'CCJCJGXX' => 74,
        'LLSTYXHDJXX' => 75,
        'DTJXJGRXX' => 76,
        'TJDCDXML' => 77,
        'YHYJRJGCFXX' => 78,
        'QYGSZXXX' => 79,
        'AJNSRXX' => 80,
        'ZDSSWFAJXX' => 81,
        'QYDSXZCFXX' => 82,
        'SPFYSXK' => 83,
        'FDCKFQYZZXX' => 84,
        'JGRYXXSFGJ' => 85,
        'SYDWJBXX' => 86,
        'HTLY' => 87,
        'QYHYSJ' => 88,
        'ZDRQXYDA' => 89,
        'XYSFSQ' => 90,
        'CCJCJG' => 91,
        'XZCJ' => 92,
        'XZJDJC' => 93,
        'XZJL' => 94,
        'XZQR' => 95,
        'XZQZ' => 96,
        //@position_type_97
        'TEST' => 500,
    );

    const USERGROUP_TYPE_RELATIONSHIP = array(
        IUserGroup::ID['NULL'] => array(
            self::TYPE['NULL'],
            self::TYPE['XBXZCF'],
            self::TYPE['XBXZXK'],
            self::TYPE['QYHYSJ'],
            self::TYPE['CCJCJG'],
            self::TYPE['XZCJ'],
            self::TYPE['XZJDJC'],
            self::TYPE['XZJL'],
            self::TYPE['XZQR'],
            self::TYPE['XZQZ'],
        ),
        IUserGroup::ID['FGW'] => array(
            self::TYPE['ZDRQXYDA'],
            self::TYPE['JGJCDXZJL'],
            self::TYPE['TEST'],
            self::TYPE['SJJXMXX'],
            self::TYPE['GGXYZHPJ'],
            self::TYPE['SYDWJBXX'],
        ),
        IUserGroup::ID['XTYJRJ'] => array(),
        IUserGroup::ID['XGXJ'] => array(
            self::TYPE['QYRYXX'],
        ),
        IUserGroup::ID['XGAJ'] => array(
            self::TYPE['YSCRJZJJJZGRDXX'],
            self::TYPE['JDCWFXX'],
        ),
        IUserGroup::ID['XCZJ'] => array(
            self::TYPE['ZFCGDLJGXX'],
        ),
        IUserGroup::ID['XWJJ'] => array(
            self::TYPE['HSZYZGZXX'],
            self::TYPE['YSZYZCHBGZC'],
            self::TYPE['YSZYZGZXX'],
            self::TYPE['WSHJHSYWYHJCXX'],
            self::TYPE['YLHJSFWJGXX'],
            self::TYPE['JBYFKZJGXX'],
            self::TYPE['FYCRYJLXX'],
            self::TYPE['WSZYJSZGKSWJXX'],
            self::TYPE['QSWCXXXJDWBZ'],
        ),
        IUserGroup::ID['XSJJ'] => array(),
        IUserGroup::ID['XZJJ'] => array(
            self::TYPE['ZLJCQYXX'],
        ),
        IUserGroup::ID['XRSJ'] => array(
            self::TYPE['ZYJNZSXX'],
            self::TYPE['YLBXXX'],
            self::TYPE['YZTQSBXXHMD'],
            self::TYPE['SYBXXX'],
            self::TYPE['SBQYXX'],
            self::TYPE['GZRYXX'],
            self::TYPE['YZTQNMGGZHMD'],
            self::TYPE['JSZGXX'],
        ),
        IUserGroup::ID['XJTJ'] => array(
            self::TYPE['SLYSXKZXX'],
            self::TYPE['GRRYXXJTJ'],
        ),
        IUserGroup::ID['XSLJ'] => array(
            self::TYPE['SLGCZBXX'],
        ),
        IUserGroup::ID['XNYNCJ'] => array(
            self::TYPE['GJJLTQYRZXX'],
        ),
        IUserGroup::ID['XSTJ'] => array(
            self::TYPE['CPTGLSZXCPRZMD'],
        ),
        IUserGroup::ID['XSFJ'] => array(
            self::TYPE['SFJDJGCYRYZGXX'],
            self::TYPE['SFJDJGDJXX'],
            self::TYPE['GZJGJBXX'],
            self::TYPE['GZYXX'],
            self::TYPE['JCFLFWSXX'],
            self::TYPE['JCFLFWGZZJBXX'],
            self::TYPE['LSSWSXX'],
            self::TYPE['LSZYZGZXX'],
            self::TYPE['JGRYXXSSFJ'],
        ),
        IUserGroup::ID['XLYJ'] => array(),
        IUserGroup::ID['XZRZYJ'] => array(
            self::TYPE['PGJGXX'],
        ),
        IUserGroup::ID['XTJJ'] => array(
            self::TYPE['DTJXJGRXX'],
            self::TYPE['TJDCDXML'],
        ),
        IUserGroup::ID['XXZSPJ'] => array(
            self::TYPE['HTLY']
        ),
        IUserGroup::ID['XSCJGJ'] => array(
            self::TYPE['QIYEJBXX'],
            self::TYPE['GTGSHXX'],
            self::TYPE['CMQYSBXX'],
            self::TYPE['YPLSQYXX'],
            self::TYPE['JGRYXX'],
            self::TYPE['SXQYHMD'],
            self::TYPE['SPYPTSJBJLGR'],
            self::TYPE['SPYPTSJBJLDW'],
            self::TYPE['SXMPCPXX'],
            self::TYPE['QYYCMLXX'],
            self::TYPE['QYZXXX'],
            self::TYPE['QYDXXX'],
            self::TYPE['CCJCJGXX'],
        ),
        IUserGroup::ID['XYBJ'] => array(),
        IUserGroup::ID['XYJJ'] => array(),
        IUserGroup::ID['XNYJ'] => array(),
        IUserGroup::ID['XWLJ'] => array(),
        IUserGroup::ID['XXFJ'] => array(),
        IUserGroup::ID['XFPB'] => array(),
        IUserGroup::ID['XMZJ'] => array(
            self::TYPE['SHZZNJXX'],
            self::TYPE['GRRYXXMZJ'],
            self::TYPE['MBFQYML'],
            self::TYPE['SHTTDJXX'],
        ),
        IUserGroup::ID['WFZ'] => array(),
        IUserGroup::ID['CJYX'] => array(),
        IUserGroup::ID['WTZ'] => array(),
        IUserGroup::ID['WJTZ'] => array(),
        IUserGroup::ID['AJWX'] => array(),
        IUserGroup::ID['KNZ'] => array(),
        IUserGroup::ID['CJHZ'] => array(),
        IUserGroup::ID['LYKZ'] => array(),
        IUserGroup::ID['GJCZ'] => array(),
        IUserGroup::ID['DHX'] => array(),
        IUserGroup::ID['MJPX'] => array(),
        IUserGroup::ID['GXX'] => array(),
        IUserGroup::ID['JLSX'] => array(),
        IUserGroup::ID['ZJPX'] => array(),
        IUserGroup::ID['GDSX'] => array(),
        IUserGroup::ID['SWJ'] => array(
            self::TYPE['QYGSZXXX'],
            self::TYPE['AJNSRXX'],
            self::TYPE['ZDSSWFAJXX'],
            self::TYPE['QYDSXZCFXX'],
        ),
        IUserGroup::ID['RMFY'] => array(
            self::TYPE['XSPJXX'],
            self::TYPE['SXBZXJGXX'],
            self::TYPE['SXBZXRMD'],
        ),
        //@position_usergroup
    );

    const STATUS_NORMAL = 0;

    const STATUS_DELETE = -2;
}
