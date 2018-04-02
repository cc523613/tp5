<?php
/**
 * Created by 微信小程序.
 * Author: LLM
 * Date: 2018/3/31
 * Time: 10:34
 */

namespace app\api\controller\v1;

use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 获取指定ID的Banner信息
     * @url  /banner/:id
     * @http  GET
     * @id  banner的id号
     * @throws Exception
     *
     */
    public function getBanner($id)
    {
        // AOP 面向切面编程
        (new IDMustBePositiveInt())->goCheck();

        $banner = BannerModel::with(['items', 'items.img'])->find($id);
        //$banner = BannerModel::getBannerById($id);

        if (!$banner) {
            throw new BannerMissException();
        }

        return $banner;
    }

}