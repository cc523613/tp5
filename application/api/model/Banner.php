<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 20:45
 */

namespace app\api\model;


use think\Db;
use think\Exception;
use think\Model;

class Banner extends Model
{

    public function items()
    {
        return $this->hasMany('BannerItem', 'banner_id', 'id');
    }

    /**
     * @param $id
     * @return string
     * @throws Exception
     */
    public static function getBannerById($id)
    {
        //$result = Db::query(
        //    'select * from banner_item where banner_id=?', [$id]);
        $result = Db::table('banner_item')
            ->where('banner_id', '=', $id)
            ->select();
        return $result;

    }

}